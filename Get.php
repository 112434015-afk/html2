<!DOCTYPE html>
<html>
<head>
    <title>Introduction Form</title>
</head>
<body>

    <h2>Student Introduction</h2>

    <form action="intro.php" method="get">
        Name:
        <input type="text" name="name"><br><br>

        Age:
        <input type="number" name="age"><br><br>

        Department:
        <input type="text" name="dept"><br><br>

        College:
        <input type="text" name="college"><br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Introduction</title>
</head>
<body>

<?php
echo "<h2>Student Introduction</h2>";
echo "My name is " . $_GET["name"] . ".<br>";
echo "I am " . $_GET["age"] . " years old.<br>";
echo "I am studying in the " . $_GET["dept"] . " department.<br>";
echo "My college is " . $_GET["college"] . ".";
?>

</body>
</html>
