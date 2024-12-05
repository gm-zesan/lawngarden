@extends('admin.master')
@section('title')
    Manage Project
@endsection

@section('module')
    Project
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Projects Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th style="width: 8%">SL NO</th>
                                    <th>User Info</th>
                                    <th>Project</th>
                                    <th>Payment Method</th>
                                    <th>Transaction Id</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($donations as $donation)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $donation->username }} ({{ $donation->phone }})</td>
                                        <td>{{ $donation->project->title }}</td>
                                        <td>{{ $donation->payment_method }}</td>
                                        <td>{{ $donation->transaction_id }}</td>
                                        <td>{{ $donation->amount }}</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
