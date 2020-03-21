@extends('layouts.user')
@section('content')
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="table-responsive m-b-40">
        <table id="table_id" class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($icons as $icon)
                <tr>
                    <td>{{ $icon->id }}</td>
                    <td>{{ $icon->title }}</td>
                    <td>{{ $icon->image }}</td>
                    <td><i class="zmdi zmdi-edit"></i></td>
                    <td><i class="zmdi zmdi-delete"></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection