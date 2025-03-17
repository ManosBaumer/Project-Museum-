<div class="container" style="padding: 20px; text-align: center; color: white;">
    <!-- Exhibit Title -->
    <h1 style="font-size: 28px; font-weight: bold; color: #00d4ff; margin-bottom: 10px;">{{ $exhibit->title }}</h1>

    <!-- Description -->
    <p style="font-size: 16px; color: #bbb; margin-bottom: 20px;">{{ $exhibit->description }}</p>

    <!-- Artist Section -->
    <div style="margin-bottom: 20px;">
        <h3 style="font-size: 20px; font-weight: bold; color: white; margin-bottom: 5px;">Artist</h3>
        <p style="font-size: 14px; color: #bbb;">{{ $exhibit->artist }}</p>
    </div>

    <!-- Date & Location -->
    <p style="font-size: 14px; color: #bbb; margin-bottom: 10px;">📅 {{ $exhibit->date }} | 📍 {{ $exhibit->location }}</p>

    <!-- Multimedia Section -->
    <div style="display: flex; flex-direction: column; align-items: center; gap: 15px; margin-top: 20px;">
        @foreach($exhibit->multimedia as $media)
            <!-- Image -->
            @if($media->image)
                <img src="{{ asset('images/' . $media->image) }}" alt="Image" style="max-width: 80%; border-radius: 8px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);">
            @endif

            <!-- Video -->
            @if($media->video)
                <video src="{{ asset('videos/' . $media->video) }}" controls style="max-width: 80%; border-radius: 8px;"></video>
            @endif

            <!-- Audio -->
            @if($media->audio)
                <audio src="{{ asset('audios/' . $media->audio) }}" controls style="width: 80%;"></audio>
            @endif

            <!-- QR Code (Superklein & Gecentreerd) -->
            @if($media->qrcode)
                <img src="{{ asset('qrcodes/' . $media->qrcode) }}" alt="QR Code" style="max-width: 50px; margin-top: 20px; opacity: 0.8;">
            @endif
        @endforeach
    </div>
</div>
