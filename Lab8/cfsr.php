<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 8</title>
</head>
<body>
    <form method="post">
        username: <input type="text" name="username">
        password: <input type="text" name="password">
        <button type="submit">Submit</button>
    </form>
    <div>
    <?php
            if(isset($_POST['username']) && isset($_POST['password'])) {
                if($_POST['username'] == "host" && $_POST['password'] == "pass")
                echo "<h1>The username and password is correct!!</h1>";
                else echo "<h1>The username and password is incorrect.</h2>";
            }
        ?>
    </div>
</body>
</html>
