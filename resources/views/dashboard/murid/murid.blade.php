<!DOCTYPE html>
<html>

<head>
    <title>Siswa</title>
</head>

<body>
    <h1>SISWA</h1>
    <p>Pelajar BK</p>
    <form id="logout-form" action="{{ url('logout') }}" method="POST">
        {{ csrf_field() }}
        <button type="submit">Logout</button>
    </form>
</body>

</html>