@extends('layouts.app')

@section('content')
    <section class="bg_img hero-section-2 left-bottom-lg-max"
        data-background="{{ asset('assets/images/about/hero-bg5.png') }}">
        <div class="container">
            <div class="hero-content text-white">
                <h1 class="title">Product</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('LandingPage') }}">Home</a>
                    </li>
                    <li>
                        Product
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="contact-section padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mb-2">All Products</h1>
                    <div class="row">
                        @forelse ($products as $product)
                            <div class="col-md-4">
                                <div class="card mt-2">
                                    <img class="card-img-top" src="{{ asset('images/' . $product->product_img) }}"
                                        alt="{{ $product->product_img }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->product_title }}</h5>
                                        <p class="card-text">{{ $product->product_des }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ $product->product_link }}" target="_blank"
                                                class="btn btn-sm btn-primary">Survey</a>
                                            <a href="{{ route('User.Product.Reward', ['id' => $product->id]) }}"
                                                class="btn btn-sm btn-success text-white">Review</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                    </div>
                    <h3>Admin have not added any product yet!</h3>
                    @endforelse
                    <div class="col-md-12 text-center">
                        {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
