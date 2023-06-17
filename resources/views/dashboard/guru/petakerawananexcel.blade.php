<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <table>
        <tr>
            <th>No.</th>
            <th>Nama Murid</th>
            <th>Pelanggaran</th>
        </tr>
        @php
        $no = 1;
        @endphp
        @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->nama_siswa }}</td>
            <td>{{ $row->pelanggaran }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>