<?php
include_once 'dbconnect.php';
include_once 'checkconnection.php';
include_once 'handleAddproduct.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Product :)</title>

</head>

<body>
  <br>
  <?php include_once 'navbar.php'; ?>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Product
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">My products</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form method='POST' >
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
              <input type="text" class="form-control" id="inputNmae3" name="name">
            </div>
            <div class="form-group">
              <label for="inputusername3" class="col-sm-2 col-form-label">Product Price</label>
              <input type="number" class="form-control" min="0" name="price">
            </div>
            <div class="form-group mb-4">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
              <input type="number" class="form-control" min="0" name="quantity">
            </div> 
            <div class="form-group mb-4">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Upload</label>
              <input type="file" class="form-control" name="image" accept="image/png, image/gif, image/jpeg, image/jpg">
            </div>


            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="addProduct">Add</button>

          </form>
        </div>

      </div>
    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>