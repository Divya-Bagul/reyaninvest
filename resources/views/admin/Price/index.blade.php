<x-app-layout>
    <div class="container mt-5">
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <ul>
              <li>{!! \Session::get('success') !!}</li>
          </ul>
      </div>
    @endif

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary  modalbtn" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="container">
                <div class="row">
                  <div class="col-6 form-group">
                    <label for="recipient-name" class="col-form-label">Price Card Name:</label>
                    <input type="text" name="pCardName" id="pCardName" class="form-control" placeholder="Price Card name">
                    @csrf
                    <input type="hidden" value="" name="id" id ="id">
                  </div>
                
                  <div class="col-6 form-group">
                    <label for="recipient-name" class="col-form-label">Price Card Amount:</label>
                    <input type="number" name="pCardAmount" id="pCardAmount" class="form-control" placeholder="Price Card Amount">
                  </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="recipient-name" class="col-form-label">Price Card Duration:</label>
                      <input type="text" class="form-control" id="pCardDuration"  name="pCardDuration" placeholder="Price Card Duration">
                    </div>
                    <div class="col-6 form-group">
                        <label for="recipient-name" class="col-form-label">Price Card Offer:</label>
                        <select class="form-control" id="pCardOffer" name="pCardOffer">
                            <option>Default select</option>
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 form-group">
                      <label for="recipient-name" class="col-form-label">Price Card Detail:</label>
                      <input type="text" class="form-control" id="pCardDetail1"  name="pCardDetail1" placeholder="Price Card Detail">
                    </div>
                  </div>
                 
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add close"   data-dismiss="modal" data-href="{{route('pricecard.add')}}">Save Card Data</button>
        </div>
      </div>
    </div>
  </div>
      {!! $dataTable->table(['class' => 'w-100'], true) !!}
      {{ $dataTable->scripts() }}
    </div>

    

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  

<script>
   $("body").on("click", '.modalbtn', function() {
     
               
    $('#pCardName').val('');
              $('#id').val('');
                $('#pCardAmount').val('');
                $('#pCardDuration').val('');
               $('#pCardOffer').val('');
                 $('#pCardDetail1').val('');
                
          
     });
  $("body").on("click", '.add', function() {
     $.ajax({
          type: 'POST',
          url: $(this).attr('data-href'),
          data:{
                '_token': $('input[name="_token"]').val(),
                'pCardName': $('#pCardName').val(),
                'id': $('#id').val(),
                'pCardAmount': $('#pCardAmount').val(),
                'pCardDuration': $('#pCardDuration').val(),
                'pCardOffer': $('#pCardOffer').val(),
                'pCardDetail1': $('#pCardDetail1').val(),
                
          },
          success: function(response) {
            $("#exampleModal").modal('hide');
              if(response.response = 'success'){
                  $('#id').val('');
                  swal("Your Pricing Card has been Created!", {
                  icon: "success",
              });
              $('#pricing-table').DataTable().ajax.reload();   
            }else{
              if(response.response = 'fail'){
                  swal(" failed", {
                  icon: "error",
              });
            }else{
              swal(response.response, {
                  icon: "error",
              });
            }
            }   
          }
      });
  });
 </script>
 </x-app-layout>
 
 
 