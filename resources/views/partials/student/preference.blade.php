<!-- Filter Modal -->
<form action="{{ route('student.notifications.preference') }}" method="POST">
  @csrf
  <div class="modal fade" id="preferenceAlert">
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
              <option value="">Select One</option>
              @foreach ($location as $loc)
                <option value="{{ $loc->name }}">{{ $loc->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="sel1">Property Type:</label>
            <select class="form-control" id="property_type" name="property_type">
              <option value="">Select One</option>
              @foreach ($property as $prop)
                <option value="{{ $prop->name }}">{{ $prop->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="sel1">Number of Rooms:</label>
            <select class="form-control" id="no_of_rooms" name="no_of_rooms">
              <option value="">Select One</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>

          <div class="form-group">
            <label for="sel1">Rent Period:</label>
            <select class="form-control" id="rent_period" name="rent_period">
              <option value="">Select One</option>
              <option value="Yearly">Yearly</option>
              <option value="Quaterly">Quaterly</option>
              <option value="Monthly">Monthly</option>
            </select>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer clearfix">
          <button type="button" class="btn btn-text float-left">Reset</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>

      </div>
    </div>
  </div>
</form>
