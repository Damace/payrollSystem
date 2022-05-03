                <!-- Custom Styled Validation -->
                <small>
              <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label" style="float:left">First name</label>
                  <input type="text" class="form-control" id="validationCustom01"  required>
                  <div class="valid-feedback">
                    Correct
                  </div>
                  <div class="invalid-feedback">
                     First name is required.
                    </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label" style="float:left">Last name</label>
                  <input type="text" class="form-control" id="validationCustom02" required>
                  <div class="valid-feedback">
                    Correct
                  </div>
                  <div class="invalid-feedback">
                     Last name is required.
                    </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom04" class="form-label" style="float:left">Gender</label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select Gender.
                  </div>
                </div>


              



                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label" style="float:left">Check number</label>
                  <input type="number" class="form-control" id="validationCustom01" required>
                  <div class="valid-feedback">
                    Correct
                  </div>
                  <div class="invalid-feedback">
                     Check number is required.
                    </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label" style="float:left">Phone number</label>
                  <input type="number" class="form-control" id="validationCustom02" required>
                  <div class="valid-feedback">
                    Correct
                  </div>
                  <div class="invalid-feedback">
                    Phone number is required.
                    </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label" style="float:left">Employed date</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>







                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label" style="float:left">Address</label>
                  <input type="text" class="form-control" id="validationCustom03" required>
                  <div class="valid-feedback">
                    Correct
                  </div>
                  <div class="invalid-feedback">
                    Address is required
                  </div>
                </div>
               



                <div class="col-md-3">
                  <label for="validationCustomUsername" class="form-label" style="float:left">Department</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                    Correct
                  </div>
                    <div class="invalid-feedback">
                      Department is required
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="validationCustom05" class="form-label" style="float:left">Position</label>
                  <input type="text" class="form-control" id="validationCustom05" required>
                  <div class="valid-feedback">
                    Correct
                  </div>
                    <div class="invalid-feedback">
                      Position is required
                    </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck"  style="float:left">
                      Filled above are TRUE
                    </label>
                    <div class="invalid-feedback" >
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form><!-- End Custom Styled Validation -->
</small>