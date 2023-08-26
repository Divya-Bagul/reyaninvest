<a  data-href= {{  route('pricecard.edit',$query->id)}} title="edit Price Card" class="Edit"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

<a  data-href= {{  route('pricecard.delete',$query->id)}} title="delete Price Card" class="delete"><i class="fa-solid fa-trash"></i> Delete</a>



<script>
 $("body").on("click", '.delete', function() {
   
    swal({
    title: "Are you sure want to delete this Card ?",
    text: "",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
                      type: 'GET',
                      url: $(this).attr('data-href'),
                      success: function(response) {
                          if(response.data = 'success'){
                              swal("Poof! Your User has been deleted!", {
                              icon: "success",
                          });
                          $('#pricing-table').DataTable().ajax.reload();
                          }
                          
                      }
                  });
    } else {
      swal("Your user data is safe!");
    }
  })
 });

 $("body").on("click", '.Edit', function() {
   
   
     $.ajax({
                     type: 'GET',
                     url: $(this).attr('data-href'),
                     success: function(response) {
                         if(response.data = 'success'){
                            $("#exampleModal").modal('show');
                            $('#pCardName').val(response.price_card_name);
                            $('#pCardAmount').val(response.price_card_amount);
                            $('#pCardDuration').val(response.price_card_duration);
                            $('#pCardOffer').val(response.price_card_offer);
                            $('#pCardDetail1').val(response.price_card_detail);
                            $('#id').val(response.id);
                        }
                         
                     }
                 });
    

});
</script>


