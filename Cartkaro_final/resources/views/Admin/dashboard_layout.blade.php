<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dashboard_layout.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        :root {
            --poppins: 'Poppins', sans-serif;
            --lato: 'Lato', sans-serif;

            --light: #ffffff;
            --blue: #604BE8;
            --light-blue: #CFE8FF;
            --grey: #F1F5FE;
            --dark-grey: #AAAAAA;
            --dark: #342E37;
            --red: #DB504A;
            --yellow: #FFCE26;
            --light-yellow: #FFF2C6;
            --orange: #FD7238;
            --light-orange: #FFE0D3;
        }

        html {
            overflow-x: hidden;
        }

        body {
            background: var(--grey);
            overflow-x: hidden;
        }





        /* SIDEBAR */
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            height: 100%;
            background: var(--light);
            z-index: 2000;
            font-family: var(--lato);
            transition: .3s ease;
            overflow-x: hidden;
            scrollbar-width: none;

        }

        #sidebar::--webkit-scrollbar {
            display: none;
        }

        #sidebar.hide {
            width: 60px;
        }

        #sidebar .brand {
            font-size: 24px;
            font-weight: 700;
            height: 56px;
            display: flex;
            align-items: center;
            color: var(--blue);
            position: sticky;
            top: 0;
            left: 0;
            background: var(--light);
            z-index: 500;
            padding-bottom: 20px;
            box-sizing: content-box;
        }

        #sidebar .brand .bx {
            min-width: 60px;
            display: flex;
            justify-content: center;
        }

        #sidebar .side-menu {
            width: 100%;
            margin-top: 48px;
        }

        #sidebar .side-menu li {
            height: 48px;
            background: transparent;
            margin-left: 6px;
            border-radius: 48px 0 0 48px;
            padding: 4px;
        }

        #sidebar .side-menu li.active {
            background: var(--grey);
            position: relative;
        }

        #sidebar .side-menu li.active::before {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            top: -40px;
            right: 0;
            box-shadow: 20px 20px 0 var(--grey);
            z-index: -1;
        }

        #sidebar .side-menu li.active::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            bottom: -40px;
            right: 0;
            box-shadow: 20px -20px 0 var(--grey);
            z-index: -1;
        }

        #sidebar .side-menu li a {
            width: 100%;
            height: 100%;
            background: var(--light);
            display: flex;
            align-items: center;
            border-radius: 48px;
            font-size: 16px;
            color: var(--dark);
            white-space: nowrap;
            overflow-x: hidden;
        }

        #sidebar .side-menu.top li.active a {
            color: var(--blue);
        }

        #sidebar.hide .side-menu li a {
            width: calc(48px - (4px * 2));
            transition: width .3s ease;
        }

        #sidebar .side-menu li a.logout {
            color: var(--red);
        }

        #sidebar .side-menu.top li a:hover {
            color: var(--blue);
        }

        #sidebar .side-menu li a .bx {
            min-width: calc(60px - ((4px + 6px) * 2));
            display: flex;
            justify-content: center;
        }

        /* SIDEBAR */

        /* CONTENT */
        #content {
            position: relative;
            width: calc(100% - 280px);
            left: 280px;
            transition: .3s ease;
        }

        #sidebar.hide~#content {
            width: calc(100% - 60px);
            left: 60px;
        }

        /* NAVBAR */
        #content nav {
            height: 56px;
            background: var(--light);
            padding: 0 24px;
            display: flex;
            align-items: center;
            grid-gap: 24px;
            font-family: var(--lato);
            position: sticky;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        #content nav a {
            color: var(--dark);
        }


        #content nav .nav-link:hover {
            color: var(--blue);
        }

        /* NAVBAR */





        /* MAIN */
        #content main {
            width: 100%;
            padding: 36px 24px;
            font-family: var(--poppins);
            max-height: calc(100vh - 56px);
            overflow-y: auto;
        }

        #content main .head-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            grid-gap: 16px;
            flex-wrap: wrap;
            /* background: red; */
        }

        #content main .head-title .left h1 {
            font-size: 38px;
            font-weight: 600;
            color: var(--dark);
        }

        #content main .head-title .right {
            display: flex;
            height: 60px;
            width: 50%;
            justify-content: space-around;
            /* background: #0c22ec; */
        }

        #content main .head-title .right a {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark);
            display: flex;
            align-items: last baseline;
            padding-bottom: 10px;
        }

        #content main .head-title .right .active {
            border-bottom: 3px solid #FF9900;
        }









        /* css of rohit */
        .part1 {
            display: flex;
            /* background: red; */
            justify-content: space-between;
        }

        .part2 {
            display: flex;
            /* background: green; */
            margin-top: 10px;
            justify-content: space-between;
        }

        .part2 form {
            width: 50%;
        }

        .entries {
            display: flex;
            font-size: small;
            /* justify-content: center; */
            align-items: center;
            justify-content: space-between;
            width: 10%;
        }

        .category {
            width: 70%;
            height: 30px;
            border-radius: 5px;
            font-size: 1em;
            padding-left: 5px;
        }

        .content-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 1.1em;
            min-width: 400px;
            /* overflow: hidden; */
        }

        .content-table .heading {
            background-color: rgba(6, 215, 160, 1);
            color: #ffff;
            text-align: center;
            font-weight: bold;
        }

        .content-table .afterheading {
            text-align: center;
            border-bottom: 2px solid rgb(165, 165, 165);
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table .afterheading .update a {
            display: flex;
            flex-direction: column;
        }

        .content-table .afterheading .update a i {
            /* background: red; */
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .add-product-btn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #604BE8;
            /* Button background color */
            color: #ffffff;
            /* Text color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-product-btn:hover {
            background-color: #0cec96;
            /* Darker background color on hover */
        }

        /* Style the text input */
        input[type="text"] {
            padding: 5px;
            /* Padding inside the input field */
            width: 60%;
            /* Width of the input field */
            border: 1px solid #ccc;
            /* Border style */
            /* border-color: #0c22ec; */
            border-radius: 5px;
            /* Rounded corners */
            outline: none;
            /* Remove outline */
            font-size: 15px;
            /* Font size */
        }

        /* Basic styling for the switch container */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .sa {
            font-size: 20px;
        }

        button {
            padding: 5px 5px;
            background: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-edit:hover {
            background: #FF9F07;
            color: #fff;
        }

        .btn-delete:hover {
            background: #FF5F5D;
            color: #fff;
        }

        /* Hide the default checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* Style the slider (the circle inside the switch) */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        /* Styling for the slider when it's active (checked state) */
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        /* Change background color of slider when checked */
        input:checked+.slider {
            background-color: #604BE8;
        }

        /* Move the circle slider to the right when checked */
        input:checked+.slider:before {
            transform: translateX(26px);
        }


        .part3 {
            display: flex;
            flex-direction: column;
        }

        .part3 .menus {
            display: flex;
            height: 60px;
            width: 50%;
            justify-content: space-around;
        }

        .part3 .menus a {

            font-size: 18px;
            font-weight: 600;
            color: var(--dark);
            display: flex;
            align-items: last baseline;
            padding-bottom: 10px;
        }

        .part3 .menus .active {
            border-bottom: 3px solid #FF9900;
        }


        .card {
            background: #fff;
            width: 150px;
            height: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, .1);
            justify-content: center;
            border-radius: 10px;
        }

        .bill-desk {
            background: #fff;
            position: fixed !important;
            top: 10%;
            right: 20px;
            height: 88%;
            width: 28%;
            display: flex;
            flex-direction: column;
            border-radius: 15px;
        }

        .products {
            margin-top: 20px;
        }

        .bill-desk form .customer-details {
            width: 100%;
            height: 30%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            /* background: red; */
            margin-top: 10px;
        }

        .bill-desk form input {
            width: 90%;
            color: #604BE8;
            background: #F1F5FE;
            border: none;
        }

        .bill-desk form table {
            height: 40%;
            /* background: yellow; */
        }

        .bill-desk form .amount {
            height: 27%;
            width: 100%;
            bottom: 0px;
            border-radius: 0px 0px 15px 15px;
            position: absolute;
            background: #CFE8FF;
        }

        .bill-desk form .amount .subtotal {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .bill-desk form .amount .button {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            padding: 0px 10px;
            margin-bottom: 10px;
        }

        .bill-desk form .amount .button input[type="submit"] {
            font-size: 15px;
            height: 30px;
            border-radius: 15px;
        }

        .bill-desk form .amount .button input[type="submit"]:hover {
            background: #604BE8;
            color: #CFE8FF;
            font-weight: 500;
        }








        /* Css for Abhisikta */

        .heading .mainprofile-section {
            height: 400px;
            width: 100%;
            /* background: red; */
            display: flex;
            justify-content: space-between;
        }

        .heading .mainprofile-section .profile-menu {
            height: 100%;
            width: 30%;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding-bottom: 20px;
            border-radius: 10px;
        }

        .heading .mainprofile-section .profile-menu .profile-img {
            display: flex;
            width: 100%;
            align-items: center;
            padding: 5%;
        }

        .bill-desk {
            position: fixed;
            right: 20px;
            top: 12%;
            background: #fff;
            height: 85%;
            width: 30%;
            z-index: 999;
            border-radius: 20px;
        }

        .bill-desk form .part4 {
            width: 60%;
            float: left;
            margin-left: 80px;
            background-color: #c8e0eb;
            border: 1px solid #4c68f4;
        }

        input[type="number"] {
            padding: 5px;
            /* Padding inside the input field */
            width: 60%;
            /* Width of the input field */
            border: 1px solid #4c68f4;
            /* Border style */
            /* border-color: #0c22ec; */
            margin-left: 80px;
            border-radius: 5px;
            /* Rounded corners */
            outline: none;
            /* Remove outline */
            font-size: 15px;
            /* Font size */
        }

        input[type="email"] {
            padding: 5px;
            /* Padding inside the input field */
            width: 60%;
            /* Width of the input field */
            border: 1px solid #4c68f4;
            /* Border style */
            /* border-color: #0c22ec; */
            margin-left: 80px;
            border-radius: 5px;
            /* Rounded corners */
            outline: none;
            /* Remove outline */
            font-size: 15px;
            /* Font size */
        }

        .cont-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 1.1em;
            min-width: 400px;
            /* overflow: hidden; */
        }

        .cont-table .heading {
            background-color: rgba(6, 215, 160, 1);
            color: #ffff;
            text-align: center;
            font-weight: bold;
        }

        .cont-table th,
        .cont-table td {
            padding: 12px 15px;
        }

        .heading .mainprofile-section .personal-info {
            height: 100%;
            width: 69%;
            background: #ffffff;
            display: flex;
            flex-direction: column;
            padding: 20px;
            border-radius: 10px;
        }

        .heading .mainprofile-section .personal-info form {
            height: 100%;
            width: 100%;
            /* background: red; */
        }

        .heading .mainprofile-section .personal-info form .row {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .heading .mainprofile-section .personal-info form .row .section {
            display: flex;
            flex-direction: column;
            width: 48%;
        }

        .heading .mainprofile-section .personal-info form .row .section input {
            width: 100%;
        }

        .heading .mainprofile-section .personal-info form .row input[type="submit"] {
            width: 100%;
            height: 40px;
            border-radius: 15px;
            border: none;
            background: #604BE8;
            color: white;
            font-size: 1.1rem;
        }

        .heading .mainprofile-section .personal-info .body {
            font-size: 12px;
            font-weight: lighter;
            color: #c6c6c6;
            /* background: red; */
        }
    </style>

    <title>Cartkaro- @yield('title')</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar" class="">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">CartKaro</span>
        </a>
        <ul class="side-menu top">
            <li class="{{ request()->url() == 'http://127.0.0.1:8000/dashboard' ? 'active' : '' }}">
                <a href="/dashboard">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->url() == 'http://127.0.0.1:8000/orders' ? 'active' : '' }}">
                <a href="/orders">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Orders</span>
                </a>
            </li>
            <li class="{{ request()->url() == 'http://127.0.0.1:8000/staffs' ? 'active' : '' }}">
                <a href="/staffs">
                    <i class='bx bxs-group'></i>
                    <span class="text">Staffs</span>
                </a>
            </li>
            <li class="{{ request()->url() == 'http://127.0.0.1:8000/products' ? 'active' : '' }}">
                <a href="/products">
                    <i class='bx bxs-box'></i>
                    <span class="text">Products</span>
                </a>
            </li>
            <li class="{{ request()->url() == 'http://127.0.0.1:8000/report' ? 'active' : '' }}">
                <a href="/report">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Report</span>
                </a>
            </li>
            <li class="{{ request()->url() == 'http://127.0.0.1:8000/transactions' ? 'active' : '' }}">
                <a href="/transactions">
                    <i class='bx bxs-bank'></i>
                    <span class="text">Transactions</span>
                </a>
            </li>
            <li class="{{ request()->url() == 'http://127.0.0.1:8000/settings' ? 'active' : '' }}">
                <a href="/settings">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>

        </ul>
        <ul class="side-menu">

            <li>
                <a href="{{route('logout')}}" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->

        <main>
            @yield('main')
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script>
        // TOGGLE SIDEBAR
        const menuBar = document.querySelector('#content nav .bx.bx-menu');
        const sidebar = document.getElementById('sidebar');

        menuBar.addEventListener('click', function() {
            sidebar.classList.toggle('hide');
        })
    </script>
</body>

</html>
