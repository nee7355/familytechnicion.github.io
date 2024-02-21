<?php include("header.php") ?>
<!--/ Header end -->
<div id="banner-area" class="banner-area">
  <img src="./images/banner/banner1.jpg" alt="">
  <!-- <img src="./images/banner/banner1.jpg" alt=""> -->
  <div class="banner-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner-heading">
            <h1 class="banner-title">Contact</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#"></a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
              </ol>
            </nav>
          </div>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="contact" class="contact">



  <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
      <!--  Section Title -->
  <div class=" section-title aos-init aos-animate" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
              <p>+1 6678 254445 41</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>info@example.com</p>
              <p>contact@example.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="500">
              <i class="bi bi-clock"></i>
              <h3>Open Hours</h3>
              <p>Monday - Friday</p>
              <p>9:00AM - 05:00PM</p>
            </div>
          </div><!-- End Info Item -->

        </div>

      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">

            <div class="col-md-6">
              <div class="form-input-feild">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>
            </div>

            <div class="col-md-6 ">
              <div class="form-input-feild">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>

            </div>

            <div class="col-md-12">
              <div class="form-input-feild">
                <input type="text" class="form-control"  name="subject" placeholder="Subject" required="">
              </div>

            </div>

            <div class="col-md-12">
              <div class="form-input-feild">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>
             
            </div>

            <div class="col-md-12 text-center">
              <!-- <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div> -->

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section>

<?php include("footer.php") ?>


<?php include("javascript.php") ?>