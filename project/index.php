
<?php 
require_once("../project/db.php");
Createdb();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport">
   <title>Store</title>
   <script src="https://kit.fontawesome.com/a0616ea52e.js" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- Custom stylesheet-->
<link rel="stylesheet" href="style.css">

</head>
<body>

<main>
<div class="container text-center">
<h1 class="py-4 bg-info text-light rounded"><i class="fas fa-store-alt"></i> Store</h1>

<div class="d-flex justify-content-center">
  <form action="" method="post" class="w-50">
    <div class="py-2">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-id-card-alt"></i></div>
         </div>
        <input type="text" autocomplete="off" placeholder="ID" class="form-control" id="inlineFormInputGroup" placeholder="Username">
        </div>
      </div>
      <div class="pt-2">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
         </div>
        <input type="text" autocomplete="off" placeholder="Book Name" class="form-control" id="inlineFormInputGroup" placeholder="Username">
        </div>
            <div class="row">
              <div class="col">
               <div class="input-group mb-2">
                 <div class="input-group-prepend">
              <div class="input-group-text bg-warning"><i class="fab fa-monero"></i></div>
         </div>
        <input type="text" autocomplete="off" placeholder="Author" class="form-control" id="inlineFormInputGroup" placeholder="Username">
        </div>
        </div>
        <div class="col">
        <div class="input-group mb-2">
                 <div class="input-group-prepend">
              <div class="input-group-text bg-warning"><i class="fas fa-dollar-sign"></i></div>
         </div>
        <input type="text" autocomplete="off" placeholder="Price" class="form-control" id="inlineFormInputGroup" placeholder="Username">
        </div>
        </div>
      </div><br>
      <br>
      <div class="d-flex">
      <button type="button" class="btn btn-success"><i class="fas fa-plus" style="color:white" dat-toggle="tooltip" data-placement="bottom"title="Create"></i></button>
      <button type="button" class="btn btn-primary"><i class="fas fa-sync" style="color:white" dat-toggle="tooltip" data-placement="bottom"title="Read"></i></button>
      <button type="button" class="btn btn-light border"><i class="fas fa-pen-alt" style="color:blue" dat-toggle="tooltip" data-placement="bottom"title="Update"></i></button>
      <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt" style="color:black" dat-toggle="tooltip" data-placement="bottom"title="Delete"></i></button>
      </div>
     </form>
  </div>
  </div>
  
  <!--Bootstrap table-->
          <div class="d-flex py-4 table-data rounded">
          <table class="table table-striped table-dark">
          <thead class="thead-dark">
          <tr>
          <th>ID</th>
          <th>Book Name</th>
          <th>Publisher</th>
          <th>Book Price</th>
          <th>Edit</th>
          </tr>
          </thead>
          <tbody id="tbody">
          <tr>
          <td>1</td>
          <td>Book name</td>
          <td>Paws</td>
          <td>44.99</td>
          <td><i class="fas fa-edit btnedit"></i></td>
          </tr>
          </tbody>
          </table>
          </div>
  

  </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>