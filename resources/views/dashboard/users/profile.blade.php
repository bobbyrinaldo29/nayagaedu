@extends('dashboard.layouts.app', ['title' => 'Profile'])

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @if (session('errors'))
                <div class="alert alert-warning solid alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success solid alert-dismissible fade show" role="alert">
                    <strong>Success! </strong>{{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger solid alert-dismissible fade show" role="alert">
                    <strong>Failed! </strong>{{ Session::get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                </div>
            @endif
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" action="{{ route('profile.create') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        value="{{ Auth::user()->name }}" name="name" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom02">Email
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom02"
                                                        value="{{ Auth::user()->email }}" readonly>
                                                    <div class="invalid-feedback">
                                                        Please enter a Email.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom05">Gender
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="default-select wide form-control" id="validationCustom05"
                                                        name="gender">
                                                        @if (Auth::user()->gender == 'Male')
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        @elseif (Auth::user()->gender == 'Female')
                                                            <option value="Female">Female</option>
                                                            <option value="Male">Male</option>
                                                        @else
                                                            <option data-display="Select">Please select</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        @endif
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a one.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom08">Phone
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom08"
                                                        placeholder="Enter your phone number..."
                                                        value="{{ Auth::user()->phone }}" name="phone" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a phone no.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom06">ID Card
                                                    (KTP)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom06"
                                                        placeholder="Enter your ID card..."
                                                        value="{{ Auth::user()->idCard }}" name="idCard" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a ID Card.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom07">Address
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" id="validationCustom04" rows="50"
                                                        style="height:100px" placeholder="Enter your address..."
                                                        name="address" required>{{ Auth::user()->address }}</textarea>
                                                    <div class="invalid-feedback">
                                                        Please enter a address.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom06">Postal Code
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom06"
                                                        placeholder="Enter a postal code..." name="postalCode"
                                                        value="{{ Auth::user()->postalCode }}" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a postal code.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Bank Account</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Full Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Enter a full name" name="fullName"
                                                    value="{{ Auth::user()->fullName }}" required>
                                                <div class="invalid-feedback">
                                                    Please enter a full name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom05">Bank Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select wide form-control" id="validationCustom05"
                                                    name="bankName">
                                                    @if (\Auth::user()->bankName)
                                                        <option value="{{ Auth::user()->bankName }}">
                                                            {{ Auth::user()->bankName }}</option>
                                                    @else
                                                        <option data-display="Select">Please select</option>
                                                    @endif
                                                    @foreach ($bankName as $item)
                                                        @if ($item->status == '1')
                                                            <option value="{{ $item->name }}">{{ $item->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a one.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom06">Account
                                                Number
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="validationCustom06"
                                                    placeholder="Enter your account number..." name="accountNumber"
                                                    value="{{ Auth::user()->accountNumber }}" required>
                                                <div class="invalid-feedback">
                                                    Enter your account number.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="mb-3 row">
                                        <div class="col-lg-12 ms-auto d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h4 class="card-title text-white">Change Password</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" action="{{ route('profile.update') }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Current
                                                    Password
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" id="validationCustom01"
                                                        value="{{ Auth::user()->password }}" disabled>
                                                    <div class="invalid-feedback">
                                                        Please enter a password.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom06">New
                                                    Password
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" id="validationCustom06"
                                                        placeholder="Please enter a password..." name="password" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a password.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-3">
                                        <div class="mb-3 row">
                                            <div class="col-lg-12 ms-auto d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
