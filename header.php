<?php 

include('connection.php');

// start the session (required on all pages using session variables)

session_start();

if(!isset($_SESSION['type'])){

    header("location: sign-out.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AminBashir-portfolio</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <!-- font-awesome links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>

<?php
if($_SESSION['type'] == "admin"){ ?>
    <!-- navbar -->
    <nav>
        <div class="home-link">
            <a href="#">portfolio</a>
        </div>
     
        <div>
            <a href="#">Home</a>
            <a href="./add-event.php">add event</a>
            <a href="./view-event.php">view event</a>
            <a href="./contact-view.php">contact us</a>
            <a href="./booking-event.php">event booking</a>
        </div>

        <div class="sign-button">
            <a href="./sign-out.php">Sign out</a>
        </div>
    </nav>
<?php }?>


<?php
if($_SESSION['type'] == "User"){ ?>
    <!-- navbar -->
    <nav>
        <div class="home-link">
            <a href="#">portfolio</a>
        </div>

        <div>
            <a href="#">Home</a>
            <a href="./view-event.php">view event</a>
        </div>

        <div class="sign-button">
            <a href="./sign-out.php">Sign out</a>
        </div>
    </nav>
<?php }?>