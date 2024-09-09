@extends('layouts.admin.app')
@section('title', 'Dashboard')
@section('css')
    <link href="{{asset('a-asset/css/plugins/dropzone.css')}}">
    <style>
        .dropzone .dz-message {
            margin: 0px;
        }
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
    <h2 class="content-heading">{{$image->id}} - Image</h2>
    <div class="block">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <div class="block-content block-content-full">

                        <label>Gallery Image</label>
                        <form class="dropzone" id="primaryImage" action="{{route('admin.gallery.upload', $image->id)}}" method="POST">
                            @csrf</form>
                        <small>To update this image, click inside the zone or drop the new image inside the zone.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form method="POST" class="p-20" action="{{route('admin.gallery.update', $image->id)}}">
                    @csrf
                    @method('PUT')

                    <!-- Title of the Image (Optional) -->
                    <div class="form-group">
                        <label for="imageTitle">Title of the Event </label>
                        <input type="text" class="form-control" id="imageTitle" name="title" value="{{ $image->title }}" placeholder="Enter Event title">
                    </div>
                    <div class="form-group">
                        <label for="imageTitle">Description</label>
                        <input type="text" class="form-control" id="imageTitle" name="description" value="{{ $image->description }}" placeholder="Enter Description">
                    </div>
                    <div class="form-group">
                        <label for="imageTitle">Date</label>
                        <input type="date" class="form-control" id="imageTitle" name="date" value="{{ $image->date }}" placeholder="Date">
                    </div>
                    <div class="form-group">
                        <label for="imageTitle">Button</label>
                        <input type="text" class="form-control" id="imageTitle" name="button_text" value="{{ $image->button_text }}" placeholder="Read More">
                    </div>
                    <div class="form-group">
                        <label for="imageTitle">Link</label>
                        <input type="text" class="form-control" id="imageTitle" name="button_link" value="{{ $image->button_link }}" placeholder="www.google.com">
                    </div>



                    <input type="submit" value="Update Information" class="btn btn-primary mt-20">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{asset('a-asset/js/plugins/dropzone.min.js')}}"></script>
    <script>
        Dropzone.options.primaryImage = {
            paramName: "primary_image",
            dictDefaultMessage: "<img src='{{asset($image->primary_image)}}' style='width: 465px; height: 220px' />",
            maxFiles: 1,
            acceptedFiles: 'image/*',
            thumbnailWidth: null,
            thumbnailHeight: null,
            init: function() {
                this.on("thumbnail", function(file, dataUrl) {
                    $('.dz-image').last().find('img').attr({width: '465px', height: '220px'});
                });
                this.on("maxfilesexceeded", function(file){
                    this.removeFile(file);
                    alert("No more files please!");
                });
            }
        };
    </script>
@endsection
