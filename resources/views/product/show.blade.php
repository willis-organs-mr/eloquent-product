<h4>{{ $product->title }}</h4>

@if ($product->categories->count())
    <ul>
        @foreach ($product->categories as $category)
            <li>{{ $category->title }}</li>
        @endforeach
    </ul>
@endif
