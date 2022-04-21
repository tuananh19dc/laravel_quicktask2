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
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{ __('ADD TASKS') }}
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('task.store') }}" class="text-start">
                                    @csrf
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">{{ __('Name') }}</label>
                                        <input type="text" value="{{ old('name') }}" required autofocus name="name"
                                            class="form-control">
                                    </div>
                                    @if (session('error_name'))
                                        <small class="text-danger mt-1 d-block ">{{ session('error_name') }}</small>
                                    @endif
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
