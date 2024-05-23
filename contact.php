<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title> Hotel Grand Haven - CONTACT </title>

  <?php require('inc/links.php'); ?>
  
  <!-- !important tag is given to override inline css i.e border-dark-->
  
</head>
<body class="bg-light">
  
  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Nobis minus quae reiciendis et <br> quia illum illo quas 
      soluta beatae repudiandae?
    </p>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
         <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3568.7308924516647!2d88.08460997528225!3d26.56091177685865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e5ae7766f133ab%3A0x6810d4af4859929!2sMechi%20Multiple%20Campus!5e0!3m2!1sen!2snp!4v1713801293923!5m2!1sen!2snp"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/dLSUTBVzT7JYnEb39" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
           <i class="bi bi-geo-alt-fill"></i> Mechi Multiple Campus, Bhadrapur, Jhapa
          </a>
          
          <h5 class="mt-2"> Call Us At</h5>
          <a href="tel: +977 12345 12345" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-inbound-fill"></i> +977 12345 12345
          </a>
          <br>
          <a href="tel: +977 67890 67890" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-inbound-fill"></i> +977 67890 67890
          </a>
          
          <h5 class="mt-4">Email</h5>
          <a href="mailto: binaygupta191@gmail.com" class="d-inline-block text-decoration-none text-dark">
           <i class="bi bi-envelope-fill"></i> binaygupta191@gmail.com
          </a>

          <h5 class="mt-4"> Follow Us</h5>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter-x me-1"></i> 
          </a>
         
          <a href="#" class="d-inline-block fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
            
          </a>
          <a href="#" class="d-inline-block text-dark fs-5">
            <i class="bi bi-instagram me-1"></i>
          </a>


        </div>
      </div>

      <div class="col-lg-6 col-md-6  px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5>Send a Message</h5>
              
              <div class="mt-3">
                <label class="form-label" style="font-weight: 500; ">Name</label>
                <input type="text" class="form-control shadow-none">
              </div>

              <div class="mt-3">
                <label class="form-label" style="font-weight: 500; ">Email</label>
                <input type="email" class="form-control shadow-none">
              </div>

              <div class="mt-3">
                <label class="form-label" style="font-weight: 500; ">Subject</label>
                <input type="text" class="form-control shadow-none">
              </div>

              <div class="mt-3">
                <label class="form-label" style="font-weight: 500; ">Message</label>
                <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="5" style="resize: none;"></textarea>
              </div>

              <button type="submit" class="btn text-white custom-bg mt-3"> SEND </button>

          </form>
        </div>
      </div>
    </div>
  </div>


 <?php require('inc/footer.php'); ?>

</body>
</html>