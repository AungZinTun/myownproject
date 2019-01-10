@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.like.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.likes.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('like', trans('quickadmin.like.fields.like').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('like', 0) !!}
                    {!! Form::checkbox('like', 1, old('like', false), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('like'))
                        <p class="help-block">
                            {{ $errors->first('like') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('product_id', trans('quickadmin.like.fields.product').'', ['class' => 'control-label']) !!}
                    {!! Form::select('product_id', $products, old('product_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('product_id'))
                        <p class="help-block">
                            {{ $errors->first('product_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

