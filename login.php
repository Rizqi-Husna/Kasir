<html>
<head>
     <title> Login </title>
     <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <!-- Costum Style For This Template -->
     <link href="login.css" rel="stylesheet">
</head>
<body class="text-center">
          <form class="form-signin" method="post" action="cek_login.php">
               <h1 class="h3 mb-3 font-weight-normal"> LOGIN DISINI </h1>
               <label for="inputEmail" class="sr-only"> Email Adress </label>
               <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
               <label for="inputPassword" class="sr-only"> Password </label>
               <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
               <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign In </button>
               <p class="mt-5 mb-3 text-muted" style="color: #000000"> &copy; 2022 </p>
               </form>

</body>
</html>