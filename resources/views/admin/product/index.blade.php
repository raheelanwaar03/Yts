@extends('admin.layout.app')

@section('content')
    <div class="dasboard-body">
        <div class="dashboard-hero">
            <div class="header-top" style="background-color: tomato !important">
                <div class="container">
                    <div class="mobile-header d-flex justify-content-between d-lg-none align-items-center">
                        <div class="author">
                            <img src="{{ asset('assets/images/dashboard/author.png') }}" alt="dashboard">
                        </div>
                        {{-- <div class="cross-header-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div> --}}
                    </div>
                    <div class="mobile-header-content d-lg-flex flex-wrap justify-content-lg-between align-items-center">
                        <ul class="support-area">
                        </ul>
                        <div
                            class="dashboard-header-right d-flex flex-wrap justify-content-center justify-content-sm-between justify-content-lg-end align-items-center">

                            <ul class="dashboard-right-menus">
                                <li>
                                    <a href="#0">
                                    </a>
                                    <div class="notification-area">
                                        <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                        </div>
                                        <div class="notifacation-footer text-center">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#0" class="author">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/dashboard/author.png') }}" alt="dashboard">
                                            <span class="checked">
                                                <i class="flaticon-checked"></i>
                                            </span>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">{{ auth()->user()->name }}</h6>
                                            <span class="country">{{ auth()->user()->country }}</span>
                                        </div>
                                    </a>
                                    <div class="notification-area">
                                        <div class="author-header">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/images/dashboard/author.png') }}"
                                                    alt="dashboard">
                                            </div>
                                            <h6 class="title">{{ auth()->user()->name }}</h6>
                                        </div>
                                        <div class="author-body">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('profile.edit') }}" class="text-seconday"><i
                                                            class="fas fa-user-edit"></i>Edit
                                                        Profile</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fas fa-sign-out-alt"></i>Log
                                                            Out</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-hero-content text-white" style="background-color: tomato !important">
                <h3> <a href="/Admin/Dashboard"> Go Back to Home</a></h3>
                <ul class="">
                    <li>
                        All Tasks
                    </li>
                </ul>
            </div>
        </div>
        <div class="container mt-5">

            <form action="{{ route('Admin.Product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="m-3">Link</label>
                    <input type="text" name="link" class="form-group" placeholder="Add Product Title">
                </div>
                <div class="form-group">
                    <label for="" class="m-3">Product Price</label>
                    <input type="text" name="price" class="form-group" placeholder="Add Product Price">
                </div>
                <div class="form-group">
                    <label for="" class="m-3">Product Level</label>
                    <input type="text" name="level" class="form-group" placeholder="Add Product Level">
                </div>
                <div class="form-group">
                    <label for="" class="m-3">Description</label>
                    <textarea name="product_des" class="form-control" rows="7" placeholder="Enter Product Details"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enter</button>
            </form>
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center">All Tasks</h2>
                <hr>
                <table id="myTable" class="table table-responsive table-bordered">
                    <thead>
                        <tr class="">
                            <th>Id</th>
                            {{-- <th>Name</th>
                                <th>price</th>
                                <th>Level</th> --}}
                            <th>link</th>
                            <th>Description</th>
                            {{-- <th>Image</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                {{-- <td>{{ $product->product_title }}</td>
                                    <td>{{ $product->product_level }}</td> --}}
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->product_link }}</td>
                                <td>{{ $product->product_des }}</td>
                                {{-- <td><img src="{{ asset('images/' . $product->product_img) }}"
                                            class="img-fluid img-thumbnail" height="90px" width="90px"
                                            alt="{{ $product->product_img }}"></td> --}}
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{ route('Admin.Product.edit', $product->id) }}"
                                        class="btn btn-sm btn-info mx-3">Edit</a>
                                    <form action="{{ route('Admin.Product.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
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
@endsection
