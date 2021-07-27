<!DOCTYPE html>
<html>
    <head>
        <title> Student Data </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>

    <body>
        <br>
        <form action="/create" method="GET">
            <button type="submit">Create Student</button>
        </form>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student -> No }}</td>
                <td>{{ $student -> Firstname }}</td>
                <td>{{ $student -> Lastname }}</td>
                <td>{{ $student -> Age }}</td>
                <td>
                    <a href="edit_view/{{ $student -> No }}"><button type="submit" formmethod="GET">Edit</button></a>
                    <a href="delete/{{ $student -> No }}"><button type="submit">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>