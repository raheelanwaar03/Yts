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
                                            <a href="#mailto:johndoe@gmail.com"><span class="__cf_email__"
                                                    data-cfemail="5d173235333932381d3a303c3431733e3230">[email&#160;protected]</span></a>
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
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h3 style="text-align: center">Edit Level Settings</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('Admin.Update.Level', ['id' => $level->id]) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Level 1</label>
                                            <input type="text" name="level1" value="{{ $level->level1 }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Level 2</label>
                                            <input type="text" name="level2" value="{{ $level->level2 }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Level 3</label>
                                            <input type="text" name="level3" value="{{ $level->level3 }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Level 4</label>
                                            <input type="text" name="level4" value="{{ $level->level4 }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Level 5</label>
                                            <input type="text" name="level5" value="{{ $level->level5 }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Level 6</label>
                                            <input type="text" name="level6" value="{{ $level->level6 }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Level 7</label>
                                            <input type="text" name="level7" value="{{ $level->level7 }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Level 8</label>
                                            <input type="text" name="level8" value="{{ $level->level8 }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Level 9</label>
                                            <input type="text" name="level9" value="{{ $level->level9 }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Level 10</label>
                                            <input type="text" name="level10" value="{{ $level->level10 }}"
                                                class="form-control">
                                        </div>
                                        <div class="my-3">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="copyright">
                        <p>Copyright © Designed &amp; Developed by <a href="#">
                                {{ env('APP_NAME') }}</a> 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
@endsection

@section('datatable')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endsection
