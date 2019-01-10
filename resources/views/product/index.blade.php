@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
      
@include('product.product_table')
@stop

@section('javascript') 
    <script>
        @can('product_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.products.mass_destroy') }}';
        @endcan

    </script>
@endsection