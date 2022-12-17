@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            @if(session()->has('success'))        
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif    

            @if(session()->has('loginError'))        
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif    


            <form action="/login" method="post">
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}          
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                <label for="floatingInput">Email address</label>
                @error('email') 
                <div class="invalid-feedback">
                  {{ $message }}
                </div> 
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror rounded-bottom" id="password" placeholder="Password" required value="">
                <label for="floatingPassword">Password</label>
                @error('password') 
                <div class="invalid-feedback">
                  {{ $message }}
                </div> 
                @enderror
              </div>
          
              {{-- <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div> --}}
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
              {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
            </form>
            <small class="d-block text-center mt-3">Not registered? <a href="/register">Regitrasi Now!</a></small>
          </main>
    </div>
</div>

@endsection