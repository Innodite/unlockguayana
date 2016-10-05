
$(document).ready(function() {

  $(".lang_changed").change(function() {

    window.location.replace(
      window.location.origin + 
      "/lang/"               + 
      $(this).val()
    );

  });

});