<form action="{{ route('owner.update', ['owner_id' => $owner->owner_id]) }}" method="POST" enctype="multipart/form-data" id="update-form">
    @csrf
    @method('PUT')
    <div class="avatar-container">
        <img src="{{ $owner->owner_image ? asset('storage/' . $owner->owner_image) : '/frontend/img/home/avatar.jpg' }}" alt="Avatar" class="avatar" id="owner_image">
        <button type="button" class="edit-icon" onclick="document.getElementById('avatar-input').click();">✎</button>
        <input type="file" name="owner_image" id="avatar-input" class="file-input" accept="image/*" onchange="updateAvatar(event)">
    </div>

    <ul class="profile-info">
        <li><span>Name:</span> <span id="owner-name">{{ $owner->owner_name ?? 'N/A' }}</span></li>
        <li>
            <span>Phone Number:</span>
            <span id="owner-phone"><input type="text" name="owner_number" value="{{ $owner->owner_number ?? 'N/A' }}"></span>
            @error('owner_phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li><span>Email:</span> <span id="owner-email">{{ $owner->owner_email ?? 'N/A' }}</span></li>
        <li>
            <span>Country:</span>
            <span id="owner-country"><input type="text" name="owner_country" value="{{ $owner->owner_country ?? 'N/A' }}"></span>
            @error('owner_country')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li>
            <span>City:</span>
            <span id="owner-city"><input type="text" name="owner_city" value="{{ $owner->owner_city ?? 'N/A' }}"></span>
            @error('owner_city')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li>
            <span>Permanent Address:</span>
            <span id="owner-address"><input type="text" name="owner_address" value="{{ $owner->owner_address ?? 'N/A' }}"></span>
            @error('owner_address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
    </ul>
    <button type="submit" class="action-button">Update</button>
    <a href="../owner/login" class="logout-button">Logout</a>
</form>
