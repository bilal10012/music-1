<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $slider_images = Slider::all();
        return view('admin.slider.index', compact('slider_images'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_color' => 'nullable|string|max:7', // Hex color code
            'button_link' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'secondary_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slider = new Slider();

        // Handle primary image upload
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $image = upload($file, 572, 772, 'slider_image');
            $slider->primary_image = $image;
        } else {
            Session::flash('error', 'Please select a slider image.');
            return redirect()->back();
        }

        // Handle secondary image upload
        if ($request->hasFile('secondary_image')) {
            $file = $request->file('secondary_image');
            $secondaryImage = upload($file, 1280, 426, 'slider_images');
            $slider->secondary_image = $secondaryImage;
        }
        if ($request->hasFile('background_image')) {
            $file = $request->file('background_image');
            $backgroundImage = upload($file, 200, 170, 'slider_images');
            $slider->background_image = $backgroundImage;
        }

        // Save other fields
        $slider->description = $request->input('description');
        $slider->button_text = $request->input('button_text');
        $slider->button_color = $request->input('button_color');
        $slider->button_link = $request->input('button_link');
        $slider->heading = $request->input('heading');
        $slider->title = $request->input('title');
        $slider->is_active = $request->input('is_active') ? 1 : 0;

        // Save the record to the database
        $slider->save();

        // Flash success message and redirect
        Session::flash('success', 'New Slider Image Has Been Added!');
        return redirect()->route('admin.slider.index');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        // Validate the request data
        $request->validate([
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_color' => 'nullable|string|max:7',
            'button_link' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'secondary_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle primary image upload
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $image = upload($file, 1280, 426, 'slider_images');
            Storage::delete($slider->primary_image);
            $slider->primary_image = $image;
        }

        // Handle secondary image upload
        if ($request->hasFile('secondary_image')) {
            $file = $request->file('secondary_image');
            $secondaryImage = upload($file, 1280, 426, 'slider_images');
            Storage::delete($slider->secondary_image);
            $slider->secondary_image = $secondaryImage;
        }
        if ($request->hasFile('background_image')) {
            $file = $request->file('background_image');
            $backgroundImage = upload($file, 1280, 426, 'slider_images');
            Storage::delete($slider->background_image);
            $slider->background_image = $backgroundImage;
        }

        // Update other fields
        $slider->description = $request->input('description');
        $slider->button_text = $request->input('button_text');
        $slider->button_color = $request->input('button_color');
        $slider->button_link = $request->input('button_link');
        $slider->heading = $request->input('heading');
        $slider->title = $request->input('title');
        $slider->is_active = $request->input('is_active') ? 1 : 0;

        // Save the updated record to the database
        $slider->save();

        // Flash success message and redirect
        Session::flash('success', 'Slider Image Has Been Updated Successfully!');
        return redirect()->route('admin.slider.index');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        Storage::delete([$slider->primary_image, $slider->secondary_image]);
        $slider->delete();

        Session::flash('success', "Slider Image Has Been Deleted Successfully!");
        return redirect()->back();
    }
}
