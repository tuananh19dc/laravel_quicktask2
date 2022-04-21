@extends('layouts.users')
@section('content')
    <div class="container-fluid py-4 mt-5">
        @if (session('mess'))
            <div class=" alert-success w-20 d-flex ">{{ session('mess') }}</div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Task List') }}</h6>
                        </div>
                    </div>
                    @php
                        $id = session('id');
                    @endphp
                    <div class="mt-3"><a href="{{ route('task.create') }}"
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
                                            {{ __('Task Name') }}
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
                                    @foreach ($tasks as $item)
                                        <tr>

                                            <td>
                                                <span
                                                    class="text-sm font-weight-bold mb-0  p12-24">{{ $count++ }}</span>
                                            </td>
                                            <td>
                                                <span
                                                    class="text-sm font-weight-bold mb-0 p12-24">{{ $item->name }}</span>
                                            </td>

                                            <td class="align-middle">
                                                <a href="{{ route('task.edit', ['id' => $item->id]) }}"
                                                    class="btn btn-warning">{{ __('Edit') }}</a>
                                                <form class=" d-inline-block"
                                                    action="{{ route('task.destroy', ['id' => $item->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-primary"
                                                        type="submit">{{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <div class="paginate d-flex justify-content-end pr-6">
                            {{ $tasks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
