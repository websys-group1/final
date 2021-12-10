<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "final";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (!$conn) {
    echo "Connection Failed";
}

$added = NULL;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $discription = $_POST['discription'];
    $rin = $_POST['rin'];
    $date = $_POST['date'];

    $added = mysqli_query($conn, "INSERT INTO `discussion`(`name`,`email`,
    `discription`,`rin`,`date`) VALUES ('$name','$email','$discription','$rin','$date')");

    if (!$added) {
        echo "error";
    } else {
        echo "Item added to lost and found board successfully.";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="m-4">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(128, 0, 0, 0.842)">
            <div class="container-fluid">
                <a href="landing.html" class="navbar-brand">
                    <img src="LogoSample_ByTailorBrands (1).JPG" height="60" alt="Lost Puck">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="posts.php" class="nav-item nav-link active">HomePage</a>
                        <a href="discussionBoard.php" class="nav-item nav-link">Discussion Page</a>
                        <a href="claimed.php" class="nav-item nav-link">Claim Item Form</a>
                        <a href="#" class="nav-item nav-link">Contacts</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a href="./logout.php" class="nav-item nav-link">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <section id="infotext">
        <h4>Welcome to the Dicussion Board!</h4>
        <p>Sumbit your info in the form below to converse with ither users</p>
    </section>

    <section id="mainsection">
        <section id="containersection">
            <div class="table" id="container">
                <?php
                $found = "SELECT * FROM `discussion`";
                $final_found = $conn->query($found);
                $num_rows = mysqli_num_rows($final_found);
                //$courses = "SELECT * FROM `courses`";
                //$students = "SELECT * FROM `students`";


                //$num_rows= mysql_num_rows($result);
                //$result= mysqli_query($conn, $query)
                if ($num_rows > 0) {
                    echo "<table>
                        <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Description</th>
                        <th>Date</th>
                    </tr>";
                    //output data of each row
                    while ($row = $final_found->fetch_assoc()) {
                        echo "<tr>"
                            . "<td>" . $row["name"] . "</td>"
                            . "<td>" . $row["email"] . "</td>"
                            . "<td>" . $row["discription"] . "</td>"
                            . "<td>" . $row["date"] . "</td>"
                            . "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </section>

        <section id="formsection">
            <form class="addItem" action="" method="POST" enctype="multipart/form-data">
                <br />
                <span>Your name: </span> <input type="text" name="name" value="" />
                <br />
                <span>Email: </span> <input type="text" name="email" value="" />
                <br />
                <!--how do I formatthe submit to upload both files and info? can keep the same?-->
                <span>Description: </span> <input type="text" name="discription" value="" />
                <br />
                <span>Rin: </span> <input type="text" name="rin" value="" />
                <br />
                <span>Date: </span><input type="text" name="date" value="" />
                <br />
                <input type="submit" name="submit" value="upload" />

            </form>
        </section>
    </section>
    <section>
        <div id="footer">
            <div class="text-center p-3" style="background-color: rgba(128, 0, 0, 0.842);">
                <a class="text-white" href="login.php">Back to the landing page</a>
            </div>
            </footer>
        </div>
    </section>
</body>

</html>