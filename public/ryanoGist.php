<?php
var_dump($_POST);

$Username = "annamorton";
$Password = "hello";

$attemptedPassword = isset($_POST['password']) ? $_POST['password'] : '';


if ($attemptedPassword == $Password) {
	echo "you did it you did it you saved the prince";
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
    <form method="POST">
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>password</label>
        <input type="text" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>