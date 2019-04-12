<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $servername = "localhost";
        $username = "root";
        $password = "1234";

        // Create connection
        $conn = new mysqli($servername, $username, $password, "web-lab-9");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $cnic = $_POST["cnic"];
        $telephone = $_POST["telephone"];
        $comments = $_POST["comments"];

        $pic_name = $_FILES["picture"]["name"];
        $pic_type = $_FILES["picture"]["type"];
        $pic_size = $_FILES["picture"]["size"];
        $pic_tmp_name = $_FILES["picture"]["tmp_name"];

        if($pic_size < 100000000 && $pic_type == "image/jpeg")
        {
            $destination = "../uploads/" . rand() . $pic_name;

            move_uploaded_file($pic_tmp_name, $destination);

            $query = "INSERT INTO `users` (first_name, last_name, email, cnic, telephone, picture, comments) 
                        VALUES ('$firstname', '$lastname', '$email', '$cnic', '$telephone', '$destination', '$comments')";
            
            if ($conn->query($query) === TRUE) {
                $success = "New record added successfully!!!";
            } else {
                $error = "Error: " . $query . "<br>" . $conn->error;
            }

        }
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
        <h2 class="mt-4">Form</h2>
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
            <form enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label for="firstname">Firstname*</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname*</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address*</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="cnic">CNIC*</label>
                    <input type="text" class="form-control" id="cnic" name="cnic" placeholder="CNIC" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Telephone">
                </div>
                <div class="form-group">
                    <label for="picture">Picture</label>
                    <br>
                    <input type="file" id="picture" name="picture" />
                </div>
                <div class="form-group">
                    <label for="comments">Comment on yourself</label>
                    <textarea name="comments" class="form-control" id="comments" name="comments" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>