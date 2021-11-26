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
                                        <div class="card-header d-block">
                                            <h4 class="card-title">Payment Created</h4>
                                        </div>

                                        <div class="row mt-4">
                                            <h3 for="zip" class="d-flex justify-content-center">Pay Before</h3>
                                            <h2 id="demo" class="d-flex justify-content-center"></h2>
                                        </div>

                                        <hr class="mb-4">

                                        <h4 class="mb-3">Payment</h4>

                                        <div class="d-block my-3">

                                        </div>
                                        <hr class="mb-4">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to
                                            checkout</button>
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
@endsection
