@extends('layouts.main')
@section('content')
    <div class="container">
        <div id="content" class="d-flex flex-column justify-content-center w-100">
            <div id="content" class="d-flex flex-column justify-content-center w-100">
                <h3 class="d-block text-center">Danh Sách Công Việc</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">Tên công việc</th>
                            <th scope="col">Tác Vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach ($tasks as $task)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <th scope="row">{{ $task->name }}</th>
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
    </div>
@endsection
