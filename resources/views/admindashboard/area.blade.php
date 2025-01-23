<div class="container mt-1">
    <h2 class="mb-4">Areas List</h2>

    <!-- Add Area Button -->
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addAreaModal">Add New Area</button>

    <!-- Areas Table (Smaller Size) -->
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Area Name</th>
                <th>City Id</th>
                <th>City Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($areas as $area)
                <tr>
                    <td>{{ $area->id }}</td>
                    <td>{{$area->area_name}}</td>
                    <td>{{$area->city_id}}</td>
                    <td>{{ $area->city->city_name }}</td> <!-- City Name using relationship -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Modal for Adding New Area -->
    <div class="modal fade" id="addAreaModal" tabindex="-1" role="dialog" aria-labelledby="addAreaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAreaModalLabel">Add New Area</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form to Add New Area -->
                    <!-- Form to Add New Area -->
                    <form action="{{ route('areas.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="city_id">Select City:</label>
        <select class="form-control" id="city_id" name="city_id" required>
            <option value="" disabled selected>Select City</option>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->city_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="area_name">Area Name:</label>
        <input type="text" class="form-control" id="area_name" name="area_name" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Area</button>
</form>


                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .table-sm td,
    .table-sm th {
        font-size: 0.9rem;
        padding: 0.4rem;
    }

    .table {
        max-width: 80%;
        /* Adjust the percentage as needed */
        margin: 0 auto;
        /* Center the table */
    }
</style>