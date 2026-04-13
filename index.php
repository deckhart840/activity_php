<?php
// Name: David Eckhart This is for Class.
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>WordPress Customization</title>
</head>
<body>

<h1>WordPress Customization</h1>

<p>David Eckhart</p>
<p><?php echo date("F j, Y"); ?></p>

<?php
$name = "David";
$level = 1;
$isCoding = true;

function levelBoost($lvl, $boost) {
    return $lvl + $boost;
}
// It's over 9000!!!
$result =levelBoost($level, 9000);

echo "<h2>Power Level after boost: $result</h2>";

echo "<p>Honestly, JavaScript is what you see happening on the screen (buttons, clicks, all that), while PHP is doing stuff behind the scenes on the server. JS = front end, PHP = backend, simple as that.</p>";
?>

</body>
</html>
?>
