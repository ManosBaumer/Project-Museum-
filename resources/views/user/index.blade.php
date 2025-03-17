<body style="background-color: #232630; color: #ffffff; font-family: Arial, sans-serif;">
    @include('layouts.nav')

    <div style="max-width: 800px; margin: 50px auto; background-color: #181a21; padding: 30px; border-radius: 12px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);">
        <h2 style="text-align: center; color: #00d4ff;">Users List</h2>

        <!-- Add New User Button -->
        <a href="{{ route('Users.create') }}" 
            style="display: block; width: 100%; padding: 12px; text-align: center; background: linear-gradient(135deg, #007bff, #00d4ff); 
                   color: white; border-radius: 8px; font-weight: bold; text-decoration: none; margin-bottom: 15px;">
            ➕ Add New User
        </a>

        @if ($users->isEmpty())
            <p style="text-align: center; color: #bbb;">There are no users added.</p>
        @else
            <table style="width: 100%; border-collapse: collapse; background-color: #272830; border-radius: 6px; overflow: hidden;">
                <thead>
                    <tr style="background: #00d4ff; color: black;">
                        <th style="padding: 10px; text-align: left;">ID</th>
                        <th style="padding: 10px; text-align: left;">Name</th>
                        <th style="padding: 10px; text-align: left;">E-Mail</th>
                        <th style="padding: 10px; text-align: left;">Is Admin</th>
                        <th style="padding: 10px; text-align: left;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr style="border-bottom: 1px solid #383a42;">
                        <td style="padding: 10px;">{{ $user->id }}</td>
                        <td style="padding: 10px;">{{ $user->name }}</td>
                        <td style="padding: 10px;">{{ $user->email }}</td>
                        <td style="padding: 12px; font-weight: bold; color: {{ $user->is_admin ? '#00ff00' : '#ff4d4d' }};">
                            {{ $user->is_admin ? 'Yes' : 'No' }}
                        </td>
                        <td style="padding: 10px;">
                            <!-- Edit Button -->
                            <a href="{{ route('Users.edit', ['user' => $user->id]) }}" 
                                style="padding: 6px 12px; background: #007bff; color: white; border-radius: 4px; text-decoration: none; font-weight: bold;">
                                ✏️ Edit
                            </a>

                            <!-- Delete Form -->
                            <form action="{{ route('Users.delete', ['user' => $user->id]) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Are you sure that you want to delete this user?');" 
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                    style="padding: 6px 12px; background: #ff4d4d; color: white; border-radius: 4px; border: none; cursor: pointer; font-weight: bold;">
                                    ❌ Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
