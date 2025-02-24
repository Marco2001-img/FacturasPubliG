<!DOCTYPE html>
<html>
<head>
    <title>Mi PDF</title>
</head>
<body>
    <h1>Mis Datos</h1>
    <table>
        <thead>
            <tr>
                <th>Campo 1</th>
                <th>Campo 2</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->campo1 }}</td>
                    <td>{{ $item->campo2 }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>