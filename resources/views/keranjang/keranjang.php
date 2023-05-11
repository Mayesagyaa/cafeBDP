<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cafe Wikrama</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="assets/images/food.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>


<body >

<nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
        <div class="container">
            <a class="navbar-brand" style="font-family: 'Shantell Sans', cursive;" href="#">
                <img src="assets/images/wikrama-logo.png" alt="Bootstrap" width="50" height="50"> <b>WIKRAMA CAFE</b>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"
                style="font-family: 'Shantell Sans', cursive;">
                <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                    <a class="button-30" role="button"><i class=" fa-solid fa-cart-shopping"></i>Keranjang<p class="jikakalau">4</p></a>
                    </li>
            </div>
        </div>
    </nav>
 

<div class="table-cart">
    <table class="table">
        <tr class="table-in">
            <th> Product </th>
            <th> Price </th>
            <th> Quantity </th>
            <th> Subtotal </th>
            <th> Action </th>
        </tr>
        <tr class="table-in">
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td class="delete">
                <form action="">
                    <input class="delete-button" type="submit" value="Delete">
                </form>
            </td>
        </tr>
    </table>
    <br><hr class="hr">
    <div>
        <h1 class="total-price">Total Rp.18000</h1>
    </div>
    <hr class="hr">
    <div class="cart-action">
        <form action="">
            <input class="back-action" type="submit" value="Continue Shopping">
        </form>
        <form action="">
            <input class="checkout-action" type="submit" value="Checkout">
        </form>
    </div>
</div>
</body>