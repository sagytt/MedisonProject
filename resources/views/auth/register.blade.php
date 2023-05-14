<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign up Page</title>
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      background-color: #fff;
      border: 1px solid #ced4da;
      border-radius: 10px;
      padding: 25px;
      margin-top: 50px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .form-header {
      background-color: #007bff;
      color: #fff;
      border-radius: 10px 10px 0 0;
      padding: 20px;
    }
  </style>
</head>
<body>

@extends('layouts.app')
@section('content')

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="form-container">
          <div class="form-header">
            <h4>Sign up</h4>
          </div>
          <div class="card-body">
                        @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif
            <form action="{{ route('register') }}" method="post">
                @csrf
               @method('post')
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" >
                @if ($errors->has('name'))
                   <p class="text-danger">{{ $errors->first('name') }}</p>
                @endif
              
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" >
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" >
                               @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif

              <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
                       <br>
                            <div class="row">
                                <div class="col-8 text-left">
                                    <a href="#" class="btn btn-link">Forgot Password</a>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="submit" class="btn btn-primary" value=" Register " />
                                </div>
                            </div>
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
 
</body>
</html>