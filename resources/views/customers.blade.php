@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
<h1>Customer Accounts</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer['id'] }}</td>
            <td>{{ $customer['name'] }}</td>
            <td>{{ $customer['email'] }}</td>
            <td>{{ $customer['phone'] }}</td>
        </tr>
    @endforeach
</table>
@endsection