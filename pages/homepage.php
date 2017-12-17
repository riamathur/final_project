<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="pages/assets/css/style.css">

    <style>

        body
        {
            background-color: aquamarine;
        }

    </style>


</head>

<body>
<div class="login-page">
   <h1>To Do Application </h1>
    <div class="form">
        <form action="index.php?page=accounts&action=register" method="post" class="register-form">
            <input type="text" placeholder="First name" name="fname"/>
            <input type="text" placeholder="last name" name="lname"/>
            <input type="text" placeholder="Email" name="email"/>
            <input type="text" placeholder="Phone" name="phone"/>
            <input type="text" placeholder="Birthday" name="birthday"/>
            <input type="text" placeholder="Gender" name="gender"/>
            <input type="password" placeholder="password" name="password"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form action="index.php?page=accounts&action=login" method="post" class="login-form">
            <input type="text" placeholder="email" name="email"/>
            <input type="password" placeholder="password" name="password"/>
            <button>login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>


<script src="pages/assets/js/script.js"></script>

</body>
</html>