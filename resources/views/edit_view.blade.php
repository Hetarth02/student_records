<!DOCTYPE html>
<html>
    <head>
        <title> Student Update </title>
    </head>

    <body>
        <form action="/edit/<?php echo $students[0]->No; ?>" method="POST">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <label>Firstname:</label>
            <input type="text" name="fname" value = "<?php echo $students[0]->Firstname; ?>">
            <br>
            <label>Lastname:</label>
            <input type="text" name="lname" value = "<?php echo $students[0]->Lastname; ?>">
            <br>
            <label>Age:</label>
            <input type="number" min="0" max="30" name="age" value = "<?php echo $students[0]->Age; ?>">
            <br>
            <button type="submit">Update</button>
        </form>
    </body>
</html>