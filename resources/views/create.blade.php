<!DOCTYPE html>
<html>
    <head>
        <title> Student Insert </title>
    </head>

    <body>
        <form action="/insert" method="POST">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <label>Firstname:</label>
            <input type="text" name="fname">
            <br>
            <label>Lastname:</label>
            <input type="text" name="lname">
            <br>
            <label>Age:</label>
            <input type="number" min="0" max="30" name="age">
            <br>
            <button type="submit">Create</button>
        </form>
    </body>
</html>