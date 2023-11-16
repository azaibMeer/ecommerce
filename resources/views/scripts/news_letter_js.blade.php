<script>
$(document).ready(function(){
  $("#subscribe").click(function(){

    let subscribe = $("#subscribe_email").val();
    if(subscribe !== '')

            $.ajax({
              url: "{{url('/subscribe')}}",
              type: "POST",
              data: {
                  email: subscribe,
                  _token: '{{csrf_token()}}'
              },
              dataType: 'json',
              success : function(response){
                // $('#result_output').text(response.message);
                toastr["info"](response.message);
                $("#form")[0].reset();
              }
             });
    else
        // $('#result_output').text("Please enter email");
      toastr["error"]("Please enter email");
  });
});
</script>