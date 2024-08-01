<form action="" method="POST" enctype="multipart/form-data" id="update-form">
    @csrf
    @method('PUT')
    <div class="avatar-container">
        <img src="" alt="Avatar" class="avatar" id="owner_image">
        <button type="button" class="edit-icon" onclick="document.getElementById('avatar-input').click();">✎</button>
        <input type="file" name="owner_image" id="avatar-input" class="file-input" accept="image/*" onchange="updateAvatar(event)">
    </div>
    <ul class="profile-info">
        <li><span>Name:</span> <span><input type="text" name="owner_name" value="{{ old('owner_name', $owner->owner_name) }}"></span></li>
        <li>
            <span>Phone Number:</span>
            <span><input type="text" name="owner_phone" value="{{ old('owner_phone', $owner->owner_phone) }}"></span>
            @error('owner_phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li><span>Email:</span> <span>{{ $owner->owner_email }}</span></li>
        <li>
            <span>Country:</span>
            <span><input type="text" name="owner_country" value="{{ old('owner_country', $owner->owner_country) }}"></span>
            @error('owner_country')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li>
            <span>City:</span>
            <span><input type="text" name="owner_city" value="{{ old('owner_city', $owner->owner_city) }}"></span>
            @error('owner_city')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li>
            <span>Permanent Address:</span>
            <span><input type="text" name="owner_address" value="{{ old('owner_address', $owner->owner_address) }}"></span>
            @error('owner_address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
    </ul>
    <button type="submit" class="action-button">Update</button>
    <a href="{{ route('owner.logout') }}" class="logout-button">Logout</a>
</form>
