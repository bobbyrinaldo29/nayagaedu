@extends('dashboard.layouts.app', ['title' => 'Checkout'])

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('invoice.create') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 order-lg-2 mb-4">
                                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="text-muted">Your cart</span>
                                            <span class="badge badge-primary badge-pill">1</span>
                                        </h4>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">{{ $package->packageName }}</h6>
                                                    <small class="text-muted">{{ $package->description }}</small>
                                                </div>
                                                <span class="text-muted">IDR
                                                    {{ number_format($package->price) }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Service Fee</h6>
                                                    <small class="text-muted" id="dispSelectedRadio"></small>
                                                </div>
                                                <span class="text-muted">IDR
                                                    5,000</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Total</span>
                                                <input type="hidden" name="price" value="{{ $package->price }}" readonly>
                                                <strong>IDR {{ number_format($package->price + 5000) }}</strong>
                                            </li>
                                        </ul>
                                        <div id="displayHere">
                                            <div id="dispSelectedRadio"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 order-lg-1">
                                        <h4 class="mb-3">Billing address</h4>
                                        <input type="hidden" name="package_name" value="{{ $package->packageName }}">
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="fullName" placeholder=""
                                                value="{{ Auth::user()->name }}" name="fullname" required="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <span
                                                    class="text-muted">(Optional)</span></label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="you@example.com" value="{{ Auth::user()->email }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="1234 Main St" value="{{ Auth::user()->address }}" required>
                                            <div class="invalid-feedback">
                                                Please enter your shipping address.
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label for="zip" class="form-label">Postal Code</label>
                                                <input type="text" class="form-control" id="zip" placeholder=""
                                                    value="{{ Auth::user()->postalCode }}" required>
                                                <div class="invalid-feedback">
                                                    Postal code required.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="zip" class="form-label">Phone</label>
                                                <input type="text" class="form-control" id="zip" placeholder=""
                                                    value="{{ Auth::user()->phone }}" name="phone" required>
                                                <div class="invalid-feedback">
                                                    Phone code required.
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="mb-4">

                                        <h4 class="mb-3">Payment</h4>

                                        <div class="d-block my-3">
                                            @foreach ($channels as $item)
                                                @if ($item->active)
                                                    <div class="form-check custom-radio mb-2">
                                                        <input id="virtualAccount" name="method" type="radio"
                                                            class="form-check-input" value="{{ $item->code }}"
                                                            onclick="displaySelectedRadio(this)" required>
                                                        <label class="form-check-label"
                                                            for="virtualAccount">{{ $item->name }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <hr class="mb-4">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to
                                            checkout</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function displaySelectedRadio(id) {
            document.getElementById("dispSelectedRadio").innerHTML = id.value;
        }

        function displaySelectedCheckBox(id) {
            if (id.checked) {
                if (document.getElementById(id.value + "-disp")) {
                    document.getElementById(id.value + "-disp").innerHTML = id.value;
                } else {
                    document.getElementById("displayHere").innerHTML = document.getElementById("displayHere").innerHTML +
                        '<p id="' + id.value + '-disp" >' + id.value + '</p>';
                }
            } else {
                document.getElementById(id.value + "-disp").innerHTML = "";
            }
        }
    </script>
@endsection
