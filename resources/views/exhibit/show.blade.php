<div class="container">
    <h1>{{ $exhibit->title }}</h1>
    <p>Description: {{ $exhibit->description }}</p>
    <p>Artist: {{ $exhibit->artist }}</p>
    <p>Date: {{ $exhibit->date }}</p>
    <p>Location: {{ $exhibit->location }}</p>
    @foreach($exhibit->multimedia as $media)
        <p>Image:
            @if($media->image)
                <img src="{{ asset('storage/public/images/' . $media->image) }}" alt="Image">
            @else
                No image
            @endif
        </p>
        <p>Video:
            @if($media->video)
                <video src="{{ asset('storage/public/videos/' . $media->video) }}" controls></video>
            @else
                No video
            @endif
        </p>
        <p>Audio:
            @if($media->audio)
                <audio src="{{ asset('storage/public/audios/' . $media->audio) }}" controls></audio>
            @else
                No audio
            @endif
        </p>
        <p>QR Code:
            @if($media->qrcode)
                <img src="{{ asset('storage/qrcodes/' . $media->qrcode) }}" alt="QR Code">
            @else
                No QR Code
            @endif
        </p>
    @endforeach
</div>
