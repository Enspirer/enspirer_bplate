@extends('backend.layouts.app')

@section('title', __('Module Explorer'))

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mt-12 tab-card">
                <div class="card-header tab-card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Installed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Explorer</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">

                        <div class="row">
                            @foreach($explorer_modules as $explorer_module)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            {{$explorer_module['module_name']}}
                                        </div>
                                        <div class="card-body">
                                            {{$explorer_module['meta_details']->description}}
                                        </div>
                                        <div class="card-header">
                                            <form action="{{route('admin.module.install')}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="module_name" value="{{$explorer_module['module_name']}}">
                                                <button class="btn btn-primary" type="submit">Install</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                    </div>
                    <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <div class="row">
                            @foreach($installed_modules as $moule)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            {{$moule['module_name']}}
                                        </div>
                                        <div class="card-body">
                                            {{$moule['meta_details']->description}}
                                        </div>
                                        <div class="card-header">
                                            <form action="{{route('admin.module.uninstall')}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="module_name" value=" {{$moule['module_name']}}">
                                                <button class="btn btn-primary" type="submit">Uninstall</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





@endsection
