@extends('layouts.user')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <h1>Notice</h1>
                @foreach ($notices as $notice)
                <div class="col-md-12 mt-4">
                    <div class="card border border-success">
                        <div class="card-header">
                            <strong class="card-title">{{ $notice->title }}</strong>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $notice->description }}
                            </p>
                        </div>
                    </div>
                </div>   
                @endforeach
            </div>
        </div>
    </div>
</div>
<div style="position:fixed;bottom:5%;right:5px;margin:0;padding:5px 30px;">
    <button type="button" class="btn btn-success btn-circle btn-lg" data-toggle="modal" data-target="#expenseAdd">
        <i class="fa fa-plus"></i>
    </button>
</div>
<div class="modal fade" id="expenseAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form name="expense" action="{{ route('expense.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Expense Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category">
                            @foreach($categories as $category)
                                <option value={{ $category->id }}>{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="member">Member</label>
                        <select class="form-control" id="member" name="member">
                            @foreach($members as $member)
                                <option value={{ $member->id }}>{{ $member->first_name }} {{$member->last_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
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
@endsection