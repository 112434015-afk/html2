<!DOCTYPE html>
<html>
<head>
    <title>Admission Form</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "<center>";
    echo "<h2>Admission Details</h2>";

    echo "Name : " . $_POST["name"] . "<br><br>";
    echo "Email : " . $_POST["email"] . "<br><br>";
    echo "Mobile : " . $_POST["mobile"] . "<br><br>";
    echo "Gender : " . $_POST["gender"] . "<br><br>";
    echo "State : " . $_POST["state"] . "<br><br>";
    echo "City : " . $_POST["city"] . "<br><br>";
    echo "Address : " . $_POST["address"] . "<br><br>";
    echo "Faculty/College : " . $_POST["college"] . "<br><br>";
    echo "Degree : " . $_POST["degree"] . "<br><br>";

    echo "</center>";
}
else
{
?>

<center>
<h2>Admissions Open 2026</h2>

<form method="post">

<table border="1" cellpadding="8" cellspacing="0">

<tr>
    <td>Name</td>
    <td><input type="text" name="name" required></td>
</tr>

<tr>
    <td>Email</td>
    <td><input type="email" name="email" required></td>
</tr>

<tr>
    <td>Mobile</td>
    <td><input type="tel" name="mobile" required></td>
</tr>

<tr>
    <td>Gender</td>
    <td>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
    </td>
</tr>

<tr>
    <td>State</td>
    <td>
        <select name="state" required>
            <option value="">Select State</option>
            <option>Tamil Nadu</option>
            <option>Kerala</option>
            <option>Karnataka</option>
        </select>
    </td>
</tr>

<tr>
    <td>City</td>
    <td>
        <select name="city" required>
            <option value="">Select City</option>
            <option>Chennai</option>
            <option>Coimbatore</option>
            <option>Madurai</option>
        </select>
    </td>
</tr>

<tr>
    <td>Address</td>
    <td>
        <textarea name="address" rows="4" cols="30"></textarea>
    </td>
</tr>

<tr>
    <td>Faculty/College</td>
    <td>
        <select name="college" required>
            <option value="">Select College</option>
            <option>Engineering</option>
            <option>Arts</option>
            <option>Science</option>
        </select>
    </td>
</tr>

<tr>
    <td>Degree</td>
    <td>
        <select name="degree" required>
            <option value="">Select Degree</option>
            <option>B.Tech</option>
            <option>B.Sc</option>
            <option>B.Com</option>
        </select>
    </td>
</tr>

<tr>
    <td colspan="2">
        <input type="checkbox" name="agree" required>
        I agree to the terms and conditions.
    </td>
</tr>

<tr>
    <td colspan="2" align="center">
        <input type="submit" value="Apply">
    </td>
</tr>

</table>

</form>
</center>

<?php
}
?>

</body>
</html>