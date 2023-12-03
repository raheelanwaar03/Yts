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
                            <li>
                                <a href="#0"><i class="flaticon-support"></i>Support</a>
                            </li>
                            <li>
                                <i class="flaticon-globe"></i>
                            </li>
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
                        Set limit
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center mt--85">
                <h2 class="text-center text-white">Set Limit</h2>
                <hr>
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('Admin.Setting.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="m-3">Referal Amount</label>
                                <input type="text" name="refer_amount" class="form-group" placeholder="Refer Setting">
                            </div>
                            <div class="form-group">
                                <label for="" class="m-3">Minimum Widthraw</label>
                                <input type="text" name="minimum_amount" class="form-group"
                                    placeholder="Minimum Widthraw">
                            </div>
                            <div class="form-group">
                                <label for="" class="m-3">Maximum Widthraw</label>
                                <input type="text" name="maximun_amount" class="form-group"
                                    placeholder="Maximun Widthraw">
                            </div>
                            <button type="submit" class="btn btn-primary">Set</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 mt-4">

                    <h4 class="text-center my-4">Applied Settings</h4>
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Referal Price</th>
                                <th>Minimum</th>
                                <th>Maximum</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @forelse ($settings as $setting)
                                    <td>{{ $setting->refer_amount }}</td>
                                    <td>{{ $setting->minimum_amount }}</td>
                                    <td>{{ $setting->maximun_amount }}</td>
                                    <td><a href="{{ route('Admin.Setting.edit', $setting->id) }}"
                                            class="btn btn-sm btn-primary">Change Limit</a></td>
                                @empty
                                    <h4 class="text-center">No Limit Applied Yet</h4>
                                @endforelse
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
@endsection
