
<!DOCTYPE html>
<html>
<head>
	<title>Image IT Company</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/style.css">


  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
</head>

<body data-spy="scroll" data-target="#navbarsSupportedContent">
  
  
  <?php include 'menu.php' ?>
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Images/first.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/Second.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/Third.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<section class="my-5" id="about">
	<div class="py-5" id="about">
		<h3 class="text-center">About The Company</h3>
	</div>
	<div class=" container">
   <div class="row">

    <div class="col-lg-6 col-md-6 col-12 pt-xl-5 pl-xl-4">
     <img src="Images/Fourth.jpg" class="img-fluid aboutimage">
   </div>


   <div class="col-lg-6 col-md-6 col-12 ">
     <h3 >Image IT Company Pvt.Ltd</h3>
     <p class="py-2">
      Image IT Company Pvt. Ltd. is a company growing in the field of information technology. The organization is a team of driven young and experienced minds that are passionate to provide utmost customer satisfaction in terms of product and service delivery.
      <br><br>

      The company mostly undertakes project-based business and primarily focuses on providing software-based services to its customers. However, it serves clients with system related services as well as other related needs. Apart from serving for commercial needs, Image IT Company also provides professional training to freshers/individuals and prepare them for the outer world exposure on the related field.
      <br>
      <br>

      As the name suggests, we aim to maximize the market potential in IT by providing excellent products and services in the related field along with generating skillful manpower.

    </p>

    
  </div>
  
  
</div>

</div>


</section >


<section class="my-5" id="services" >
  <div class="py-5" id="services">
    
    <?php include 'services.php' ?>
  </div>
</section>

<div>
  <section  class="my-5">
    
    <div class="text-center">
      <h3 class="text-center ">Providing the simplest solution for the most complex problem !!</h3>
      <a class="btn btn-primary" href="contact.php" role="button">Connect With Us!</a>
      
      
    </div>


  </section>

</div>

<section>

  <div id="contact" class="my-5">
    <div class="py-5" >
      <div class="jumbotron">
        <div class="row">
          
          <div class="col-md-8 col-md-4 col-lg-12" >
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19842.614836470086!2d85.31495021983842!3d27.755159323847764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb192b9cada64d%3A0xdf67e83763747500!2sGongabu%2C%2044600!5e0!3m2!1sen!2snp!4v1596819224227!5m2!1sen!2snp" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
      
    </div>

  </section>

  



</body>

<?php include'footer.html' ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/googlemap.js"></script>
<script type="text/javascript">$('body').scrollspy({ target: '#navbarsSupportedContent', offset:108})</script>

</html>