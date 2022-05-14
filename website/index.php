<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps Website</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <video id="background-video" autoplay loop muted>
        <source src="./imgs/pexels-engin-akyurt-6068179.mp4" type="video/mp4">
    </video>
    <div id="loader">
        <div id="wrapperload">
            <div class="elem">
                <img src="./imgs/1.png" alt="">
            </div>
            <div class="elem">
                <h3>Welcome to DevOps world!</h3>
            </div>
        </div>
    </div>

    <div id="bg">
        <nav>
            <img class="navitem" src="./imgs/3.jpg" alt="">
            <div id="links">
                <a class="navitem" href="#">Home</a>
                <a class="navitem" href="#">Contact</a>
                <i class="navitem ri-search-line"></i>
                <i id="menu" class="navitem ri-menu-2-line"></i>
            </div>
        </nav>
        <div id="sections">
            <img class="leftitem" id="splash" src="./imgs/rightSplash.png" alt="">
            <div id="left">
                <div id="smline"></div>
                <h4 class="leftitem">Hello 👋</h4>
                <br>
                <h5 class="leftitem">Welcome to <br> <span id="lblue">DevOps world..!</span></h5>
                <br>
                <br>
                <div class="leftitem" id="playbtn">
                    <img src="./imgs/playButton.png" alt="">
                    <h5>Server IP: <span class="bold"><?php echo $_SERVER['SERVER_NAME']; ?></span></h5>
                    <br>
                </div>
                <br>
                <div class="leftitem" id="contact">
                    <h3>Contact me</h3>
                    <h6>Email : <span>devops@gmail.com</span></h6>
                    <h6>Contact Number: <span>+91-123456789</span></h6>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <script>
        var menu = document.querySelector('#menu');
        var bg = document.querySelector('#bg');

        menu.addEventListener('click', function(){
            bg.style.transform = 'scale(.8)';
            bg.style.borderRadius = '10px';
            bg.style.boxShadow = '0 150px 45px -100px rgba(0,0,0,0.2)';
        })
    </script>
</body>
</html>
