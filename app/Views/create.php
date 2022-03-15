<?php
$errors = [];
$title = '';
$price = '';
$description = '';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Products CRUD</title>
  </head>
  <body>
  <div class="container">
  <a href="<?php base_url('create-product')?>" class="btn btn-success float-end">Create new Product</a>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
      <div><?php echo $error ?></div>
      <?php endforeach; ?>
  </div>
  <?php endif; ?>
<form method="post" action="/Home/create">  
  <div class="form-group">
    <label>Product Name</label>
    <input type="text" name="pname" class="form-control" value=""> 
  </div>
  <div class="form-group">
    <label>Product Description</label>
    <textarea class="form-control" name="pdescription"></textarea>
  </div>
  <div class="form-group">
    <label>Product Price</label>
    <input type="number" step=".01" name="price" value="<?php echo $price ?>"  class="form-control" value="" > 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form><br>
    <a href="/Home/read" class="btn btn-success">View Products</a> 
</div>
</body>
</html>