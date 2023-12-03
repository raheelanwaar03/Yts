@extends('auth.layout.app')
{{--
@section('content')
    <div class="account-section bg_img" data-background="{{ asset('assets/background.jpg') }}">
        <div class="container">
            <div class="account-title text-center">
                <a href="{{ route('LandingPage') }}" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span
                            class="d-none d-sm-inline-block">To {{ env('APP_NAME') }}</span></span></a>
                <a href="{{ route('LandingPage') }}" class="logo">
                    <img src="{{ asset('assets/images/logo/footer-logo.png') }}" height="150px" width="150px" alt="logo">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Welcome To {{ env('APP_NAME') }}</h4>
                    <form action="{{ route('register') }}" method="POST" class="account-form">
                        @csrf
                        <div class="form-group">
                            <label for="sign-up">Your Name </label>
                            <input type="text" placeholder="Enter Your name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="sign-up">Your Username </label>
                            <input type="text" placeholder="Enter Your Username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="sign-up">Your Email </label>
                            <input type="text" placeholder="Enter Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="sign-up">Your Phone </label>
                            <input type="text" placeholder="Enter Your Phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="sign-up">Your Country </label>
                            <input type="text" placeholder="Enter Your Country" name="country">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" placeholder="Enter Your Password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="pass">Confirm Password</label>
                            <input type="password" placeholder="Re-type Password" name="password_confirmation">
                        </div>
                         <div class="form-group">
                            <label for="pass">Referal</label>
                            <input type="text" name="referal" value="{{ $referal }}" readonly>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="mt-2 mb-2">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="or">
                    <span>OR</span>
                </div>
                <div class="account-header pb-0">
                    <span class="d-block mt-15">Already have an account? <a href="{{ route('login') }}">Sign In
                            Here</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
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
      /* margin-top: 50px; */
      margin-bottom: 10px;
      /* margin-left:10px; */
      margin-top:10px;
      /* margin-right:10px; */
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

    .signin-link {
      text-align: center;
      margin-top: 15px;
    }

    .signin-link a {
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

    <form action="{{ route('register') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required>

    <label for="contact">Mobile No.</label>
    <input type="tel" id="contact" name="phone" value="{{ old('phone') }}" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="confirm-password">Confirm Password:</label>
    <input type="password" id="confirm-password" name="password_confirmation" required>

    <label for="star-rating">Plan:</label>
    <select id="star-rating" name="plan" required>
        <option value="1" {{ old('plan') == '1' ? 'selected' : '' }}>One star - 450</option>
        <option value="2" {{ old('plan') == '2' ? 'selected' : '' }}>Two stars - 1050</option>
        <option value="3" {{ old('plan') == '3' ? 'selected' : '' }}>Three stars - 1650</option>
    </select>

    <label for="email">Referral</label>
    <input type="email" id="email" name="referal" value="{{ old('referal', $referal) }}" readonly required>

    <button type="submit">Register</button>
</form>


    <div class="signin-link">
      <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
    </div>
  </div>

@endsection
