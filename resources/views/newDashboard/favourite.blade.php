@extends('user.newDashboard.master_layout')
@section('title')
<title>{{__('Wishlists')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('Wishlists')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{__('admin.Dashboard')}}</a></div>
              <div class="breadcrumb-item">{{__('wishlists')}}</div>
            </div>
          </div>

          <div class="section-body">
         
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th >{{__('admin.SN')}}</th>
                                    <th >{{__('admin.Project Name')}}</th>
                                    <th >{{__('admin.Author')}}</th>
                                    <th >{{__('admin.Category')}}</th>
                                    <th >{{__('Acquisition Price')}}</th>
                                    <th >{{__('Option Price')}}</th>
                                    <th >{{__('admin.Action')}}</th>
                                  </tr>
                            </thead>
                            <tbody>
                                @foreach ($wishlists as $index => $wishlist)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td><a href="{{ route('product-detail', $wishlist->product->id??"") }}">{{ html_decode($wishlist->product->name?? $wishlist->product->name?? "") }}</a></td>
                                        <td>{{$wishlist->product->author->name??"" }}</td>
                                        <td> <a class="category" href="{{ route('products', ['category' => $wishlist->product->category->slug??""]) }}">{{ $wishlist->product->category->catlangfrontend->name??"" }}</a></td>
                                        <td>
                                            @if (session()->get('currency_position') == 'right')
                                                {{ html_decode($wishlist->product->option_fee?? 0 * session()->get('currency_rate')) }}{{ session()->get('currency_icon') }}
                                            @else
                                                {{ session()->get('currency_icon') }}{{ html_decode($wishlist->product->acquisition_fee??0 * session()->get('currency_rate')) }}
                                            @endif
                                        </td>
                                        <td>
                                             @if (session()->get('currency_position') == 'right')
                                                {{ html_decode($wishlist->product->option_fee??0 * session()->get('currency_rate')) }}{{ session()->get('currency_icon') }}
                                            @else
                                                {{ session()->get('currency_icon') }}{{ html_decode($wishlist->product->option_fee??0 * session()->get('currency_rate')) }}
                                            @endif 
                                        </td>
                                        <td>
                                        
                                       
                                        <a href="{{ route('delete-wishlist', $wishlist->id) }}"  class="btn btn-danger btn-sm" ><i class="fa fa-trash" aria-hidden="true"></i></a>  
                               
                                        
                                        </td>
                                    </tr>
                                  @endforeach
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="canNotDeleteModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                        <div class="modal-body">
                            {{__('admin.You can not delete this product. Because there are one or more order has been created in this product.')}}
                        </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('admin.Close')}}</button>
                  </div>
              </div>
          </div>
      </div>
<script>
    "use strict";
    function deleteData(id){
        $("#deleteForm").attr("action",'{{ url("admin/product/") }}'+"/"+id)
    }
    function changeProductStatus(id){
        var isDemo = "{{ env('APP_VERSION') }}"
        if(isDemo == 0){
            toastr.error('This Is Demo Version. You Can Not Change Anything');
            return;
        }
        $.ajax({
            type:"put",
            data: { _token : '{{ csrf_token() }}' },
            url:"{{url('/admin/product-status/')}}"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){
                console.log(err);

            }
        })
    }
</script>
@endsection
