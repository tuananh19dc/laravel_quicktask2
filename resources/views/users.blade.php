@extends('layouts.users')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Users List') }}</h6>
                        </div>
                    </div>
                    <div class="mt-3"><a href="" class="btn btn-info ml-3">{{ __('Add new') }}</a></div>
                    <div class="card-body px-0 pb-2 pt-0">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{ __('First Name') }}
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{ __('Last Name') }}
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{ __('Email') }}
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{ __('Tasks') }}
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Danh sách --}}
                                    <tr>

                                        <td>
                                            <span class="text-sm font-weight-bold mb-0  p12-24">1</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Thái
                                                Bá</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Tuấn
                                                Anh</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Tuananh19dc@gmail.com</span>
                                        </td>

                                        <td class="align-middle">
                                            <a href="" class="btn btn-success">{{ __('Tasks') }}</a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="btn btn-warning">{{ __('Edit') }}</a>
                                            <a href="" class="btn btn-primary">{{ __('Delete') }}</a>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <span class="text-sm font-weight-bold mb-0  p12-24">2</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Đinh</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Quốc
                                                Hưng</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Tuananh19dc@gmail.com</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="btn btn-success">{{__('Tasks')}}</a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="btn btn-warning">{{__('Edit')}}</a>
                                            <a href="" class="btn btn-primary">{{__('Delete')}}</a>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <span class="text-sm font-weight-bold mb-0  p12-24">3</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Văn</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Lang</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Tuananh19dc@gmail.com</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="btn btn-success">{{__('Tasks')}}</a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="btn btn-warning">{{__('Edit')}}</a>
                                            <a href="" class="btn btn-primary">{{__('Delete')}}</a>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <span class="text-sm font-weight-bold mb-0  p12-24">4</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Văn</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Toàn</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Tuananh19dc@gmail.com</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="btn btn-success">{{__('Tasks')}}</a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="btn btn-warning">{{__('Edit')}}</a>
                                            <a href="" class="btn btn-primary">{{__('Delete')}}</a>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <span class="text-sm font-weight-bold mb-0  p12-24">5</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Quốc</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Huy</span>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-bold mb-0 p12-24">Tuananh19dc@gmail.com</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="btn btn-success">{{__('Tasks')}}</a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="btn btn-warning">{{__('Edit')}}</a>
                                            <a href="" class="btn btn-primary">{{__('Delete')}}</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
