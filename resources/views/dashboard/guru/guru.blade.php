<!DOCTYPE html>
<html>
<head>
  <title>Guru BK</title>
</head>

<body>
  <h1>HALAMAN GURU</h1>
  <p>Guru BK</p>
  <form id="logout-form" action="{{ url('logout') }}" method="POST">
            {{ csrf_field() }}
    <button type="submit">Logout</button>
</form>
</body>

</html>