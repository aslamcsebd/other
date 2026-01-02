@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Group</th>
                        <th>Pending</th>
                        <th>Accepted</th>
                        <th>Rejected</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $item)
                        <tr>
                            <td>{{ $item['group'] }}</td>
                            <td>{{ $item['pending'] }}</td>
                            <td>{{ $item['accepted'] }}</td>
                            <td>{{ $item['rejected'] }}</td>
                            <td>{{ $item['pending'] + $item['accepted'] + $item['rejected'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
