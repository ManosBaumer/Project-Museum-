<body style="background-color: #232630; color: #ffffff; font-family: Arial, sans-serif; ">
    @include('layouts.nav')

    <!-- Create button with modern styling -->


    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 30px; padding: 50px;">
        <a href="/exhibits/create" style="display: inline-block; padding: 12px 24px; background: linear-gradient(135deg, #007bff, #00d4ff); color: white; border-radius: 8px; text-decoration: none; font-weight: bold; transition: 0.3s;">
            ➕ Create Exhibit
        </a>
        @foreach ($exhibits as $exhibit)
            <div style="background-color: #181a21; border-radius: 12px; overflow: hidden; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); transition: transform 0.3s; cursor: pointer;">
                <a href="{{ route('Exhibits.show', $exhibit->id) }}" style="display: block; padding: 20px; text-decoration: none; color: white;">
                    <h2 style="margin-bottom: 10px; color: #00d4ff;">{{ $exhibit->title }}</h2>
                    <p style="margin-bottom: 15px; color: #bbb;">by <strong>{{ $exhibit->artist }}</strong></p>
                </a>

                <!-- Multimedia section -->
                <div style="display: flex; gap: 10px; padding: 10px; justify-content: center; background: #272830;">
                    @if($exhibit->multimedia->isNotEmpty())
                        @foreach ($exhibit->multimedia as $media)
                            @if($media->image)
                                <img src="{{ asset('images/' . $media->image) }}" alt="Image" style="max-height: 120px; border-radius: 6px;">
                            @endif
                            @if($media->video)
                                <video src="{{ asset('videos/' . $media->video) }}" controls style="max-height: 120px; border-radius: 6px;"></video>
                            @endif
                            @if($media->audio)
                                <audio src="{{ asset('audios/' . $media->audio) }}" controls ></audio>
                            @endif
                        @endforeach
                    @endif
                </div>

                <!-- Action buttons -->
                <div style="display: flex; justify-content: space-between; padding: 15px; background: #181a21; border-top: 1px solid #333;">
                    <a href="{{ route('Exhibits.edit', $exhibit->id) }}" style="padding: 8px 15px; background: #007bff; color: white; border-radius: 6px; text-decoration: none; font-weight: bold; height:40px;">✏️ Edit</a>

                    <form action="{{ route('Exhibits.delete', $exhibit->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this exhibit?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="padding: 8px 15px; background: #dc3545; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; height:40px;">🗑️ Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</body>
