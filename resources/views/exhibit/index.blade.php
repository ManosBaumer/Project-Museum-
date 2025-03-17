<body style="background-color: #232630; color: #ffffff; font-family: Arial, sans-serif;">
    @include('layouts.nav')

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 30px; padding: 50px;">
        <a href="/exhibits/create" style="display: inline-block; padding: 12px 24px; background: linear-gradient(135deg, #007bff, #00d4ff); color: white; border-radius: 8px; text-decoration: none; font-weight: bold; transition: 0.3s;">
            ➕ Create Exhibit
        </a>
        @foreach ($exhibits as $exhibit)
            <div onclick="openPopup({{ $exhibit->id }})" style="background-color: #181a21; border-radius: 12px; overflow: hidden; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); transition: transform 0.3s; cursor: pointer;">
                <div style="display: block; padding: 20px; text-decoration: none; color: white;">
                    <h2 style="margin-bottom: 10px; color: #00d4ff;">{{ $exhibit->title }}</h2>
                    <p style="margin-bottom: 15px; color: #bbb;">by <strong>{{ $exhibit->artist }}</strong></p>

                    <!-- Check if the exhibit has multimedia -->
                    @if($exhibit->multimedia->isNotEmpty())
                        @foreach ($exhibit->multimedia as $media)
                            @if($media->image)
                                <img src="{{ asset('images/' . $media->image) }}" alt="Image" style="max-height: 120px; border-radius: 6px; display: block; margin-top: 10px;">
                            @elseif($media->video)
                                <video controls style="max-height: 120px; border-radius: 6px; display: block; margin-top: 10px;">
                                    <source src="{{ asset('videos/' . $media->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
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

    <!-- Popup Modal -->
    <div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #181a21; padding: 25px; border-radius: 12px; box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.4); z-index: 1000; width: 50%; max-width: 600px; max-height: 80vh; overflow-y: auto;">
        <span onclick="closePopup()" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 28px; color: #ff4c4c; font-weight: bold;">&times;</span>
        <div id="popup-content" style="color: white;"></div>
    </div>
    <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 999;"></div>

    <script>
        function openPopup(exhibitId) {
            fetch(`/exhibits/show/${exhibitId}`)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('popup-content').innerHTML = html;
                    document.getElementById('popup').style.display = 'block';
                    document.getElementById('overlay').style.display = 'block';
                });
        }
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
</body>
