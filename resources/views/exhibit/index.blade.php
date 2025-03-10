<body style="background-color: black; color: white;">

@include('layouts.nav')


<a href="/exhibits/create">create</a>

@foreach ($exhibits as $exhibit)
    <div>
        <p>Title: {{ $exhibit->title }}</p>
        <p>Description: {{ $exhibit->description }}</p>
        <p>Artist: {{ $exhibit->artist }}</p>
        <p>Date: {{ $exhibit->date }}</p>
        <p>Location: {{ $exhibit->location }}</p>

        @foreach ($exhibit->multimedia as $media)
            <p>Image:
                @if($media->image)
                    <img src="{{ asset('storage/app/public/images/' . $media->image) }}" alt="Image" style="max-width: 200px;">
                @else
                    No image
                @endif
            </p>

            <p>Video:
                @if($media->video)
                    <video src="{{ asset('storage/app/public/videos/' . $media->video) }}" controls style="max-width: 500px;"></video>
                @else
                    No video
                @endif
            </p>

            <p>Audio:
                @if($media->audio)
                    <audio src="{{ asset('storage/app/public/audios/' . $media->audio) }}" controls></audio>
                @else
                    No audio
                @endif
            </p>

            <p>QR Code:
                @if($media->qrcode)
                    <img src="{{ asset('storage/qrcodes/' . $media->qrcode) }}" alt="QR Code" style="max-width: 80px;">
                @else
                    No QR Code
                @endif
            </p>
        @endforeach

        <a href="{{ route('Exhibits.edit', $exhibit->id) }}">Edit</a>

        <form action="{{ route('Exhibits.delete', $exhibit->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this exhibit?');">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
</body>
