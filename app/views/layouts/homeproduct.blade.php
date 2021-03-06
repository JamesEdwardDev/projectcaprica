<?php
    $product = $products[$i];
    if (($i % 3  == 0 && $i > 0)) 
    { 
        echo "</div>";
    }
    
    if (($i) % 3 == 0) 
    { 
        echo "<div class='row'>";
    }
?>

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
            {{Availability::display($product->stock)}}
        </span><a href={{"/vendor/products/". $product->vendor_id }}><span>  | {{User::find($product->vendor_id)->username}}</span></a>
        </h5>
        @include('layouts.add')
    </div>

