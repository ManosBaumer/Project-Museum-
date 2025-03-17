<body style="background-color: #232630; color: #ffffff; font-family: Arial, sans-serif;">
    @include('layouts.nav')

    <div style="max-width: 600px; margin: 50px auto; background-color: #181a21; padding: 30px; border-radius: 12px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);">
        <h1 style="text-align: center; color: #00d4ff;">Edit User</h1>
        
        <form action="{{ route('Users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div style="margin-bottom: 15px;">
                <label for="name" style="display: block; font-weight: bold;">Name</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required 
                    style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
            </div>

            <!-- Email -->
            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; font-weight: bold;">E-Mail</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required 
                    style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
            </div>

            <!-- Is Admin (Dropdown) -->
            <div style="margin-bottom: 15px;">
                <label for="is_admin" style="display: block; font-weight: bold;">Is Admin?</label>
                <select id="is_admin" name="is_admin" 
                    style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
                    <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>No</option>
                    <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Yes</option>
                </select>
            </div>

            <!-- Save Button -->
            <button type="submit" 
                style="width: 100%; padding: 12px; background: linear-gradient(135deg, #007bff, #00d4ff); color: white; border-radius: 8px; border: none; font-weight: bold; cursor: pointer; transition: 0.3s;">
                💾 Save
            </button>
        </form>
    </div>
</body>
