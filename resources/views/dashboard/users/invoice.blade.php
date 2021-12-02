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
                                    <div class="col-lg-6 order-lg-1 mb-4">

                                        <h5 class="mb-4">{{ $detail->merchant_ref }}</h5>

                                        <div class="row mt-4">
                                            @if ($detail->status == 'UNPAID')
                                                <h6 for="zip" class="d-flex justify-content-center">Pay With
                                                    {{ $detail->payment_name }}</h6>
                                                <h1 class="d-flex justify-content-center" id="pay_code">
                                                    {{ $detail->pay_code }}<span>&nbsp;<a href="#"
                                                            onclick="copyElementText('pay_code')"
                                                            id="toastr-success-top-center" title="Copy Text"><i
                                                                class="far fa-copy"></i></a><span></h1>
                                                <h3 for="zip" class="d-flex justify-content-center">Pay Before</h3>
                                                <h2 id="demo" class="d-flex justify-content-center"></h2>
                                            @else
                                                <h3 for="zip" class="d-flex justify-content-center">Payment</h3>
                                                @if ($detail->status == 'PAID')
                                                    <h1 for="zip" class="d-flex justify-content-center text-success">
                                                        {{ $detail->status }}</h1>
                                                @else
                                                    <h1 for="zip" class="d-flex justify-content-center text-danger">
                                                        {{ $detail->status }}</h1>
                                                @endif
                                            @endif
                                        </div>

                                        <hr class="mb-4">

                                        <h4 class="mb-4">Payment Detail</h4>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex justify-content-between">
                                                <h5 class="mb-3">Price</h5>
                                                <h5 class="mb-3">IDR
                                                    {{ number_format($detail->amount_received) }}</h5>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-between">
                                                <h5 class="mb-3">Service Fee</h5>
                                                <h5 class="mb-3">IDR
                                                    {{ number_format($detail->fee_customer) }}</h5>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-between">
                                                <h5 class="mb-3 text-danger">Total Amount</h5>
                                                <h5 class="mb-3 text-danger">IDR
                                                    {{ number_format($detail->amount) }}</h5>
                                            </div>
                                        </div>

                                        <div class="d-block my-3">

                                        </div>
                                        <hr class="mb-4">
                                        <button class="btn btn-info btn-lg btn-block mb-3" type="button"
                                            onclick="window.location.reload(true);">Check Payment Status</button>
                                        <button class="btn btn-primary btn-lg btn-block" type="button"
                                            onclick="window.location='{{ url('user/dashboard') }}'">Back To
                                            Homepage</button>
                                    </div>
                                    <div class="col-lg-6 order-lg-2 mb-4">
                                        <div class="card-header d-block">
                                            <h4 class="card-title">Payment Instructions</h4>
                                        </div>
                                        <div class="card-body">
                                            <!-- Default accordion -->

                                            <div class="accordion accordion-primary" id="accordion-one">
                                                @foreach ($detail->instructions as $item)
                                                    <div class="accordion-item">
                                                        <div class="accordion-header collapsed rounded-lg d-flex justify-content-between"
                                                            id="heading{{ $loop->iteration }}" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $loop->iteration }}"
                                                            aria-controls="collapse{{ $loop->iteration }}"
                                                            aria-expanded="true" role="button">
                                                            <span class="accordion-header-icon"></span>
                                                            <span class="accordion-header-text">{{ $item->title }}</span>
                                                            <i class="fas fa-chevron-down"></i>
                                                        </div>
                                                        <div id="collapse{{ $loop->iteration }}" class="collapse"
                                                            aria-labelledby="heading{{ $loop->iteration }}"
                                                            data-bs-parent="#accordion-one">
                                                            <div class="accordion-body-text">
                                                                @foreach ($item->steps as $step)
                                                                    <li>{{ $loop->iteration }}. {!! $step !!}
                                                                    </li>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
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
        // Mengatur waktu akhir perhitungan mundur
        var countDownDate = new Date("{{ date('Y-m-d H:i:s', $detail->expired_time) }}");

        // Memperbarui hitungan mundur setiap 1 detik
        var x = setInterval(function() {

            // Untuk mendapatkan tanggal dan waktu hari ini
            var now = new Date().getTime();

            // Temukan jarak antara sekarang dan tanggal hitung mundur
            var distance = countDownDate - now;

            // Perhitungan waktu untuk hari, jam, menit dan detik
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Keluarkan hasil dalam elemen dengan id = "demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // Jika hitungan mundur selesai, tulis beberapa teks 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>

    <script>
        function copyElementText(id) {
            var text = document.getElementById(id).innerText;
            var elem = document.createElement("textarea");
            document.body.appendChild(elem);
            elem.value = text;
            elem.select();
            document.execCommand("copy");
            document.body.removeChild(elem);
        }
    </script>
@endsection
