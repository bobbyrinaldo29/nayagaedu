@extends('dashboard.layouts.app', ['title' => 'Read'])

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="right-box-padding">
                                        <div class="read-content">
                                            <div class="media pt-3 d-sm-flex d-block justify-content-between">
                                                <div class="clearfix mb-3 d-flex">
                                                    <div class="media-body me-2">
                                                        <h5 class="text-primary mb-0 mt-1">{{ $showById->name }}</h5>
                                                        <p class="mb-0">
                                                            {{ $showById->created_at->format('j F Y h:i:s A') }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="clearfix mb-3">
                                                    <a href="{{ route('message.destroy', $showById->id) }}"
                                                        class="btn btn-primary px-3 my-1 light me-2"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="read-content-body">
                                                <h5 class="mb-4">Hi,
                                                    {{ Auth::user()->firstname ?: Auth::user()->username }},</h5>
                                                <p class="mb-2">{{ $showById->message }}</p>
                                                <h5 class="pt-3">Kind Regards</h5>
                                                <p>{{ $showById->name }}</p>
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
    </div>
@endsection
