@extends('layouts.admin')
@section('content')
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                <a href="{{ route('adminIcon.create') }}">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add icons
                    </button>
                </a>
            </div>
        </div>
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
                    <td><button class="btn btn-info" data-toggle="modal" data-target="#iconEdit{{ $icon->id }}" href="{{ route('adminIcon.edit',$icon->id) }}"><i class="zmdi zmdi-edit"></i></button></td>
                    <td>
                        <form action="{{ route('adminIcon.destroy', $icon->id) }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-xs" onclick=" return confirm('Are you sure?')";><i class="zmdi zmdi-delete"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@foreach($icons as $icon)
    <div class="modal fade" id="iconEdit{{ $icon->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form name="icon" action="{{ route('icon.update', $icon->id) }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Icon Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$icon->title}}">
                        </div>
                        <div class="form-group">
                            <label for="contact_no">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
@endsection