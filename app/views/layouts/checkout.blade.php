
    @foreach($products as $product)
    <div class="col-sm-4 product_div">
        <a href={{"/store/product/". $product->id}}><h2>{{$product->name}}</h2></a>
        <p>
            {{HTML::image($product->image, $product->name, array('width'=>'100px'))}}</p>
        <p>
            Product ID: {{$product->id}}
        </p>
        </a>

        <p>
            Vendor: {{ User::find($product->vendor_id)->username}}
        </p>
        <p></p>
        Quantity: {{$product->quantity}}</p>
        <p>
            Price: ${{$product->price}}
            {{Form::open(array('url'=>'store/cart/'.$product->identifier, 'method'=>'delete'))}}
            Remove: {{Form::submit('X')}}
            {{Form::close()}}
        </p>
        </div>
    @endforeach