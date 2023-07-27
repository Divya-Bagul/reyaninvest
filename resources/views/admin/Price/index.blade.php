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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
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
                    <input type="text" name="pCardName" class="form-control" placeholder="Price Card name">
                  </div>
                  <div class="col-6 form-group">
                    <label for="recipient-name" class="col-form-label">Price Card Amount:</label>
                    <input type="number" name="pCardAmount" class="form-control" placeholder="Price Card Amount">
                  </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label for="recipient-name" class="col-form-label">Price Card Duration:</label>
                      <input type="text" class="form-control"  name="pCardDuration" placeholder="Price Card Duration">
                    </div>
                    <div class="col-6 form-group">
                        <label for="recipient-name" class="col-form-label">Price Card Offer:</label>
                        <select class="form-control" name="pCardOffer">
                            <option>Default select</option>
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 form-group">
                      <label for="recipient-name" class="col-form-label">Price Card Detail:</label>
                      <input type="text" class="form-control" name="pCardDetail1" placeholder="Price Card Detail">
                    </div>
                  </div>
                 
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Card Data</button>
        </div>
      </div>
    </div>
  </div>
      {!! $dataTable->table(['class' => 'w-100'], true) !!}
      {{ $dataTable->scripts() }}
    </div>

    

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
</x-app-layout>
