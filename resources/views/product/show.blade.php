<h4>{{ $product->title }}</h4>

@if ($product->categories->count())
    <ul>
        @foreach ($product->categories as $category)
            <li>{{ $category->title }} (Added at {{ $category->pivot->created_at->diffForHumans() }})</li>
        @endforeach
    </ul>
@endif
