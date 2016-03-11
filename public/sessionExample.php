<?php
	// start the session (or resume an existing one)
	// this function must be called before trying to get or set any session data!
	session_start();

	// get the current session ID
	$sessionId = session_id();

	// initialize a view count variable
	$viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;

	// increment the counter
	$viewCount++;

	// finally, store the new value in the session
	$_SESSION['view_count'] = $viewCount;

	$_SESSION['teapot'] = "I am one";

	var_dump($_SESSION);
?>



<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    <ul>
        <li>Session ID: <?= $sessionId; ?></li>
        <li>View Count: <?= $viewCount; ?></li>
    </ul>
</body>
</html>

