@extends('user.layout.app')

@section('content')
    <div class="dasboard-body">
        <div class="dashboard-hero">
            <div class="header-top">
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
                                                    <a href="{{ route('profile.edit') }}"><i
                                                            class="fas fa-user-edit"></i>Edit
                                                        Profile</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-block btn-primary">Logout</button>
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
            <div class="dashboard-hero-content text-white">
                <h3 class="title">User Dashboard</h3>
                <ul class="">
                    <li>
                        All Products
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid m-4">
            <div class="row justify-content-center">
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
                        <div class="col-md-6">
                            <h3>Admin have not added any product yet!</h3>
                        </div>
                        @endforelse
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid sticky-bottom">
            <div class="dashboard-footer">
                <div class="d-flex flex-wrap justify-content-between m-0-15-none">
                    <div class="left">
                        &copy; 2019 <a href="#0">{{ env('APP_NAME') }}</a> | All right reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endsection
