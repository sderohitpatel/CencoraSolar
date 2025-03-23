@extends('user.newDashboard.master_layout')
@section('title')
<title>{{__('admin.Sell')}}</title>
@endsection
@section('admin-content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>{{__('admin.Sell')}}</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('dashboard2') }}">{{__('admin.Dashboard')}}</a></div>
          <div class="breadcrumb-item">{{__('admin.Sell')}}</div>
        </div>
      </div>

      <div class="section-body">
        <a href="#" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#payoutModal" id="make_withdraw">{{__('user.Make withdraw')}}</a>
       
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>{{__('user.Current Balance')}}</h4>
                    </div>
                    <div class="card-body">
      
                        @if (session()->get('currency_position') == 'right')
                            {{ $current_balance}}{{ session()->get('currency_icon') }}
                        @else
                            {{ session()->get('currency_icon') }}{{ $current_balance}}
                        @endif
          
                      </div>
                    </div>
                 
                  </div>
            </div>

              <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-success">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('user.Total Earning')}}</h4>
                    </div>
                    <div class="card-body">
                      @if (session()->get('currency_position') == 'right')
                          {{ $total_balance }}{{ session()->get('currency_icon') }}
                      @else
                          {{ session()->get('currency_icon') }}{{ $total_balance}}
                      @endif
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-danger">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('user.Total Withdraw')}}</h4>
                    </div>
                    <div class="card-body">
                        @if (session()->get('currency_position') == 'right')
                            {{ $total_withdraw  }}{{ session()->get('currency_icon') }}
                        @else
                            {{ session()->get('currency_icon') }}{{ $total_withdraw}}
                        @endif
                    </div>
                  </div>
                </div>
              </div>
             
          </div>
      </div>
      <div class="row ">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive table-invoice">
                 
                <table class="table table-striped table-hover custom_table" >
                    <thead>
                        <tr>
                          <th class="number">{{__('user.Number')}}</th>
                          <th class="method">{{__('user.Method')}}</th>
                          <th class="method">{{__('user.Total Amount')}}</th>
                          <th class="charge">{{__('user.Charge')}}</th>
                          <th class="amount">{{__('user.Withdraw Amount')}}</th>
                          <th class="status">{{__('user.Status')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($withdraws as $index => $withdraw)
                            <tr>
                              <td class="number">{{ ++$index }}</td>
                              <td class="method">{{ $withdraw->method }}</td>
                              <td class="method">
                                  @if (session()->get('currency_position') == 'right')
                                      {{ $withdraw->total_amount  }}{{ session()->get('currency_icon') }}
                                  @else
                                      {{ session()->get('currency_icon') }}{{ $withdraw->total_amount }}
                                  @endif
                              </td>
                              <td class="charge">
                                  @if (session()->get('currency_position') == 'right')
                                      {{ ($withdraw->total_amount-$withdraw->withdraw_amount) }}{{ session()->get('currency_icon') }}
                                  @else
                                      {{ session()->get('currency_icon') }}{{ ($withdraw->total_amount-$withdraw->withdraw_amount) }}
                                  @endif
                              </td>
                              <td class="amount">
                                  @if (session()->get('currency_position') == 'right')
                                      {{ html_decode($withdraw->withdraw_amount) }}{{ session()->get('currency_icon') }}
                                  @else
                                      {{ session()->get('currency_icon') }}{{ html_decode($withdraw->withdraw_amount) }}
                                  @endif
                              </td>
                              @if ($withdraw->status==1)
                              <td class="status"><span  class="badge badge-success">{{__('user.Success')}}</span></td>
                              @else
                              <td class="status"><span  class="badge badge-danger">{{__('user.Pending')}}</span></td>
                              @endif
                          </tr>
                          @endforeach
                        
                    </tbody>
                </table>
               
              </div>
            </div>
          </div>
        </div>
    </section>
       <!-- payout modal start -->
      <div class="modal fade variant_modal" id="payoutModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel">{{__('user.My Withdraw')}}</h3>
                    <button type="button" class="btn btn-danger" id="modalCloseBtn" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('withdraw.store') }}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="form-group col-12  mb-2">
                                <label>{{__('user.Select Withdraw Method')}} <span class="text-danger">*</span></label>
                                <select class="form-control" name="method_id" id="method_id">
                                    <option value="">{{__('user.Select Withdraw Method')}}</option>
                                    @foreach ($withdraw_methods as $withdraw_method)
                                    <option value="{{ $withdraw_method->id }}">{{ $withdraw_method->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 card  m-1" id="method_des_box">
                                                
                            </div>
                          <div class="form-group col-12 mb-2" >
                              <label for="">{{__('user.Withdraw Amount')}}* ({{__('user.USD Amount')}})</label>
                              <input type="text" name="withdraw_amount" class="form-control form_control">
                          </div>
                         
                            <div class="col-12">
                              <div class="wsus__comment_single_input">
                                  <fieldset>
                                      <legend>{{__('user.Account information')}}*</legend>
                                      <textarea name="account_info" id="" cols="30" rows="5"></textarea>
                                  </fieldset>
                              </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">{{__('user.Withdraw Now')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   <!-- payout modal end -->
  </div>

  <script>
    (function($) {
    "use strict";
    $(document).ready(function () {
        $("#method_id").on('change', function(){
            var methodId = $(this).val();
            $.ajax({
                type:"get",
                url:"{{url('/get-withdraw-account-info/')}}"+"/"+methodId,
                success:function(response){
                   $("#method_des_box").html(response);
                },
                error:function(err){}
            })
  
            if(!methodId){
                $("#method_des").addClass('d-none')
            }
  
        });
        $("#make_withdraw").on('click', function(){
          $("#payoutModal").modal("show");
        })
        $("#modalCloseBtn").on('click', function(){
          $("#payoutModal").modal("hide");
        })
    // $("#payoutModal").modal("show");
    });
  })(jQuery);
  </script>
@endsection

