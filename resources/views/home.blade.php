@extends('layouts.master')
@section('js')
    {!! HTML::script('/bower_components/jquery/dist/jquery.js') !!}
    {!! HTML::script('/bower_components/bootstrap/dist/js/bootstrap.js') !!}
    {!! HTML::script('/bower_components/angular/angular.js') !!}
    {!! HTML::script('/bower_components/angular-ui-router/release/angular-ui-router.js') !!}
    {!! HTML::script('/bower_components/moment/min/moment.min.js') !!}
    {{-- include more angular extensions here --}}

    {{-- Angular Controllers --}}
    {!! HTML::script('/js/dist/controllers/base.js') !!}

    {{-- Angular Directives --}}

    {{-- Angular Factories --}}
    {!! HTML::script('/js/dist/factories/helper.js') !!}

    {{-- App itself --}}
    {!! HTML::script('/js/dist/config.js') !!}
    {!! HTML::script('/js/dist/app.js') !!}
@endsection
@section('css')

@endsection
@section('content')
    <section ng-app="App">
        <div class="row-fluid">
            <div class="col-lg-12" ui-view=""></div>
        </div>
    </section>
@endsection