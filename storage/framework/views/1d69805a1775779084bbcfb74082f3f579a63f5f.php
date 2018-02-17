<!DOCTYPE html>
<html>
    <head>
        <title>Rio's Library</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        
        <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #033453;">
              <a class="navbar-brand" href="/">Rio's Library</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link active" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="/search"><i class="fas fa-search"></i> Search</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="" data-toggle="modal" data-target="#addBook"><i class="fas fa-plus"></i>  Add</a>
                  </li>
     
                </ul>
              
              </div>
            </nav>
        <div class="container">
            <div class="content" style="margin-top: 1em">

                <?php echo $__env->yieldContent('content'); ?>
                
            </div>
        </div>
    </body>

    <script type="text/javascript" src="<?php echo e(URL::asset('js/javascript.js')); ?>"></script>
    <?php echo $__env->make('modal.addData', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</html>
