    <nav class="navbar navbar-default" role="navigation">
        <div id="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="font-size: 1.8em;" href="/">Project Caprica</a>
            </div>
             <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($catnav as $cat)
                                    <li>{{HTML::link('/store/category/'.$cat->id, $cat->name)}}</li>
                                    <li class="divider"></li>
                            @endforeach
                        </ul>
                    </li>
                    @if(!Auth::check())
                    <li>
                        <span class="glyphicon glyphicon-log-in">
                        {{HTML::link('users/auth', 'Log In')}}</span>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-star">
                        {{HTML::link('users/auth/create', 'Sign Up!')}}</span>
                    </li>
                     @else
                     <li>
                        <span class="glyphicon glyphicon-user"> <a href="">{{Auth::user()->username}}</a></span>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-shopping-cart">
                        {{HTML::link('store/cart', 'Shopping Cart')}}</span>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-star">
                        {{HTML::link('store/wishlist', 'Wish List')}}</span>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-log-out">
                        {{HTML::link('signout', 'Sign Out')}}</span>
                    </li>
                    @if (Auth::user()->is_admin == 1)
                    <li>
                        <span class="glyphicon glyphicon-wrench">
                        {{HTML::link('admin/categories', 'Edit Categories')}}</span>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-wrench">
                        {{HTML::link('admin/products', 'Edit Products')}}</span>
                    </li>
                    @endif
                    @if (Auth::user()->vendor_id > 0)
                    <li>
                        <span class="glyphicon glyphicon-wrench">
                        {{HTML::link('vendor/products', 'Sell Products')}}</span>
                    </li>
                    @endif
                    @endif
                    <li>
                        {{Form::open(array('url'=>'store/search', 'method'=>'get'))}}
                {{Form::text('keyword', null, array('placeholder'=>'Keyword', 'size' => '10'))}}
                {{Form::submit('Search')}}
                {{Form::close()}}
                    </li>
                </ul>

            </div>
        </div>
    </nav>