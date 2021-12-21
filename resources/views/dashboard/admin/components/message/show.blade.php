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
                                                    <button type="button" class="btn btn-primary px-3 my-1 light me-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteMessage{{ $showById->id }}"
                                                        data-id="{{ $showById->id }}"><i
                                                            class="fa fa-trash"></i></button>
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

    <!-- Modal -->
    <div class="modal fade" id="deleteMessage{{ $showById->id }}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <form action="{{ route('message.destroy', $showById->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="modal-body">
                        <h3 class="text-center">Do you want to delete this data?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
