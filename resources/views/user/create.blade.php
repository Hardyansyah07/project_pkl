@extends('layouts.backend')
@section('content')
<!--class='row'-->
    <form action="{{ route('User.store') }}" method="POST">
          @csrf
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body p-4">
								<h5 class="mb-4">Add User</h5>
								<form class="row g-3" method="POST">
									<div class="col-md-12">
                            <label for="input13" class="form-label">First Name</label>
                            <div class="position-relative input-icon">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" id="input13" placeholder="First Name">
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5">person_outline</i></span>
                            </div>
                        </div>
									<div class="col-md-12">
                            <label for="input16" class="form-label">Email</label>
                            <div class="position-relative input-icon">
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" id="input16" placeholder="Email">
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5">email</i></span>
                                </div>
                             </div>
									<div class="col-md-12">
                            <label for="input17" class="form-label">Password</label>
                            <div class="position-relative input-icon">
                                <input type="password" class="form-control" name="password" required id="input17"
                                    placeholder="Password">
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5">lock_open</i></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="input17" class="form-label">Confirm Password</label>
                            <div class="position-relative input-icon">
                                <input type="password" class="form-control" name="password_confirmation" id="input17"
                                    placeholder="Password">
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5">lock_open</i></span>
                            </div>
                        </div>
									<div class="col-md-12">
                            <label for="input19" class="form-label">Country</label>
                            <select id="input19" name="is_admin" class="form-select">
                                <option selected="">Choose...</option>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                                <button type="button" class="btn btn-grd-royal px-4">Reset</button>
                            </div>
                        </div>
					</form>
				</div>
			</div>
          </div>
          </form>
<!--end row-->
@endsection
