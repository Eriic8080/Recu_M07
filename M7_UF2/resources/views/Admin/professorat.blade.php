<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFESSORAT</title>
</head>
<body>
    <h1>LLISTA PROFESSORAT</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>ROL</th>
            <th>EMAIL</th>
        </tr>
    </thead>
    <tbody>
        /*
        Recórrer l'objecte que ve del controlador mostrant les següents 
        dades de professorat: id, name, surname, rol i email. En format taula (tr,td)
        */
        @csrf
        @foreach($teach as $professor)
        <tr>
            <td>{{ $professor->id }}</td>
            <td>{{ $professor->name }}</td>
            <td>{{ $professor->surname }}</td>
            <td>{{ $professor->rol }}</td>
            <td>{{ $professor->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table> 
// Referenciar a la ruta de nom v_admin
<a href="{{route('admin_view')">ADMIN VISTA</a>
</body>
</html>