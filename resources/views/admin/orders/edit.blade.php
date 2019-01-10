@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.order.title')</h3>
    
    {!! Form::model($order, ['method' => 'PUT', 'route' => ['admin.orders.update', $order->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('product_id', trans('quickadmin.order.fields.product').'', ['class' => 'control-label']) !!}
                    {!! Form::select('product_id', $products, old('product_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('product_id'))
                        <p class="help-block">
                            {{ $errors->first('product_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('user_id', trans('quickadmin.order.fields.user').'', ['class' => 'control-label']) !!}
                    {!! Form::select('user_id', $users, old('user_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('user_id'))
                        <p class="help-block">
                            {{ $errors->first('user_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('completed', trans('quickadmin.order.fields.completed').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('completed', 0) !!}
                    {!! Form::checkbox('completed', 1, old('completed', old('completed')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('completed'))
                        <p class="help-block">
                            {{ $errors->first('completed') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

