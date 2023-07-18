<html>
<head>
    <title>Insert into page</title>
</head>
<body>

    <center>
        <?php
        // servername => localhost
        // username => root1
        // password => root
        // database name => staff
        $conn = mysqli_connect("localhost", "peter", "abc123", "myone");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        // Taking all 5 values from the form data(input)
        $Name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO dab  VALUES ('$Name', '$email','$password')";
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
        echo nl2br("\n$Name\n $email\n $password\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>