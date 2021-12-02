@extends('dashboard.layouts.app', ['title' => 'History'])

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transaction History</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Invoice Number</th>
                                        <th>Package Name</th>
                                        <th>Payment Type</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($historyTransaction as $item)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $item->merchant_ref }}</td>
                                            <td>{{ $item->package_name }}</td>
                                            <td>{{ $item->method }}</td>
                                            <td>
                                                @if ($item->status == "PAID")
                                                <span class="badge light badge-success">{{ $item->status }}</span></td>
                                                @else
                                                    <span class="badge light badge-danger">{{ $item->status }}</span></td>
                                                @endif
                                            <td>{{ $item->created_at }}</td>
                                            <td><strong>IDR {{ number_format($item->total_amount) }}</strong></td>
                                            <td><button type="button" class="btn btn-primary btn-xs">Invoice</button></td>
                                        </tr>
                                        <?php $no++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
