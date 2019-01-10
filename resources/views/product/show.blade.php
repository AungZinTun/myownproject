@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
        {{ $product->name }}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        
                        <tr>
                            <th>@lang('quickadmin.products.fields.description')</th>
                            <td field-key='description'>{!! $product->description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.products.fields.category')</th>
                            <td field-key='category'>
                                @foreach ($product->category as $singleCategory)
                                    <span class="label label-info label-many">{{ $singleCategory->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.products.fields.tag')</th>
                            <td field-key='tag'>
                                @foreach ($product->tag as $singleTag)
                                    <span class="label label-info label-many">{{ $singleTag->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.products.fields.type')</th>
                            <td field-key='type'>
                                @foreach ($product->type as $singleType)
                                    <span class="label label-info label-many">{{ $singleType->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.products.fields.photo1')</th>
                            <td field-key='photo1'>@if($product->photo1)<a href="{{ asset(env('UPLOAD_PATH').'/' . $product->photo1) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $product->photo1) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.products.fields.photo2')</th>
                            <td field-key='photo2'>@if($product->photo2)<a href="{{ asset(env('UPLOAD_PATH').'/' . $product->photo2) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $product->photo2) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.products.fields.link')</th>
                            <td field-key='link'>{{ $product->link }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.products.fields.download-size')</th>
                            <td field-key='download_size'>{{ $product->download_size }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

<!-- cmt -->

 <div class="panel panel-default">
                            <div class="panel-heading">Comments</div>

    <!-- add new  -->
                            <div class="panel panel-primary">

                                        <div class="panel-body">

                                                        <div class="row">
                                                                        <div class="col-md-9 form-group">
                                                                        {!! Form::open(['method' => 'POST', 'url' => '/comment']) !!}
                                                                            {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => 'မွတ္ခ်က္ေရးပါ', 'required'=>'']) !!}
                                                                            <p class="help-block"></p>
                                                                            @if($errors->has('description'))
                                                                                <p class="help-block">
                                                                                    {{ $errors->first('description') }}
                                                                                </p>
                                                                            @endif
                                                        

                                                                        
                                                                        </div>
                                                                        <div class="col-xs-1 form-group">
                                                                        {!! Form::hidden('product_id', $product->id ,old('product_id'), ['class' => 'form-control ']) !!}
                                                                                            <button type="submit"  value="Submit">  <span class="text-primary">  <i class="fa fa-paper-plane"></i> </span>  </button>
                                                                                {!! Form::close() !!}
                                                                        </div>
                                                        </div>
                                        </div>
                            </div>
                           
    <!-- add new  -->
<hr>

  
        @if (count($comments) > 0)
                        @foreach ($comments as $comment)
                        <div class="panel">
                            <div class="panel-body">
                            {{ $comment->description }}
                                           
                                           <small class='text-muted text-primary'> {{ $comment->created_at->diffForHumans() }}</small>
                            </div>

                                       
                       
                                             
                                        
                        </div>

                            @endforeach
                            @else                       
                            colspan="7">No Comment
        @endif


</div>

<!-- cmt -->
                
                
       







@stop


      <!-- <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped"> -->