<body style="background-color: #232630; color: #ffffff; font-family: Arial, sans-serif;">
    @include('layouts.nav')

    <div style="max-width: 600px; margin: 50px auto; background-color: #181a21; padding: 30px; border-radius: 12px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);">
        <h1 style="text-align: center; color: #00d4ff;">Create User</h1>
        <form method="POST" action="{{ route('Users.store') }}">
            @csrf

            <!-- Name -->
            <div style="margin-bottom: 15px;">
                <label for="name" style="display: block; font-weight: bold;">Name</label>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
            </div>

            <!-- Email Address -->
            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; font-weight: bold;">Email</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
            </div>

            <!-- Password -->
            <div style="margin-bottom: 15px;">
                <label for="password" style="display: block; font-weight: bold;">Password</label>
                <input type="password" id="password" name="password" required style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
            </div>

            <!-- Confirm Password -->
            <div style="margin-bottom: 15px;">
                <label for="password_confirmation" style="display: block; font-weight: bold;">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
            </div>

            <!-- Admin Status (Dropdown) -->
            <div style="margin-bottom: 15px;">
                <label for="is_admin" style="display: block; font-weight: bold;">Is Admin?</label>
                <select name="is_admin" id="is_admin" style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" style="width: 100%; padding: 12px; background: linear-gradient(135deg, #007bff, #00d4ff); color: white; border-radius: 8px; border: none; font-weight: bold; cursor: pointer; transition: 0.3s;">
                ➕ Register
            </button>
        </form>
    </div>
</body>
