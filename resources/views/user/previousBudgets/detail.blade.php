@extends('layouts.user')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
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
                                    </div>
                                </div>
                            </p>
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
@endsection