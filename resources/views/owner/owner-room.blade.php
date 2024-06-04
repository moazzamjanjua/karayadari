<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hostel Room Upload</title>
</head>
<body>
  <h2>Hostel Room Upload</h2>

  <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <section>
      <h3>Room Details</h3>
      <label for="room-name">Room Name:</label>
      <input type="text" id="room-name" name="room_name" required>

      <label for="room-type">Room Type:</label>
      <select id="room-type" name="room_type" required>
        <option value="">Select Type</option>
        <option value="single">Single Bed</option>
        <option value="double">Double Bed</option>
        <option value="dorm">Dorm (Number of Beds)</option>
      </select>
      <input type="number" min="1" id="num-beds-input" name="num_beds" style="display: none;">

      <label for="room-occupancy">Maximum Occupancy:</label>
      <input type="number" min="1" id="room-occupancy" name="room_occupancy" required>

      <label for="room-price">Price Per Night:</label>
      <input type="number" min="0" id="room-price" name="room_price" required>

      <label for="room-description">Room Description:</label>
      <textarea id="room-description" name="room_description" required></textarea>

      <label for="room-images">Room Images:</label>
      <input type="file" id="room-images" name="room_images[]" multiple required>
    </section>

    <section>
      <h3>Amenities and Features</h3>
      <label for="amenities">Amenities (check all that apply):</label>
      <div class="amenities-checkbox">
        <input type="checkbox" id="amenity-wifi" name="amenities[]" value="wifi">
        <label for="amenity-wifi">Wi-Fi</label>

        <input type="checkbox" id="amenity-ac" name="amenities[]" value="ac">
        <label for="amenity-ac">Air Conditioning</label>

        <input type="checkbox" id="amenity-breakfast" name="amenities[]" value="breakfast">
        <label for="amenity-breakfast">Breakfast</label>

        </div>

      <label for="room-size">Room Size (sq. ft.):</label>
      <input type="number" min="0" id="room-size" name="room_size">

      <label for="bathroom">Bathroom:</label>
      <select id="bathroom" name="bathroom">
        <option value="">Select Type</option>
        <option value="shared">Shared Bathroom</option>
        <option value="private">Private Bathroom</option>
      </select>

      <label for="view">View:</label>
      <input type="text" id="view" name="view">
    </section>

    <section>
      <h3>Availability and Policies</h3>
      <label for="availability-calendar">Availability Calendar (link):</label>
      <input type="url" id="availability-calendar" name="availability_calendar" required>

      <label for="policies">Policies (cancellation, check-in/out times, etc.):</label>
      <textarea id="policies" name="policies" required></textarea>
    </section>

    <button type="submit">Upload Room</button>
  </form>

  <script>
    const roomTypeSelect = document.getElementById('room-type');
    const numBedsInput = document.getElementById('num-beds-input');
    roomTypeSelect.addEventListener('change', (event) => {
      if (event.target.value === 'dorm') {
        numBedsInput.style.display = 'inline-block';
      } else {
        numBedsInput.style.display = 'none';
      }
    });
  </script>
</body>
</html>
