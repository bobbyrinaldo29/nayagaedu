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
                                                <div class="w-50">
                                                    <h6 class="my-0">{{ $package->packageName }}</h6>
                                                    <ul class="mt-2">
                                                        <li>
                                                            {{ $package->description }}
                                                        </li>
                                                    </ul>
                                                    <small class="text-muted"></small>
                                                </div>
                                                <input type="hidden" value="{{ $package->price }}">
                                                <div>
                                                    <span class="text-muted">USD
                                                        {{ number_format($package->price) }}</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Current Rate</h6>
                                                    <ul class="mt-2">
                                                        <li>
                                                            USD/IDR
                                                        </li>
                                                    </ul>
                                                    <small class="text-muted"></small>
                                                </div>
                                                <input type="hidden" value="{{ $package->price }}">
                                                <span class="text-muted">IDR
                                                    {{ number_format($convert) }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between active">
                                                <div class="text-white">
                                                    <h6 class="my-0 text-white">Total</h6>
                                                </div>
                                                <input class="text-white" type="hidden" name="price" value="{{ intval($total) }}">IDR {{ number_format($total) }}</input>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-8 order-lg-1">
                                        <h4 class="mb-3">Billing address</h4>
                                        <input type="hidden" name="package_name" value="{{ $package->packageName }}">
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label">Fullname</label>
                                            <input type="text" class="form-control" id="fullName" placeholder=""
                                                value="{{ Auth::user()->name }}" name="fullname" required="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="you@example.com" value="{{ Auth::user()->email }}" readonly>
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

                                        <h4 class="mb-3">Payment Method</h4>


                                        <select class="default-select form-control wide mb-5" name="method">
                                            @foreach ($channels as $item)
                                                @if ($item->active)
                                                    <option value="{{ $item->code }}">{{ $item->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>

                                        <hr class="mb-4">

                                        <input type="checkbox" class="form-check-input" id="term" required>
                                        <label class="form-check-label" for="term">I Accept
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalInfoTerm"
                                                class="text-primary">Term & Conditions</a> of Nayaga Edu and
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#riskDisclosure"
                                                class="text-primary">Risk Disclosure</a></label>

                                        @include('dashboard.users.components.termCondition')
                                        @include('dashboard.users.components.riskDisclosure')

                                        <hr class="mb-4">

                                        <div>
                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to
                                                checkout</button>
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

    <script>
        function displaySelectedRadio(id) {
            var check_prod_attr = $("input:radio[name=methodPay]:checked").val();
            var nameArr = check_prod_attr.split(',');
            var total_price = (parseInt({{ $package->price }}) + parseInt(nameArr[1])).toLocaleString('id-ID', {
                style: 'currency',
                currency: 'IDR'
            });

            if (check_prod_attr) {
                console.log(check_prod_attr)
            }

            document.getElementById("dispSelectedRadio").innerHTML = nameArr[0];
            document.getElementById("dispSelectedRadioTwo").innerHTML = nameArr[1];
            document.getElementById("total_price").innerHTML = total_price;

        }
    </script>
@endsection
