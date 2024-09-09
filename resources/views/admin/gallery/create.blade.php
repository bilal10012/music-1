@extends('layouts.admin.app')
@section('title', 'Add Slider Info')
@section('css')
    <link rel="stylesheet" href="{{asset('a-asset/css/plugins/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('a-asset/css/plugins/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('a-asset/css/plugins/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('a-asset/css/plugins/dropzone.css')}}">
    <style>
        .dz-success-mark {
            display: none;
        }
        .dz-error-mark {
            display: none;
        }
        .dz-error-message{
            display: none;
        }
        .dz-details{
            display: none;
        }
    </style>

@endsection
@section('content')
    <div class="content">
        <h2 class="content-heading">Adding new Event <a href="{{route('admin.gallery.index')}}" class="btn btn-alt-primary pull-right">Back</a></h2>
        <div class="block">
            <div class="block-content">
                <form method="POST" action="{{route('admin.gallery.store')}}" id="createPost" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        <div class="col-md-6 offset-3">
                            <div class="form-group">
                                <label for="imageTitle">Event Title </label>
                                <input type="text" class="form-control" id="imageTitle" name="title"
                                    placeholder="Enter image title/description">
                            </div>
                            <div class="form-group">
                                <label for="imageTitle">Event Description </label>
                                <input type="text" class="form-control" id="imageTitle" name="description"
                                    placeholder="description">
                            </div>
                            <div class="form-group">
                                <label for="imageTitle">Date of the Event </label>
                                <input type="date" class="form-control" id="imageTitle" name="date"
                                    placeholder="description">
                            </div>

                                <div class="form-group d-flex">
                                    <div class="me-2">
                                        <label for="button_text">Button Text</label>
                                        <input type="text" class="form-control" id="button_text" name="button_text" placeholder="Read More">
                                    </div>
                                    <div>
                                        <label for="button_link">Button Link</label>
                                        <input type="text" class="form-control" id="button_link" name="button_link" placeholder="www.google.com">
                                    </div>
                                </div>

                            <!-- <label class="mt-20">Blog Team Member Image</label> -->
                            <div class="block col-md-12">
                                <input type="file" class="custom-file-input" id="example-file-input-custom" name="primaryImage" data-toggle="custom-file-input">
                                <label class="custom-file-label" for="example-file-input-custom">Choose Image</label>
                            </div>
                            <!-- <label class="mt-20">Blog Post Secondary Image</label>
                            <div class="block col-md-12">
                                <input type="file" class="custom-file-input" id="example-file-input-custom" name="secondaryImage" data-toggle="custom-file-input">
                                <label class="custom-file-label" for="example-file-input-custom">Choose Blog Post Secondary Image</label>
                            </div> -->
                        </div>
                    </div>
                    @csrf
                    <input type="submit" id="publishFaq" class="btn btn-primary m-30" value="Add Image">
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('a-asset/js/plugins/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('a-asset/js/plugins/bootstrap-colorpicker.min.js')}}"></script>
    <script>
        jQuery('.js-summernote:not(.js-summernote-enabled)').each((index, element) => {
            let el = jQuery(element);
            el.addClass('js-summernote-enabled').summernote({
                height: el.data('height') || 350,
                minHeight: el.data('min-height') || null,
                maxHeight: el.data('max-height') || null
            });
        });
        jQuery('.js-colorpicker:not(.js-colorpicker-enabled)').each((index, element) => {
            jQuery(element).addClass('js-colorpicker-enabled').colorpicker();
        });
    </script>
@endsection
