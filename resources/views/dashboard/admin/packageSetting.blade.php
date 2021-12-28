@extends('dashboard.layouts.app', ['title' => 'Package Settings'])

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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Package Status</h4>
                        <button type="button" class="btn btn-rounded btn-success" data-bs-toggle="modal"
                            data-bs-target="#addPackage"><span class="btn-icon-start text-success"><i
                                    class="fa fa-plus color-success"></i>
                            </span>Add</button>
                        @include('dashboard.admin.components.packages.addPackage')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Package Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($package as $item)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $item->packageName }}</td>
                                            <td>USD {{ number_format($item->price) }}</td>
                                            <td><button type="button" class="btn btn-sm btn-primary"
                                                    data-bs-toggle="modal" data-bs-target="#editPackage{{ $item->id }}"
                                                    data-id="{{ $item->id }}">Edit</button>
                                                <button type="button" class="btn btn-sm btn-danger"
                                                    data-bs-toggle="modal" data-bs-target="#deletePackage{{ $item->id }}"
                                                    data-id="{{ $item->id }}">Delete</button>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                        @include('dashboard.admin.components.packages.editPackage')
                                        @include('dashboard.admin.components.packages.deletePackage')
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
