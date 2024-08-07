<form action="{{ route('owner.update') }}" method="POST" enctype="multipart/form-data" id="update-form">
    @csrf
    @method('PUT')
    <div class="avatar-container">
    @php
    $ownerImage = Auth::guard('owner')->user()->owner_image;
@endphp

<img src="{{ $ownerImage ? asset('storage/owner_image/' . $ownerImage) : asset('frontend/img/home/avatar.jpg') }}" 
     alt="Avatar" class="avatar" id="owner_image">

        <button type="button" class="edit-icon" onclick="document.getElementById('avatar-input').click();">✎</button>
        <input type="file" name="owner_image" id="avatar-input" class="file-input" accept="image/*" onchange="updateAvatar(event)">
    </div>
    <ul class="profile-info">
        <li><span>Name:</span> <span><input type="text" name="owner_name" value="{{ Auth::guard('owner')->user()->owner_name }}"></span></li>
        <li>
            <span>Phone:</span>
            <span><input type="text" name="owner_number" value="{{ Auth::guard('owner')->user()->owner_number}}"></span>
            @error('owner_phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li><span>Email:</span> <span>{{ Auth::guard('owner')->user()->owner_email }}</span></li>
        <li>
            <span>Country:</span>
            <span><input type="text" name="owner_country" value="{{ Auth::guard('owner')->user()->owner_country }}"></span>
            @error('owner_country')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li>
            <span>City:</span>
            <span><input type="text" name="owner_city" value="{{ Auth::guard('owner')->user()->owner_city }}"></span>
            @error('owner_city')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
        <li>
            <span>Address:</span>
            <span><input type="text" name="owner_address" value="{{ Auth::guard('owner')->user()->owner_address }}"></span>
            @error('owner_address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </li>
    </ul>
    <button type="submit" class="action-button">Update</button>
    <a href="{{ route('owner.logout') }}" class="logout-button">Logout</a>
</form>
