<div class="panel panel-default">
          <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($products) > 0 ? 'datatable' : '' }} @can('product_delete') dt-select @endcan">
                <thead>
                    <tr>
                        <th>အမည္</th>
                        <th>က႑</th>
                        <th>ဘာသာရပ္</th>                      
                        <th>ေဒါင္းေလာ့အရြယ္အစား</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                            <tr data-entry-id="{{ $product->id }}">
                                @can('product_delete')
                                    <td></td>
                                @endcan

                                <td field-key='name'> 
                                <a href="/post/{{$product->id}}">  {{ $product->name }}           </a>
                                                 
                                
                                 </td>
                                <td field-key='category'>
                                    @foreach ($product->category as $singleCategory)
                                       <a href="/category/{{$singleCategory->id}} "><span class="label btn-info label-many">{{ $singleCategory->name }}</span></a>
                                    @endforeach
                                </td>
                                <td field-key='tag'>
                                    @foreach ($product->tag as $singleTag)
                                     <a href="/tag/{{$singleTag->id}} ">    <span class="label label-info label-many">{{ $singleTag->name }}</span> </a>
                                    @endforeach
                                </td>
                               
                                <td field-key='download_size'>{{ $product->download_size }}</td>
                                                                
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="14">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    