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

use App\Content;
use App\Slot;
use App\Booking;
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
        $about=Content::where('page','Home Page')->where('section','About Us')->first();
        $hire=Content::where('page','Home Page')->where('section','Why Hire a Professional DJ?')->first();
        $event=Gallery::take(6)->get();
        $offer= Content::where('page','Home Page')->where('section','special offer')->first();
        $videos=Content::where('page','Home Page')->where('section','videos')->first();
        $award_section= Content::where('page','Home Page')->where('section','Award Winning')->first();
        $award_1= Content::where('page','Home Page')->where('section','Award 1')->first();
        $award_2= Content::where('page','Home Page')->where('section','Award 2')->first();
        $award_3= Content::where('page','Home Page')->where('section','Award 3')->first();
        $award_4= Content::where('page','Home Page')->where('section','Award 4')->first();
        $reviews= Testimonial::where('display', 1)->get();
        $banner= Banner::where('page','About Us')->first();





        return view('front.index', compact(
            'slider','about','hire','event','offer','videos','award_section','award_1','award_2','award_3','award_4','reviews'
            ,'banner'
        ));


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
        ],
        [
            'user_date.required' => 'Please select a date',
            'user_date.date_format' => 'Please select a valid date',
            'services.required' => 'Please select at least one service',
            'services.array' => 'Please select at least one service',
            'phone.numeric' => 'Please enter a valid phone number',
            'phone.digits_between' => 'Please enter a valid phone number digits between 9 and 15',

        ]


    );


    if ($validator->fails()) {
        Session::flash('error', $validator->errors()->first());
        return redirect()->back()->withErrors($validator)->withInput();
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


    public function customer(Request $request, $column = 'id', $direction = "asc")
    {
        $banner = Banner::take(3)->get();






        return view('front.customer', compact('banner', ));


    }



    public function gallery()  //resource method
    {
        $banner = Banner::where('page', 'Resource Page')->first();

        $galleryItems = Gallery::get();

        return view('front.resource', compact('galleryItems', 'banner'));
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
                }
                while (CouponCode::where('code', '!=', $data['code'])->first());


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
        }
        while (CouponCode::where('code', '!=', $code)->first());

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

                return redirect()->refresh()->with('success', 'Details Send, we will contact u soon');            }
        }
        // $services = Service::all();
        $content = Content::where('page', 'Contact Us')->where('section', 'Contact Us')->first();

        $banner = Banner::where('page', 'Contact Us')->first();


        return view('front.contact-us', compact('banner', 'content'));


    }
    public function scholarship(Request $request)
    {
        if ($request->method() == 'POST') {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
                    'dob' => 'required|date',
                    'address_1' => 'required|string|max:255',
                    'address_2' => 'nullable|string|max:255',
                    'city' => 'required|string|max:255', // Assuming dropdown returns string values
                    'state' => 'required|string|max:255', // Assuming dropdown returns string values
                    'zipcode' => 'required|numeric|max:size:5', // Adjust max as per your zipcode format
                    'institute' => 'required|string|max:255',
                    'institute_address_1' => 'required|string|max:255',
                    'institute_address_2' => 'nullable|string|max:255',
                    'institute_email' => 'required|email|max:255',
                    'institute_phone' => 'required|regex:/^[0-9\+\-\(\)\s]{8,20}$/',
                    'gpa' => 'required|numeric|max:4.0',
                    'transcript' => 'required|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:2048',
                    'ref1_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
                    'ref1_phone' => 'required|regex:/^[0-9\+\-\(\)\s]{8,20}$/', // Adjust max as per phone number format
                    'ref2_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
                    'ref2_phone' => 'required|regex:/^[0-9\+\-\(\)\s]{8,20}$/', // Adjust max as per phone number format
                    'statement' => 'required|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:2048',
                    'diseases' => 'nullable|string|max:255',
                    'sickle' => 'nullable', // Checkbox validation
                ],
                [
                    'name.required' => '* Please provide your name',
                    'name.regex' => 'Name can only contain alphabets',
                    'dob.required' => '* Please provide your date of birth',
                    'zipcode.numeric' => 'Zipcode must be a number',
                    'gpa.numeric' => 'GPA must be a number between 0.0 and 4.0',
                    'gpa.max' => 'GPA must be a number between 0.0 and 4.0',
                    'transcript.required' => '* Please upload your transcript',
                    'institute.required' => '* Please provide your institute name',
                    'institute_address_1.required' => '* Please provide your institute address',
                    'institute_email.required' => '* Please provide your institute email',
                    'institute_phone.required' => '* Please provide your institute phone number',
                    'institute_phone.numeric' => 'Institute phone number must be a number',
                    'institute_phone.max' => 'Institute phone number must be a number',
                    'statement.required' => '* Please upload your statement',
                    'ref1_name.required' => '* Please provide your reference 1 name',
                    'ref1_phone.required' => '* Please provide your reference 1 phone number',
                    'ref1_phone.numeric' => 'Reference 1 phone number must be a number',
                    'ref1_phone.max' => 'Reference 1 phone number must be a number',
                    'ref2_name.required' => '* Please provide your reference 2 name',
                    'ref2_phone.required' => '* Please provide your reference 2 phone number',
                    'ref2_phone.numeric' => 'Reference 2 phone number must be a number',
                    'ref2_phone.max' => 'Reference 2 phone number must be a number',
                    'diseases.max' => 'Diseases cannot exceed :max characters',
                    // 'sickle.boolean' => 'Illness must be a boolean value',
                    // Add other custom error messages here...
                ]
            );


            if ($validator->fails()) {
                if ($request->ajax()) {
                    return response()->json(['success' => false, 'errors' => $validator->errors()]);
                }
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $scholarship = new Scholarship();
            $scholarship->name = $request->name;
            $scholarship->date_of_birth = $request->dob;
            $scholarship->address_1 = $request->address_1;
            $scholarship->address_2 = $request->address_2;
            $scholarship->city = $request->city;
            $scholarship->state_province = $request->state;
            $scholarship->zipcode = $request->zipcode;
            $scholarship->institute = $request->institute;
            $scholarship->institute_address_1 = $request->institute_address_1;
            $scholarship->institute_address_2 = $request->institute_address_2;
            $scholarship->institute_email = $request->institute_email;
            $scholarship->institute_phone = $request->institute_phone;
            $scholarship->gpa = $request->gpa;
            $scholarship->ref1_name = $request->ref1_name;
            $scholarship->ref1_phone = $request->ref1_phone;
            $scholarship->ref2_name = $request->ref2_name;
            $scholarship->ref2_phone = $request->ref2_phone;
            $scholarship->sickle_cell_disease = $request->has('sickle') ? "Sickle Cell Disease Scholarship" : "General Education Scholarship";

            $scholarship->illness = $request->disease;

            if ($request->hasFile('transcript')) {
                $file = $request->file('transcript');
                $fileName = time() . '_' . $file->getClientOriginalName(); // Create a unique file name
                $filePath = $file->storeAs('transcripts', $fileName, 'public'); // Store the file

                // Store the relative path in the database
                $scholarship->transcript = 'storage/' . $filePath;
            }

            if ($request->hasFile('statement')) {
                $file = $request->file('statement');
                $fileName = time() . '_' . $file->getClientOriginalName(); // Create a unique file name
                $filePath = $file->storeAs('statements', $fileName, 'public'); // Store the file

                // Store the relative path in the database
                $scholarship->statement_doc = 'storage/' . $filePath;
            }
            // $inquiry->service = $request->service_name;

            $scholarship->save();
            if ($scholarship->save()) {
                $admin = User::where('role', 0)->first();
                \Notification::send($admin, new UserNotification($scholarship));

                return redirect()->route('scholarship')->with('success', 'Details Send, we will contact u soon');
            }
        }
        $services = Service::all();

        $banner = Banner::where('page', 'Scholarship Page')->first();


        return view('front.scholarship', compact('banner', 'services'));


    }
    public function Donation(Request $request)
    {
        if ($request->method() == 'POST') {

            $validator = Validator::make(
                $request->all(),
                [
                    'custom_amount' => 'required|numeric|min:0.01', // Ensure it's a positive number
                    'country' => 'required|string|max:255',
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'company' => 'nullable|string|max:255',
                    'address1' => 'required|string|max:255',
                    'address2' => 'nullable|string|max:255',
                    'city' => 'required|string|max:255',
                    'zip_code' => 'nullable|string|max:20',
                    'is_organization' => 'nullable|boolean',
                    'email' => 'nullable|email|max:255',
                    'phone' => 'nullable|string|max:20',
                    'is_retired' => 'nullable|boolean',
                    'employer' => 'nullable|string|max:255',
                    'occupation' => 'nullable|string|max:255',
                ],
                [
                    'amount.required' => '* Please provide an amount',
                    'amount.numeric' => 'Amount must be a number',
                    'amount.min' => 'Amount must be at least :min',

                    'country.required' => '* Please select a country',

                    'first_name.required' => '* Please provide your first name',
                    'first_name.max' => 'First name cannot exceed :max characters',

                    'last_name.required' => '* Please provide your last name',
                    'last_name.max' => 'Last name cannot exceed :max characters',

                    'email.required' => '* Please provide an email address',
                    'email.email' => 'Email format is not correct',

                    'phone.max' => 'Phone number cannot exceed :max characters',

                    'address1.required' => '* Please provide address line 1',
                    'city.required' => '* Please provide city',
                    'zip_code.required' => '* Please provide zip code',
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

            Stripe\Stripe::setApiKey(config('services.stripe.secret'));
            // Create a charge: this will charge the user's card
            $charge = \Stripe\Charge::create([
                'amount' => $request->custom_amount * 100, // Amount in cents
                'currency' => 'usd',
                'description' => 'Donation',
                'source' => $request->stripeToken,
            ]);

            // Create a new donation record
            $donation = new Donation();
            $donation->amount = $request->input('custom_amount');
            $donation->country = $request->input('country');
            $donation->first_name = $request->input('first_name');
            $donation->last_name = $request->input('last_name');
            $donation->company = $request->input('company');
            $donation->address1 = $request->input('address1');
            $donation->address2 = $request->input('address2');
            $donation->city = $request->input('city');
            $donation->zip_code = $request->input('zip_code');
            $donation->is_organization = $request->input('is_organization', false);
            $donation->email = $request->input('email');
            $donation->phone = $request->input('phone');
            $donation->is_retired = $request->input('is_retired', false);
            $donation->employer = $request->input('employer');
            $donation->occupation = $request->input('occupation');
            $donation->transaction_id = $charge->id;
            $donation->save();

            if ($donation) {
                // Notify admin or perform additional actions
                $admin = User::where('role', 0)->first();
                \Notification::send($admin, new UserNotification($donation));

                // Redirect or return response
                return redirect()->route('donation')->with('success', 'Thank you for your donation!');
            }
        }
        $banner = Banner::where('page', 'Donation Page')->first();

        // Render the donation form view
        return view('front.donation', compact('banner'));
    }
    public function freeInquiry(Request $request)
    {
        if ($request->method() == 'POST') {

            $validator = Validator::make(
                $request->all(),
                [
                    'inquiry_first_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
                    'inquiry_last_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
                    'address' => 'required|string|max:255',

                    'inquiry_email' => 'required|email',
                    'contact' => 'required|max:55',
                    'message' => 'required|max:255',
                ],
                [
                    'inquiry_first_name.required' => '* Please provide your  name',
                    'inquiry_first_name.max' => ' name can not exceed :max characters',
                    'inquiry_first_name.regex' => 'Name can only contain alphabets',
                    'inquiry_email.required' => '* Please provide an Email',
                    'inquiry_email.email' => 'Email format is not correct',
                    'contact.required' => '* Please Provide Phone Number',
                    'message.required' => '* Please Provide message',
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
            $inquiry = new FreeInquiry();
            $inquiry->first_name = $request->inquiry_first_name;
            $inquiry->last_name = $request->inquiry_last_name;
            $inquiry->address = $request->address;

            $inquiry->contact = $request->contact;
            $inquiry->type = $request->type;
            $inquiry->message = $request->message;
            $inquiry->email = $request->inquiry_email;

            $inquiry->save();
            if ($inquiry->save()) {
                $admin = User::where('role', 0)->first();
                \Notification::send($admin, new UserNotification($inquiry));

                return response()->json(['success' => true]);
            }
        }
        // $cartData = \Cart::session(auth()->user()->id)->getContent(auth()->user()->id);
        $leave_in = Content::where('page', 'Contact Us')->where('section', 'LEAVE YOUR MESSAGE')->first();

        $contact = Content::where('page', 'Contact Us')->where('section', 'Contact')->first();
        $banner = Banner::where('page', 'Contact Us')->first();

        if (Auth::check()) {
            $cartData = \Cart::session(auth()->user()->id)->getContent(auth()->user()->id);

        } else {
            $cartData = \Cart::getContent();

        }
        $lastIndex = '';
        foreach ($cartData as $key => $value) {
            $lastIndex = $value;
        }




        if ($lastIndex != null) {
            return view('front.contact-us', compact('banner', 'leave_in', 'contact', 'lastIndex', 'cartData'));
        } else {
            return view('front.contact-us', compact('banner', 'leave_in', 'contact'));

        }
    }

    public function about()
    {
        $banner = Banner::where('page', 'About Us')->first();
        $about = Content::where('page', 'About Us')->where('section', 'about')->first();

        $trust_Sec = Content::where('page', 'About Us')->where('section', 'Don’t trust your big event')->first();







        return view('front.about', compact('banner', 'trust_Sec', 'about',));


    }

    public function special_offer(){
        $banner= Banner::where('page','Special offer')->first();
        $special_offer = Content::where('page', 'Special Offer')->where('section', 'Special Offers')->first();

        return view('front.special_offer',compact('banner','special_offer'));



    }
    public function upcomingevents()  //Upcoming Events method
    {
        $banner = Banner::where('page', 'Upcoming Events Page')->first();
        $content = Content::where('page', 'Upcoming Event')->where('section', 'Events')->first();
        $events = Gallery::get();

        return view('front.upcoming-events', compact('events', 'banner','content'));
    }
    public function awards(){
        $banner= Banner::where('page','Award page')->first();
        $djservices = Content::where('page', 'Awards')->where('section', 'Award Winning DJ Services')->first();
        $award_12 = Content::where('page', 'Awards')->where('section', 'award 1 & 2')->first();

        $award_34 = Content::where('page', 'Awards')->where('section', 'award 3 & 4')->first();
        $award_56 = Content::where('page', 'Awards')->where('section', 'award 5 & 6')->first();
        $award_7 = Content::where('page', 'Awards')->where('section', 'award 7')->first();

        return view('front.awards',compact('banner','djservices','award_12','award_34','award_56','award_7'));
    }

    public function testimonials(){
        $banner= Banner::where('page','Testimonial page')->first();
        $testimonials = Testimonial::all();
        return view('front.testimonial',compact('banner','testimonials'));

    }

    public function tips(){
        $banner= Banner::where('page','Tips & Info')->first();
        $faq_1= faq::where('section','1')->get();
        $faq_2 = Faq::where('section', '2')->take(6)->get();
        $faq_21 = Faq::where('section', '2')->skip(6)->take(6)->get();
        $faq_content_1= Content::where('page', 'Tips & Info')->where('section', 'Questions You Must Ask a')->first();
        $faq_3= faq::where('section','3')->get();
        $pricevalue= Content::where('page', 'Tips & Info')->where('section', 'Price vs. Value')->first();
        $why_hire= Content::where('page', 'Tips & Info')->where('section', 'Why Hire a Professional DJ?')->first();



        return view('front.tips-info',compact('banner','faq_1','faq_2','faq_3','faq_21','faq_content_1','pricevalue','why_hire'));
    }



    public function event()
    {

        $banner = Banner::where('page', 'Event Page')->first();
        $event_1 = Content::where('page', 'Events Page')->where('section', 'event_1')->first();
        $event_2 = Content::where('page', 'Events Page')->where('section', 'event_2')->first();
        $signup = Content::where('page', 'Home Page')->where('section', 'signup')->first();
        $edu_don = Content::where('page', 'Home Page')->where('section', 'Donate For Education')->first();
        $review = Testimonial::all();


        $active_event = Event::where('is_active', 1)->first();



        return view('front.event', compact('banner', 'active_event', 'event_1', 'event_2', 'signup', 'edu_don', 'review'));
    }
    public function ShowEvent($slug)
    {
        $banner = Banner::where('page', 'Event Detail Page')->first();
        $event_detail = Event::where('slug', $slug)->firstOrFail();
        return view('front.event-detail', compact('event_detail', 'banner'));
    }


    public function volunteer(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
                'email' => 'required|email|regex:/^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/i',
                'phone' => 'required|numeric',
                'experience' => 'required|max:1000',
            ], [
                'name.required' => '* Please provide your name',
                'name.max' => 'Name cannot exceed :max characters',
                'name.regex' => 'Name can only contain alphabets',
                'email.required' => '* Please provide an Email',
                'email.email' => 'Email format is not correct',
                'email.regex' => 'Email format should be complete.',
                'experience.required' => '* Please provide experience',
                'phone.required' => '* Please provide a phone number',
                'phone.numeric' => 'Phone number must be a number',
            ]);

            if ($validator->fails()) {
                // If it's an AJAX request, return JSON response
                if ($request->ajax()) {
                    return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
                }
                // If it's a regular form submission, redirect back with errors
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $volunteer = new Volunteer();
            $volunteer->name = $request->name;
            $volunteer->experience = $request->experience;
            $volunteer->phone = $request->phone;
            $volunteer->email = $request->email;
            $volunteer->save();

            if ($volunteer->save()) {
                $admin = User::where('role', 0)->first();
                \Notification::send($admin, new UserNotification($volunteer));

                return redirect()->route('volunteer')->with('success', 'Details sent, we will contact you soon');
            }
        }


        $banner = Banner::where('page', 'Volunteer Page')->first();
        $form_text = Content::where('page', 'Volunteer')->where('section', 'form text')->first();
        $donor_1 = Content::where('page', 'Volunteer')->where('section', 'Donor 1')->first();
        $donor_2 = Content::where('page', 'Volunteer')->where('section', 'Donor 2')->first();
        $donor_3 = Content::where('page', 'Volunteer')->where('section', 'Donor 3')->first();
        $donor_4 = Content::where('page', 'Volunteer')->where('section', 'Donor 4')->first();

        return view('front.volunteer', compact('banner', 'form_text', 'donor_2', 'donor_3', 'donor_4', 'donor_1'));
    }




    public function newsletter(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'newsletter_email' => 'required|email|unique:newsletters,newsletter_email|regex:(^[a-z0-9]+@[a-z]+\.[a-z]{2,3})'

            ],
            [
                'newsletter_email.unique' => 'This Email Address is already in our Subscribers List',
                'newsletter_email.required' => 'Enter Your Email Address.',
                'newsletter_email.regex' => 'Invalid Email Address',
            ]
        );

        if ($validator->fails())
            return response()->json(['error' => $validator->errors()->first()]);

        $NewsLetter = new NewsLetter;
        $NewsLetter->newsletter_email = $request->newsletter_email;


        $NewsLetter->save();
        if ($NewsLetter->save()) {
            Cookie::queue('user_first_name', 'John', 10);

            return response()->json(['success' => true,]);

        }
    }

}
