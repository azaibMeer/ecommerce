<script>
$(document).ready(function(){
  $(".addToWishlist").click(function(){
   var user_id = {{Auth()->check() ? 'true' : 'false'}};
   if(user_id){
      var product_id = $(this).attr("data-id");
      $.ajax({

         url: '/add_to_wishlist',
         type: 'post',
         data:{
            product_id : product_id,
            '_token': "{{csrf_token()}}",
         },
         success: function(response){
            alert(response.success);
         }
      });
   }else{
      alert("Please login to add in wishlist");
   }
  });
});
</script>