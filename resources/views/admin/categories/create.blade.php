@extends('layouts.admin')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('partials.alerts')
                        <div class="card-header">Create Categories</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Pay Invoice</h3>
                            </div>
                            <hr>
                            <form action="{{ route('adminCategory.store') }}" method="post">
                            @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="title" class="form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="title" name="title" placeholder="Text" class="form-control">
                                        <small class="form-text text-muted">Eg: Shopping</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="icon" class="form-control-label">Icon</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select id="icon" name="icon" class="form-control">
                                            @foreach($icons as $icon)
                                                <option value={{ $icon->id }}>{{ $icon->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <button id="button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <span id="button">Add Category</span>
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