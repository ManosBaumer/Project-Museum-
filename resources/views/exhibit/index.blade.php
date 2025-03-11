<body style="background-color: black; color: white;">
    @include('layouts.nav')

    <a href="/exhibits/create" style="color: white; text-decoration: none;">Create</a>

    <div style="display: flex; flex-direction: column; gap: 10px;">
        @foreach ($exhibits as $exhibit)
            <a href="{{ route('Exhibits.show', $exhibit->id) }}"
               style="display: flex; align-items: center; padding: 10px; background-color: #222; border-radius: 5px; text-decoration: none; color: white; gap: 15px; cursor: pointer;">
                <div>
                    <p><strong>Title:</strong> {{ $exhibit->title }}</p>
                    <p><strong>Description:</strong> {{ $exhibit->description }}</p>
                    <p><strong>Artist:</strong> {{ $exhibit->artist }}</p>
                    <p><strong>Date:</strong> {{ $exhibit->date }}</p>
                    <p><strong>Location:</strong> {{ $exhibit->location }}</p>
                </div>

                @foreach ($exhibit->multimedia as $media)
                    <div style="display: flex; align-items: center; gap: 10px;">
                        @if($media->image)
                            <img src="{{ asset('images/' . $media->image) }}" alt="Image" style="max-height: 100px; max-width: 150px;">
                        @endif

                        @if($media->video)
                            <video src="{{ asset('videos/' . $media->video) }}" controls style="max-height: 100px; max-width: 150px;"></video>
                        @endif

                        @if($media->audio)
                            <audio src="{{ asset('audios/' . $media->audio) }}" controls></audio>
                        @endif

                        @if($media->qrcode)
                            <img src="{{ asset('qrcodes/' . $media->qrcode) }}" alt="QR Code" style="max-height: 50px; max-width: 50px;">
                        @endif
                    </div>


                    <a href="{{ route('Exhibits.edit', $exhibit->id) }}" style=" width: 65px; padding: 5px 10px; background-color: #007bff; color: white; border-radius: 3px; text-decoration: none;">Edit</a>

                    <form action="{{ route('Exhibits.delete', $exhibit->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this exhibit?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="padding: 5px 10px; background-color: #dc3545; color: white; border: none; border-radius: 3px; cursor: pointer;">Delete</button>
                    </form>

                @endforeach

            </a>
        @endforeach
    </div>
</body>
