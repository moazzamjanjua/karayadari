<!-- Static Navbar -->
<div class="navbar" id="navbar-section"
    style="width: 90%; max-width: 1200px; margin: 20px auto; padding: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; justify-content: space-around; align-items: center; z-index: 1000; opacity: 1;">

    <form method="GET" action="{{ route('search.result') }}" style="display: flex; gap: 10px; width: 100%;">
        <!-- City Dropdown, populated from database -->
        <select name="city"
            style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
            <option value="" disabled selected>Select City</option>
            @foreach($cities as $city)
                <option value="{{ $city->city_name }}" {{ request('city') == $city->city_name ? 'selected' : '' }}>
                    {{ $city->city_name }}
                </option>
            @endforeach
        </select>

        <!-- Category Dropdown -->
        <select name="category"
            style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
            <option value="" disabled selected>Select Categories</option>
            @foreach($categories as $category)
                <option value="{{ $category->category_name }}" {{ request('category') == $category->category_name ? 'selected' : '' }}>
                    {{ $category->category_name }}
                </option>
            @endforeach
        </select>

        <!-- Area Dropdown -->
        <select name="area"
            style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
            <option value="" disabled selected>Select Area</option>
            @foreach($areas as $area)
                <option value="{{ $area->area_name }}" {{ request('area') == $area->area_name ? 'selected' : '' }}>
                    {{ $area->area_name }}
                </option>
            @endforeach
        </select>

        <!-- Submit Button -->
        <button type="submit"
            style="padding: 10px 20px; border-radius: 5px; border: none; background-color: #007BFF; color: white; font-size: 16px; cursor: pointer;">
            Find Hostels
        </button>
    </form>
</div>

<script>
    window.addEventListener('load', function () {
        const navbar = document.getElementById('navbar-section');
        // Set navbar to visible without animation
        navbar.style.opacity = '1';
    });
</script>