@extends('layout.main')

@section('container')

<div class="sign-up container ">
    <div class="d-flex justify-content-between align-items-center mb-2">
      <span style="font-weight:bold; font-size:2rem;">&larr;</span>
    </div>

    <div class="progress rounded-pill mb-4" style="height: 5px;">
      <div class="progress-bar-fill rounded-pill"></div>
    </div>

    <h3 class="fw-bold mb-4">Give Us Your Primary Information</h3>

    <form>
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="name" id="name">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Write Your Name">
        </div>
        <div class="col-md-6">
          <label class="form-label" id="lastname">Last Name</label>
          <input type="text" name="lastname" class="form-control" placeholder="Write Your Last Name">
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-6">
          <label class="form-label" id="email">Email<span class="text-danger">*</span></label>
          <input type="email" name="email" class="form-control" placeholder="Your Email">
        </div>
        <div class="col-md-6">
          <label class="form-label">Phone Number<span class="text-danger">*</span></label>
          <div class="input-group">
            <span class="input-group-text">
              <img src="https://flagcdn.com/w40/pt.png" width="20" alt="Flag">
            </span>
            <input type="text" class="form-control" placeholder="+351">
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Continue</button>
    </form>
  </div>

@endsection