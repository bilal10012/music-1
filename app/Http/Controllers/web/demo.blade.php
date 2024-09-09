<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Scholarship;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\User;
use App\Notifications\UserNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\validateCaptcha;
use Illuminate\Support\Facades\Session;

use App\SLot;
use App\Content;
use App\Banner;
use App\Volunteer;
use App\Product;
use App\Gallery;
use App\Blog;
use App\Model;
use App\Supplier;
use App\Event;
use App\Pricing;
use App\Testimonial;
use App\Donation;
use App\faq;

use Illuminate\Support\Str;

use App\CouponCode;

use App\NewsLetter;
use App\Service;
use App\Inquiry;
use App\FreeInquiry;
use App\Work;

use App\Booking;

use App\Slider;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;
use Stripe;
use App\Http\Stripe\vendor\autoload;
use Illuminate\Support\Facades\Mail;

// use Artisan;

class HomeController extends Controller
{
    public function index(Request $request, $column = 'id', $direction = "asc")
    {
        // Artisan::call('storage:link');
        // $banner    = Banner::where("page","Index Page")->first();
        $slider = Slider::all();
        $about = Content::where('page', 'Home Page')->where('section', 'About Us')->first();
        $hire = Content::where('page', 'Home Page')->where('section', 'Why Hire a Professional DJ?')->first();
        $event = Gallery::get();
        $offer = Content::where('page', 'Home Page')->where('section', 'special offer')->first();
        $videos = Content::where('page', 'Home Page')->where('section', 'videos')->first();
        $award_section = Content::where('page', 'Home Page')->where('section', 'Award Winning')->first();
        $award_1 = Content::where('page', 'Home Page')->where('section', 'Award 1')->first();
        $award_2 = Content::where('page', 'Home Page')->where('section', 'Award 2')->first();
        $award_3 = Content::where('page', 'Home Page')->where('section', 'Award 3')->first();
        $award_4 = Content::where('page', 'Home Page')->where('section', 'Award 4')->first();
        $reviews = Testimonial::where('display', 1)->get();
        $banner = Banner::where('page', 'About Us')->first();





        return view('front.index', compact(
            'slider',
            'about',
            'hire',
            'event',
            'offer',
            'videos',
            'award_section',
            'award_1',
            'award_2',
            'award_3',
            'award_4',
            'reviews',
            'banner'
        ));
    }
    public function about(){
        $banner = Banner::where('page', 'About Us')->first();
        $about = Content::where('page', 'About Us')->where('section', 'about')->first();

        $trust_Sec= Content::where('page', 'About Us')->where('section', 'Don’t trust your big event')->first();

        return view('front.about', compact('banner', 'about','trust_Sec'));
    }


    public function customer(Request $request, $column = 'id', $direction = "asc")
    {
        $banner = Banner::take(3)->get();






        return view('front.customer', compact('banner',));
    }



    public function upcomingevents()  //Upcoming Events method
    {
        $banner = Banner::where('page', 'Upcoming Events Page')->first();
        $content = Content::where('page', 'Upcoming Event')->where('section', 'Events')->first();
        $events = Gallery::get();

        return view('front.upcoming-events', compact('events', 'banner','content'));
    }
    public function service()
    {

        $banner = Banner::where('page', 'Services Page')->first();
        $services = Service::all();



        return view('front.service', compact('banner', 'services'));
    }

    public function blog()
    {

        $banner = Banner::where('page', 'Blog Page')->first();
        $sch_1 = Content::where('page', 'Blog')->where('section', 'General Education Scholarship')->first();
        $sch_2 = Content::where('page', 'Blog')->where('section', 'Sickle Cell Disease Scholarship')->first();
        $blogs = Blog::all();


        return view('front.blog', compact('banner', 'sch_1', 'sch_2', 'blogs'));
    }
    public function ShowBlog($slug)
    {
        $banner = Banner::where('page', 'Inner Blog Page')->first();
        $blog_detail = Blog::where('slug', $slug)->firstOrFail();
        return view('front.blog-detail', compact('blog_detail', 'banner'));
    }
    public function ShowService($slug)
    {
        $banner = Banner::where('page', 'Services Page')->first();
        $service_detail = Service::where('slug', $slug)->firstOrFail();
        return view('front.service-detail', compact('service_detail', 'banner'));
    }

    public function pricing()
    {

        $banner = Banner::where('page', 'Services Page')->first();
        $pricing = Pricing::all();
        // dd($fulfilment);
        return view('front.pricing', compact('banner', 'pricing'));
    }

    public function supplier()
    {
        $suuplier_content = Content::where('page', 'Suppliers Page')->where('section', 'Suppliers')->first();

        $banner = Banner::where('page', 'Suppliers Page')->first();
        $suppliers = Supplier::where('is_active', 1)->get();
        return view('front.supplier', compact('banner', 'suuplier_content', 'suppliers'));
    }
    public function generateCode(Request $request)
    {

        if ($request->method() == 'POST') {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
                    'email' => 'required|email|regex:(^[a-z0-9]+@[a-z]+\.[a-z]{2,3})',


                ],
                [
                    'name.required' => 'Please provide your first name',
                    'name.max' => 'First name can not exceed :max characters',
                    'name.regex' => 'Name can only contain alphabets',
                    'email.required' => 'Please provide an Email',
                    'email.email' => 'Email format is not correct',
                    'email.regex' => 'Email format should be complete.',
                ]
            );

            if ($validator->fails()) {
                Session::flash('error', $validator->errors()->first());
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data = [
                'first_name' => $request->input('name'),
                'email' => $request->input('email'),
                'type' => $request->input('type'),
                'code' => $request->input('code'),
            ];
            // Save the data to the database
            if (CouponCode::where('code', $data['code'])->exists()) {
                do {
                    $code = mt_rand(100000, 999999);
                    $data['code'] = $code;
                    $dd = new CouponCode;
                    $dd->email = $data['email'];
                    $dd->type = $data['type'];
                    $dd->first_name = $data['first_name'];
                    $dd->code = $data['code'];
                    $dd->save();
                    $admin = User::where('role', 0)->first();
                    \Notification::send($admin, new UserNotification($dd));
                    Session::flash('message', 'Form Submit Successfully!');

                    return redirect()->back();
                } while (CouponCode::where('code', '!=', $data['code'])->first());
            } else {
                $dd = new CouponCode;
                $dd->email = $data['email'];
                $dd->type = $data['type'];
                $dd->first_name = $data['first_name'];
                $dd->code = $data['code'];
                $dd->save();
                $admin = User::where('role', 0)->first();
                \Notification::send($admin, new UserNotification($dd));
                Session::flash('message', 'Form Submit Successfully!');
                return redirect()->back();
            }
        }
    }

    public function generateRandomCode()
    {
        // Replace this with your code generation logic

        do {
            $code = mt_rand(100000, 999999);
            return response()->json(["code" => $code, "status" => "success"]);
        } while (CouponCode::where('code', '!=', $code)->first());
    }
    public function contactUsPage(Request $request)
    {
        if ($request->method() == 'POST') {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
                    // 'inquiry_last_name' => 'string|max:255|regex:/^[\pL\s\-]+$/u',
                    // 'subject'=> 'required|max:255',
                    'inquiry_email' => 'required|email|regex:(^[a-z0-9]+@[a-z]+\.[a-z]{2,3})',
                    'phone' => 'required|max:55',
                    'message' => 'required|max:1000',
                    // 'service_name' => 'required|string',

                    // 'primaryImage' => [ 'mimes:jpeg,png,jpg,gif','max:2048'],
                ],
                [
                    'name.required' => '* Please provide your  name',
                    'name.max' => ' name can not exceed :max characters',
                    'name.regex' => 'Name can only contain alphabets',

                    // 'inquiry_last_name.required' => '* Please provide your last name',
                    // 'inquiry_last_name.max' => 'last name can not exceed :max characters',
                    // 'inquiry_last_name.regex' => 'last name can only contain alphabets',

                    'inquiry_email.required' => '* Please provide an Email',
                    'inquiry_email.email' => 'Email format is not correct',
                    'inquiry_email.regex' => ' Email format should be complete.',
                    'message.required' => '* Please Provide message',
                    // 'service_name' => 'required|string',
                    'phone.required' => '* Please Provide Phone Number',
                    'phone.max' => 'Phone number can not exceed :max characters',
                ]
            );
            if ($validator->fails()) {
                // If it's an AJAX request, return JSON response
                if ($request->ajax()) {
                    return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
                }
                // If it's a regular form submission, redirect back with errors
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $inquiry = new Inquiry();
            $inquiry->first_name = $request->name; //saving name in first_name column
            // $inquiry->last_name = $request->inquiry_last_name;
            $inquiry->message = $request->message;
            $inquiry->phone = $request->phone;
            $inquiry->email = $request->inquiry_email;
            // if ($request->hasFile('primaryImage')) {
            //     $file = $request->file('primaryImage');
            //     $image = upload($file, 100, 100, 'inquiries');
            //     $inquiry->image = $image;
            // }
            // $inquiry->service = $request->service_name;

            $inquiry->save();
            if ($inquiry->save()) {
                $admin = User::where('role', 0)->first();
                \Notification::send($admin, new UserNotification($inquiry));

                return redirect()->refresh()->with('success', 'Details Send, we will contact u soon');
            }
        }
        // $services = Service::all();
        $content = Content::where('page', 'Contact Us')->where('section', 'Contact Us')->first();

        $banner = Banner::where('page', 'Contact Us')->first();


        return view('front.contact-us', compact('banner', 'content'));
    }






    public function bookings()
    {
        $availableDates = Slot::whereNull('booking_id')->pluck('date')->toArray();
        $banner = Banner::where('page', 'Booking')->first();
        return view('front.booking', ['availableDates' => $availableDates],compact('banner'));
    }

    public function bookingsForm(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:9,15',
            'user_date' => 'required|date|date_format:Y-m-d',
            'services' => 'nullable|string', // or 'nullable|array' depending on your requirement
            'user-msg' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        // Retrieve the slot based on the selected date
        $slot = Slot::where('date', $request->input('user_date'))->first();

        if (!$slot) {
            return redirect()->back()->with('error', 'The selected slot is not available.');
        }

        // Create a new booking
        $booking = Booking::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'services' => $request->input('services'),
            'message' => $request->input('user-msg'),
            'slot_id' => $slot->id, // Associate with the slot
        ]);

        // Update the slot with the booking ID
        $slot->update([
            'booking_id' => $booking->id,
        ]);

        // Notify admin
        $admin = User::where('role', 0)->first();
        \Notification::send($admin, new UserNotification($booking));

        return redirect()->back()->with('success', 'Your booking has been successfully made!');
    }

}
