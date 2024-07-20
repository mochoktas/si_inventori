
<!DOCTYPE html>
<html>
<head>
    <title>Posts PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Gaji {{$user->nama}}</h1>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Gaji</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gaji as $data)
                <tr>
                    <td>{{ date("M-Y",strtotime($data->tanggal_gaji)) }}</td>
                    <td>{{ $data->gaji }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
