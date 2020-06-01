@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Deliveries Requests</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile number</th>
                            <th>City</th>
                            <th>Area name</th>
                            <th>Street name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deliveries as $delivery)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$delivery->first_name}} {{$delivery->last_name}}</td>
                                <td>{{$delivery->mobile_number}}</td>
                                <td>{{$delivery->city}}</td>
                                <td>{{$delivery->area_name}}</td>
                                <td>{{$delivery->street_name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Car rent Requests</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile number</th>
                            <th>City</th>
                            <th>Area name</th>
                            <th>Street name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deliveries as $delivery)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$delivery->first_name}} {{$delivery->last_name}}</td>
                                <td>{{$delivery->mobile_number}}</td>
                                <td>{{$delivery->city}}</td>
                                <td>{{$delivery->area_name}}</td>
                                <td>{{$delivery->street_name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

