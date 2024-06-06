<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRES</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>CP</th>
            <th>City</th>
        </tr>
    </thead>
    <tbody>
    
    @csrf
    foreach($centres as $centre)
        <tr>
            <td>{{ $centre->id_centre }}</td>
            <td>{{ $centre->name }}</td>
            <td>{{ $centre->address }}</td>
            <td>{{ $centre->cp }}</td>
            <td>{{ $centre->city }}</td>
        </tr>
    endforeach

        /*
        Recórrer l'objecte que ve del controlador mostrant les següents 
        dades de centre: id_centre, name, Address, CP i rol. En format taula (tr,td)
        */
       
    </tbody>
</table> 
// Referenciar a la ruta de nom v_admin
<a href="{{route('admin_view')}}">ADMIN VISTA</a>
</body>
</html>