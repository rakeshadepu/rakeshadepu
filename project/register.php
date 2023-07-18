<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Project</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <header>
    <h2 class="logo">logo</h2>
    <nav class="navigation">
        <a href="index.html">HOME</a>
       <a href="">ABOUT</a>
       <a href="">SERVICES</a>
        <a href="">contact</a>
       
    </nav>
   </header>
   <div class="wrapper hr">
   <div class="form-box register">
    <h2>registration</h2>
    <form action="search.php" method="post">
        <div class="input-box">
            <span class="icon"><ion-icon name="person-outline"></ion-icon></ion-icon></span>
            <input type="text" name="name" id="name" required>
            <label for="name">name</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
            <input type="email" name="email" id="email" required>
            <label for="email">email</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
            <input type="password" name="password" id="password" required>
            <label for="password">password</label>
        </div>
        <div class="remember-forgot">
            <span class="icon"></span>
            <label >
                <input type="checkbox" >agree to terms and conditions
           </label>
        </div>
        <button type="submit" class="btn">register</button>
        <div class="login-register">
            <p>
            already have an account?
            <a href="" class="login-link">login</a>
            </p>
        </div>
    </form>
</div>
</div>

   
</div>
</body>
</html>




