@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <!-- <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li> -->

            <!-- <li>
                <a href="{{url('admin/calendar')}}">
                  <i class="fa fa-calendar"></i>
                  <span class="title">
                    Calendar
                  </span>
                </a>
            </li> -->
            @guest
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                   
                   @foreach ($categories as $category)
                    <li>
                        <a href="/category/{{$category->id}}">
                            <i class="fa fa-briefcase"></i>
                            <span>{{ $category->name}}</span>
                        </a>
                    </li>
                  @endforeach
                   
                    
                </ul>
            </li>

          
            @endguest

            @auth

                    
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('quickadmin.roles.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.users.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_action_access')
                    <li>
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span>@lang('quickadmin.user-actions.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('product_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>@lang('quickadmin.product-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('product_access')
                    <li>
                        <a href="{{ route('admin.products.index') }}">
                            <i class="fa fa-shopping-cart"></i>
                            <span>@lang('quickadmin.products.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('product_category_access')
                    <li>
                        <a href="{{ route('admin.product_categories.index') }}">
                            <i class="fa fa-folder"></i>
                            <span>@lang('quickadmin.product-categories.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('product_tag_access')
                    <li>
                        <a href="{{ route('admin.product_tags.index') }}">
                            <i class="fa fa-tags"></i>
                            <span>@lang('quickadmin.product-tags.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('type_access')
                    <li>
                        <a href="{{ route('admin.types.index') }}">
                            <i class="fa fa-cubes"></i>
                            <span>@lang('quickadmin.type.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('comment_access')
                    <li>
                        <a href="{{ route('admin.comments.index') }}">
                            <i class="fa fa-comment-o"></i>
                            <span>@lang('quickadmin.comment.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('like_access')
                    <li>
                        <a href="{{ route('admin.likes.index') }}">
                            <i class="fa fa-thumbs-o-up"></i>
                            <span>@lang('quickadmin.like.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('download_access')
                    <li>
                        <a href="{{ route('admin.downloads.index') }}">
                            <i class="fa fa-download"></i>
                            <span>@lang('quickadmin.download.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('order_access')
                    <li>
                        <a href="{{ route('admin.orders.index') }}">
                            <i class="fa fa-shopping-cart"></i>
                            <span>@lang('quickadmin.order.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
                      

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>

            @endauth        </ul>
    </section>
</aside>

