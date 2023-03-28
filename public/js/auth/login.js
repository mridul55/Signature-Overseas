 $('#login').on('submit', function(e){
   e.preventDefault();
   $("#loader").show();
   $(".ajax_error").remove();
   var form = $(this).serialize();
   var url = $(this).attr('action');
        $.ajax({
        method:'POST',
        url: url,
        data :form,
        dateType: 'json',
        success: function(data){
        $("#loader").hide();
        toastr["success"](data.message, data.title)
        setTimeout(function(){
        window.location.href=data.goto;
        },2500);
         },
         error:function (data) {
           $("#loader").hide();
          var databaseSingnal =  JSON.parse(data.responseText);
          toastr.error(databaseSingnal.message);
           var jsonValue = $.parseJSON(data.responseText);
          const errors = jsonValue.errors;
          var i = 0;
          $.each(errors, function(key, value) {
              const first_item = Object.keys(errors)[i]
              const message = errors[first_item][0]
              $('#' + first_item).after('<div class="ajax_error" style="color:red; position:absolute;top:-20px; left:14px;">' + value + '</div');
               toastr.error(value);
              i++;
          });
         }
     });
  });
