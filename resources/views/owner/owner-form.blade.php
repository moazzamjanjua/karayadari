<form action="" method="POST" enctype="multipart/form-data" id="update-form">
    @csrf
    @method('PUT')
    <div class="avatar-container">
        <img src="" alt="Avatar" class="avatar" id="owner_image">
        <button type="button" class="edit-icon" onclick="document.getElementById('avatar-input').click();">✎</button>
        <input type="file" name="owner_image" id="avatar-input" class="file-input" accept="image/*" onchange="updateAvatar(event)">
    </div>
    <ul class="profile-info">
        <li><span>Name:</span> <span><input type="text" name="owner_name" value="{{ Auth::guard('owner')->user()->owner_name ?? 'N/A' }}
"></span></li>
        <li>
            <span>Phone Number:</span>
            <span><input type="text" name="owner_phone" value="{{Auth::guard('owner')->user()->owner_number ?? 'N/A'}}"></span>
            @error('owner_phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li><span>Email:</span> <span>{{Auth::guard('owner')->user()->owner_email ?? 'N/A'}}</span></li>
        <li>
            <span>Country:</span>
            <span><input type="text" name="owner_country" value="{{Auth::guard('owner')->user()->owner_country ?? 'N/A'}}"></span>
            @error('owner_country')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li>
            <span>City:</span>
            <span><input type="text" name="owner_city" value="{{Auth::guard('owner')->user()->owner_city ?? 'N/A'}}"></span>
            @error('owner_city')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li>
            <span>Address:</span>
            <span><input type="text" name="owner_address" value="{{Auth::guard('owner')->user()->owner_address ?? 'N/A'}}"></span>
            @error('owner_address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
    </ul>
    <button type="submit" class="action-button">Update</button>
    <a href="{{route('logout')}}" class="logout-button">Logout</a>
</form>
