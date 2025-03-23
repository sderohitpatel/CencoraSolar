@extends('admin.master_layout')
@section('title')
<title>{{__('Dashboard')}}</title>
@endsection
@section('admin-content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>{{__('Dashboard')}}</h1>
      </div>

      <div class="section-body">
        <div class="row">
           
            <div class="col-12">
                <h4 class="dashboard_title">{{__('Total')}}</h4>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>{{__('Total Order')}}</h4>
                    </div>
                    <div class="card-body">
                   
                    </div>
                </div>
                </div>
            </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('Total Order')}}</h4>
                    </div>
                    <div class="card-body">
                      100
                    </div>
                  </div>
                </div>
              </div>
  
          </div>
      </div>

    </section>
  </div>

@endsection
