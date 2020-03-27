@extends('layouts.admin')
@section('content')
<div class="row m-t-30">
    <a href="#">
        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#noteAdd">
            <i class="zmdi zmdi-plus"></i>add notes
        </button>
    </a>
    @foreach ($notes as $note)
    <div class="col-md-12 mt-4">
        <div class="alert alert-warning" role="alert">
            {{ $note->description }}<br>
            <form action="{{ route('note.destroy', $note->id) }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button>
                    <i class="zmdi zmdi-delete"></i>
                </button>
            </form>
            <button data-toggle="modal" data-target="#noteEdit{{ $note->id }}" href="{{ route('note.edit',$note->id) }}"><i class="zmdi zmdi-edit"></i></button>
        </div>
    </div>
    @endforeach
</div>
<div class="modal fade" id="noteAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form name="note" action="{{ route('note.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Note Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
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
@foreach($notes as $note)
    <div class="modal fade" id="noteEdit{{ $note->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form name="note" action="{{ route('note.update', $note->id) }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Note Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{$note->description}}">
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