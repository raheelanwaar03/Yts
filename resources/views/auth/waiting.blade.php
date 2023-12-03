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
    margin-bottom: -50px;
    }
  
    h6 {
      margin-bottom: 20px;
      color: #333;
    }
    .welcome-message {
      margin-bottom: 20px;
      color: #333;
    }
 </style>
@endsection

@section('content')
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/images/logo/new_logo.png') }}" alt="Logo">
        </div>
    
          
            <h6 class="mb-3 mt-3">Thanks for joining us!</h6>
          
            <p class="welcome-message">
              Please wait 2 to 12 hours. Your account will be automatically approved if the given details are correct.
            </p>
          </div>
          
      
      
@endsection
