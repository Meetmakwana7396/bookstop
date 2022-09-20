<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Client</title>
</head>

<body>

  <div class="wrapper">
    <?php
    include "client-sidebar.php";
    ?>
    <div class="container-fluid home-content">
      <div class="container cartproducts my-4">

        

      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      var cartData = "";
      $.ajax({
        url: "display-cart.php",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          const products = data.data;
          for (let key in products) {
            cartData += `<div class="d-flex product-bar p-3 my-4">
  <div class="flex-shrink-0">
    <img src='../../Admin/html/image/${products[key].product_image}' class="flex-shrink-0 img-fluid rounded card-image me-3" alt="...">
  </div>
  <div class="flex-grow-1 ms-3">
  <h5 class="mt-0"> <span>Product ID: </span> ${products[key].productid}</h5>
  <p><span> Name: </span>${products[key].product_name}</p>
  <p><span> Category: </span>${products[key].product_category}</p>
  <p><span> Price: </span>${products[key].product_price}</p>  
  </div>

  <div class="flex-grow-0 ms-3">
  <div class="btn atc-btn" >Place Order</div> 
  <div class="btn di-btn" >Delete</div>
  </div>
</div>`;

          }
          $(".cartproducts").html(cartData);
        }
      });
    });
  </script>
</body>

</html>

<!-- <img src='../../Admin/html/image/${products[key].product_image}' class="flex-shrink-0 img-fluid rounded card-image me-3" alt="...">
<div>
  <h5 class="mt-0"> <span>Product ID: </span> ${products[key].productid}</h5>
  <p><span> Name: </span>${products[key].product_name}</p>
  <p><span> Category: </span>${products[key].product_category}</p>
  <p><span> Price: </span>${products[key].product_price}</p>

</div> -->