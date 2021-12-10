<?php

$dbhost= "localhost";
$dbusername= "root";
$dbpassword="";
$dbname="final";

$conn= mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if(!$conn){
    echo "Connection Failed";
}

$added= NULL;
if(isset($_POST['submit']))
{		
    $item = $_POST['item'];
    $name = $_POST['name'];
    //$image = $_POST['uploadfile'];
    //code below for adding image into a file
    $filename= $_FILES['uploadfile']['name'];
    $filetmpname=$_FILES['uploadfile']['tmp_name'];
    $folder="imagesuploaded/" .$filename;
    //move_uploaded_file($filetmpname, $folder);
    if(move_uploaded_file($filetmpname, $folder)){
        echo "success! ";
    }else{
        echo "error";
    }
    
    $description = $_POST['description'];
    $rin = $_POST['rin'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $LorF = $_POST['LorF'];

    //  SHOULD BE DB OR DBNAME???????????????????????
    $added = mysqli_query($conn,"INSERT INTO `found`(`item`,`name`,
    `image`,`description`,`rin`,`email`,`location`,`LorF`) VALUES ('$item','$name','$filename','$description','$rin','$email','$location','$LorF')");
   
    if(!$added)
    {
        echo "error";
    }
    else
    {
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
                        <a href="contact/contact.html" class="nav-item nav-link">Contacts</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <!-- since we no longer have landing.html, href link had to be changed as below -->
                        <a href="./logout.php" class="nav-item nav-link">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <section id="infotext">
    <h4>Welcome to the Lost and Found Board!</h4>
    <p>Sumbit your info in the form below to report items you have lost or found </p>
    </section>
        <section id="mainsection">
        <section id="containersection">
        <div class= "table" id="container">
            <?php
            $found= "SELECT * FROM `found`";
            $final_found= $conn->query($found);
            $num_rows= mysqli_num_rows($final_found);
            //$courses = "SELECT * FROM `courses`";
            //$students = "SELECT * FROM `students`";

            
            //$num_rows= mysql_num_rows($result);
                //$result= mysqli_query($conn, $query)
                if($num_rows > 0){
                    echo "<table>
                        <tr>
                        <th>Item</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Name</th>
                    </tr>";
                    //output data of each row
                    while($row= $final_found->fetch_assoc()){
                        echo "<tr>"
                        ."<td>" . $row["item"] . "</td>"
                        //<img src="<?php echo $data['Filename'];
                        ."<td>" . "<img src=" . $row["image"] . " >" . "</td>"
                        ."<td>" . $row["description"] . "</td>"
                        ."<td>" . $row["name"] . "</td>"
                        ."</tr>";
                    }
                    echo"</table>";
                }else{
                    echo"0 results";
                }
            ?>
        </div>
        </section>

        <section id="formsection">
        <form class= "addItem" action="/final/posts.php" method="POST" enctype="multipart/form-data" name= "myForm" onsubmit="return validateForm()">
            <br/>
            <span>Item Name: </span> <input type="text" name="item" value="" />
            <br/>
            <span>Image: </span> <input type="file" name="uploadfile" value=""/>
            <br/>
            <!--how do I formatthe submit to upload both files and info? can keep the same?-->
            <span>Description: </span> <input type="text" name="description" value=""/>
            <br/>
            <span>Your name: </span> <input type="text" name="name" value=""/>
            <br/>
            <span>Rin: </span> <input type="text" name="rin" value=""/>
            <br/>
            <span>Email: </span><input type="text" name="email" value="" />
            <br/>
            <span>Location: </span><input type="text" name="location" value= ""/>
            <br/>
            <span>Lost or Found: </span><input type="text" name="LorF" value="" />
            <br/>
            <input type="submit" name="submit" value="upload" />

        </form>
        </section>
    </section>

    <script>
        function validateForm(){
            let x= document.forms["myForm"]["item"].value;
            let y= document.forms["myForm"]["description"].value;
            let z= document.forms["myForm"]["name"].value;
            let a= document.forms["myForm"]["rin"].value;
            let b= document.forms["myForm"]["email"].value;
            let c= document.forms["myForm"]["location"].value;
            let d= document.forms["myForm"]["LorF"].value;
            if(x == ""|| y == ""|| z == ""|| a == ""|| b == ""|| c == ""|| d == ""){
                alert("Please Finish Filling Out the Form.");
                return False;
            }
        }
    </script>

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