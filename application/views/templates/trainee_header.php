<html>
    <head>
        <title>MiliTrain</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
        <script src="http://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>        
        <script src="<?php echo base_url(); ?>/assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand nav-main" href="#">MiliTrain</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-all-links" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item nav-links">
                    <a class="nav-link" href="<?php echo base_url(); ?>trainee/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item nav-links">
                    <a class="nav-link" href="<?php echo base_url(); ?>trainee/about">About us</a>
                </li>
                <li class="nav-item dropdown nav-links">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" href="<?php echo base_url(); ?>trainee/profile">Profile</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>trainee/login">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">