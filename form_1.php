<?php 
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $age = $_GET['age'];
    $email = $_GET['email'];
    echo "<h2>Response Demo Form</h2><h3> ";
    echo "You submitted the following information<br><ul>";
    echo "<li>Name: <strong> $firstName</strong></li>";
    echo "<li>Last name: <strong> $lastName</strong></li>";
    echo "<br><li>Age: <strong> $age</strong></li>";
    echo "<br><li>E-Mail: <strong> $email</strong></li>";
    echo "</li></ul></h3>";
    echo "Date: " . date("d/m/Y") . "<br>";
    echo "Time: " . date ("h:i:s");

?> 