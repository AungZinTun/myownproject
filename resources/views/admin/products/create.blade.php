@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.products.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.products.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.products.fields.name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', trans('quickadmin.products.fields.description').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('category', trans('quickadmin.products.fields.category').'', ['class' => 'control-label']) !!}
                    <button type="button" class="btn btn-primary btn-xs" id="selectbtn-category">
                        {{ trans('quickadmin.qa_select_all') }}
                    </button>
                    <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-category">
                        {{ trans('quickadmin.qa_deselect_all') }}
                    </button>
                    {!! Form::select('category[]', $categories, old('category'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-category' ]) !!}
                    <p class="help-block"></p>
                    @if($errors->has('category'))
                        <p class="help-block">
                            {{ $errors->first('category') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tag', trans('quickadmin.products.fields.tag').'', ['class' => 'control-label']) !!}
                    <button type="button" class="btn btn-primary btn-xs" id="selectbtn-tag">
                        {{ trans('quickadmin.qa_select_all') }}
                    </button>
                    <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-tag">
                        {{ trans('quickadmin.qa_deselect_all') }}
                    </button>
                    {!! Form::select('tag[]', $tags, old('tag'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-tag' ]) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tag'))
                        <p class="help-block">
                            {{ $errors->first('tag') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('type', trans('quickadmin.products.fields.type').'', ['class' => 'control-label']) !!}
                    <button type="button" class="btn btn-primary btn-xs" id="selectbtn-type">
                        {{ trans('quickadmin.qa_select_all') }}
                    </button>
                    <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-type">
                        {{ trans('quickadmin.qa_deselect_all') }}
                    </button>
                    {!! Form::select('type[]', $types, old('type'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-type' ]) !!}
                    <p class="help-block"></p>
                    @if($errors->has('type'))
                        <p class="help-block">
                            {{ $errors->first('type') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('photo1', trans('quickadmin.products.fields.photo1').'', ['class' => 'control-label']) !!}
                    {!! Form::file('photo1', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('photo1_max_size', 8) !!}
                    {!! Form::hidden('photo1_max_width', 6000) !!}
                    {!! Form::hidden('photo1_max_height', 6000) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo1'))
                        <p class="help-block">
                            {{ $errors->first('photo1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('photo2', trans('quickadmin.products.fields.photo2').'', ['class' => 'control-label']) !!}
                    {!! Form::file('photo2', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('photo2_max_size', 8) !!}
                    {!! Form::hidden('photo2_max_width', 6000) !!}
                    {!! Form::hidden('photo2_max_height', 6000) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo2'))
                        <p class="help-block">
                            {{ $errors->first('photo2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('link', trans('quickadmin.products.fields.link').'', ['class' => 'control-label']) !!}
                    {!! Form::text('link', old('link'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('link'))
                        <p class="help-block">
                            {{ $errors->first('link') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('download_size', trans('quickadmin.products.fields.download-size').'', ['class' => 'control-label']) !!}
                    {!! Form::number('download_size', old('download_size'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('download_size'))
                        <p class="help-block">
                            {{ $errors->first('download_size') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script>
        $("#selectbtn-category").click(function(){
            $("#selectall-category > option").prop("selected","selected");
            $("#selectall-category").trigger("change");
        });
        $("#deselectbtn-category").click(function(){
            $("#selectall-category > option").prop("selected","");
            $("#selectall-category").trigger("change");
        });
    </script>

    <script>
        $("#selectbtn-tag").click(function(){
            $("#selectall-tag > option").prop("selected","selected");
            $("#selectall-tag").trigger("change");
        });
        $("#deselectbtn-tag").click(function(){
            $("#selectall-tag > option").prop("selected","");
            $("#selectall-tag").trigger("change");
        });
    </script>

    <script>
        $("#selectbtn-type").click(function(){
            $("#selectall-type > option").prop("selected","selected");
            $("#selectall-type").trigger("change");
        });
        $("#deselectbtn-type").click(function(){
            $("#selectall-type > option").prop("selected","");
            $("#selectall-type").trigger("change");
        });
    </script>
@stop