<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body{
            background-color:rgb(231,231,231);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

    </style>
</head>
<body>
<form action="userSaveProcess.php" method="POST">
    <legend>
        <a href="viewUsers.php" class="btn btn-primary">View Users</a>
    </legend>
    <input type="text" name="name"placeholder="Name" required autocomplete="off" class="form-group"><br>
    <input type="email" name="email" placeholder="Email" required autocomplete="off"  class="form-group"><br>
    <input type="password" name="password"placeholder="Password" required class="form-group"><br>
    <input type="submit" name="submit" value="Submit" class="btn btn-success">
    <input type="reset" name="reset" value="Reset" class="btn btn-secondary">
    
    
    
    
</form>

</body>
</html>