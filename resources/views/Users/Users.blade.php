@extends('layouts.main')

@section('content')
    <div class="container">
        <div id="content" class="d-flex flex-column justify-content-center w-100">
            <h3 class="d-block text-center">Danh Sách Công việc</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Stt</th>
                        <th scope="col">Họ và Tên</th>
                        <th scope="col">Tên Tài Khoản</th>
                        <th scope="col">Email</th>
                        <th scope="col">Công Việc</th>
                        <th scope="col">Tác Vụ</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $count++ }}</th>
                            <th scope="row">{{ $user->fullname }}</th>
                            <th scope="row">{{ $user->username }}</th>
                            <th scope="row">{{ $user->email }}</th>
                            <th scope="row"><a href="{{ route('Task.show', ['id' => $user->id]) }}"
                                    class="btn btn-success">Danh Sách Công việc</a></th>
                            <td>
                                <a href="" class="btn btn-danger">Sửa Đổi</a>
                                <a href="" onclick="return confirm('Xóa sinh viên')" class="btn btn-primary">Xóa Bỏ</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
