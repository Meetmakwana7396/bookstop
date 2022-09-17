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
            <div class="card-area area">
                <h3>Book List</h3>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Book title</h5>
                                <p class="card-text"> <span class="card-labels">Category: </span> Lorem, ipsum. </p>
                                <p class="card-text"> <span class="card-labels">Description: </span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, deserunt? </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>