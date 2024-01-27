<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign In Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/999c289fc3.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign In</h1>
             <!-- Login form -->
            <form action="signin.php" method="post">
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="password">
                </div>
                <button type="submit" class="sign-in-button">Sign in</button>
            </form>
        </div>
    </div>
    <script>
        /* let signupBtn=document.getElementById("signupBtn");
        let signinBtn = document.getElementById("signinBtn");
        let nameField = document.getElementById("nameField");
        let title = document.getElementById("title");
*/
        /*
        signinBtn.onclick = function(){
           nameField.style.maxHeight = "0";
           title.innerHTML = "Sign In";
           signupBtn.classList.add("disable");
           signinBtn.classList.remove("disable");
       
        }
       
       signupBtn.onclick = function(){
           nameField.style.maxHeight = "60px";
           title.innerHTML = "Sign Up";
           signupBtn.classList.remove("disable");
           signinBtn.classList.add("disable"); */



    </script>
</body>

</html>