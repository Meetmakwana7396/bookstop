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
            <div class="row poster">
                <p>BOOKSTOP</p>
                <p class="sent">a place to find peace of your mind</p>
            </div>
            <div class="card-area">
                <h3>Book List</h3>
                <div class=" row card-list d-flex cols-row-3 justify-content-evenly" id="card-list">


                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var cardData = "";
            $.ajax({
                url: "display-books.php",
                dataType: "JSON",
                type: "GET",
                success: function(data) {
                    const products = data.data;
                    for (let key in products) {
                        cardData += `<div class="card mb-3 p-3 col-4" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <img src='../../Admin/html/image/${products[key].image}' class="img-fluid rounded card-image" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">${products[key].name}</h5>
                                    <p class="card-text"> <span class="card-labels">Category: </span> ${products[key].category} </p>
                                    <p class="card-text"> <span class="card-labels">Description: </span> ${products[key].description}</p>
                                    <p class="card-text"> <span class="card-labels">Price: </span> ${products[key].price}</p>

                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                                <div class="col"><div class="btn atc-btn">Add To Cart</div></div>
                                <div class="col"><div class="btn atf-btn">Add To Favourite</div></div>
                        </div>
                    </div>`;

                    }
                    $("#card-list").html(cardData);

                },

            });
        });
    </script>
</body>

</html>