@extends('layouts.admin.app')
@section('title', 'Updating Event - '.$event_detail->title)
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
        a.btn.btn-alt-primary.change_padding{
            padding: 11px 15px;
            border: 1px solid #125a96;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <h2 class="content-heading">Event #{{$event_detail->id}} ({{$event_detail->name}}) <a href="{{route('admin.event.index')}}" class="btn btn-alt-primary pull-right">Back</a></h2>
        <form method="post" action="{{route('admin.event.update', $event_detail->id)}}" enctype="multipart/form-data">
           @csrf
            <div class="row gutters-tiny">
                <div class="col-md-8">
                    <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title">Event Information</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="form-group row">
                                <label class="col-12">Title</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="name" name="title" placeholder="title" value="{{(old('title'))?old('title'):$event_detail->title}}">
                                    @if($errors->has('title'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-12">subtitle</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="subtitle" value="{{(old('subtitle'))?old('subtitle'):$event_detail->subtitle}}">
                                    @if($errors->has('subtitle'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('subtitle') }}</div>
                                    @endif
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label class="col-12">Organizer</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="organizer" name="organizer" placeholder="organizer" value="{{(old('organizer'))?old('organizer'):$event_detail->organizer}}">
                                    @if($errors->has('organizer'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('organizer') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Start Date</label>
                                <div class="col-12">
                                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{(old('start_date'))?old('start_date'):$event_detail->start_date}}">
                                    @if($errors->has('start_date'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('start_date') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">End Date</label>
                                <div class="col-12">
                                    <input type="date" class="form-control" id="name" name="end_date" placeholder="end_date" value="{{(old('end_date'))?old('end_date'):$event_detail->end_date}}">
                                    @if($errors->has('end_date'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('end_date') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Time</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="name" name="time" placeholder="9.00AM" value="{{(old('time'))?old('time'):$event_detail->time}}">
                                    @if($errors->has('time'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('time') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12">Short Description</label>
                                <div class="col-12">
                                    <textarea width="100px" height="100px" class="form-control" name="short_description" placeholder="Short Description">{{ old('short_description') ? old('short_description') : $event_detail->short_description }}</textarea>
                                    
                                    @if($errors->has('short_description'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('short_description') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                     
                        
                        </div>
                
                    </div>
                    <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="block-content block-content-full p-0">
                                        <label>Event Description</label>
                                        <textarea name="description" class="js-summernote"style="height:300px;" value="{{(old('description'))?old('description'):$event_detail->description}}">{{(old('description'))?old('description'):$event_detail->description}}</textarea>
                                        @if($errors->has('description'))
                                            <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('description') }}</div>
                                        @endif
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
                                <img src="{{asset($event_detail->primary_image)}}" class="img-fluid m-auto p-20" style="max-height: 200px;">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="block">
                                        <input type="file" class="custom-file-input" accept="image/*" name="primaryImage" data-toggle="custom-file-input">
                                        <label class="custom-file-label">Change Event's Featured Image</label>
                                    </div>
                                    @if($errors->has('primaryImage'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('primaryImage') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                            <div class="block-content block-content-full">
                                <div class="row gutters-tiny items-push">
                                <img src="{{asset($event_detail->img_1)}}" class="img-fluid m-auto p-20" style="max-height: 200px;">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="block">
                                        <input type="file" class="custom-file-input" accept="image/*" name="img_1" data-toggle="custom-file-input">
                                        <label class="custom-file-label">Change Event's 1st  Image</label>
                                    </div>
                                    @if($errors->has('img_1'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('img_1') }}</div>
                                    @endif
                                </div>
                            </div>
                                <div class="row gutters-tiny items-push">
                                <img src="{{asset($event_detail->img_2)}}" class="img-fluid m-auto p-20" style="max-height: 200px;">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="block">
                                        <input type="file" class="custom-file-input" accept="image/*" name="img_2" data-toggle="custom-file-input">
                                        <label class="custom-file-label">Change Event's 2nd Image</label>
                                    </div>
                                    @if($errors->has('img_2'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('img_2') }}</div>
                                    @endif
                                </div>
                            </div>
                                <div class="row gutters-tiny items-push">
                                <img src="{{asset($event_detail->img_3)}}" class="img-fluid m-auto p-20" style="max-height: 200px;">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="block">
                                        <input type="file" class="custom-file-input" accept="image/*" name="img_3" data-toggle="custom-file-input">
                                        <label class="custom-file-label">Change Event's 3rd Image</label>
                                    </div>
                                    @if($errors->has('img_3'))
                                        <div class="text-danger ml-5 font-weight-bold">{{ $errors->first('img_3') }}</div>
                                    @endif
                                </div>
                            </div>
                                <div class="row gutters-tiny items-push">
                                <img src="{{asset($event_detail->img_4)}}" class="img-fluid m-auto p-20" style="max-height: 200px;">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="block">
                                        <input type="file" class="custom-file-input" accept="image/*" name="img_4" data-toggle="custom-file-input">
                                        <label class="custom-file-label">Change Event's 4th Image</label>
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
                                    <input type="checkbox" class="css-control-input" name="is_active" value="1" {{ old('is_active', $event_detail->is_active) == 1 ? 'checked' : '' }}>
                                    <span class="css-control-indicator"></span>
                                </label>
                            </div>
                        </div>

                    </div>
                          
                    @method('PUT')
                    <div class="block block-rounded block-themed">
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny items-push">
                                <div class="col-sm-12 col-xl-12 mb-0">
                                    <div class="block text-center">
                                        <button type="submit" id="submit_product" class="btn btn-lg">
                                            <i class="fa fa-save mr-5"></i>
                                            @if(auth()->user()->hasRole('Administrator'))
                                                update Event
                                            @else
                                                update Event
                                            @endif
                                        </button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @csrf
            <input type="hidden" name="event_id" value="{{ $event_detail->id }}">
        </form>
        </div>
        </div>
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
    $(".blogs_tags").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    })
    function uploadImage(image) {
        let data = new FormData();
        data.append("image", image);
        data.append( "_token", "{{ csrf_token() }}");
        console.log(data);
        $.ajax({
            url: "{{route('admin.product.descriptionImage')}}",
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "POST",
            success: function(filename) {
                var image = $('<img>').attr('src', filename).addClass("img-fluid");
                $('.js-summernote').summernote("insertNode", image[0]);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
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
