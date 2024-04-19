
<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
  
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $address = $_POST['address'];
   
   $sql = "INSERT INTO `student`(`firstname`, `lastname`, `address`) VALUES ('$firstname','$lastname','$address')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP Student Application</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #ADD8E6;">
      Student
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New User</h3>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               
                  <label class="form-label">BRAND NAME</label>
                  <input type="text" class="form-control" name="firstname" placeholder="BRAND NAME">
               </div>

               <div class="col">
                  <label class="form-label">NAME OF PRODUCT</label>
                  <input type="text" class="form-control" name="lastname" placeholder="NAME OF PRODUCT">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">PRICE</label>
               <input type="address" class="form-control" name="address" placeholder="PRICE">
            </div>


            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
