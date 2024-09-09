<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Tags;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class EventController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    public function create() {
        return view('admin.event.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
             'description'=>'required',
             'short_description'=>'required|max:255',
             'subtitle'=>'required|max:255',
             'organizer'=>'required|max:55',
             'start_date'=>'required|max:55',
             'end_date'=>'required|max:55',
             'time'=>'required|max:55',
             'primaryImage' => 'mimes:jpeg,jpg,png|max:500000',
             
            //  'inner_image' => 'required|mimes:jpeg,jpg,png|required|max:500000',


        ],
        [
            'title.required' => 'Please provide Title ',
            'title.max' => 'title can not have more than :max characters.',
            'description.required'=>'Description Is Required',
            'short_description.required'=>'Description Is Required',
            // 'primaryImage.required' => 'Please provide Event Primary Image',
            'primaryImage.mimes' => 'Please provide Event Primary Image In jpeg,png,jpg Formats',
            // 'inner_image.required' => 'Please provide Event Detail Image',
            'inner_image.mimes' => 'Please provide Event Detail Image In jpeg,png,jpg Formats',
            'organizer.required' => 'Please provide Event Organizer Name',
            'start_date.required' => 'Please provide Event Start Date',
            'end_date.required' => 'Please provide Event End Date',
            'time.required' => 'Please provide Event Time',
            'short_description.max' => 'Short Description Can Not Be More Than :max Characters',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->has('is_active')) {
            Event::where('is_active', 1)->update(['is_active' => 0]);
        }
        $event =  new Event();
        $event->title = $request->input('title');
        $event->subtitle = $request->input('subtitle');
        $event->organizer = $request->input('organizer');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->time = $request->input('time');
        $event->description = $request->input('description');
        $event->short_description = $request->input('short_description');
        $event->is_active = $request->has('is_active') ? 1 : 0;

       
        if ($request->hasFile('primaryImage')) {
            $file = $request->file('primaryImage');
            $image = upload($file, 1280, 426, 'event');
            $event->primary_image = $image;
        }
        if ($request->hasFile('img_1    ')) {
            $file = $request->file('img_1');
            $img_1 = upload($file, 1280, 426, 'event');
            $event->img_1 = $img_1;
        }
        if ($request->hasFile('img_2')) {
            $file = $request->file('img_2');
            $img_2 = upload($file, 1280, 426, 'event');
            $event->img_2 = $img_2;
        }
        if ($request->hasFile('img_3')) {
            $file = $request->file('img_3');
            $img_3 = upload($file, 1280, 426, 'event');
            $event->inner_image = $img_3;
        }
        if ($request->hasFile('img_4')) {
            $file = $request->file('img_4');
            $img_4 = upload($file, 1280, 426, 'event');
            $event->inner_image = $img_4;
        }

        $event->save();
        Session::flash('success','Event Added Successfully');
        return redirect()->route('admin.event.index');
    }

    public function edit($id)
    {
        $event_detail = Event::findorFail($id);
        return view('admin.event.edit', compact('event_detail'));
    }

    public function update(Request $request, $id)
    {
        // Fetch the event by ID
        $event = Event::find($id);
    
        if (!$event) {
            return redirect()->route('admin.event.index')->with('error', 'Event not found.');
        }
    
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'organizer' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'time' => 'nullable',
            'end_date' => 'required|date|after_or_equal:start_date',
            'short_description' => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'primaryImage' => 'nullable|image|max:2048',
            'img_1' => 'nullable|image|max:2048',
            'img_2' => 'nullable|image|max:2048',
            'img_3' => 'nullable|image|max:2048',
            'img_4' => 'nullable|image|max:2048',
        ]);
    
        // Update the event with the validated data
        $event->title = $request->input('title');
        $event->subtitle = $request->input('subtitle');
        $event->organizer = $request->input('organizer');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->time = $request->input('time');
        $event->short_description = $request->input('short_description');
        $event->description = $request->input('description');
    
        // Handle image uploads if they exist
        if ($request->hasFile('primaryImage')) {
            $file = $request->file('primaryImage');
            $image = upload($file, 1280, 426, 'events');
            $event->primary_image = $image;
        }
        if ($request->hasFile('img_1')) {
            $file = $request->file('img_1');
            $image_1 = upload($file, 1280, 426, 'events');
            $event->img_1 = $image_1;
        }
        if ($request->hasFile('img_2')) {
            $file = $request->file('img_2');
            $image_2 = upload($file, 1280, 426, 'events');
            $event->img_2 = $image_2;
        }
        if ($request->hasFile('img_3')) {
            $file = $request->file('img_3');
            $image = upload($file, 1280, 426, 'events');
            $event->img_3 = $image;
        }
        if ($request->hasFile('img_4')) {
            $file = $request->file('img_4');
            $image_4 = upload($file, 1280, 426, 'events');
            $event->img_4 = $image_4;
        }
        
        if ($request->input('is_active') == 1) {
            // Set the 'is_active' value for the current event to 1
            $event->is_active = 1;
            // Set 'is_active' to 0 for all other events
            Event::where('id', '!=', $id)->update(['is_active' => 0]);
        } else {
            $event->is_active = 0;
        }
    
        // Save the updated event
        $event->save();
    
        // Redirect with success message
        return redirect()->route('admin.event.index')->with('success', 'Event updated successfully.');
    }
    
    // public function feature($id) {
    //     $event = event::findorFail($id);
    //     $event->is_featured = !$event->is_featured;
    //     $event->save();
    //     if($event->is_featured)
    //         Session::flash('success', "Service is marked as featured successfully!");
    //     else
    //         Session::flash('success', "Service is unmarked from featured inventory!");
    //     return redirect()->back();
    // }
    public function destroy($id) {
        $event = Event::findorFail($id);
        $event->delete();
        Session::flash('success','Event Deleted Successfully');
        return redirect()->back();
    }
}
