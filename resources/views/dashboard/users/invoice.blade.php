@extends('dashboard.layouts.app', ['title' => 'Invoice'])

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card mt-3">
                        @if ($detail->status == 'PAID')
                            <div class="card-header bg-primary text-white">
                            @else
                                <div class="card-header bg-danger text-white">
                        @endif
                        Invoice <strong>{{ date('Y-m-d H:i:s', $detail->paid_at) }}</strong>
                        <span class="float-end">
                            <strong>Status:</strong> {{ $detail->status }}</span>
                    </div>
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="mt-4 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <h6>From:</h6>
                                <div> <strong>{{ Auth::user()->name }}</strong> </div>
                                <div>{{ Auth::user()->address }}</div>
                                <div></div>
                                <div>Email: {{ $detail->customer_email }}</div>
                                <div>Phone: {{ $detail->customer_phone }}</div>
                            </div>
                            <div
                                class="mt-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                <div class="row align-items-center">
                                    <div class="col-sm-9">
                                        <div class="brand-logo mb-3">
                                            <img class="logo-abbr me-2" width="250" src="{{ asset('/images/logo.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Item</th>
                                        <th>Description</th>
                                        <th class="right">Unit Cost</th>
                                        <th class="center">Qty</th>
                                        <th class="right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="center">1</td>
                                        <td class="left strong">{{ $detail->order_items[0]->name }}</td>
                                        <td class="left">Extended License</td>
                                        <td class="right">IDR
                                            {{ number_format($detail->amount_received) }}
                                        </td>
                                        <td class="center">{{ $detail->order_items[0]->quantity }}</td>
                                        <td class="right">IDR
                                            {{ number_format($detail->amount_received) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="center">2</td>
                                        <td class="left strong">Service Fee</td>
                                        <td class="left">Extended License</td>
                                        <td class="right">IDR {{ number_format($detail->fee_customer) }}
                                        </td>
                                        <td class="center">{{ $detail->order_items[0]->quantity }}</td>
                                        <td class="right">IDR {{ number_format($detail->fee_customer) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"> </div>
                            <div class="col-lg-4 col-sm-5 ms-auto">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left"><strong>Total</strong></td>
                                            <td class="right"><strong>IDR
                                                    {{ number_format($detail->amount) }}</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
