
<div style="margin-right:30px">
    <div class="alert alert-danger" role="alert" id="alert_danger">
    </div>
<form class="form-inline pt-3" action="javascript:void(0)" id="ems_form_data" method="POST">
  <div class="alert alert-warning text-center">Add Employee</div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" required name="email">
  </div>

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="form-group">
    <label for="age">Age:</label>
    <input type="number" class="form-control" id="age" name="age">
  </div>

  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" id="phone" required name="phone">
  </div>

  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address" required name="address">
  </div>

  <div class="form-group pt-3">
    <select class="form-select" aria-label="Default select example" required name="gender">
        <option selected>Select gender</option>
        <option value="nam">Nam</option>
        <option value="nu">Nữ</option>
    </select>
  </div>

  <div class="form-group pt-3 d-flex justify-content-center">
      <button type="submit" class="btn btn-info pt-3">Submit</button>
  </div>
</form>
</div>