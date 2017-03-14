
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


<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
