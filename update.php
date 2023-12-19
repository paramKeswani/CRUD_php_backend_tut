
<?php

include("connect.php");
$id = $_GET["updateid"];
$sql = "SELECT * FROM `crud` WHERE id='$id'";




$result = mysqli_query($con,$sql);


$row = mysqli_fetch_assoc($result);

            
    
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];



if(isset($_POST['submit']))
{
    $abc= $_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['phone'];
    $password=$_POST['password'];

    $sql = "UPDATE `crud` SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id='$abc'";


    $result = mysqli_query($con,$sql);


    if($result)
    {
        echo"updated successfully";
        header("location:display.php");
        exit();
    }
    else
    {
        echo" error is ".mysqli_error($con);

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
    <form method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="mb-3">
        <label for="name" class="form-label">NAME</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name" aria-describedby="emailHelp" autocomplete="off" value="<?php echo $row['name']; ?>">
    </div>  
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email" aria-describedby="emailHelp" autocomplete="off" value="<?php echo $row['email']; ?>">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">PHONE</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Contact number" aria-describedby="emailHelp" autocomplete="off" value="<?php echo $row['mobile']; ?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">password</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="password" aria-describedby="emailHelp" autocomplete="off" value="<?php echo $row['password']; ?>">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Update</button>


        </form>
    </div>

    <!-- In the PHP POST method, data from HTML FORM is submitted/collected
     using a super global variable $_POST. This method sends the encoded
      information embedded in the body of the HTTP request and hence the 
      data is not visible in the page URL unlike the GET Method. -->
</body>

</html>