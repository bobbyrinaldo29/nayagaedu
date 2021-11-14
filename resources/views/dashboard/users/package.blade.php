@extends('dashboard.layouts.app', ['title' => 'Package'])

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-3 py-5 text-center">
                <h1>Choose Your Package</h1>
            </div>
            <div class="row">
                @foreach ($package as $item)
                    <div class="col-md-8 offset-md-2 col-lg-3 offset-lg-0">
                        <div class="card h-100 card-price-table border-0 shadow-lg rounded-ultra text-center add-animate"
                            data-animated="fadeInLeft">
                            <div class="card-body d-flex flex-column">
                                <div class="card-price d-flex justify-content-center mt-3">
                                    <div class="currency align-self-start">
                                        <h3>$</h3>
                                    </div>
                                    <div class="price text-primary">
                                        <h1>{{ $item->price }}</h1>
                                    </div>
                                </div>
                                <h3 class="card-price-title text-uppercase text-success">
                                    {{ $item->packageName }}
                                </h3>
                                <ul class="card-price-list mt-3">
                                    <li>{{ $item->description }}</li>
                                </ul>
                                <a href="/package/{{ $item->id }}/register" role="button"
                                    class="mt-auto btn btn-primary btn-lg btn-round mb-4">Register
                                    Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
