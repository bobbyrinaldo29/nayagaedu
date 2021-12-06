@extends('dashboard.layouts.app', ['title' => 'Tree Members'])

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->

            <!-- Nestable -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tree Members</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-content">
                                        <div class="nestable">
                                            <div class="dd" id="nestable">
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="2">
                                                        <div class="dd-handle">{{ Auth::user()->username }} :
                                                            <i>{{ $memberList->count() }} Member</i></div>
                                                        <ol class="dd-list">
                                                            @foreach ($memberList as $item)
                                                                <li class="dd-item" data-id="1">
                                                                    <div class="dd-handle">{{ $item->username }}</div>
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    </li>
                                                </ol>
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
