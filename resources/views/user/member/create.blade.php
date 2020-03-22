@extends('layouts.user')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('partials.alerts')
                        <div class="card-header">Create Members</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Pay Invoice</h3>
                            </div>
                            <hr>
                            <form action="{{ route('member.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="first_name" class="form-control-label">First Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="first_name" name="first_name" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="last_name" class="form-control-label">Last Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="last_name" name="last_name" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="relation" class=" form-control-label">Relation</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="relation" id="relation" class="form-control">
                                            <option value="father">Father</option>
                                            <option value="mother">Mother</option>
                                            <option value="son">Son</option>
                                            <option value="daughter">Daughter</option>
                                            <option value="brother">Brother</option>
                                            <option value="sister">Sister</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <button id="button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <span id="button">Add member</span>
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