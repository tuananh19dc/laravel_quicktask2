@extends('layouts.users')
@section('content')
    <div class="container-fluid py-4 mt-5">
        @if (session('mess'))
            <div class=" alert-success w-20 d-flex ">{{ session('mess') }}</div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card my-4 mh-600">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Users List') }}</h6>
                        </div>
                    </div>
                    <div class="mt-3"><a href="{{ route('users.create') }}"
                            class="btn btn-info ml-3">{{ __('Add new') }}</a></div>
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
                                    @php
                                        $count = 1;
                                    @endphp
                                    {{-- Danh sách --}}
                                    @foreach ($users as $item)
                                        <tr>

                                            <td>
                                                <span
                                                    class="text-sm font-weight-bold mb-0  p12-24">{{ $count++ }}</span>
                                            </td>
                                            <td>
                                                <span
                                                    class="text-sm font-weight-bold mb-0 p12-24">{{ $item->first_name }}</span>
                                            </td>
                                            <td>
                                                <span
                                                    class="text-sm font-weight-bold mb-0 p12-24">{{ $item->last_name }}</span>
                                            </td>
                                            <td>
                                                <span
                                                    class="text-sm font-weight-bold mb-0 p12-24">{{ $item->email }}</span>
                                            </td>

                                            <td class="align-middle">
                                                <a href="{{ route('task.show', ['id' => $item->id]) }}"
                                                    class="btn btn-success">{{ __('Tasks') }}</a>
                                            </td>
                                            <td class="align-middle">

                                                <a href="{{ route('users.edit', ['user' => $item->id]) }}"
                                                    class="btn btn-warning">{{ __('Edit') }}</a>
                                                <form class="d-inline-block"
                                                    action="{{ route('users.destroy', ['user' => $item->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="paginate d-flex justify-content-end pr-6">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
