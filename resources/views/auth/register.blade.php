@extends('layouts.app')
<style>
  .mb-3{
    border-radius:30px;
    display: block;
    margin-left: auto;
    margin-right: auto;
  

  }
  </style>
<div class="login-form">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="text-center">
            <a href="index.html" aria-label="Space">
                <img class="mb-3" src="images/logo.png" alt="Logo" width="60" height="60">
            </a>
          </div>
        <div class="text-center mb-4">
            <h1 class="h3 mb-0">Please sign up</h1>
            <p>Fill out the form to get started.</p>
        </div>
        <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                
              </div>
              <input id="name" type="text" class="form-control form__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"placeholder="Name" autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                
              </div>
              <input type="email" class="form-control form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Email" autocomplete="email">
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
	<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    
                </div>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                   
                </div>
                <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password" autocomplete="new-password">
            </div>
        </div>
        <br>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary login-btn btn-block">Sign up</button>
        </div>
        <div class="text-center mb-3">
            <p class="text-muted">Have an account? <a href="register.html">Sign in</a></p>
        </div>
	
        
    </form>
</div>