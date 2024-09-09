@extends('layouts.admin.app')
@section('title', 'Add Event')
@section('before-css')
    <link rel="stylesheet" href="{{asset('a-asset/css/plugins/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('a-asset/css/plugins/summernote-bs4.css')}}">
@endsection
@section('css')
    <style>
        ::placeholder, .custom-file-label, .select2-selection__placeholder {
            color: #adadadda !important;
            opacity: 1;
        }
        :-ms-input-placeholder, .custom-file-label, .select2-selection__placeholder {
            color: #adadadda !important;
        }
        ::-ms-input-placeholder, .custom-file-label, .select2-selection__placeholder {
            color: #adadadda !important;
        }
        #submit_product {
            border: 1px solid #3e4d5f;
            background-color: #f0f2f5;
            color: #374659;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <h2 class="content-heading">Adding new Event <a href="{{route('admin.event.index')}}" class="btn btn-alt-primary pull-right">Back</a></h2>

        <form method="post" action="{{route('admin.event.store')}}" enctype="multipart/form-data">
            <div class="row gutters-tiny">
                <div class="col-md-8">
                    <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title">Event Information</h3>
                        </div>
                        <div class="block-content block-content-full">
                            @if($errors->any())
                            @foreach($errors as $message)
                            {{ $message }}
                            @endforeach
                            @endif
                            <div class="form-group row">
                                <label class="col-12">Title</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="title" placeholder="Event Name" value="{{old('title')}}">
                                    @if($errors->has('title'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-12">Sub Title</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="subtitle" placeholder="Subtitle" value="{{old('subtitle')}}">
                                    @if($errors->has('subtitle'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('subtitle') }}</div>
                                    @endif
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label class="col-12">Organizer</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="organizer" placeholder="organizer" value="{{old('organizer')}}">
                                    @if($errors->has('organizer'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('organizer') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Start Date</label>
                                <div class="col-12">
                                    <input type="date" class="form-control" name="start_date" placeholder="start_date" value="{{old('start_date')}}">
                                    @if($errors->has('start_date'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('start_date') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">End Date</label>
                                <div class="col-12">
                                    <input type="date" class="form-control" name="end_date" placeholder="end_date" value="{{old('end_date')}}">
                                    @if($errors->has('end_date'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('end_date') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Time</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="time" placeholder="time" value="{{old('time')}}">
                                    @if($errors->has('time'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('time') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Short Description</label>
                                <div class="col-12">
                                    <textarea width="100px" height="100px" class="form-control" name="short_description" placeholder="Short Description">{{ old('short_description') }}</textarea>
                                    
                                    @if($errors->has('short_description'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('short_description') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="block-content block-content-full p-0">
                                        <label>Event Description</label>
                                        <textarea name="description" class="js-summernote"style="height:300px;">{{ old('description') }}</textarea>
                                        @if($errors->has('description'))
                                            <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title">Event Image</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny items-push">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="block">
                                        <input type="file" class="custom-file-input" accept="image/*" name="primaryImage" data-toggle="custom-file-input">
                                        <label class="custom-file-label">Choose Event's Display Image</label>
                                    </div>
                                    @if($errors->has('primaryImage'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('primaryImage') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title">Event Gallery Images</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny items-push">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="block">
                                        <input type="file" class="custom-file-input" accept="image/*" name="img_1" data-toggle="custom-file-input">
                                        <label class="custom-file-label">Choose Event's Gallery Image 1</label>
                                    </div>
                                    @if($errors->has('img_1'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('img_1') }}</div>
                                    @endif
                                </div>
                                <div class="col-sm-12 col-xl-12">
                                    <div class="block">
                                        <input type="file" class="custom-file-input" accept="image/*" name="img_2" data-toggle="custom-file-input">
                                        <label class="custom-file-label">Choose Event's Gallery Image 2</label>
                                    </div>
                                    @if($errors->has('img_2'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('img_2') }}</div>
                                    @endif
                                </div>
                                <div class="col-sm-12 col-xl-12">
                                    <div class="block">
                                        <input type="file" class="custom-file-input" accept="image/*" name="img_3" data-toggle="custom-file-input">
                                        <label class="custom-file-label">Choose Event's Gallery Image 3</label>
                                    </div>
                                    @if($errors->has('img_3'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('img_3') }}</div>
                                    @endif
                                </div>
                                <div class="col-sm-12 col-xl-12">
                                    <div class="block">
                                        <input type="file" class="custom-file-input" accept="image/*" name="img_4" data-toggle="custom-file-input">
                                        <label class="custom-file-label">Choose Event's Gallery Image 4</label>
                                    </div>
                                    @if($errors->has('img_4'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('img_4') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group row text-center">
                            <label class="col-12">Display on HomePage?</label>
                            <div class="col-12">
                                <label class="css-control css-control-success css-switch">
                                    <input type="checkbox" class="css-control-input" name="is_active" value="1" {{ old('is_active', $event->is_active ?? '') == 1 ? 'checked' : '' }}>
                                    <span class="css-control-indicator"></span>
                                </label>
                            </div>
                        </div>
                        
                    </div>
                    <div class="block block-rounded block-themed">
                        <div class="block-content block-content-full">
                        
                            <div class="row gutters-tiny items-push">
                                <div class="col-sm-12 col-xl-12 mb-0">
                                    <div class="block text-center">
                                        <button type="submit" id="submit_product" class="btn btn-lg">
                                            <i class="fa fa-save mr-5"></i>
                                            @if(auth()->user()->hasRole('Administrator'))
                                                Save
                                            @else
                                                Submit
                                            @endif
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @csrf
        </form>
    </div>
@endsection
@section('js')
<script src="{{asset('a-asset/js/plugins/select2.full.min.js')}}"></script>
<script src="{{asset('a-asset/js/plugins/summernote-bs4.min.js')}}"></script>
<script>

    jQuery('.js-select2:not(.js-select2-enabled)').each((index, element) => {
        let el = jQuery(element);
        el.addClass('js-select2-enabled').select2({
            placeholder: el.data('placeholder') || false
        });
    });
    jQuery('.js-summernote:not(.js-summernote-enabled)').each((index, element) => {
        let el = jQuery(element);
        el.addClass('js-summernote-enabled').summernote({
            height: el.data('height') || 350,
            minHeight: el.data('min-height') || null,
            maxHeight: el.data('max-height') || null,
            callbacks: {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                }
            }
        });
    });
    $(".product_tags").select2({
        tags: true,
        tokenSeparators: [',']
    })

    function itemType(e) {
        if(e.value == 'single') {
            $('.item-count').css('display', 'none');
        }
        else {
            $('.item-count').css('display', 'block');
        }
    }
</script>
@endsection
