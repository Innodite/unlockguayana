
$(document).ready(function() {

  $(".lang_changed").change(function() {

    window.location.replace(
      window.location.origin + 
      "/lang/"               + 
      $(this).val()
    );

  });

  $(".currency_changed").change(function() {
    window.location.replace(
      window.location.origin + 
      "/currency/"           + 
      $(this).val()
    );
  });

});