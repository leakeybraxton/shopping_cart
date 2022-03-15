
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
    <form class="d-flex">
      <input name="q" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    
</nav>
      <div class="container">

    <h1>Products CRUD</h1>

    <p>
        <a href="/Home/index" class="btn btn-success">Create Product</a>
    </p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Description</th>
      <th scope="col">Price</th>      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($query as $product): ?>
        <tr>
            
            <td><?php echo $product['id'] ?></td>
            <td><?php echo $product['pname'] ?></td>
            <td><?php echo $product['pdescription'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td>
            <a href="/Home/edit/<?php echo $product['id'];?>" class="btn btn-primary">Edit</a>
            <a href="/Home/buy/<?php echo $product['id'];?>" class="btn btn-success">Buy</a>
            <a href="/Home/delete/<?php echo $product['id'];?>" class="btn btn-danger">Delete</a>
            
            </td>
    <?php endforeach; ?>
    <a href="/Home/CartRead" class="btn btn-success">Go To Cart</a>
  </tbody>
</table>
    </div>
  </body>
</html>