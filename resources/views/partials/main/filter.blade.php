<!-- Filter Modal -->
<div class="modal fade" id="searchFilter">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Preference Alert</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Get alert for your preferred hostel. You can turn <br> this off in the <a
          class="text-primary text-decoration-none" href="{{ route('student.notification') }}">notification
          settings</a>

        <div class="form-group mt-3">
          <label for="sel1">Location/Town:</label>
          <select class="form-control" id="location" name="location">
            <option>1</option>
          </select>
        </div>

        <div class="form-group">
          <label for="sel1">Property Type:</label>
          <select class="form-control" id="property_type" name="property_type">
            <option>1</option>
          </select>
        </div>

        <div class="form-group">
          <label for="sel1">Mumber of Rooms:</label>
          <select class="form-control" id="no_of_rooms" name="no_of_rooms">
            <option>1</option>
          </select>
        </div>

        <div class="form-group">
          <label for="sel1">Rent Period:</label>
          <select class="form-control" id="rent_period" name="rent_period">
            <option></option>
          </select>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer clearfix">
        <button type="button" class="btn btn-text float-left">Reset</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>

    </div>
  </div>
</div>
