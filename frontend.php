<?php


include("connect.php");

$sql = "select * from `crud`";
$result = mysqli_query($con,$sql);
 
// $file = file_get_contents($_FILES["image"]["tmp_name"]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<section>
        <h1>GeeksForGeeks</h1>
        <!-- TABLE CONSTRUCTION -->
        <div class="container row" style="margin-left: 130px;;">
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php 
            
                // LOOP TILL END OF DATA
                while($rows=mysqli_fetch_array($result))
                {
            ?>
           
            <div class="col-4 card my-2 mx-2" style="width: 18rem;    display: flex;
    align-items: center;
    justify-content: center;">
  <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($rows['image'] ).'" height="200" width="200" class="img-thumnail" />'; ?>
  <div class="card-body">
    <h5 class="card-title"> Name : <?php echo $rows['name'];?></h5>
    <h5 class="card-text"> Email :<?php echo $rows['email'];?></h5>
    <h5 class="card-text"> Phone No :<?php echo $rows['mobile'];?></h5>
   
  </div>
</div>
           
           
            
            <?php
                }
            ?>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<script>  
 $(document).ready(function(){  
      $('form').submit(function(e){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                e.preventDefault(); // Prevent form submission if validation fails
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     e.preventDefault(); // Prevent form submission if validation fails
                }  
           }  
      });  
 });  
 </script>

</html>