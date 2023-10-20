<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="" id="updateDataForm" method="POST">
            @csrf
            <input type="hidden" id="up_id">
             <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <input type="text" name="up_firstname" id="up_firstname" class="form-control mt-2"
                placeholder="enter first name">
                
            <input type="text" name="up_lastname" id="up_lastname" class="form-control mt-2"
                placeholder="enter last name">
            <input type="email" name="up_email" id="up_email" class="form-control mt-2"
                placeholder="enter email">
            <input type="password" name="up_password" id="up_password" class="form-control mt-2"
                placeholder="enter passwords">      
              </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_data">Update Data</button>
        </div>
      </div>
        </form>
     
    </div>
  </div>