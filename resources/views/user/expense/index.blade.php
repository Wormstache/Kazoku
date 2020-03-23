@extends('layouts.user')
@section('content')

@php
    $budgetAmount = $budget->amount;
    foreach ($expenses as $expense){
        $expenseAmount = $expense->amount;
        $budgetAmount = $budgetAmount-$expenseAmount;
    }
@endphp
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <h2 class="pb-4 display-5">Remaining Budget {{$budgetAmount}} / {{ $budget->amount }}</h2>
            <div class="row">
                @foreach ($expenses as $expense)
                <div class="col-md-12">
                    <div class="card border border-success">
                        <div class="card-header">
                            <strong class="card-title">{{ Carbon\Carbon::parse($expense->date)->format('M d') }}</strong>
                            <form action="{{ route('expense.destroy', $expense->id) }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-xs" onclick=" return confirm('Are you sure?')";><i class="zmdi zmdi-delete"></i></button>
                            </form>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <div class="row">
                                    <div class="col">
                                        {{ $expense->category->title }}
                                        <h6 class="pb-4 display-5">{{ $expense->member->first_name }} {{ $expense->member->last_name }}</h6>
                                    </div>
                                    <div class="col text-align-right">
                                        {{ $expense->amount }} 
                                        <button type="button" data-toggle="modal" data-target="#expenseDetail{{ $expense->id }}" href="{{ route('expense.edit',$expense->id) }}">
                                        <i class="fa fa-chevron-circle-right"></i>
                                    </div>
                                </div>
                                
                            </button></p>
                        </div>
                        @if($expense->description)
                        <div class="card-footer text-muted">
                        Note: {{ $expense->description }}
                        </div>
                        @endif
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

@foreach ($expenses as $expense)
<div class="modal fade" id="expenseDetail{{ $expense->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form name="expense" action="{{ route('expense.update', $expense->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Expense Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount" value="{{$expense->amount}}">
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
                        <input type="date" class="form-control" id="date" name="date" value="{{ $expense->date }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description">
                            @if ($expense->description)
                                {{ $expense->description }}
                            @endif
                        </textarea>
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