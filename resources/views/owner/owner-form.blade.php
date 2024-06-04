<form action="{{ route('owner.update', ['id' => $owner->id]) }}" method="POST" enctype="multipart/form-data"
                id="update-form">
                @csrf
                @method('PUT')
                <div class="avatar-container">
                    <img src="{{ asset('storage/' . $owner->owner_image) ?? '/frontend/img/home/avatar.jpg' }}"
                        alt="Avatar" class="avatar" id="owner_image">
                    <button type="button" class="edit-icon"
                        onclick="document.getElementById('avatar-input').click();">✎</button>
                    <input type="file" name="owner_image" id="avatar-input" class="file-input" accept="image/*"
                        onchange="updateAvatar(event)">
                </div>
                <ul class="profile-info">
                    <li><span>Name:</span> <span id="owner-name">{{ $owner->name ?? 'N/A' }}</span></li>
                    <li>
                        <span>Phone Number:</span>
                        <span id="owner-phone"><input type="text" name="phone"
                                value="{{ $owner->phone ?? 'N/A' }}"></span>
                    </li>
                    <li><span>Email:</span> <span id="owner-email">{{ $owner->email ?? 'N/A' }}</span></li>
                    <li>
                        <span>Country:</span>
                        <span id="owner-country"><input type="text" name="country"
                                value="{{ $owner->country ?? 'N/A' }}"></span>
                    </li>
                    <li>
                        <span>City:</span>
                        <span id="owner-city"><input type="text" name="city" value="{{ $owner->city ?? 'N/A' }}"></span>
                    </li>
                    <li>
                        <span>Permanent Address:</span>
                        <span id="owner-address"><input type="text" name="permanent_address"
                                value="{{ $owner->permanent_address ?? 'N/A' }}"></span>
                    </li>
                </ul>
                <button type="submit" class="action-button">Update</button>
            </form>