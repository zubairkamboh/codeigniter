












<!doctype html>

<html>
<head>
<title>
signup form
</title>
</head>

<body>

<?php  include('pnavbar.php');        ?>

<?php echo form_open('home/loginano'); ?>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<div  class="container">

  

  <fieldset>
    <legend>Legend</legend>






    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter name" name='name' >
 
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
    
        <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter password" name="password" >
    </div>
    <center><button type="submit" class="btn btn-primary" >Submit</button></center>
  </fieldset>
</form>

</div>





 <p align="center" style="margin-top:40px;"><a href="<?php echo base_url().'home/signup' ?>" class="btn btn-success" role="button">Register Now</a>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



</body>
</html>












