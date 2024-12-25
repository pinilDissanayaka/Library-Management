@extends('layouts.auth')

@section('title', "Reset Password")


@section('content')
<div class="container d-flex align-items-center">
    <div class="form-holder has-shadow">
      <div class="row">
        <!-- Logo & Information Panel-->
        <div class="col-lg-6">
          <div class="info d-flex align-items-center">
            <div class="content">
              <div class="logo">
                <h1>Dashboard</h1>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <!-- Form Panel    -->
        <div class="col-lg-6 bg-white">
          <div class="form d-flex align-items-center">
            <div class="content">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <input id="email" type="email" name="email" data-msg="Please enter your email" class="input-material" :value="old('email')" required autofocus autocomplete="username">
                  <label for="email" class="label-material">Email</label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <button type="submit" class="btn btn-primary">Email Password Reset Link</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
