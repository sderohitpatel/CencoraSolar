@extends('user.newDashboard.master_layout')
@section('title')
<title>{{__('admin.Select Your Product Type')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Select Your Product Type')}}</h1>
          </div>

            <div class="section-body">
                <div class="row mt-4">
                    <div class="col-6">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset($productItem->script_image) }}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">{{ $productItem->productitemlangadmin->script_title }}</h5>
                              <p class="card-text">{{ $productItem->productitemlangadmin->script_description }}</p>
                              <a href="{{ route('createProduct',['product_type' => 'script']) }}" class="btn btn-primary">{{__('admin.Go to create page')}}</a>
                            </div>
                          </div>
                    </div>

                    <div class="col-6">
                      <div class="card">
                          <img class="card-img-top" src="{{ asset($productItem->image_image) }}" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title">Create Book Product</h5>
                              <p class="card-text">What is image product ? If you interest jpg, jpeg, pnj or any other image related file then you can choose it</p>
                              <a href="{{ route('createProduct',['product_type' => 'book']) }}" class="btn btn-primary">{{__('admin.Go to create page')}}</a>
                            </div>
                        </div>
                   </div>

                </div>
            </div>

        </section>
      </div>
@endsection
