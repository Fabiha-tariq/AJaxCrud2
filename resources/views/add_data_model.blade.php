<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="" id="addDataForm" method="POST">
            @csrf
             <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <input type="text" name="firstname" id="firstname" class="form-control mt-2"
                placeholder="enter first name">
                
            <input type="text" name="lastname" id="lastname" class="form-control mt-2"
                placeholder="enter last name">
            <input type="email" name="email" id="email" class="form-control mt-2"
                placeholder="enter email">
            <input type="password" name="password" id="password" class="form-control mt-2"
                placeholder="enter passwords">      
              </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add_data">Add Data</button>
        </div>
      </div>
        </form>
     
    </div>
  </div>