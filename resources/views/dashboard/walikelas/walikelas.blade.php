<!DOCTYPE html>
<html>

<head>
    <title>Walikelas</title>
</head>

<body>
    <h1>WALIKELAS</h1>
    <p>Walikelas BK</p>
    <form id="logout-form" action="{{ url('logout') }}" method="POST">
        {{ csrf_field() }}
        <button type="submit">Logout</button>
    </form>
</body>

</html>