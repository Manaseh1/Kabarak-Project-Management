<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer SignUp</title>

    <link rel="stylesheet" href="/Lecturer/css/lec_signup.css"/>
    

    <link href="Necessary.html">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>
<body class="signup">

    <section>
        <a href="/FirstPage/accounts.html"><button class="back_firstpage">Back To Accounts</button></a>

    </section>

    <section>
        <img class="triangle" src="/images/Triangle with Circle.png" loading="lazy"/>
        <img class="square" src="/images/Double Square.png" loading="lazy"/>
        <img class="Circle" src="/images/Circle with Triangle.png" loading="lazy"/>
        <img class="square2" src="/images/Double Square.png" loading="lazy"/>
    </section>

    <h1 class="lec">LECTURER SIGN UP</h1>

    <section>
        <form action="form_control" class="login_form">

            <label for="name" class="name_position">Name
                <input type="text" class="name" id="name" name="name">
            </label>

            <label for="courses" class="courses">Course 
                <select name="courses" id="courses">
                    <option value="Computer Science">Computer Science (CS)</option>
                    <option value="Information Technology">Information Technology (IT)</option>
                </select>
            </label>

            <label for="registration" class="reg_position">Registration number
                <input type="text" id="reg" name="registration" placeholder=" example CS/MG/0988/09/20">
            </label>


            <label for="password" class="pass_position">Password
                <input type="password" class="password" id="pass" name="password" placeholder="*********">
            </label>
        </form>

        <a href="/Lecturer/html/lec_login.html"><button class="signup_butt" type="submit"><span class="sign">Sign Up</span></button></a>
    </section>

    <section>
        <hr class="Line1">
        <h4 class="or">Or</h4>
        <hr class="Line2">
    </section>

    <section>
        <h4 class="have_account">Already have an account?<a href="/Lecturer/html/lec_login.html" class="login">Log In</a></h4>
    </section>
</body>
</html>