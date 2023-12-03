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
      margin-top:10px;
    }

    .logo {
      text-align: center;
    }

    .logo img {
      width: 200px; /* Adjust the size as needed */
      height: 80px;
      margin-top: -35px;
    margin-bottom: -30px;
    }
    h3 {
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }
    form {
      margin-top: 10px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
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

    .back-to-login {
      text-align: center;
      margin-top: 15px;
    }

    .back-to-login a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }
 </style>
@endsection

@section('content')

<div class="container">
    <div class="logo">
        <img src="{{ asset('assets/images/logo/new_logo.png') }}" alt="Logo">
    </div>
  
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        @method('put')
        <input type="hidden" name="token"
        value="{{ $request->route('token') }}">
      <h4 class="text-center">Reset Password</h4>
  
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
  
      <label for="new-password">New Password:</label>
      <input type="password" id="new-password" name="new-password" required>
  
      <label for="confirm-new-password">Confirm New Password:</label>
      <input type="password" id="confirm-new-password" name="confirm-new-password" required>
  
      <button type="submit">Reset Password</button>
    </form>
  
    <div class="back-to-login">
      <p>Remember your password? <a href="{{ route('login') }}">Sign In</a></p>
    </div>
  </div>
      
      
      
@endsection
