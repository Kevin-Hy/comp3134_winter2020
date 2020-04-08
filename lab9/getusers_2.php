

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lab9</title>
    </head>
    <body>
        <form method="get">
            <input type="text" name="nameEntry">
            <button type="submit">Submit</button>
        </form>
        <?php
            $servername="localhost";
            $username="user";
            $password="pass";
            $dbname="mydb";

            $conn=new mysqli($servername,$username,$password,$dbname);
            if($conn->connect_error) {
                die("Connection failed: ".$conn->connect_error);
            }
            $stmt = $conn->prepare("select * from users where firstname = ? and active = 1");
            $stmt->bind_param("s", $_GET['nameEntry']);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows>0){
                echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Active</th></tr>";
                while($row=$result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["active"]."</td></tr>";
                    
                }
                echo "</table>";
            }
            else {
                echo "0 results";
            }
            $stmt->close();
            $conn->close();
        ?>
    </body>
    </html>