<div class="container">
    <h1>{{ $tour->name }}</h1>
    <p>Amount: {{ $tour->amount }}</p>
    @foreach($tour->multimedia as $media)
        <p>Image:
            @if($media->image)
                <img src="{{ asset('images/' . $media->image) }}" alt="Image">
            @else
                No image
            @endif
        </p>
    @endforeach
</div>
