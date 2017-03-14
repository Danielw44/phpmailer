
  $('#ajax-contact').on('submit', function (e) {
    e.preventDefault();

    $.ajax({
        type:'post',
        url: '/includes/send.php',
        data: $(this).serialize(),
        success: function (){
          $(".form-message").html('Your message has been sent, we aim to get back to you within 24hrs');
        },
        fail: function(){
          $(".form-message").html('There was an error trying to send the form, please try again or contact us via email or phone');        }
    });
  });
