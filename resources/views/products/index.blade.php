List all the products here...


<ul>
@foreach($products as $product)
    <li>{{ $product->name }}</li>
    <li>{{ $product->description }}</li>
    <li>{{ $product->price }}</li>
    <hr>
@endforeach
</ul>