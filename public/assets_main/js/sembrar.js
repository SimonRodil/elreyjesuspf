  $( function() {
    $( "[name=date]" ).datepicker({
      dateFormat: "yy-mm-dd"
    });
  } );

  $('#form-nueva-siembra').submit(function(e){ e.preventDefault(); 
                                              
      // Empieza a validar el formulario
      var $btn = $("button[form=form-nueva-siembra], #form-nueva-siembra button[type=submit]");
      var form = $(this);
      var $btnOT = $btn.html();
      var $data = $(form).serialize();

      $.ajax({
        method: "POST",
        dataType: "json",
        data: $data,
        url: "dri/siembras/new.php",
        beforeSend: function() { $btn.html('<span class="fa fa-cog fa-spin"></span>').attr('disabled', true); },
        complete: function() { $btn.html($btnOT).attr('disabled', false); },
        success: function() { alert('Datos enviados exitosamente'); $(form).trigger('reset'); },
        error: function(data) { alert('Error!'); }
      });

  });  

$('#launch').modal();