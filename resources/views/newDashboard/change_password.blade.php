
@extends('user.newDashboard.master_layout')
@section('title')
<title>{{__('admin.Change Password')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Change Password')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('dashboard2') }}">{{__('admin.Dashboard')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Change Password')}}</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-8">
                <div class="card profile-widget">
                  <div class="profile-widget-description">
                    <form action="{{ route('update-password') }}" enctype="multipart/form-data" method="POST">
                    @csrf
               
                        <div class="row">
                           <input type="hidden" name="theame" value="newDashboard">
                            <div class="form-group col-12">
                                <label>{{__('admin.Current password')}} <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="current_password" value="">
                                </div>
                            <div class="form-group col-12">
                            <label>{{__('admin.New Password')}} <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password">
                            </div>

                            <div class="form-group col-12">
                                <label>{{__('admin.Confirm Password')}} <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="c_password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary">{{__('admin.Change')}}</button>
                            </div>
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
    "use strict";
    function manageCustomerStatus(id){
        var isDemo = "{{ env('APP_MODE') }}"
        if(isDemo == 'DEMO'){
            toastr.error('This Is Demo Version. You Can Not Change Anything');
            return;
        }
        $.ajax({
            type:"put",
            data: { _token : '{{ csrf_token() }}' },
            url:"{{url('/admin/customer-status/')}}"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){


            }
        })
    }
</script>
@endsection
