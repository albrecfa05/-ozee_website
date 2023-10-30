
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ozee | Contact</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <script src="https://kit.fontawesome.com/24583cc326.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
    if(!empty($_POST["send"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $toEmail = $_POST["ozeemusic.contact@gmail.com"];

        $mailHeaders = "Name: " . $firstname .
        "\r\n Lastname: " .$lastname . 
        "\r\n Email: " .$email . 
        "\r\n Mobile: " .$mobile . 
        "\r\n Message: " .$message . "\r\n";

        if(mail($toEmail, $firstname, $mailHeaders)){
            $message = "Message has been sent!"
        }
    }
?>

<!--START Navigationsleiste-->

<div class="top_black_gradient"></div>    
<div class="navbar">
        <div class="logo">
            <img src="other/ozee_schrift.png" class="ozee_logo">
            <a href="index.html"><img src="other/ozee_schrift.png" class="ozee_logo_glow"></a>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="music.html">Music</a></li>
            <li><a href="flps.html">FLPs</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
</div>  
<div class="hero_contact"> 
    <div class="contact">
            <form method="post" name="emailContact">
            <h1>Let's Connect</h1>
                <input type="text" id="firstname" placeholder="First Name" name="firstname" required>
                <input type="text" id="lastname" placeholder="Last Name" name="lastname" required>
                <input type="email" id="email" placeholder="E-Mail" name="email" required>
                <input type="tel" id="mobile" placeholder="Mobile" name="mobile">
                <h4>Type your Message here:</h4>
                <textarea name="message" required></textarea>
                <input type="submit" name="send" value="send" id="btn_contact">
            </form>
        </div>
    </div>

</body>
</html>