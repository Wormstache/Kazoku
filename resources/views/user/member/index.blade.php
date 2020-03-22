@extends('layouts.user')
@section('content')
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                <a href="{{ route('member.create') }}">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add member
                    </button>
                </a>
            </div>
        </div>
        <div class="table-responsive m-b-40">
        <table id="table_id" class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Relation</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->first_name }}</td>
                    <td>{{ $member->last_name }}</td>
                    <td>{{ $member->relation }}</td>
                    <td><button class="btn btn-info" data-toggle="modal" data-target="#memberEdit{{ $member->id }}" href="{{ route('member.edit',$member->id) }}"><i class="zmdi zmdi-edit"></i></button></td>
                    <td>
                        <form action="{{ route('member.destroy', $member->id) }}" method="post">
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
@foreach($members as $member)
    <div class="modal fade" id="memberEdit{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form name="member" action="{{ route('member.update', $member->id) }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Member Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$member->first_name}}">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{$member->last_name}}">
                        </div>
                        <div class="form-group">
                            <label for="relation">Relation</label>
                            <select class="form-control" id="relation" name="relation">
                                <option value="father">Father</option>
                                <option value="mother">Mother</option>
                                <option value="son">Son</option>
                                <option value="daughter">Daughter</option>
                                <option value="brother">Brother</option>
                                <option value="sister">Sister</option>
                            </select>
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