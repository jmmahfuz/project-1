<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in page</title>
    <script src="https://kit.fontawesome.com/45030ec278.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="container">
        <div class="row pt-4 gap-5">
            <div class="col-lg-3 py-5 bg-primary ">
                <div>
                    <div class="d-flex justify-content-center align-items-center pb-5">
                        <img class="logo" src="images/IMG-20230610-WA0001.jpg" alt="">
                    </div>
                    <div class="text-center text-white">
                        <div class="title_1">E-library Management System
                            <hr>
                        </div>
                        <div class="title_2">Ministry of civil Aviation and Tourism</div>
                    </div>
                </div>
                <div class="py-5">
                    <img class="book" src="images/book.jpg" alt="">
                </div>
            </div>
            <div class="sign_in col-lg-8 d-flex align-items-center">
                <form action="">
                <i class="fa-solid fa-mobile"></i><input class="input_field" type="text" name="email" id="" placeholder="Email or Phone Number"> <br> <br>
                <i class="fa-solid fa-lock"></i><input class="input_field" type="password" name="password" id="" placeholder="password"> <br>

                <div class="text-end pt-2"> Forgot password?</div> <br> <br>
                <button type="button" class="btn btn-outline-success w-100">SIGN IN</button> <br> <br> <br> 
                <div class="text-center">
                <button type="button" class="btn btn-primary">English</button>
                <button type="button" class="btn btn-outline-success">বাংলা</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>