@extends('layouts.userLayout')
@section('title', 'Register')

@section('content')

{{-- @foreach ($allusers as $user)
    <h1>{{$user->name}}</h1>
    <h3>{{$user->email}}</h3>
@endforeach --}}

<section class="bg-primary register" >
    <div class="container py-5  ">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">

                <div class="col-md-12 col-lg-12 d-none d-md-block head ">
                   
                  </div>
                  

                <div class="col-md-12 col-lg-12 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form method="POST" action="{{ route('register') }}">
                        @csrf
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class='bx bxs-cube-alt text-primary fs-1' ></i>
                          <span class="h1 fw-bold mb-0">Logo</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create new account</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-outline mb-4">
                                  {{-- display error --}}
                                  @error('name')
                                  <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                                    <input type="text" id="name" name="name" class="@error('name')
                                    is-invalid
                                @enderror form-control form-control-lg"  value="{{old('name')}}"/>
                                    <label class="form-label" for="name">Name</label>
                                  </div>
                            </div>  
                            <div class="col-lg-6">
                                <div class="form-outline mb-4">
                                  @error('email')
                                  <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                    <input type="email" id="email" name="email" class="
                                    @error('email')
                                        is-invalid
                                    @enderror form-control form-control-lg"  value="{{old('email')}}" />
                                    <label class="form-label" for="email">Email address</label>
                                  </div>
                                 
                            </div>
                             <div class="col-lg-6">
                                <div class="form-outline mb-4">
                                  {{-- display error --}}
                                  @error('password')
                                  <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                    <input type="password" name="password" id="password" class="@error('password')
                                    is-invalid
                                @enderror form-control form-control-lg"  value="{{old('password')}}" />
                                    <label class="form-label" for="password">Password</label>
                                  </div> 
                            </div> 
                             <div class="col-lg-6">
                                <div class="form-outline mb-4">
                                  @error('password_confirmation')
                                  <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                    <input type="password" name="password_confirmation" id="password" class="@error('password_confirmation')
                                    is-invalid
                                @enderror form-control form-control-lg" />
                                    <label class="form-label" for="password">Confirm Password</label>
                                  </div>
                            </div>

                            <div class="col-12">
                                <div class="form-outline mb-4">
                                    <input type="file" id="picture" name="picture" class="form-control form-control-lg" accept="image/*" />
                                    <label class="form-label" for="picture">Profile Picture</label>
                                  </div>
                            </div>
                        </div>
                        
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                        </div>
      
                        <a class="small text-muted" href="#!">Forgot password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="{{ route('view.login') }}"
                            style="color: #393f81;">Login here</a></p>
                      </form>
      
                    </div>
                  </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection