@extends('layouts.user')
@section('content')
<div class="col-lg-4">
    {{-- <!-- CHART PERCENT-->
    <div class="chart-percent-3 m-b-40">
        <h3 class="title-3 m-b-25">chart by %</h3>
        <div class="chart-note m-b-5">
            <span class="dot dot--blue"></span>
            <span>products</span>
        </div>
        <div class="chart-note">
            <span class="dot dot--red"></span>
            <span>services</span>
        </div>
        <div class="chart-wrap m-t-60">
            <canvas id="percent-chart2"></canvas>
        </div>
    </div>
    <!-- END CHART PERCENT--> --}}
    <h1>Users Graphs</h1>
    <div class="row">
        <div class="col-6">
            <div class="card rounded">
                <div class="card-body py-3 px-3">
                    {!! $usersChart->container() !!}
                </div>
            </div>
        </div>
    </div>
    {!! $usersChart->script() !!}
</div>
@endsection