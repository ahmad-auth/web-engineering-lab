<?php
    $servername = "localhost";
    $username = "root";
    $password = "1234";

    // Create connection
    $conn = new mysqli($servername, $username, $password, "web-lab-9");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 


    $query = "SELECT * FROM users";

    $result = $conn->query($query);

    if ($result) {
        // $success = "Recrds fetched successfully";
    } else {
        $error = "Error: " . $query . "<br>" . $conn->error;
    }

?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 09 - Activity 1</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Users</h2>
        <a class="btn btn-primary float-right" href="create.php">Create User</a>
        <div style="clear:both;"></div>
        <hr>
        <?php if(isset($success)):  ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success; ?>
            </div>
        <?php elseif(isset($error)):  ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php else: ?>
            <?php if(mysqli_num_rows($result) > 0): ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">CNIC</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($result)): ?>
                            <tr>
                                <th scope="row"><?php echo $row["id"] ?></th>
                                <td><img src="09-PHP/<?php echo $row["picture"]; ?>" alt="" srcset="" width="50"></td>
                                <td><?php echo $row["first_name"] . " " . $row["last_name"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["cnic"]; ?></td>
                                <td><?php echo $row["telephone"]; ?></td>
                                <td><?php echo $row["comments"]; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-primary" role="alert">
                    No records available!!!
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>