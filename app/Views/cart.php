
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

    <h1>Products Cart</h1>

    
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
            
            <a href="/Home/deleteFromCart/<?php echo $product['id'];?>" class="btn btn-success">Remove from cart</a>
            
            </td>
    <?php endforeach; ?>
<?php
$con = mysqli_connect("localhost","root","","cart");
$result = mysqli_query($con, 'SELECT SUM(price) AS value_sum FROM cart'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
?>
<style>
div.a {
  text-align: center;
}

div.b {
  text-align: left;
}

div.c {
  text-align: right;
} 

div.d {
  text-align: justify;
} 
#bloc1, #bloc2
{
    display:inline;
}
</style>
  <div class="c">
  <div class="col-auto" id="bloc1">
    <label for="inputPassword6" class="col-form-label"><h4>GRAND TOTAL: <?php echo $sum; ?></h4></label>
  </div>
  </div>
  </tbody>
</table>
<a href="/Home/read/<?php echo $product['id'];?>" class="btn btn-primary">Continue Shopping</a>
<a href="/Home/deleteCart/<?php echo $product['id'];?>" class="btn btn-primary">Checkout</a>

    </div>
  </body>
</html>