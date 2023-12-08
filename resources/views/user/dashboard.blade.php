@extends('user.layout.app')
@section('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            font-family: 'poppins', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            margin-bottom: 90px !important;
            box-sizing: border-box;
            overflow-y: auto !important;
            /* min-height: 100vh !important; */
        }

        header {
            /* background-color: #f42b03; */
            background: #f95959;
            color: #fff;
            text-align: center;
            width: 100%;
            padding: 10px;
            position: relative;
            height: 70px;
            /* border-radius:0px 0px 25px 25px; */
            font-size: 30px;
            font-weight: 600;
        }

        header img.logo {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        header .user-info {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }

        header .user-info img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }

        header .user-info span {
            margin-left: 10px;
        }

        main {
            padding: 10px;
            width: 100%;
            text-align: center;
            /* Center the cards */

        }

        footer {
            /* background-color: #f42b03; */
            background: #f95959;
            color: #fff;
            text-align: center;
            padding: 0px;
            position: fixed;
            bottom: 0 !important;
            width: 100%;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: gray;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            /* border-radius: 5px; */
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: black;
            text-decoration: none;
        }

        footer nav a {
            text-align: center;
            text-decoration: none;
            display: inline-block;
            /* margin: 2px;  */
        }

        footer nav a i {
            font-size: 18px !important;
        }

        footer nav a div {
            font-size: 12px !important;
        }

        @media (max-width: 768px) {
            header .user-info {
                display: inline-block;
                position: static;
                transform: translateY(0);
                text-align: center;
                margin-top: 10px;
                /* Add some space between the logo and user info */
            }

            header .user-info img {
                display: inline-block;
                margin-right: 5px;
                /* Add space between user photo and username */
            }

            header .user-info span {
                display: inline-block;
            }

            nav {
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }

            nav a {
                width: 23%;
                /* Adjust width to fit four links in one row with some spacing */
                margin: 5px 0;
                display: inline-block;
            }

            footer nav {
                flex-wrap: wrap;
                justify-content: space-between;
            }

            footer nav a {
                width: 48%;
                /* Adjust width to fit two links in one row with some spacing */
                margin: 5px 0;
            }

            /* Style for the first four links to force them in one line */
            footer nav a:nth-child(-n + 5) {
                width: 20%;
                /* Adjust width to fit four links in one row with some spacing */

            }

            /* Style for the last four links to force them in one line */
            footer nav a:nth-last-child(-n + 5) {
                width: 20%;
                /* Adjust width to fit four links in one row with some spacing */
            }

            .aa {
                display: none;
            }
        }

        @media (min-width: 769px) {
            .toggle-links {
                display: none;
            }
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            /* Adjust spacing between cards */
            flex-wrap: wrap;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 30%;
            text-align: center;
        }

        .card p {
            font-size: 16px;
            color: #555;
            /* Text color for the description */
        }

        .card h2 {
            font-size: 24px;
            color: #333;
            /* Text color for the value */
        }

        .card h6 {
            font-size: 15px !important;
        }

        .card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .card li {
            font-size: 16px;
            color: #555;
            /* Text color for the list items */
        }

        main {
            padding: 10px;
            width: 100%;
            text-align: center;
            /* Center the cards */
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 60px;
            /* Adjust margin-bottom to leave space for the footer */
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(30% - 20px);
            /* Adjust the width and margin to leave space between cards */
            text-align: center;
            color: orange;
            font-size: 48px;
        }

        .top-users {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid orange;
            width: calc(100% - 20px);
            /* Adjust the width and margin to leave space between cards */
            text-align: center;
            color: orange;
            font-size: 36px;
        }


        .card p {
            font-size: 16px;
            color: #555;
            /* Text color for the description */
        }

        .card h2 {
            font-size: 24px;
            color: #333;
            /* Text color for the value */
        }

        .card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .card li {
            font-size: 16px;
            color: #555;
            /* Text color for the list items */
        }

        @media (max-width: 768px) {
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                margin-bottom: 160px !important;
                box-sizing: border-box;
            }

            .card {
                width: calc(100% - 20px);
                /* Make cards take full width on mobile */
                border: 1px solid lightgray;
                box-shadow: 2px 5px 10px 2px rgba(0, 0, 0, 0.2);
            }

            .card i {
                color: orange;
                font-size: 48px;
            }

            .work-container {
                max-width: 600px;
                margin: auto;
            }
        }

        a {
            color: white !important;
        }

        .marquee-container {
            width: 100%;
            overflow: hidden;
            background-color: #ffe9e3;
            /* Set a background color for the marquee container */
            color: #151515 !important;
            /* Set text color */
            padding: 10px;
            /* Add some padding for better visibility */
        }

        .marquee-text {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 20s linear infinite;
            /* Adjust the duration as needed */
            color: grey;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .withdraw-container {
            max-width: 600px;
            margin: auto;
        }

        .withdraw-history {
            margin-top: 20px;
        }

        .mb-3 label {
            text-align: left;
            display: block;
            margin-bottom: 5px;
        }

        form label {
            text-align: left;
            display: block;
            margin-bottom: 5px;
        }

        .profile-container {
            max-width: 600px;
            margin: auto;
        }

        .settings-container {
            max-width: 600px;
            margin: auto;
        }

        .work-container {
            max-width: 1200px;
            margin: auto;
        }

        .work-list {
            list-style-type: none;
            padding: 0;
        }

        .work-item {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
        }

        .work-item h4 {
            margin-bottom: 10px;
        }

        .work-item p {
            margin-bottom: 15px;
        }

        .work-item a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .hidden {
            display: none;
        }

        td a {
            color: red !important;
        }
    </style>
@endsection

@section('content')
    <header>
        <nav>
            <span><i class="fa-regular fa-circle-play"></i>YTSEARNING</span>
            <div class="user-info">
                <img src="{{ asset('assets/images/dashboard/author.png') }}" alt="User Photo">
            </div>
        </nav>
    </header>

    <main>
        {{-- <div  class="mb-1" style="text-align: center !important;width:100%">
        <img class="logo" src="http://127.0.0.1:8000/assets/images/logo/new_logo.png" alt="Logo" style="width: 200px;height:80px;margin-top:15px;">
    </div> --}}

        {{-- home --}}
        <div id="dashboardInfo">
            <div class="marquee-container">
                <div class="marquee-text">
                    YTSEarning is a very good platform to invest your time and money. it is a real earning platform. Refere
                    this to your friends and family.
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="row">
                        <div class="col-6"><i class="fas fa-dollar-sign"></i></div>
                        <div class="col-6">
                            <h6> Current Balance</h6>
                            <h2>PKR <b>{{ Auth::user()->balance }}</b></h2>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-6"><i class="fas fa-money-bill"></i></div>
                        <div class="col-6">
                            <h6>Total Withdraw</h6>
                            <h2>PKR {{ $withdraw_total }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-users"><i class="fas fa-users"></i><br>
                <h3><a href="#" onclick="topUsers();" class="text-dark">Top Users</a></h3>
            </div>
        </div>
        </div>

        {{-- Top Users --}}

        <div class="container work-container hidden mt-2" id="top_users">
            <h4 style="margin-top:-30px;" class="text-center">Highly Earning Users</h4>
            <table class="table table-bordered  table-sm text-center">
                <thead>

                    <tr class="text-dark" style="background-color: rgb(255, 132, 110)">
                        <th scope="col">Name</th>
                        <th scope="col">Balance</th>
                        <th scope="col">Level</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h3>Roqia shafiq</h3>
                        </td>
                        <td>
                            <h4>4680</h4>
                        </td>
                        <td>
                            <h4>Level 10</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Muhammad Adil</h3>
                        </td>
                        <td>
                            <h4>2630</h4>
                        </td>
                        <td>
                            <h4>Level 7</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Ahmad Khan</h3>
                        </td>
                        <td>
                            <h4>1005</h4>
                        </td>
                        <td>
                            <h4>Level 6</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Atteq Ishfaq</h3>
                        </td>
                        <td>
                            <h4>3200</h4>
                        </td>
                        <td>
                            <h4>Level 9</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Noor bibi</h3>
                        </td>
                        <td>
                            <h4>765</h4>
                        </td>
                        <td>
                            <h4>Level 4</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Ansar Ali</h3>
                        </td>
                        <td>
                            <h4>2215</h4>
                        </td>
                        <td>
                            <h4>Level 8</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Muhammad Bilal</h3>
                        </td>
                        <td>
                            <h4>1530</h4>
                        </td>
                        <td>
                            <h4>Level 7</h4>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        {{-- my team --}}
        <div class="container mt-2 hidden" style="overflow-y: auto !important" id="team">
            <div class="referral-container mt-2 mb-4">
                <div class="row">
                    <div class="col-6"> <input type="text"
                            value="{{ route('register', ['referal' => Auth::user()->email]) }}" id="referralLink" readonly>
                    </div>
                    <div class="col-6"> <button onclick="copyReferralLink()" class="btn btn-primary">Share Link</button>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h2 style="margin-top:-10px;">Total Team: {{ totalReferFriends() }}</h2>
            </div>
            <table class="table table-bordered  table-sm">
                <thead>
                    <tr class="text-dark text-center" style="background-color: rgb(255, 132, 110)">
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Level</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($team as $t)
                        <tr>
                            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                            <td>{{ $t->email }}</td>
                            <td class="text-center">{{ $t->level }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- withdraw --}}
        <div class="container withdraw-container  hidden mt-2" id="withdraw">
            <h2 style="margin-top:-30px;" class="text-center">Withdraw</h2>
            <!-- Current Balance -->
            <div class="mb-3">
                <label for="currentBalance">Current Balance:</label>
                <input type="text" class="form-control" id="currentBalance" value="{{ Auth::user()->balance }}" readonly>
            </div>

            <!-- Withdraw Form -->
            <form action="{{ asset('User/Widthraw/Balance/Request') }}" method="post">@csrf
                <div class="form-group">
                    <label for="selectBank">Select Bank:</label>
                    <select class="form-control" id="selectBank" name="widthraw_bank">
                        <option value="Easypaisa">EasyPaisa</option>
                        <option value="JazzCash">JazzCash</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="accountName">Account Name:</label>
                    <input type="text" class="form-control" id="accountName" placeholder="Enter Account Name"
                        name="widthraw_name">
                </div>

                <div class="form-group">
                    <label for="accountNumber">Account Number:</label>
                    <input type="text" class="form-control" id="accountNumber" placeholder="Enter Account Number"
                        name="widthraw_num">
                </div>

                <div class="form-group">
                    <label for="accountNumber">Amount:</label>
                    <input type="text" class="form-control" id="accountNumber" placeholder="Enter Amount"
                        name="widthraw_amount">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- Withdrawal History -->
            <div class="withdraw-history mb-4" style="margin-bottom: -50px">
                <h3 class="text-center">Withdrawal History</h3>
                @foreach ($widthrawH_history as $wh)
                    <ul class="list-group">
                        <li class="list-group-item">Date: {{ date('d-m-Y', strtotime($wh->updated_at)) }} | Amount: Rs.
                            {{ $wh->widthraw_amount }} | Status: {{ $wh->status }}</li>
                        <!-- Add more history items as needed -->
                    </ul>
                @endforeach
            </div>
        </div>

        {{-- profile --}}
        <div class="container profile-container hidden mt-2" id="profile">
            <h2 style="margin-top:-30px;">Profile</h2>

            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}"
                        readonly>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}"
                        readonly>
                </div>

                <div class="form-group">
                    <label for="plan">Plan:</label>
                    <input type="text" class="form-control" id="plan" value="{{ Auth::user()->plan }} Stars"
                        readonly>
                </div>

                <div class="form-group">
                    <label for="level">Level:</label>
                    <input type="text" class="form-control" id="level" value="{{ Auth::user()->level }}"
                        readonly>
                </div>

                <div class="form-group">
                    <label for="contactNumber">Contact Number:</label>
                    <input type="tel" class="form-control" id="contactNumber" value="{{ Auth::user()->phone }}"
                        readonly>
                </div>
            </form>
        </div>
        {{-- settings --}}
        <div class="container settings-container hidden mt-2" id="settings">
            <h2 style="margin-top:-30px;">Settings</h2>

            <form action="{{ asset('password') }}" method="post">@csrf
                <div class="form-group">
                    <label for="currentPassword">Current Password:</label>
                    <input type="password" class="form-control" id="currentPassword"
                        placeholder="Enter current password" name="current_password">
                </div>

                <div class="form-group">
                    <label for="newPassword">New Password:</label>
                    <input type="password" class="form-control" id="newPassword" placeholder="Enter new password"
                        name="password">
                </div>

                <div class="form-group">
                    <label for="retypeNewPassword">Retype New Password:</label>
                    <input type="password" class="form-control" id="retypeNewPassword" placeholder="Retype new password"
                        name="password_confirmation">
                </div>

                <input type="submit" class="btn btn-primary" name="submit">
            </form>
        </div>
        {{-- Todays work --}}
        <div class="container work-container hidden mt-2" id="work">
            <h4 style="margin-top:-30px;" class="text-center">Today's Task</h4>
            <table class="table table-bordered  table-sm text-center">
                <thead>

                    <tr class="text-dark" style="background-color: rgb(255, 132, 110)">
                        <th scope="col">#</th>
                        <th scope="col">Link</th>
                        <th scope="col">Discription</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daily_task as $dt)
                        <tr>
                            <th scope="row">{{ $dt->id }}</th>
                            <td><a href="{{ route('User.Product.Reward', ['id' => $dt->id]) }}"
                                    onclick="window.open('{{ $dt->link }}', '_blank')">{{ $dt->link }}</a></td>
                            <td>{{ $dt->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Daily reward --}}

        <div class="container work-container hidden mt-2" id="reward">
            <div class="d-flex justify-content-around align-items-center">
                <h4 style="margin-top:-30px;" class="text-center">Daily Reward</h4>
                <h5 style="margin-top:-30px;color:black;">Earning({{ today_earning() }})
                    <a href="#" style="color:black;text-decoration:none;" class="btn btn-primary"
                        id="earning_widthraw">Widthraw</a>
                </h5>
            </div>
            <table class="table table-bordered  table-sm text-center">
                <thead>

                    <tr class="text-dark" style="background-color: rgb(255, 132, 110)">
                        <th scope="col">#</th>
                        <th scope="col">Link</th>
                        <th scope="col">Discription</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daily_reward as $dt)
                        <tr>
                            <th scope="row">{{ $dt->id }}</th>
                            <td><a href="{{ route('User.Product.Reward', ['id' => $dt->id]) }}"
                                    onclick="window.open('{{ $dt->link }}', '_blank')">{{ $dt->link }}</a></td>
                            <td>{{ $dt->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- contact us --}}
        <div class="text-center hidden" id="contact">
            contact us
            <div class="container">
                <form action="mailto:{{ $email_setting->email }}?subject=Mail from Site!" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" placeholder="Enter Your Subject">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <label>Massage</label>
                        <textarea name="massage" cols="10" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
        {{-- Total earning Widthraw --}}
        <div class="container withdraw-container  hidden mt-2" id="total_earning">
            <h2 style="margin-top:-30px;" class="text-center">Total Withdraw</h2>

            <!-- Current Balance -->
            <div class="mb-3">
                <label for="currentBalance">Total Earning:</label>
                <input type="text" class="form-control" id="currentBalance" value="{{ today_earning() }}" readonly>
            </div>

            <!-- Withdraw Form -->
            <form action="{{ route('User.Widthraw.Total.Earning') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="selectBank">Select Bank:</label>
                    <select class="form-control" id="selectBank" name="widthraw_bank">
                        <option value="Easypaisa">EasyPaisa</option>
                        <option value="JazzCash">JazzCash</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="accountName">Account Name:</label>
                    <input type="text" class="form-control" id="accountName" placeholder="Enter Account Name"
                        name="widthraw_name">
                </div>

                <div class="form-group">
                    <label for="accountNumber">Account Number:</label>
                    <input type="text" class="form-control" id="accountNumber" placeholder="Enter Account Number"
                        name="widthraw_num">
                </div>

                <div class="form-group">
                    <label for="accountNumber">Amount:</label>
                    <input type="text" class="form-control" id="accountNumber" placeholder="Enter Amount"
                        name="widthraw_amount">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </main>

    <footer>
        <nav>
            <a href="#" onclick="showDashboard();"><i class="fas fa-home"></i>
                <div>Home</div>
            </a>
            <a href="#" class="aa" onclick="showTeam();"><i class="fas fa-users"></i>
                <div>My Team</div>
            </a>
            <a href="#" onclick="showWithdraw();"><i class="fas fa-money-bill"></i>
                <div>Withdraw</div>
            </a>
            <a href="#" onclick="showWork();"><i class="fas fa-tasks "></i>
                <div>Today's Work</div>
            </a>
            <a href="#" onclick="showReward();"><i class="fa fa-check-circle"></i>
                <div>Daily Reward</div>
            </a>
            <a href="#" class="toggle-links"><i class="fas fa-bars"></i>
                <div id="moreLessLabel">More</div>
            </a>
            <a href="#" class="aa" onclick="showProfile();"><i class="fas fa-user"></i>
                <div>Profile</div>
            </a>
            <a href="#" class="aa" onclick="showSettings();"><i class="fas fa-cogs"></i>
                <div>Settings</div>
            </a>
            <a href="#" class="aa" onclick="showContact();"><i class="fas fa-envelope"></i>
                <div>Contact Us</div>
            </a>
        </nav>
    </footer>
@endsection


@section('js')
    <script>
        document.getElementById('earning_widthraw').addEventListener('click', function() {
            var userLevel = 5; // Replace this with the actual user's level

            if (userLevel < 10) {
                alert("You must be at least level 10 to withdraw your amount.");
            }
        });

        function showDashboard() {
            document.getElementById('dashboardInfo').style.display = 'block';
            document.getElementById('team').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            document.getElementById('profile').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            document.getElementById('contact').style.display = 'none';
            document.getElementById('total_earning').style.display = 'none';
            document.getElementById('reward').style.display = 'none';
            document.getElementById('top_users').style.display = 'none';
        }

        function showTeam() {
            var teamElement = document.getElementById('team');
            teamElement.classList.remove('hidden');
            teamElement.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            document.getElementById('profile').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            document.getElementById('contact').style.display = 'none';
            document.getElementById('total_earning').style.display = 'none';
            document.getElementById('reward').style.display = 'none';
            document.getElementById('top_users').style.display = 'none';
        }

        function showWithdraw() {
            var withdrawal = document.getElementById('withdraw');
            withdrawal.classList.remove('hidden');
            withdrawal.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('team').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            document.getElementById('widthraw').style.display = 'block';
            document.getElementById('profile').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            document.getElementById('contact').style.display = 'none';
            document.getElementById('total_earning').style.display = 'none';
            document.getElementById('reward').style.display = 'none';
            document.getElementById('top_users').style.display = 'none';
        }

        function showWork() {
            var mywork = document.getElementById('work');
            mywork.classList.remove('hidden');
            mywork.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('team').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            document.getElementById('profile').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            document.getElementById('contact').style.display = 'none';
            document.getElementById('total_earning').style.display = 'none';
            document.getElementById('reward').style.display = 'none';
            document.getElementById('top_users').style.display = 'none';
        }

        function showProfile() {
            var myprofile = document.getElementById('profile');
            myprofile.classList.remove('hidden');
            myprofile.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('team').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            document.getElementById('contact').style.display = 'none';
            document.getElementById('total_earning').style.display = 'none';
            document.getElementById('reward').style.display = 'none';
            document.getElementById('top_users').style.display = 'none';
        }

        function showSettings() {
            var mysettings = document.getElementById('settings');
            mysettings.classList.remove('hidden');
            mysettings.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('team').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            document.getElementById('profile').style.display = 'none';
            document.getElementById('contact').style.display = 'none';
            document.getElementById('total_earning').style.display = 'none';
            document.getElementById('reward').style.display = 'none';
            document.getElementById('settings').style.display = 'block';
            document.getElementById('top_users').style.display = 'none';
        }

        function showContact() {
            var mycontact = document.getElementById('contact');
            mycontact.classList.remove('hidden');
            mycontact.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('team').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            document.getElementById('profile').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            document.getElementById('contact').style.display = 'block';
            document.getElementById('total_earning').style.display = 'none';
            document.getElementById('top_users').style.display = 'none';
        }

        function total_earning() {
            var mycontact = document.getElementById('total_earning');
            return alert('You cannot widthraw untill your level becomes 10')
        }

        function showReward() {
            var mycontact = document.getElementById('reward');
            mycontact.classList.remove('hidden');
            mycontact.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('team').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            document.getElementById('profile').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            document.getElementById('contact').style.display = 'none';
            document.getElementById('total_earning').style.display = 'none';
            document.getElementById('reward').style.display = 'block';
            document.getElementById('top_users').style.display = 'none';
        }

        function topUsers() {
            var mycontact = document.getElementById('top_users');
            mycontact.classList.remove('hidden');
            mycontact.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('team').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            document.getElementById('profile').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            document.getElementById('contact').style.display = 'none';
            document.getElementById('total_earning').style.display = 'none';
            document.getElementById('reward').style.display = 'none';
            document.getElementById('top_users').style.display = 'block';
        }


        document.addEventListener('DOMContentLoaded', function() {
            var toggleLinks = document.querySelectorAll('.toggle-links');
            var moreLessLabel = document.getElementById('moreLessLabel');

            toggleLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    var aaElements = document.querySelectorAll('.aa');

                    aaElements.forEach(function(element) {
                        if (element.style.display === 'none' || element.style.display ==='') {
                            element.style.display = 'block';
                        } else {
                            element.style.display = 'none';
                        }
                    });

                    // Toggle between "More" and "Less" labels
                    moreLessLabel.textContent = (moreLessLabel.textContent === 'More') ? 'Less' :
                        'More';
                });
            });
        });

        function copyReferralLink() {
            var copyText = document.getElementById("referralLink");
            copyText.select();
            document.execCommand("copy");
            alert("Referral link copied to clipboard!");
        }
    </script>
@endsection
