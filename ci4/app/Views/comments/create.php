<!DOCTYPE html>
<html lang="en">
    <head>
	
	    <!-- META | HERE ONLY -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
	    <!-- TITLE | HERE ONLY -->
        <title>About Me</title>
		
	    <!-- CONNECTIONS | HERE ONLY -->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
	    <!-- LINKS | HERE ONLY -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	    <!-- SCRIPTS | HERE ONLY -->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    </head>
	
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Angelo Danriec Villaflor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#forms">Forms</a></li>

                </ul>
            </div>
        </nav>
		
		 <div id="contact"> <!-- === Contact Start === -->
    <div class="container"> <!-- === Container Start === -->
      <div class="row"> <!-- === Row Start === -->
      
          <br>
          <h1 class = "post-comments">Post Your Comments Here</h1>
		  
		  <div class = "errors">
            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>
			</div>

            <form action="/lab3/ci4/public/comments" method="post">
                <?= csrf_field() ?>

                <div class="row"> <!-- === Row Start === -->
				
			<div id="form-demo">
              <form action="/lab3/ci4/public/comments" method="post">
 
                <div class="form-group">
                  <label class="control-label">Enter Your Name</label>
                  <input type="text" name="name" class="form-control required" id="name"/>
                </div>
 
                <div class="form-group">
                  <label class="control-label">Enter Email</label>
                  <input type="email" name="email" class="form-control" required id="email"/>
                </div>
 
                <div class="form-group">
                  <input type="submit" class="btn btn-success" value="Save info" />
                </div>
              </form>
            </div>
                </div> <!-- === Row End === -->
				
   