<!DOCTYPE html>
<html lang="en">
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="form-bg">
    <div class="container ">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 mx-auto mt-5">
                <div class="form-container">
                    <h3 class="title">Contact Us</h3>
                    <form class="form-horizontal" action="insert.php" method="post">
                        <div class="form-group">
                            <input type="text" name="uname" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="password" name="upassword" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="ucpassword" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="uemail" class="form-control" placeholder="E-mail">
                        </div>
                        <input type="submit" class = "btn btn-default" value = "SignUp">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>