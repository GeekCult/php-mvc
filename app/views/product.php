<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>Simple PHP MVC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="form-group mgT">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <section>
                    <h1>Products</h1>
                    <div class="box-shadow pd bg-white">
                        <div class="row ">
                            <div class="col-md-3"><?php echo $product->getTitle(); ?></div>
                            <div class="col-md-6"><?php echo $product->getTitle(); ?></div>
                            <div class="col-md-3"><?php echo $product->getPrice(); ?></div>
                        </div>
                    </div>
                    <ul class="hide">
                        <li></li>
                        <li><?php echo $product->getDescription(); ?></li>
                        <li></li>
                        <li><?php echo $product->getSku(); ?></li>
                        <li><?php echo $product->getImage(); ?></li>
                    </ul>
                    <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
                <section>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>