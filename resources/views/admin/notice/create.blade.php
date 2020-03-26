@extends('layouts.admin')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('partials.alerts')
                        <div class="card-header">Create Notices</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Pay Invoice</h3>
                            </div>
                            <hr>
                            <form action="{{ route('notice.store') }}" method="post">
                            @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="title" class="form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="title" name="title" placeholder="Text" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="description" class="form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea id="description" name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <button id="button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <span id="button">Add Notice</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection