@extends('user.newDashboard.master_layout')
@section('title')
<title>{{__('admin.Create Product')}}</title>
@endsection
<style>
    .project_status_select .select2-selection{
        background: rgb(235, 230, 230) !important;
        }
        
</style>
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Create Product')}}</h1>
          </div>

          <div class="section-body">
            <a href="{{ route('admin.product.index') }}" class="btn btn-primary"><i class="fas fa-list"></i> {{__('admin.Products')}}</a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{ route('store_book_type_product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <input type="hidden" name="product_type" value="{{ $product_type }}">
                                <div class="form-group col-12">
                                    <label>{{__('admin.Book Cover')}} <span class="text-danger">*</span></label>
                                    <input id="upload_11" name="book_cover"  class="form-control" type="file">
                                </div>
                                <div class="form-group col-12 ">
                                    <label>{{__('admin.Upload Book PDF')}} <span class="text-danger">*</span></label>
                                    <input name="book_pdf" accept=".pdf" type="file" class="form-control">
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Category')}} <span class="text-danger">*</span></label>
                                    <select name="category" class="form-control select2" id="category" >
                                        <option value="">{{__('admin.Select Category')}}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->catlangadmin->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Author')}} <span class="text-danger">*</span></label>
                                    <input type="text" name="author" class="form-control" value="{{ old('author') }}">
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Book Tilte')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="name" name="book_title" class="form-control" value="{{ old('book_title') }}">
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Acquisition Fee')}} <span class="text-danger">*</span></label>
                                    <input type="number" name="acquisition_fee" class="form-control" onkeyup="document.getElementById('option_fee').value=this.value*10/100;" value="{{ old('acquisition_fee ') }}" id="acquisition_fee" value="{{ old('acquisition_fee') }}">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Option Fee')}} <span class="text-danger">*</span></label>
                                    <input type="text" name="option_fee" id="option_fee" class="form-control" value="{{ old('option_fee') }}" readonly >
                                </div>
                                <div class="form-group col-12">
                                   <label>{{__('admin.Language')}} <span class="text-danger">*</span></label>
                                    <select class="select2" name="language">
                                        <option value="">{{__('user.Select Language')}}</option>
                                        @foreach ($languages as $language)
                                            <option value="{{ $language->id }}">{{ $language->lang_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                               
                                <div class="form-group col-12">
                                    <label>{{__('admin.Logline')}} <span class="text-danger">*</span> (up to 25 words)</label>
                                    <textarea name="logline" id="" cols="30" rows="10" class="summernote">{{ old('logline') }}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Short Synopsis')}} <span class="text-danger">*</span> (up to 200 words)</label>
                                    <textarea name="short_synopsis" id="" cols="30" rows="10" class="summernote">{{ old('short_synopsis') }}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Author Bio')}} (up to 200 words)</label>
                                    <textarea name="author_bio" id="" cols="30" rows="10" class="summernote">{{ old('author_bio') }}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Confidential Notice')}} (up to 500 words)</label>
                                    <textarea name="confidential_notice" id="" cols="30" rows="10" class="summernote">{{ old('confidential_notice') }}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Long Synopsis')}}  (up to 1000 words)</label>
                                    <textarea name="long_synopsis" id="" cols="30" rows="10" class="summernote">{{ old('long_synopsis') }}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Characterization')}} (up to 1000 words)</label>
                                    <textarea name="characterization" id="" cols="30" rows="10" class="summernote">{{ old('characterization') }}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Episodic Overview')}} (up to 10000 words)</label>
                                    <textarea name="episodic_overview" id="" cols="30" rows="10" class="summernote">{{ old('episodic_overview') }}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Lead Casting Options')}} (up to 100 words)</label>
                                    <textarea name="lead_casting_options" id="" cols="30" rows="10" class="summernote">{{ old('lead_casting_options') }}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.Notes for Director')}} (up to 500 words)</label>
                                    <textarea name="notes_for_director" id="" cols="30" rows="10" class="summernote">{{ old('notes_for_director') }}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('admin.What Makes the Book Suitable for Adaptation')}} (up to 500 words)</label>
                                    <textarea name="makes_book_suitable" id="" cols="30" rows="10" class="summernote">{{ old('makes_book_suitable') }}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__("admin.Book's Trailer")}}<span> (<b>{{__('user.Only Video file allowed')}}</b>)</span></label>
                                    <input name="book_trailer_video" accept="video/*" type="file" class="form-control" >
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('user.Audio Narration')}}<span> (<b>{{__('user.Only Audio file allowed')}}</b>)</span></label>
                                    <input  name="audio_narration" accept="audio/*" type="file" class="form-control" >
                                </div>

                                <div class="form-group col-12 project_status_select" >
                                    <label>{{__('user.Project Status')}}<span> (<b>Note: Please contact admin for filling this field)</b> </span></label>
                                    <select class="select2 bg_disabled" name="project_status" multiple="multiple" >
                                        @foreach ($projectStatus as $status)
                                            <option value="{{ $status->id }}" disabled>{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                              

                                <div class="form-group col-12">
                                    <label>{{__('admin.Tags')}} <span class="text-danger">*</span> ({{__('admin.Press the comma for new tag')}})</label><br>
                                   <input type="text" class="form-control" data-role="tagsinput" name="tags" value="{{ old('tags') }}">
                                </div>

                                
                                <div class="form-group col-12">
                                    <label>{{__('admin.Highlight')}} <b>( Note: Please contact admin for filling this field)</b></label>
                                    <div>
                                        <input type="checkbox" name="popular_item" id="popular_item" disabled> <label for="popular_item" class="mr-3" >{{__('admin.Popular')}}</label>

                                        <input type="checkbox" name="trending_item" id="trending_item" disabled > <label for="trending_item" class="mr-3" >{{__('admin.Trending')}}</label>

                                        <input type="checkbox" name="featured_item" id="featured_item" disabled > <label for="featured_item" class="mr-3" >{{__('admin.Featured')}}</label>
 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary">{{__('admin.Save')}}</button>
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
