
<div class="col-sm-4 product_div">
    <a href="/store/product/{{$product->id}}">
    {{ HTML::image($product->image, $product->title, array('class' => '', 'width'=>'240', 'height'=>'127'))}}
    </a>
    <h3>
        <a href="/store/product/{{$product->id}}">
        {{$product->title}}
        </a>
    </h3>
    <p>{{$product->description}}</p>
    <h5>Availability: 
    <span class={{Availability::displayClass($product->stock)}}>
        {{Availability::display($product->stock)}}  | <a href={{"/vendor/products/". $product->vendor_id }}><span>{{User::find($product->vendor_id)->username}}</span></a>
    </span>
    </h5>
    @include('layouts.add')
</div>