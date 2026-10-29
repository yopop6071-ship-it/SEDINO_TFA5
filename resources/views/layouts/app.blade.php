<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About</a>
<a href="{{ route('customers') }}">Customers</a>
<a href="{{ route('users') }}">Users</a>

@yield('content')

</body>
</html>