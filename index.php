<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNStech | professional website</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="onlinelogomaker-103020-2204-0653-2000-transparent.png" type="image/x-icon">
    <!-- BOOTSRAP -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- CUSTOM CSS -->
    <?php
    include('style.php')
    ?>
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <!-- NAVBAR SECTION START -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-sm-12 ">
        <a class="navbar-brand ms-2" href="#">MNS<span>tech</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ><i class="fa fa-bars" style="color: crimson;" ></i><span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Cantact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Social Media
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Facebbok</a>
                        <a class="dropdown-item" href="#">Instagram</a>
                        <a class="dropdown-item" href="#">Github</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- NAVBAR SECTION END -->


    <!-- HOME START -->
    <div class="container">
        <div id="home"></div>
        <div class="jumbotron  ">
            <img src="Programmer-cuate.png" alt="">
            <h1 class=" name mb-3">Hi, I'm Asimkhan <span>MNS</span></h1>
            <p class="leads">I'm Website Developer</p>
            <a class="btn  btn-lg  " href="#" role="button">About Me</a>

        </div>
    </div>

    <!-- HOME END -->

    <!-- ABOUT SECTION START -->
    <div class="about" id="about">
        <h4>About</h4>
        <div class="row mb-3">
            <div class="col-md-6 col-sm-12 mt-5 " id="cont">
                <p>Hi I'm <span> AsimkhanMNS</span> i'm studying in Aalim muhammed muhammed salehg collage engineering i like <strong>Html,Css,javascript,Php,Mysql,Bootstrap</strong>  i have prepared two are three i have two portofilo website two e-commerence
                    website
                </p>
                <p class="cut">Information technology is the study, design, development, implementation, support or management of computer-based information systems—particularly software applications and computer hardware.</p>
                <small>by</small>
                <div class="sm">A.AsimkhanMNS</div>
            </div>

            <div class="col-md-6 col-sm-12 mt-5  " id="conts ">
                <img src="asi.jpg " alt=" " width="500px " height="400px " class="img">
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION END -->

    <!-- SKILLS SECTION START -->
    <div class="skill " id="skills">
        <h4>Skills</h4>
        <h3>Html<span>-90%</span></h3>
        <div class="ht"></div>
        <h3>Css<span>-80%</span></h3>
        <div class="ct"></div>
        <h3>Php<span>-70%</span></h3>
        <div class="pt"></div>
        <h3>Javascript<span>-80%</span></h3>
        <div class="jt"></div>
        <h3>Mysql<span>-60%</span></h3>
        <div class="mt"></div>
        <h3>Bootstrap<span>-90%</span></h3>
        <div class="bt"></div>
    </div>


    <!-- SKILLS SECTION END -->

    <!-- CONTACT SECTION START -->
    <div class="contact" id="contact">
        <h4>Contact</h4>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12 mt-3 ">
            <div class="ad">
                <h4 class="tt"><i class="fa fa-search-plus"></i>&nbsp;Address</h4>
                <p>Krishnajipattiam,<br>Pudukkottai,<br>chennnai,<br>Pin Code:614-630.</p>
            </div>

            <div class="ph">
                <h4 class="tt"><i class="fa fa-volume-control-phone"></i>&nbsp;Phone</h4>
                <p>+91 9600782712</p>
            </div>


            <div class="em">
                <h4 class="tt"><i class="fa fa-envelope-open-o"></i>&nbsp;Email</h4>
                <p>asimkhanmns2712@gmail.com</p>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12 mt-3">
            <h4 class="h4">Message</h4>
            <div class="form">
                <form action="" method="post">
                    <label for="Name">Name</label><br>
                    <input type="name" name="name" placeholder="fullname"><br>
                    <label for="Name">Email</label><br>
                    <input type="email" name="email" placeholder="@gmail.com"><br>
                    <label for="message">Message</label><br>
                    <textarea name="message" cols="30" rows="5" placeholder="Meesage"></textarea><br>
                    <button type="submit" name="sumbit">SUMBIT</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- CONTACT SECTION END -->
    <a href="#home" id="to"><i class="fa fa-toggle-up"></i></a>
    <!-- FOOTER SECTION START -->
    <footer>
        <span>&copy;copyright | <a href="# ">MNStech</a></span>
    </footer>
    <!-- FOOTER SECTION END -->

    <!-- JS -->
    <script src="jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="bootstrap.min.js "></script>
    
</body>

</html>


<!-- PHP -->

 <?php
 
 $con = mysqli_connect('localhost','root','','portofilo');
 
error_reporting(0);

 if (isset($_POST['sumbit'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];
 }

 $insertquery ="INSERT INTO `regester insert`( `name`, `email`, `message`) VALUES ('$name','$email','$message')";

 $query = mysqli_query($con, $insertquery);

 
 ?>