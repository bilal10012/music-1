<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Tags;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BlogController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create() {
        return view('admin.blog.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
             'description'=>'required',
             'primaryImage' => 'required|mimes:jpeg,jpg,png|required|max:500000',
             'inner_image' => 'required|mimes:jpeg,jpg,png|required|max:500000',
            //  'inner_image' => 'required|mimes:jpeg,jpg,png|required|max:500000',


        ],
        [
            'title.required' => 'Please provide Title ',
            'title.max' => 'title can not have more than :max characters.',
            'description.required'=>'Description Is Required',
            'primaryImage.required' => 'Please provide blog Primary Image',
            'primaryImage.mimes' => 'Please provide blog Primary Image In jpeg,png,jpg Formats',
            'inner_image.required' => 'Please provide blog Detail Image',
            'inner_image.mimes' => 'Please provide blog Detail Image In jpeg,png,jpg Formats',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $blog =  new Blog();
        $blog->title = $request->input('title');
        $blog->author = $request->input('author');
        $blog->description = $request->input('description');
       
        if ($request->hasFile('primaryImage')) {
            $file = $request->file('primaryImage');
            $image = upload($file, 1280, 426, 'blog');
            $blog->primary_image = $image;
        }
        if ($request->hasFile('inner_image')) {
            $file = $request->file('inner_image');
            $image_1 = upload($file, 1280, 426, 'blog');
            $blog->inner_image = $image_1;
        }
        if ($request->hasFile('author_image')) {
            $file = $request->file('author_image');
            $image_2 = upload($file, 1280, 426, 'blog');
            $blog->author_image = $image_2;
        }

        $blog->save();
        Session::flash('success','Blog Added Successfully');
        return redirect()->route('admin.blog.index');
    }

    public function edit($id)
    {
        $blog_detail = Blog::findorFail($id);
        return view('admin.blog.edit', compact('blog_detail'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description'=>'required',
            'author'=>'required',
            'primaryImage' => 'mimes:jpeg,jpg,png|max:500000',
            'inner_image' => 'mimes:jpeg,jpg,png|max:500000',
            'author_image' => 'mimes:jpeg,jpg,png|max:500000',

        ],
        [
            'title.required' => 'Please provide Title ',
            'title.max' => 'title can not have more than :max characters.',
            'description.required'=>'Description Is Required',
            'primaryImage.mimes' => 'Please provide Blog Primary Image In jpeg,png,jpg Formats',
            'inner_image.mimes' => 'Please provide Blog Detail Image In jpeg,png,jpg Formats',

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $blog->title = ($request->input('title') != null)? $request->input('title'): $blog->title;
        $blog->author = ($request->input('author') != null)? $request->input('author'): $blog->author;
        $blog->slug = Str::slug($request->input('title'), '-');
        $blog->description = ($request->input('description') != null)? $request->input('description'): $blog->description;
       

        if ($request->hasFile('primaryImage')) {
            $file = $request->file('primaryImage');
            $image = upload($file, 1280, 426, 'blog');
            $blog->primary_image = $image;
        }
        if ($request->hasFile('inner_image')) {
            $file = $request->file('inner_image');
            $image_1 = upload($file, 663, 416, 'blog-inner');
            $blog->inner_image = $image_1;
        }
        if ($request->hasFile('author_image')) {
            $file = $request->file('author_image');
            $image_2 = upload($file, 663, 416, 'author_image');
            $blog->author_image = $image_2;
        }
        $blog->save();
        Session::flash('success', "Blog Updated Successfully!");
        return redirect()->route('admin.blog.index');
    }
    // public function feature($id) {
    //     $service = Service::findorFail($id);
    //     $service->is_featured = !$service->is_featured;
    //     $service->save();
    //     if($service->is_featured)
    //         Session::flash('success', "Service is marked as featured successfully!");
    //     else
    //         Session::flash('success', "Service is unmarked from featured inventory!");
    //     return redirect()->back();
    // }
    public function destroy($id) {
        $blog = Blog::findorFail($id);
        $blog->delete();
        Session::flash('success','Blog Deleted Successfully');
        return redirect()->back();
    }
}
