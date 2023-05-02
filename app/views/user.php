<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>PHP MVC System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
   
    <div class="form-group mgT">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <section>
                    <h2>CRUD | MVC | PDO System</h2>
                    <hr>
                    <h3>List of Users</h3>
                    <?php foreach ($recordset as $user) { ?>
                        <div class="box-shadow pd bg-white">
                            <div class="row ">
                                <div class="col-md-2"><?php echo $user->getFirstName(); ?></div>
                                <div class="col-md-3"><?php echo $user->getLastName(); ?></div>
                                <div class="col-md-4"><?php echo $user->getEmail(); ?></div>
                                <div class="col-md-3 txt-right"><a class="btn btn-danger" href="/user/delete/<?php echo $user->getId(); ?>">Delete</a></div>
                            </div>
                        </div>
                    <?php } ?>
                <section>
            </div>
            <div class="col-md-3"></div>
        </div>
        
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <hr>
                <section>
                    <h3>Submit User</h3>
                    <div class="box-shadow pd bg-white">
                        <form action="/user/create" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" placeholder="Type your first name" name="first_name" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="firstname">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Type your last name" name="last_name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname">E-mail</label>
                                <input type="text" class="form-control" placeholder="Type your e-mail" name="email" required>
                            </div>
                            <h3>Address</h3>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="firstname">Address</label>
                                        <input type="text" class="form-control" placeholder="Type your Address" name="address">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="firstname">Number</label>
                                        <input type="text" class="form-control" placeholder="Type your number" name="number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">City</label>
                                        <input type="text" class="form-control" placeholder="Type your city" name="city">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button class="btn btn-primary">Save</button>
                        </form>
                    </div>
                    
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