<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/nav.php') ?>


  <div class="site-container">

    <section class="content-section">
      <main class="main-content">
        <h2>Get in touch</h2>
        <p><strong>If you have a question or would like to book with us, simply get in touch by</strong></p>
        <p>Calling: <a href="tel:07545826996">07545 826 996,</a> <a href="tel:01616377690">0161 637 7690</a></p>
        <p>Email: <a href="mailto:info@citycentrephysiotherapy.co.uk?subject=Website_Enquiry">info@citycentrephysiotherapy.co.uk</a>
        <!-- BEGIN : CONTACT FORM -->
          <form id="ajax-contact" class="contact-form" action="/includes/send.php" method="post">
           <div class="contact-form--title">Fill in the enquiry form</div>
           <!-- BEGIN : FLEX CONTAINER -->
           <div class="flex-container">
             <!-- BEGIN : FORM CONTROL -->
             <div class="form-control">
               <i class="pe-7s-user"></i>
               <input type="text" name="name" placeholder="Name" required="">
             </div>
             <!-- END : FORM CONTROL -->
             <!-- BEGIN : FORM CONTROL -->
             <div class="form-control">
               <i class="pe-7s-mail"></i>
               <input type="email" name="email" placeholder="Email" required="">
             </div>
             <!-- END : FORM CONTROL -->
           </div>
           <!-- END : FLEX CONTAINER -->
           <!-- BEGIN : FORM CONTROL -->
           <div class="form-control">
             <i class="pe-7s-comment"></i>
             <textarea name="message" placeholder="Message" required=""></textarea>
           </div>
           <!-- END : FORM CONTROL -->

           <button type="submit" name="submit" class="btn btn--submit">Submit</button>

           <div id="form-messages" class="form-message"></div>
          </form>
          <!-- END : CONTACT FORM -->

          <h2>Where we are</h2>

          <p><strong>Address: </strong>
          <p>City Centre Physiotherapy <br>
            Sports Direct Gym <br>
            55 King Street <br>
            M2 4LQ <br>
            Manchester</p>

            <h3>Map</h3>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.290113911044!2d-2.2458210342300733!3d53.48114598000747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb1c16d7f040b%3A0xff783e75ac7d50d7!2sKing+St%2C+Manchester+M2+4LQ!5e0!3m2!1sen!2suk!4v1489418640385" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/providers.php') ?>
      </main>

      <aside class="side-content">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
      </aside>

    </section>

    <div class="jump-container">
      <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/jumps.php') ?>
    </div>

  </div>


  <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php') ?>
