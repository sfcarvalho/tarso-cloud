@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') Categoria Artigos
:: @parent @stop

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            Categoria Artigos
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{!! URL::to('admin/articlecategory/create') !!}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span> {{ trans("admin/modal.new") }}</a>
                </div>
            </div>
        </h3>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>{!! trans("admin/modal.title") !!}</th>
            <th>{!! trans("admin/admin.language") !!}</th>
            <th>{!! trans("admin/admin.created_at") !!}</th>
            <th>{!! trans("admin/admin.action") !!}</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
@stop

{{-- Scripts --}}
@section('scripts')
@stop
