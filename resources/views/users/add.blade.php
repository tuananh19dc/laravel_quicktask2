@extends('layouts.users')
@section('content')
    <main class="main-content  mt-3">
        @if (session('mess'))
            <div class=" alert-success w-20 d-flex ">{{ session('mess') }}</div>
        @endif
        <div class="page-header align-items-start min-vh-100  border-radius-8"
            style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{ __('ADD USERS') }}
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('users.store') }}"
                                    class="text-start">
                                    @csrf
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">{{ __('First Name') }}</label>
                                        <input type="text" value="{{ old('first_name') }}" required autofocus
                                            name="first_name" class="form-control">
                                    </div>
                                    @error('first_name')
                                        <small class="text-danger mt-1 d-block ">{{ $message }}</small>
                                    @enderror
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">{{ __('Last Name') }}</label>
                                        <input type="text" value="{{ old('last_name') }}" required autofocus
                                            name="last_name" class="form-control">
                                    </div>
                                    @error('last_name')
                                        <small class="text-danger mt-1 ">{{ $message }}</small>
                                    @enderror

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">{{ __('Username') }}</label>
                                        <input type="text" value="{{ old('username') }}" required autofocus
                                            name="username" class="form-control">
                                    </div>
                                    @error('username')
                                        <small class="text-danger mt-1 ">{{ $message }}</small>
                                    @enderror

                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">{{ __('Email') }}</label>
                                        <input type="email" value="{{ old('email') }}" required autofocus name="email"
                                            class="form-control">
                                    </div>
                                    @error('email')
                                        <small class="text-danger mt-1 ">{{ $message }}</small>
                                    @enderror
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="password" value="{{ old('password1') }}" required autofocus
                                            name="password1" class="form-control">
                                        <label class="form-label">{{ __('Password') }}</label>
                                    </div>
                                    @error('password1')
                                        <small class="text-danger mt-1 ">{{ $message }}</small>
                                    @enderror
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">{{ __('Confirm Password') }}</label>
                                        <input type="password" value="{{ old('password2') }}" required autofocus
                                            name="password2" class="form-control">
                                    </div>
                                    @error('password2')
                                        <small class="text-danger mt-1 ">{{ $message }}</small>
                                    @enderror

                                    <div class="text-center">
                                        <button type="submit" value="{{ old('btn_create') }}" required autofocus
                                            name="btn_create"
                                            class="btn bg-gradient-primary w-100 my-4 mb-2">{{ __('create new') }}</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
