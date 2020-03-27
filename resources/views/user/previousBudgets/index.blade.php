@extends('layouts.user')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
                <h1>Previous Budgets</h1>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <h3>February</h3>
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40 mt-4">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>Amount</th>
                                        <th>Category</th>
                                        <th>Member</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2019-01-29 05:57</td>
                                        <td>Rs. 999.00</td>
                                        <td>Mobile</td>
                                        <td>Serena Shakya</td>
                                    </tr>
                                    <tr>
                                        <td>2019-01-28 01:22</td>
                                        <td>Rs. 756.00</td>
                                        <td>Mobile</td>
                                        <td>Rasana Shakya</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>2019-02-27 02:12</td>
                                        <td>Rs. 22.00</td>
                                        <td>Computer</td>
                                        <td>Serena Shakya</td>
                                    </tr>
                                    <tr>
                                        <td>2019-02-26 23:06</td>
                                        <td>Rs. 756.00</td>
                                        <td>Mobile</td>
                                        <td>Ranjan Shakya</td>
                                    </tr>
                                    <tr>
                                        <td>2019-02-25 19:03</td>
                                        <td>Rs. 1000.00</td>
                                        <td>Accessories</td>
                                        <td>Sarala Shakya</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>2019-02-29 05:57</td>
                                        <td>Rs. 199.00</td>
                                        <td>Groceries</td>
                                        <td>Sarala Shakya</td>
                                    </tr>
                                    <tr>
                                        <td>2019-02-24 19:10</td>
                                        <td>Rs. 699.00</td>
                                        <td>Stationery</td>
                                        <td>Serena Shakya</td>
                                    </tr>
                                    <tr>
                                        <td>2019-02-22 00:43</td>
                                        <td>Rs. 1000.00</td>
                                        <td>Computer</td>
                                        <td>Ranjan Shakya</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('charts') }}"><button type="button" class="btn btn-success">View Report</button></a>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <h3>January</h3>
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40 mt-4">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>Amount</th>
                                        <th>Category</th>
                                        <th>Member</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2019-01-29 05:57</td>
                                        <td>Rs. 999.00</td>
                                        <td>Mobile</td>
                                        <td>Serena Shakya</td>
                                    </tr>
                                    <tr>
                                        <td>2019-01-28 01:22</td>
                                        <td>Rs. 756.00</td>
                                        <td>Mobile</td>
                                        <td>Rasana Shakya</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>2019-02-27 02:12</td>
                                        <td>Rs. 22.00</td>
                                        <td>Game</td>
                                        <td>Serena Shakya</td>
                                    </tr>
                                    <tr>
                                        <td>2019-02-26 23:06</td>
                                        <td>Rs. 756.00</td>
                                        <td>Mobile</td>
                                        <td>Ranjan Shakya</td>
                                    </tr>
                                    <tr>
                                        <td>2019-02-25 19:03</td>
                                        <td>Rs. 1000.00</td>
                                        <td>Accessories</td>
                                        <td>Sarala Shakya</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>2019-02-29 05:57</td>
                                        <td>Rs. 199.00</td>
                                        <td>Groceries</td>
                                        <td>Sarala Shakya</td>
                                    </tr>
                                    <tr>
                                        <td>2019-02-24 19:10</td>
                                        <td>Rs. 699.00</td>
                                        <td>Stationery</td>
                                        <td>Serena Shakya</td>
                                    </tr>
                                    <tr>
                                        <td>2019-02-22 00:43</td>
                                        <td>Rs. 1000.00</td>
                                        <td>Computer</td>
                                        <td>Ranjan Shakya</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('charts2') }}"><button type="button" class="btn btn-success">View Report</button></a>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection