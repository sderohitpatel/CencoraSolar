@extends('user.newDashboard.master_layout')
@section('title')
<title>{{__('admin.Edit Product')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Edit Product')}}</h1>
          </div>

          <div class="section-body">
            <a href="{{ route('allProduct') }}" class="btn btn-primary"><i class="fas fa-list"></i> {{__('admin.Products')}}</a>
            <div class="row mt-4">
                
                <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="h3 mb-3 text-gray-800">{{__('admin.Language')}}</h3>
                        <hr>
                        <div class="lang_list_top">
                            <ul class="lang_list">
                                @foreach ($languages as $language)
                                <li><a href="{{ route('admin.product.edit',['product' => $product->id, 'lang_code' => $language->lang_code]) }}"><i class="fas fa-edit"></i> {{ $language->lang_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="alert alert-danger" role="alert">
                            @php
                                $current_language = App\Models\Language::where('lang_code', request()->get('lang_code'))->first();
                            @endphp
                            <p>{{__('admin.Your editing mode')}} : <b>{{ $current_language->lang_name??"" }}</b></p> 
                        </div> 
                      </div>
                    </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{route('script-product-update', $product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('PUT') --}}
                            <div class="row">

                                <input type="hidden" name="product_type" value="{{ $product_type }}">
                                <div class="form-group col-12">
                                    <label>{{__('admin.Existing Poster')}}</label>
                                    <div>
                                        <img class="w_200" src="{{ asset($product->thumbnail_image) }}" alt="">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Script Poster')}} <span class="text-danger">*</span></label>
                                    <input id="upload_11" name="script_poster"  class="form-control" type="file">
                                </div>
                                <div class="form-group col-12 ">
                                    <label>{{__('admin.Upload Script')}} <span class="text-danger">*</span>(Only PDF file Allowed)</label>
                                    <input name="script" accept=".pdf" type="file" class="form-control">
                                    @if(isset($product->book_pdf))
                                        <label for=""><a class="text-danger text-bold" href="{{ url($product->book_pdf) }}">{{__('user.Download existing file')}}</a></label>
                                    @endif
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Category')}} <span class="text-danger">*</span></label>
                                    <select name="category" class="form-control select2" id="category" >
                                        <option value="">{{__('admin.Select Category')}}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if($category->id==$product->category_id) selected @endif >{{ $category->catlangadmin->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Writer')}} <span class="text-danger">*</span></label>
                                    <input type="text" name="writer" class="form-control" value="{{$product->author_name}}">
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Script Tilte')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="name" name="script_title" class="form-control" value="{{$product->name}}">
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Acquisition Fee')}} <span class="text-danger">*</span></label>
                                    <input type="number" name="acquisition_fee" class="form-control" onkeyup="document.getElementById('option_fee').value=this.value*10/100;" value="{{$product->acquisition_fee}}" id="acquisition_fee" value="{{ old('acquisition_fee') }}">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Option Fee')}} <span class="text-danger">*</span></label>
                                    <input type="text" name="option_fee" id="option_fee" class="form-control" value="{{$product->option_fee}}" readonly>
                                </div>
                                <div class="form-group col-12">
                                   <label>{{__('admin.Language')}} <span class="text-danger">*</span></label>
                                    <select class="select2" name="language">
                                        <option value="">{{__('user.Select Language')}}</option>
                                        @foreach ($languages as $language)
                                            <option value="{{ $language->id }}" @if($product->language==$language->id) selected @endif >{{ $language->lang_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                               
                                <div class="form-group col-12">
                                    <label>{{__('admin.Logline')}} <span class="text-danger">*</span> (up to 25 words)</label>
                                    <textarea name="logline" id="" cols="30" rows="10" class="summernote">{{html_decode($product->logline)}}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Short Synopsis')}} <span class="text-danger">*</span> (up to 200 words)</label>
                                    <textarea name="short_synopsis" id="" cols="30" rows="10" class="summernote">{{html_decode($product->short_synopsis)}}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Writer Bio')}} (up to 200 words)</label>
                                    <textarea name="writer_bio" id="" cols="30" rows="10" class="summernote">{{html_decode($product->author_bio)}}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Confidential Notice')}} (up to 500 words)</label>
                                    <textarea name="confidential_notice" id="" cols="30" rows="10" class="summernote">{{html_decode($product->confidential_notice)}}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Long Synopsis')}}  (up to 1000 words)</label>
                                    <textarea name="long_synopsis" id="" cols="30" rows="10" class="summernote">{{html_decode($product->long_synopsis)}}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Characterization')}} (up to 1000 words)</label>
                                    <textarea name="characterization" id="" cols="30" rows="10" class="summernote">{{ html_decode($product->characterization)}}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Episodic Overview')}} (up to 10000 words)</label>
                                    <textarea name="episodic_overview" id="" cols="30" rows="10" class="summernote">{{html_decode($product->episodic_overview)}}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Lead Casting Options')}} (up to 100 words)</label>
                                    <textarea name="lead_casting_options" id="" cols="30" rows="10" class="summernote">{{html_decode($product->lead_casting_options)}}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Notes for Director')}} (up to 500 words)</label>
                                    <textarea name="notes_for_director" id="" cols="30" rows="10" class="summernote">{{html_decode($product->notes_for_director)}}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.What Makes The Script Suitable for Adaptation')}} (up to 500 words)</label>
                                    <textarea name="makes_script_suitable" id="" cols="30" rows="10" class="summernote">{{html_decode($product->makes_book_suitable)}}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__("admin.Video Trailer")}}<span> (<b>{{__('user.Only Video file allowed')}}</b>)</span></label>
                                    <input name="video_trailer" accept="video/*" type="file" class="form-control" value="{{$product->book_trailer_video}}">
                                    @if(isset($product->book_trailer_video))
                                        <label for=""><a class="text-danger text-bold" href="{{ url($product->book_trailer_video) }}">{{__('View/Download Existing Video')}}</a></label>
                                    @endif  
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('user.Audio Narration')}}<span> (<b>{{__('user.Only Audio file allowed')}}</b>)</span></label>
                                    <input  name="audio_narration" accept="audio/*" type="file" class="form-control" value="{{$product->audio_narration}}">
                                    @if(isset($product->audio_narration))
                                        <label for=""><a class="text-danger text-bold" href="{{ url($product->audio_narration) }}">{{__('View/Download Existing Audio')}}</a></label>
                                    @endif  
                                </div>

                                <div class="form-group col-12 project_status_select" >
                                    <label>{{__('user.Project Status')}}<span> (<b>Note: Please contact admin for filling this field)</b> </span></label>
                                    <select class="select2 bg_disabled" name="project_status" multiple="multiple" >
                                        @foreach ($projectStatus as $status)
                                            <option value="{{ $status->id }}" @if($status->id==$product->project_status_id) Selected @endif disabled>{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Tags')}} <span class="text-danger">*</span> ({{__('admin.Press the comma for new tag')}})</label><br>
                                   <input type="text" class="form-control" data-role="tagsinput" name="tags" value="{{$product->tags}}">
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Highlight')}} (<b>Note: Please contact admin for filling this field)</b></label>
                                    <div>
                                        <input {{ $product->popular_item == 1 ? 'checked' : '' }} type="checkbox"name="popular_item" id="popular_item" disabled> <label for="popular_item" class="mr-3" >{{__('admin.Popular')}}</label>

                                        <input {{ $product->trending_item == 1 ? 'checked' : '' }}  type="checkbox" name="trending_item" id="trending_item" disabled> <label for="trending_item" class="mr-3" >{{__('admin.Trending')}}</label>

                                        <input {{ $product->featured_item == 1 ? 'checked' : '' }} type="checkbox" name="featured_item" id="featured_item" disabled> <label for="featured_item" class="mr-3" >{{__('admin.Featured')}}</label>
 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary">{{__('admin.Update')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

<script>
    (function($) {
        "use strict";
        var specification = true;
        $(document).ready(function () {
            $("#name").on("focusout",function(e){
                $("#slug").val(convertToSlug($(this).val()));
            })

            $("#download_file_type").on("change", function(){
                let currentVal = $(this).val();
                if(currentVal == 'direct_upload'){
                    $(".upload_file_box").removeClass('d-none')
                    $(".download_link_box").addClass('d-none')
                }else{
                    $(".upload_file_box").addClass('d-none')
                    $(".download_link_box").removeClass('d-none')
                }


            })




        });
    })(jQuery);

    function convertToSlug(Text){
            return Text
                .toLowerCase()
                .replace(/[^\w ]+/g,'')
                .replace(/ +/g,'-');
    }


</script>


@endsection
