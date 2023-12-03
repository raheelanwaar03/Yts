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
      min-height: 460px;
      margin: auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 10px;
      /* margin-left:10px; */
      margin-top:10px;
    }

    .logo {
      text-align: center;
    }

    .logo img {
      width: 200px; /* Adjust the size as needed */
      height: 80px;
      margin-top: -35px;
    margin-bottom: -50px;
    }

    form {
      margin-top: 10px;
    }

    label {
      display: block;
      margin-bottom: px;
      font-weight: bold;
    }

    input {
      width: 100%;
      /* padding: 5px; */
      margin-bottom: 15px;
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

    .signup-link {
      text-align: center;
      margin-top: 15px;
    }

    .signup-link a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }
    .forgot-password{
      margin-bottom:20px;
    }
 </style>
@endsection

@section('content')
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/images/logo/new_logo.png') }}" alt="Logo">
        </div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>

          <div class="forgot-password">
            <a href="{{ route('password.request') }}">Forgot Password?</a>
          </div>

          <button type="submit">Sign In</button>
        </form>

        <div class="signup-link">
          <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
        </div>
      </div>



@endsection
