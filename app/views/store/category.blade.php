@extends('layouts.main')

@section('promo')

<section>
        <div>
            <h1>Deal of the Day</h1>
            <p>Shut Up and Take My Money!</p>
            <a href="#" class="">Shop Now</a>
             {{HTML::image('img/promo.png', 'Promotions')}}
        </div>
        <div>
            <h1>Deal of the Day</h1>
            <p>Shut Up and Take My Money!</p>
            <a href="#" class="">Shop Now</a>
             {{HTML::image('img/promo.png', 'Promotions')}}
        </div>
        <div>
            <h1>Deal of the Day</h1>
            <p>Shut Up and Take My Money!</p>
            <a href="#" class="">Shop Now</a>
             {{HTML::image('img/promo.png', 'Promotions')}}
        </div>
</section>

@stop

@section('content')

    <h2>{{$category->name}}</h2>
    <hr>

    <aside>
        <ul>
            @foreach($catnav as $cat)
                <li>
                    {{ HTML::link('/store/category/'.$cat->id, $cat->name) }}
                </li>
            @endforeach
        </ul>
    </aside>

    <div>
        @foreach($products as $product)
            @include('layouts.product')
        @endforeach
    </div>
    

@stop

@section('pagination')
    <section>
        {{ $products->links()}}
    </section>
@stop

