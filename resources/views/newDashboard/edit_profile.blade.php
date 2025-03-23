
@extends('user.newDashboard.master_layout')
@section('title')
<title>{{__('admin.Edit User')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Update Profile')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('dashboard2') }}">{{__('admin.Dashboard')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Edit Profile')}}</div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                          <form action="{{route('update-profile')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                             
                              <div class="row">
                                <div class="form-group col-12 ">
                                    <div class="img_box p-2 " style="display:flex;height: 100px; width: 100px;">
                                        @if ($user->image!=null)
                                        <img src="{{ asset($user->image) }}" id="preview-img"  alt="upload" class="img-fluid w-100 rounded-circle">
                                        @else
                                        <img src="{{ asset($setting->default_avatar) }}" id="preview-img"  alt="upload" class="img-fluid w-100 rounded-circle">
                                        @endif

                                    </div>
                                    <div>
                                        <label>{{__('admin.Profile Image')}} </label>
                                        <input type="file" class="form-control-file"  name="image" onchange="document.querySelector('#preview-img').src=window.URL.createObjectURL(this.files[0])">
                                    </div>
                                   
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.Name')}} <span class="text-danger">*</span></label>
                                    <input type="text" name="name"  class="form-control" value="{{ html_decode($user->name) }}">
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.Gender')}} <span class="text-danger">*</span></label>
                                    <select class="select2" name="gender">
                                        <option value="" selected>{{__('user.Select Gender')}}</option>
                                        <option value="M" @if($user->gender=='M') selected @endif >Male</option>
                                        <option value="F" @if($user->gender=='F') selected @endif >Female</option>
                                        <option value="O" @if($user->gender=='O') selected @endif >Other</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.User Category')}} </label>
                                    <select class="select2" name="category">
                                        <option value="" disabled> Select Cagetory</option>
                                        @foreach ($user_categories as $category)
                                            <option value="{{$category->id}}" @if($category->id==$user->category_id) selected @endif disabled>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.Phone')}} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="phone" value="{{ html_decode($user->phone) }}">
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.Country')}}</label>
                                    <input type="text" class="form-control" name="country" value="{{ html_decode($user->country) }}">
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.State')}} </label>
                                    <input type="text" class="form-control" name="state" value="{{ html_decode($user->state) }}">
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.Town/City')}} </label>
                                    <input type="text" class="form-control" name="city" value="{{ html_decode($user->city) }}">
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.Address')}} </label>
                                    <input type="text" class="form-control" name="address" value="{{ html_decode($user->address) }}">
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.Facebook')}} </label>
                                    <input type="text" name="facebook" class="form-control" value="{{ html_decode($user->facebook) }}">
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.Instagram')}} </label>
                                    <input type="text" name="instagram" class="form-control" value="{{ html_decode($user->Instagram) }}">
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.LinkedIn')}} </label>
                                    <input type="text" name="linkedIn" class="form-control" value="{{ html_decode($user->linkedIn) }}">
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.IMDB')}} </label>
                                    <input type="text" name="imdb" class="form-control" value="{{ html_decode($user->imdb) }}">
                                </div>
                                <div class="form-group col-xl-6 col-md-6">
                                    <label>{{__('admin.Twitter')}} </label>
                                    <input type="text" name="twitter" class="form-control" value="{{ html_decode($user->twitter) }}">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('user.Short Description')}} <span class="text-danger">*</span></label>
                                    <textarea name="about_me" id="" cols="30" rows="10" class="summernote">{{ html_decode($user->about_me) }}</textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>{{__('user.Long Description')}} <span class="text-danger">*</span></label>
                                    <textarea name="my_skill" id="" cols="30" rows="10" class="summernote">{{ html_decode($user->my_skill) }}</textarea>
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

@endsection
