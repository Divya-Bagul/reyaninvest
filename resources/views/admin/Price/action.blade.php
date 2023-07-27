<a  data-href= {{  route('user.delete',$query->id)}} title="delete Price Card" class="delete"><i class="fa-solid fa-pen-to-square"></i> Delete</a>



<script>
 $("body").on("click", '.delete', function() {
   
    swal({
  title: "Are you sure want to delete this User ?",
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
</script>


