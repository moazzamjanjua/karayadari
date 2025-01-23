<div class="container mt-1">
    <h2 class="mb-4">Hostels List</h2>

    <!-- Add City Button -->
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addCityModal">Add New City</button>

    <!-- Cities Table (Smaller Size) -->
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>City Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>{{ $city->id }}</td>
                    <td>{{ $city->city_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Modal for Adding New City -->
    <div class="modal fade" id="addCityModal" tabindex="-1" role="dialog" aria-labelledby="addCityModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCityModalLabel">Add New City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form to Add New City -->
                    <form action="{{ route('cities.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="city_name">City Name:</label>
                            <input type="text" class="form-control" id="city_name" name="city_name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add City</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
	.table-sm td, .table-sm th {
    font-size: 0.9rem;
    padding: 0.4rem;
}
.table {
    max-width: 80%;  /* Adjust the percentage as needed */
    margin: 0 auto;  /* Center the table */
}

</style>