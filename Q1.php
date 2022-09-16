<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    
    <title>Q1 valiate the form using php</title>
</head>
<body>
    <div class="container py-4 border">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>


        <?php
        if($_SERVER['REQUEST_METHOD'] === "POST"){
          $email = $_POST['email'];
          $password = $_POST['password'];

          function validate($email,$password){
            $emailregex = "/[a-zA-Z0-9]+@[a-z]+.[a-zA-Z]/";
            $passregex = "/^[a-zA-Z]{1}[a-zA-Z0-9!@#$%^&*()]{7,}$/";

            if(preg_match($emailregex, $email) && preg_match($passregex, $password)){
              echo '<div class="alert alert-success my-2 alert-dismissible fade show" role="alert">
                    <strong>Valid</strong> Email and password is invalid
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            }
            else{
              echo '<div class="alert alert-danger my-2 alert-dismissible fade show" role="alert">
              <strong>Invalid</strong> Email and password is invalid
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';            
          }
          }
          validate($email,$password);
        }
      ?>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>


</html>