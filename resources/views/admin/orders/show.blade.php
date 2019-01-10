@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.order.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.order.fields.product')</th>
                            <td field-key='product'>{{ $order->product->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.order.fields.user')</th>
                            <td field-key='user'>{{ $order->user->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.order.fields.completed')</th>
                            <td field-key='completed'>{{ Form::checkbox("completed", 1, $order->completed == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.orders.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


