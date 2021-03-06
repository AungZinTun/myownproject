@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.like.title')</h3>
    
    {!! Form::model($like, ['method' => 'PUT', 'route' => ['admin.likes.update', $like->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('like', trans('quickadmin.like.fields.like').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('like', 0) !!}
                    {!! Form::checkbox('like', 1, old('like', old('like')), []) !!}
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

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

