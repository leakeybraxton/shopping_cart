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
 

<script type="text/javascript">
document.getElementById("formid").submit(); // Here formid is the id of your form
                           
</script>


<div class="container">

<h2>Confirm Purchase</h2>



<form method="post" action="/Home/cartUpdate/<?php echo $query['id'];?>">
  <div class="form-group">
    <label>Name</label>
    <input id="" class="form-control" name="pname" value="<?php echo $query['pname'] ?>" readonly>
  </div>
  <div class="form-group">
    <label>Description</label>
    <textarea id="" class="form-control" name="pdescription" rows="3" readonly><?php echo $query['pdescription'] ?></textarea>
  </div>

  <div class="form-group">
    <label>Price</label>
    <input id="" class="form-control" name="price" value="<?php echo $query['price'] ?>" readonly>
  </div>

  <button type="submit" class="btn btn-primary">Confirmed</button>

  
</form>

</div>

</body>
</html>