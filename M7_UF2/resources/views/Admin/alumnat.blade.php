<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUMNAT</title>
</head>
<body>
    <h1>LLISTA ALUMNAT</h1>
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
        dades d'alumnat: id, name, surname, rol i email. En format taula (tr,td)
        */
        @csrf
        @foreach($alum as $alumnat)
        <tr>
            <td>{{ $alumnat->id }}</td>
            <td>{{ $alumnat->name }}</td>
            <td>{{ $alumnat->surname }}</td>
            <td>{{ $alumnat->rol }}</td>
            <td>{{ $alumnat->email }}</td>
        </tr>
        @endforeach

    </tbody>
</table> 
// Referenciar a la ruta de nom v_admin
<a href="{{route('admin_view')">ADMIN VISTA</a>
</body>
</html>