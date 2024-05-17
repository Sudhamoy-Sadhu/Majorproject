<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Dongle', cursive;
        }

        a {
            text-decoration: none;
            color: #604BE8
        }

        section {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        .image {
            width: 60%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .image img {
            height: 400px;
            width: fit-content;
        }

        .containts {
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #F3F7FF;
        }

        .containts form {
            width: 80%;
            height: 80%;
            /* background: red; */
            display: flex;
            /* display: block; */
            flex-direction: column;
            justify-content: center;

        }

        .containts form h2 {
            color: #604BE8;
        }

        .containts form p {
            margin-bottom: 25px;
            font-size: 12px;
        }

        .containts form .input-group {
            height:45vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* background: yellow; */
        }

        .containts form input {
            width: 100%;
            height: 40px;
            margin-bottom: 15px;
            /* border-radius: 7px; */
            border: none;
            padding-left: 5px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 0px 10px 0px;


        }

        .containts form input[type="submit"] {
            font-size: 0.8rem;
            background: #604BE8;
            border: none;
            margin-top: 5px;
            color: #F3F7FF;
            height: 30px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <section>
        <div class="image">
            <img src="login-bg.png" />
        </div>

        <div class="containts">
            <form method="post" action="{{ route('register.attempt') }}">
                @csrf
                <div class="form">
                    <h2>Get Started</h2>
                    <p>Already have an account? <a href="/login">Login</a></p>

                    <div class="input-group">
                        <input type="text" name="name" required placeholder="Enter Shop name here">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <input type="email" name="email" required placeholder="Enter valid email here">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        <input type="password" name="password" required placeholder="Enter password here">
                        <input type="submit" value="Sign Up">
                    </div>
                    <p>By signing up, I agree to the <a href="#">Terms and Conditions</a></p>
                    <p>Want to go to the landing page?? <a href="{{ route('landingpage') }}">Landing Page</a></p>
            </form>
        </div>
        </div>

    </section>
</body>

</html>
