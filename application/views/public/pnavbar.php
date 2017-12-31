
<body>









<?php= link_tag('assets/css/bootstrap.min.css')?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">EASYSHOP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(). 'home/signup'  ?>">signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(). 'home/login'  ?>"">login</a>
      </li>
    
<style>
.fa-shopping-cart{

  font-size:30px;
  margin-right:35px;
  color:red;
  border:none;
}

</style>

     
    </ul>

    <form class="form-inline my-2 my-lg-0">


<!-- dropdown menu  -->



<!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class=""></button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
     <a class="fa fa-shopping-cart">  </a>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>







<!-- dropdown menu end -->



      

       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(). 'home/logout'  ?>"">LOGOUT</a>
      </li>

      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>