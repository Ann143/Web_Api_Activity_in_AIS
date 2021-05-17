<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <title>Document</title>
</head>

<body>
<?php 
  
  $id=$_GET['id'];
  $username=$_GET['username'];
  $email = $_GET['email'];
  $password = $_GET['password'];

  ?>


    <div class="app">

        <div class="intro_viewer">
            <h2 class="display">RehMerLesh</h2>
            <h2 class="none">Stay part of us!</h2>
            <p class="none">Edit User</p>
            <div class="img none">
                <img src="https://www.campusreel.org/assets/Admission%20Officers.svg">
            </div>
        </div>

        <form action="http://192.168.0.27:8081/web_api/user.php" method="post">
             <input type="hidden" name="url" value="http://localhost:8081/webapi/table.php"> 
              <input type="hidden" name='id' value="<?=$id?>">
            <h3>Register</h3>
            <input type="name" name="username"  value="<?=$username?>" placeholder="username">
            <input type="email" name="email" value="<?=$email?>"  placeholder="email address">
            <input type="password" name="password"  value="<?=$password?>" placeholder="password">
            <br><br>

           <button style=" padding: 15px;text-decoration: none; border-radius:20px; background-color:#233e8b;color:white;" href="table.php" type="submit" name="update" class=three> UPDATE</button>
        </form>


        <div class="btn">
            <button class="toggle-btn">
                <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#"
                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px"
                    viewBox="0 0 100 125">
                    <g transform="translate(0,-952.36218)">
                        <path
                            style="font-size:medium;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;text-indent:0;text-align:start;text-decoration:none;line-height:normal;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;text-anchor:start;baseline-shift:baseline;opacity:1;color:#fff;fill:#fff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:4;marker:none;visibility:visible;display:inline;overflow:visible;enable-background:accumulate;font-family:Sans;-inkscape-font-specification:Sans"
                            d="M 67.90625 25.96875 A 2.0002 2.0002 0 0 0 66.65625 29.46875 L 86.84375 48 L 8 48 L 7.8125 48 C 6.7651593 48.049 5.8571564 49.04635 5.90625 50.09375 C 5.955344 51.14105 6.9526789 52.0493 8 52 L 86.84375 52 L 66.65625 70.5 A 2.0022756 2.0022756 0 1 0 69.34375 73.46875 L 93.34375 51.46875 A 2.0002 2.0002 0 0 0 93.34375 48.5 L 69.34375 26.5 A 2.0002 2.0002 0 0 0 67.90625 25.96875 z "
                            transform="translate(0,952.36218)" />
                    </g>
                </svg>
            </button>
        </div>
        <footer>
            <!-- <p>Or Signup with</p> -->
            <a href="#"><i class='fab fa-facebook-square'></i></a>
            <a href="#"><i class='fab fa-google'></i></a>
            <a href="#"><i class='fab fa-twitter-square'></i></a>
        </footer>
    </div>
</body>
<style>
@import url('https://fonts.googleapis.com/css?family=Playfair+Display:400,900|Poppins:400,500');

* {
    margin: 0;
    padding: 0;
    text-decoration: none;
    box-sizing: border-box;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-text-size-adjust: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}



.three:hover {
    Box-shadow: 0px 0px 15px lightgrey;
    border-radius: 20px;
}

body {
    margin: 0;
    padding: 0;
    background-image: url('https://cdn.dribbble.com/users/2157424/screenshots/11568993/media/cf2c0ab41a10b2dd5f976e2cd48c2d08.gif');
    background-size: cover;
    color: #fff;
    font-family: 'Poppins', sans-serif;
    overflow-x: hidden;
    height: 100vh;
    margin: auto;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;

    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    flex-flow: row wrap;
    -ms-flex-flow: row wrap;
}

img {
    max-width: 100%;
}

.app {
    background-color: #fff;
    width: 330px;
    min-height: 560px;
    margin: auto;
    border-radius: 5px;
    padding: 1em;
    position: relative;
    overflow: hidden;
    box-shadow: 0 6px 31px -2px rgba(0, 0, 0, .3);
}

h2 {
    font-weight: normal;
    margin: 10px auto;
}

h3 {
    color: #333;
}



p {
    font-size: 13px;
    color: #fff;
    line-height: 1.5;
}

.intro_viewer {
    width: 100%;
    height: 450px;
    background: #2F55A4;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    margin: auto;
    text-align: center;
    padding: 4em 3em;
    transition: 0.45s ease all 0.1s;
    transition: 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) all 0.1s;
}

.active {
    height: 200px;
}

.img {
    width: 100%;
    height: 300px;
    margin: 2em auto;
}

.btn {
    position: absolute;
    bottom: 4.5em;
    left: 0;
    right: 0;
    margin: auto;
    text-align: center;
    background: #fff;
    padding: 10px;
    height: 70px;
    width: 70px;
    border-radius: 50%;
    transition: 0.45s ease all 0.1s;
    transition: 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) all 0.1s;
}

.toggle-btn {
    height: 100%;
    width: 100%;
    border-radius: 50%;
    cursor: pointer;
    padding: 0.5em;
    border: none;
    background-color: #21D4FD;
    background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);

    outline: none;
}


form {
    width: 90%;
    height: 330px;
    background: #fff;
    box-shadow: 0 6px 31px -2px rgba(0, 0, 0, .3);
    position: absolute;
    bottom: 7em;
    left: 0;
    right: 0;
    padding: 1em;
    margin: auto;
    border-radius: 5px;
    transition: 0.45s ease all 0.1s;
    z-index: 0;
    -webkit-transform: translateY(30px);
    transform: translateY(30px);
    transition: 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) all 0.1s;
    visibility: hidden;
    opacity: 0;
    text-align: center;
}

form p {
    color: grey;
}

form input {
    width: 100%;
    padding: 10px 15px;
    margin: 5px auto;
    border-radius: 100px;
    border: none;
    background: rgb(255, 255, 255, 0.3);
    font-family: 'Poppins', sans-serif;
    outline: none;
    color: #333;
    border: 1px solid #2F55A4;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -ms-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

input::placeholder {
    color: #333;
    font-size: 13px;
}

form input:focus {
    box-shadow: 0 4px 24px -1px rgba(22, 42, 90, 0.16);
    border-color: #fff;
}

footer {
    position: absolute;
    bottom: 0.5em;
    left: 0;
    right: 0;
    margin: auto;
    text-align: center;
    transition: 0.45s ease all 0.1s;
    z-index: 0;
    visibility: hidden;
    opacity: 0;
}

footer p {
    color: #333;
}

footer a {
    font-size: 32px;
    margin: 0 10px;
    color: #7045af;
    -webkit-transform: translateY(30px);
    transform: translateY(30px);
    transition: 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) all 0.1s;
}

@media screen and (max-width: 640px) {
    .app {
        width: 100%;
        height: 100vh;
        border-radius: 0;
    }

    header {
        width: 90%;
        height: 250px;
    }

    .inputs {
        margin: 0;
    }

    input,
    button {
        padding: 18px 15px;
    }
}

.open-login form {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
    opacity: 1;
    transition-delay: 0.15s;
    visibility: visible;
}

.open-login .intro_viewer {
    height: 200px;
    transition-delay: 0.25s;
}

.display {
    opacity: 0;
    visibility: hidden;
    z-index: 0;
    display: none;
}

.open-login .none {
    opacity: 0;
    visibility: hidden;
    z-index: 0;
}

.open-login .display {
    opacity: 1;
    visibility: visible;
    display: block;
}

.open-login .btn {
    transform: rotate(90deg);
    transition-delay: 0.35s;
}

.open-login footer {
    opacity: 1;
    transition-delay: 0.50s;
    visibility: visible;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function() {

    var $body = $('body');
    var $btnOpen = $('.toggle-btn');

    $btnOpen.click(function() {
        $body.toggleClass('open-login');
    });
});
</script>

</html>