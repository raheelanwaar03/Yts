@extends('auth.layout.app')

@section('css')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(135deg, red 0%, tomato 100%);
        }

        .container {
            max-width: 460px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            /* margin-left:10px; */
            margin-top: 10px;
        }

        .logo {
            text-align: center;
        }

        .logo img {
            width: 200px;
            /* Adjust the size as needed */
            height: 80px;
            margin-top: -35px;
            margin-bottom: -50px;
        }

        form {
            margin-top: 10px;
        }

        label {
            display: block;
            margin-bottom: 3px;
            font-weight: bold;
        }

        input {
            width: 100%;
            /* padding: 5px; */
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            /* padding: 5px; */
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .payment-info {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/images/logo/new_logo.png') }}" alt="Logo">
        </div>

        <div class="payment-info">
            <h6 class="mt-2 mb-2">Welcome to YTSEARNING</h6>
            <p>Kindly send the package amount you selected to the following EasyPaisa number
                <b>({{ $easyPaisa->easy_num }})</b>
                with account title
                <b>({{ $easyPaisa->easy_name }})</b> and provide the
                correct Transaction ID
            </p>
        </div>
        <form action="{{ route('Store/Fees/Details') }}" method="post">
            @csrf
            <label for="trx-id">Transaction ID:</label>
            <input type="text" id="trx-id" name="tid" required>

            <label for="sender-no">Sender Number:</label>
            <input type="tel" id="sender-no" name="sender_num" required>

            <label for="sender-name">Sender Name:</label>
            <input type="text" id="sender-name" name="bank_username" required>

            <button type="submit">Submit</button>
        </form>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
@endsection
