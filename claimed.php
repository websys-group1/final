<!-- items for db (table is called claimed):
    Item name
    Person name (who claimed it)
    Person rin
    email -->

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
    $item = $_POST['item'];
    $name = $_POST['name'];
    $rin = $_POST['rin'];
    $email = $_POST['email'];
    $added = mysqli_query($conn, "INSERT INTO `claimed`(`item`, `name`, `rin`, `email`) VALUES ('$item', '$name', '$rin', '$email')");
    if (!$added) {
        echo "error adding item";
    }
    $thisitem = $_POST['item'];
    //$link= mysqli_connect("localhost", "root", "", "final");

    $sql = "DELETE FROM found WHERE item = $thisitem";
    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully";
    } else {
        echo "not delted";
    }
    //mysql_select_db('final');
    // $retval= mysql_query($sql, $conn);
    // if(!$retval){
    //     echo"error deleting item";
    // }else{
    //     echo"item claimed successfully";
    // }
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
                    <img src="LogoSample_ByTailorBrands (1).jpg" height="60" alt="Lost Puck">
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
        <h4>Welcome to the Claimed Items Page!</h4>
        <p>This table shows all of the items that have been claimed from the lost and found board. Fill out the form below to claim an item! </p>
    </section>
    <section id="mainsection">
        <section id="containersection">
            <div class="table">
                <?php
                $claimed = "SELECT * FROM `claimed`";
                $final_claimed = $conn->query($claimed);
                $num_rows = mysqli_num_rows($final_claimed);
                if ($num_rows > 0) {
                    echo "<table>
                    <tr>
                    <th> Item </th>
                    <th> Name </th>
                    </tr>";
                    while ($row = $final_claimed->fetch_assoc()) {
                        echo "<tr>"
                            . "<td>" . $row["item"] . "</td>"
                            . "<td>" . $row["name"] . "</td>"
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
                <span>Item Name: </span><input type="text" name="item" value="" />
                <br />
                <span>Your Name: </span><input type="text" name="name" value="" />
                <br />
                <span>RIN: </span> <input type="text" name="rin" value="" />
                <br />
                <span>Email: </span> <input type="text" name="email" value="" />
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