<!-- Insecure login form -->

<!DOCTYPE html>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

<section>
        <header>
            <h2><a href="#" class= "logo"><img src="LogoSample_ByTailorBrands (1).jpg" height= 100px width= 100px></a></h2>
            <div class="navigation">
                <a href="./signup.php">Sign Up</a>
                <a href="#">Contact</a>
            </div>
        </header>
        <div class="content">
            <div class="info">
                <h2>The Lost Puck <br> <span>Help the RPI community!</span></h2>
                <p id="paragraph">Every student on RPI’s campus knows that workloads get really heavy, and amidst all of
                    the assignments, projects, and labs that you have to keep track of, it can be easy to lose track
                    of everyday items. The Lost Puck is a web application where users can post any item that they have lost or found on campus to a
                    general message board. There will also be a ‘claim’ button on these posts that other users can click if they see the post and realize that
                    it is their item</p>
                <h4 id="paragraph">Please log in</h4>
                <form id="form" action="login_authenticate.php" method="post">
      <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <input type="text" name="username" placeholder="Username">
                    <br />
                    <input type="password" name="password" placeholder="Password">
                    <br />
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </section>

    <script>
        function validateForm(){
            let x= document.forms["myForm"]["username"].value;
            let y= document.forms["myForm"]["password"].value;
            if(x== "" || y==""){
                alert("Please finish filling out the Log In Form");
                return false;
            }
        }
    </script>

</body>
</html>