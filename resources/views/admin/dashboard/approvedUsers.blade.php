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
                        Dashboard
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2 class="text-center">Approved Users</h2>
                    <hr>
                    <table id="myTable" class="table table-responsive table-bordered">
                        <thead>
                            <tr class="">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Phone</th>
                                <th>Package</th>
                                <th>Referral</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->plan }}</td>
                                    <td>{{ $user->referal }}</td>
                                    <td>{{ $user->status }}</td>
                                    <td>
                                        <a href="{{ route('Admin.Approve.User.Account.Request', ['id' => $user->id]) }}"
                                            class="btn btn-sm btn-success">Approved</a>
                                        <a href="{{ route('Admin.Rejected.User.Account.Request', ['id' => $user->id]) }}"
                                            class="btn btn-sm btn-primary">Reject</a>
                                        <a href="{{ route('Admin.Edit.User', ['id' => $user->id]) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
