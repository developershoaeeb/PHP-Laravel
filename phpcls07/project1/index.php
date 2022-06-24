
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Project One</title>
  </head>
  <body>

<!-- <?php
    //$names = ["shoaeeb", "Nurul", "Labib", "Rezul"];?> -->

<!-- <h1><?php//  print_r ($names); ?></h1>
<h1><?php // print_r ($names[1]); ?></h1> -->

  <?php
    $products = [
    ['name' => 'banana', 'stock_qty' => 20, 'product_price' => 550],
    ['name' => 'apple', 'stock_qty' => 50, 'product_price' => 750],
    ['name' => 'orange', 'stock_qty' => 250, 'product_price' => 650],
    ['name' => 'jack Fruts', 'stock_qty' => 10, 'product_price' => 150]
    ];

    $total_stock_qiy = 0;
    foreach ($products as $key => $value) {
     $total_stock_qiy += $value['stock_qty'];
    }
    echo $total_stock_qiy;
  ?>


    <div class="container">
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product name</th>
      <th scope="col">Stock Quantity</th>
      <th scope="col">Product Price</th>
    </tr>
  </thead>

  <tbody>
<?php
$total_stock_qty = 0;
$total_product_price = 0;
foreach ($products as $key => $prod) {
  $total_stock_qty += $prod['stock_qty'];
  $total_product_price += $prod['product_price'];
?>
  <tr>
      <th scope="row"><?php echo ++$key ?></th>
      <td><?php echo $prod['name'] ?></td>
      <td><?php echo $prod['stock_qty'] ?></td>
      <td><?php echo $prod['product_price'] ?></td>
    </tr>

<?php } ?>
     <tr>
      <th scope="row"></th>
      <td></td>
      <td><?php echo $total_stock_qty; ?></td>
      <td><?php echo $total_product_price; ?></td>
    </tr>

  </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
