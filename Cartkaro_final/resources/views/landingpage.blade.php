<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CartKaro</title>
    <link rel="stylesheet" href="landingpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <div class="logo">
            <img src="./images/Logo (1).png" alt="logo">
        </div>
        <div class="menu">
            <li><a href="#features">Services</a></li>
            <li><a href="#servicesfeatures">Features</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#resources">Resources</a></li>
        </div>
        <div class="signup">
            <a href="/signup">Sign Up</a>
            <a href="/dashboard">Sign Up</a>
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


    <div class="content4" id="contact">
        {{-- //ekhane code korbi --}}

        <div class="image-section">
            <img src="./images/image 5.png" alt="team">
        </div>
        <div class="text-section3">
            <div class="text1">
                <h2>Schedule a free demo</h2>
                <h5>Get in touch with our team to clarify your queries</h5>
            </div>

            <form action="" method="post">
                <input type="text" id="name" name="name" placeholder="Enter Name Here">

                <input type="text" id="phone" name="phone" placeholder="Enter Phone no Here">

                <input type="email" id="email" name="email" placeholder="Enter Email Here ">

                <input type="text" id="business" name="business" placeholder="Enter Business Here">

                <input type="text" id="city" name="city" placeholder="Enter City Here">

                <textarea id="query" name="query"></textarea><br>
                <input type="submit" value="Submit">
            </form>
        </div>
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