<?php

namespace App\Http\Controllers\Admin;

use App\Testimonial;
use App\Tags;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $testimonial = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonial'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:255',
                // 'description' => 'required|max:255',
                // 'role' => 'required',
                // 'primaryImage' => 'required|mimes:jpeg,jpg,png|required|max:500000',
                //  'inner_image' => 'required|mimes:jpeg,jpg,png|required|max:500000',


            ],
            [
                'title.required' => 'Please provide Title ',
                'title.max' => 'title can not have more than :max characters.',
                // 'description.required' => 'Description Is Required',
                // 'primaryImage.required' => 'Please provide service Primary Image',
                // 'primaryImage.mimes' => 'Please provide service Primary Image In jpeg,png,jpg Formats',
                // 'inner_image.required' => 'Please provide service Detail Image',
                // 'inner_image.mimes' => 'Please provide service Detail Image In jpeg,png,jpg Formats',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $displayRequested = $request->has('display');

        // If display is requested, ensure only 4 reviews are displayed at once
        if ($displayRequested) {
            // Get the current count of reviews with display set to 1
            $displayedCount = Testimonial::where('display', 1)->count();

            if ($displayedCount >= 4) {
                // If there are already 4 displayed reviews, find the least important one (e.g., based on creation date)
                $oldestDisplayedReview = Testimonial::where('display', 1)
                    ->orderBy('created_at', 'asc')
                    ->first();

                // Set the display of the least important one to 0
                if ($oldestDisplayedReview) {
                    $oldestDisplayedReview->display = 0;
                    $oldestDisplayedReview->save();
                }
            }
        }
        $testimonial =  new Testimonial();
        $testimonial->name = $request->input('title');
        $testimonial->review = $request->input('description');
        $testimonial->designation = $request->input('role');
        $testimonial->display = $request->has('display') ? 1 : 0;

        if ($request->hasFile('primaryImage')) {
            $file = $request->file('primaryImage');
            $image = upload($file, 1280, 426, 'testimonial');
            $testimonial->image = $image;
        }

        $testimonial->save();
        Session::flash('success', 'Review Added Successfully');
        return redirect()->route('admin.testimonial.index');
    }

    public function edit($id)
    {
        $testimonial_detail = Testimonial::findorFail($id);
        return view('admin.testimonial.edit', compact('testimonial_detail'));
    }

    public function update(Request $request, testimonial $testimonial)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:255',
                // 'description' => 'required|max:255',
                // 'primaryImage' => 'mimes:jpeg,jpg,png|max:500000',
                // 'inner_image' => 'mimes:jpeg,jpg,png|max:500000',

            ],
            [
                'title.required' => 'Please provide Title ',
                'title.max' => 'title can not have more than :max characters.',
                // 'description.required' => 'Description Is Required',
                // 'description.max' => 'Length should not be more than :max characters',
                'primaryImage.mimes' => 'Please provide testimonial Primary Image In jpeg,png,jpg Formats',
                // 'inner_image.mimes' => 'Please provide testimonial Detail Image In jpeg,png,jpg Formats',

            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $displayRequested = $request->has('display');

        // If display is requested, ensure only 4 reviews are displayed at once
        if ($displayRequested) {
            // Get the current count of reviews with display set to 1
            $displayedCount = Testimonial::where('display', 1)->count();

            if ($displayedCount >= 4) {
                // If there are already 4 displayed reviews, find the least important one (e.g., based on creation date)
                $oldestDisplayedReview = Testimonial::where('display', 1)
                    ->orderBy('created_at', 'asc')
                    ->first();

                // Set the display of the least important one to 0
                if ($oldestDisplayedReview) {
                    $oldestDisplayedReview->display = 0;
                    $oldestDisplayedReview->save();
                }
            }
        }


        $testimonial->name = ($request->input('title') != null) ? $request->input('title') : $testimonial->name;
        $testimonial->review = ($request->input('description') != null) ? $request->input('description') : $testimonial->review;
        $testimonial->designation = ($request->input('role') != null) ? $request->input('role') : $testimonial->designation;
        $testimonial->display = $request->has('display') ? 1 : 0;


        if ($request->hasFile('primaryImage')) {
            $file = $request->file('primaryImage');
            $image = upload($file, 1280, 426, 'testimonial');
            $testimonial->image = $image;
        }
        // if ($request->hasFile('inner_image')) {
        //     $file = $request->file('inner_image');
        //     $image = upload($file, 663, 416, 'fulfilment$fulfilment-inner');
        //     $fulfilment->inner_image = $image;
        // }
        $testimonial->save();
        Session::flash('success', "Review Updated Successfully!");
        return redirect()->route('admin.testimonial.index');
    }
    public function feature($id)
    {
        $testimonial = Testimonial::findorFail($id);
        $testimonial->is_featured = !$testimonial->is_featured;
        $testimonial->save();
        if ($testimonial->is_featured)
            Session::flash('success', "Review is marked as featured successfully!");
        else
            Session::flash('success', "Review is unmarked from featured inventory!");
        return redirect()->back();
    }
    public function destroy($id)
    {
        $testimonial = Testimonial::findorFail($id);
        $testimonial->delete();
        Session::flash('success', 'Review Deleted Successfully');
        return redirect()->back();
    }
}
