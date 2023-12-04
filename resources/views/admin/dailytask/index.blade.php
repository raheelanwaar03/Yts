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

            <form action="{{ url('Admin/daily-task-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="m-3">Select Level</label>
                    <select name="level" class="form-control">
                        <option value="level 1">Level 1</option>
                        <option value="level 2">Level 2</option>
                        <option value="level 3">Level 3</option>
                        <option value="level 4">Level 4</option>
                        <option value="level 5">Level 5</option>
                        <option value="level 6">Level 6</option>
                        <option value="level 7">Level 7</option>
                        <option value="level 8">Level 8</option>
                        <option value="level 9">Level 9</option>
                        <option value="level 10">Level 10</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="m-3">Package</label>
                    <select name="plan" class="form-control">
                        <option value="1">One Star</option>
                        <option value="2">Two Star</option>
                        <option value="3">Three Star</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="m-3">Link</label>
                    <input type="text" name="link" class="form-group" placeholder="Add Link">
                </div>
                <div class="form-group">
                    <label for="" class="m-3">Price</label>
                    <input type="number" name="price" class="form-group" placeholder="Add Link Price">
                </div>
                <div class="form-group">
                    <label for="" class="m-3">Description</label>
                    <textarea name="description" class="form-control" rows="7" placeholder="Enter Description"></textarea>
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
                            <th>link</th>
                            <th>price</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($daily_task as $dt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dt->link }}</td>
                                <td>{{ $dt->price }}</td>
                                <td>{{ $dt->description }}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{ asset('Admin/daily-task-edit') . '/' . $dt->id }}"
                                        class="btn btn-sm btn-info mx-3">Edit</a>
                                    <a href="{{ asset('Admin/daily-task-delete') . '/' . $dt->id }}"
                                        class="btn btn-sm btn-danger mx-3">Delete</a>

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
