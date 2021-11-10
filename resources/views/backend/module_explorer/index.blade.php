@extends('backend.layouts.app')

@section('title', __('File Manager'))

@section('content')

    <div class="row">
        @foreach($modules as $moule)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                       {{$moule['module_name']}}
                    </div>
                    <div class="card-body">
                       {{$moule['meta_details']->description}}
                    </div>
                    <div class="card-header">
                        <a href="#" class="btn btn-primary">Install</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>




@endsection
