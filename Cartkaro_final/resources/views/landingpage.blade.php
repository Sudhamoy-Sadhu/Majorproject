<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CartKaro</title>
    <link rel="stylesheet" href="landingpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
        }

        :root {
            --background1: #FFF1F1;
            --background2: #FFFFFF;
        }

        nav {
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: sticky;
            top: 0;
            left: 0;
            background: #FFFFFF;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: center;
            /* background: red; */
            width: 30vw;
        }

        .logo img {
            width: 10vw;
            height: 6vh;
        }

        .menu {
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* background: yellow; */
            width: 90vw;
        }

        .menu2 {
            height: 10vh;
            display: flex;
            align-items: center;
            /* background: yellow; */
            width: 90vw;
        }

        li {
            list-style: none;
            margin-right: 5%;
        }

        a {
            text-decoration: none;
            color: black;
            font-size: 1.3rem;
        }

        .signup {
            height: 10vh;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            /* background: blue; */
            width: 40vw;
            padding-right: 4vw;
        }

        .content {
            width: 99vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-around;
            background: #FFF1F1;
        }

        .content2 {
            width: 99vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-around;
            background: #FFFFFF;
        }

        .content3 {
            width: 99vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            background: #FFF1F1;
            justify-content: center;
            align-items: center;
        }

        .heading {
            height: 4vh;
            width: 40vw;
            display: flex;
            font-size: 3rem;
        }

        .text-section {
            text-align: left;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 50vw;
            margin-left: 10vw;
            padding-top: 15vh;
            /* background: red; */
        }

        .text-section2 {
            text-align: left;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            height: 70vh;
            width: 50vw;
            /* background: red; */
        }

        .text-section3 {
            text-align: left;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            height: 70vh;
            width: 50vw;
            margin-left: 10vw;
            /* background: red; */
        }

        .text1 {
            width: 30vw;
            height: 15vh;
            font-size: 1.2rem;
        }

        h1 {
            width: 30vw;
        }

        .text {
            width: 30vw;
            height: 15vh;
            line-height: 4vh;
            display: flex;
            align-items: center;
        }

        .text3 {
            width: 30vw;
            height: auto;
            line-height: 4vh;
            display: flex;
            align-items: center;
            margin-top: 1vh;
        }



        .image-section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100vw;
            /* background: yellow; */
        }

        .image-section2 {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 70vh;
            width: 50vw;
            /* background: yellow; */
        }

        img {
            width: 80%;
            height: 60vh;
        }

        .signup a {
            display: flex;
            background-color: #C63C3C;
            color: #FDFDFD;
            font-size: 1rem;
            padding: 15px;
            border-radius: 5px;
            border: none;
        }

        button {
            display: flex;
            background-color: #C63C3C;
            color: #FDFDFD;
            font-size: 1rem;
            padding: 15px;
            border-radius: 5px;
            border: none;
        }

        .bill {
            height: 70%;
            width: 70%
        }

        .head {
            display: flex;
            flex-direction: column;
            width: 82vw;
            /* background: red; */
            height: 10vh;
            justify-content: center;
            /* padding-left: 7vw; */
        }

        .body {
            display: flex;
            height: 60vh;
        }

        h2 {
            font-size: 2rem;
        }

        footer {
            display: flex;
        }

        .main_foot {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 5vh;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="./images/Logo (1).png" alt="logo">
        </div>
        <div class="menu">
            <li><a href="#services">Services</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#resources">Resources</a></li>
        </div>
        <div class="signup">
            <a href="{{route('login')}}">Login</a>
        </div>
    </nav>
    <div class="content">
        <div class="text-section">
            <div class="text1">
                <h1>
                    Easy & Simple POS System For Your System
                </h1>
            </div>
            <div class="text">
                Manages all your business operation efficiently so that you can focus on growing your brand like a real
                BOSS!!
            </div>
            <div class="text1">
                <button type="onclick">Take a free Demo</button>
            </div>
        </div>
        <div class="image-section">
            <img src="images/image 2.png" alt="team">
        </div>
    </div>
    <div class="content2" id="services">
        <div class="text-section">
            <div class="text1">
                <h1>Make Your business 10x faster</h1>
            </div>
            <div class="text">
                An easy billing process that is smart,efficient and user-friendly!Its time for you to upgrade to
                CartKaro POS Management Software.
            </div>
            <div class="text1">
                <button type="onclick">Take a free Demo</button>
            </div>
        </div>
        <div class="image-section">
            <img src="./images/image 1.png" alt="team">
        </div>
    </div>
    <div class="content3" id="features">
        <div class="head">
            <h3>Smart POS features</h3>
            <h2>A Business POS made for all your needs</h2>
            <h4>A quick and easy-to-use billing software that makes managing high order volumes butter smooth</h4>
        </div>
        <div class="body">
            <div class="image-section2">
                <img src="images/image 3.png" class="bill" alt="team">
            </div>
            <div class="text-section2">
                <div class="text1">
                    <h1>
                        A quick business billing system
                    </h1>
                </div>
                <div class="text">
                    Take orders, punch bills and generate invoices. Accept payments. Easily apply discounts and coupons.
                    All of this, and more, is easy and quick with CartKaro POS system.
                </div>
                <div class="text3">
                    Explore all features >
                </div>
            </div>
        </div>

    </div>


    <div class="content3" id="contact">
        {{-- //ekhane code korbi --}}
        This is contact us page
    </div>




    <div class="content2" id="resources">
        <div class="text-section3">
            <div class="text1">
                <h1>Get real-time business reports</h1>
            </div>
            <div class="text">
                Automate your business reports and go paper free!
                Let CartKaro POS automatically track your business activities and provide you error free reports on your
                monthly & yearly sales etc. essential business reports
            </div>
            <div class="text3">
                Explore all features >
            </div>
        </div>
        <div class="image-section">
            <img src="images/image 4.png" alt="team">
        </div>
    </div>
    <footer>
        <div class="logo">
            <img src="./images/Logo (1).png" alt="logo">
        </div>
        <div class="menu2">
            <li><a href="#services"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="#services"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#services"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#services"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="#services"><i class="fa-solid fa-phone"></i> 1234567890</a></li>
            <li><a href="#services"><i class="fa-solid fa-envelope"></i> cartkaro@gmail.com</a></li>
        </div>
    </footer>
    <div class="main_foot">
        © 2024 Cartkaro_Official. All rights reserved. | Privacy Policy | Terms of Service
    </div>
</body>
<script>
    // Smooth scrolling function
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

</html>
