 <?php
// $servername = 'localhost';
// $username = 'root';
// $password = '';

// // Create connection
// $conn = new mysqli($servername, $username, $password, 'mydb');

// // Check connection
// if ($conn->connect_error) {
//     die('Connection failed: ' . $conn->connect_error);
// }

// echo 'Connected successfully';
// if (isset($_POST['submit'])) {
//     mysqli_query(
//         $conn,
//         "INSERT INTO USERS  (firstname, lastname, email, username, gender) VALUES('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[username]', '$_POST[gender]')"
//     );
// }
//
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="/handleRegister.php" method="post">  
    Firstname:<input type="text" name="firstname"><br>
    Lastname:<input type="text" name="lastname"><br>
    Email:<input type="email" name="email"><br>
    Username: <input type="text" name="username"><br>
    <label for="gender">Gender:
        Male:<input type="radio" value="male" name="gender">
        Female:<input type="radio" value="female" name="gender"><br>
    </label>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
