@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {!! trans("admin/language.languages") !!} ::
@parent @stop

@section('styles')
    @parent
    <link href="{{ asset("css/flags.css") }}" rel="stylesheet">
@endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            Idiomas
            <div class="pull-right">
                <a href="{!!  URL::to('admin/language/create') !!}"
                   class="btn btn-sm  btn-primary iframe"><span
                            class="glyphicon glyphicon-plus-sign"></span> Novo</a>
            </div>
        </h3>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>{{ trans("admin/modal.title") }}</th>
            <th>{{ trans("admin/language.code") }}</th>
            <th>{{ trans("admin/language.icon") }}</th>
            <th>{{ trans("admin/admin.action") }}</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@stop

{{-- Scripts --}}
@section('scripts')
@stop
