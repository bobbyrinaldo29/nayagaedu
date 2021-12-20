@extends('dashboard.layouts.app', ['title' => 'Message'])

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="email-left-box px-0 mb-3">
                                <div class="mail-list rounded mt-4">
                                    <a href="email-inbox.html" class="list-group-item active"><i
                                            class="fa fa-inbox font-18 align-middle me-2"></i> Inbox <span
                                            class="badge badge-danger badge-sm float-end">{{ $message->count() }}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="email-right-box ms-0 ms-sm-4 ms-sm-0">
                                <div class="email-list mt-3">
                                    @foreach ($inbox as $item)
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
                                                        <div class="form-check custom-checkbox">
                                                            <input type="checkbox" class="form-check-input" id="checkbox2">
                                                            <label class="form-check-label" for="checkbox2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="border-0 bg-transparent align-middle p-0"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteMessage{{ $item->id }}"
                                                            data-id="{{ $item->id }}"><i class="fa fa-trash"
                                                                aria-hidden="true"></i></button>
                                                    </div>
                                                    <a href="{{ route('message.show', $item->id) }}" class="col-mail col-mail-2">
                                                        <div class="subject">{!! Str::limit($item->message, 100, $end = '...') !!}</div>
                                                        <div class="date">
                                                            {{ $item->created_at->format('H:i a') }}
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @include('dashboard.admin.components.message.deleteMessage')
                                    @endforeach
                                </div>
                                {{ $inbox->links('layouts.partials.pagination') }}
                                {{-- <div class="row mt-4">
                                    <div class="col-12 ps-3">
                                        <nav>
                                            <ul class="pagination pagination-gutter pagination-primary pagination-sm no-bg">
                                                <li class="page-item page-indicator"><a class="page-link"
                                                        href="javascript:void()"><i class="la la-angle-left"></i></a></li>
                                                <li class="page-item "><a class="page-link"
                                                        href="javascript:void()">1</a></li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="javascript:void()">2</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void()">3</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void()">4</a></li>
                                                <li class="page-item page-indicator"><a class="page-link"
                                                        href="javascript:void()"><i class="la la-angle-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
