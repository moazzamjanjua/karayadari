@include('frontend.layouts.style')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-gradient-primary text-white text-center">
                    <h3 class="mb-0 font-weight-bold">Apply for a Position</h3>
                    <p class="small mb-1">Join Karayadari and grow with us!</p>
                </div>
                <div class="card-body p-5">
                    <form action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="font-weight-bold">Full Name</label>
                            <input type="text" class="form-control rounded-pill shadow-sm" 
                                   id="name" name="name" placeholder="Enter your full name" required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Email Address</label>
                            <input type="email" class="form-control rounded-pill shadow-sm" 
                                   id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="font-weight-bold">Active Whatsapp Number</label>
                            <input type="text" class="form-control rounded-pill shadow-sm" 
                                   id="phone" name="phone" placeholder="Enter your phone number" required>
                        </div>

                        <div class="form-group">
                            <label for="position" class="font-weight-bold">Position Applying For</label>
                            <select class="form-control rounded-pill shadow-sm" id="position" name="position" required>
                                <option value="">Select Position</option>
                                <option value="Communication Manager">Graphic Designer</option>
                                <option value="Social Media Manager">Communication Manager</option>
                                <option value="Marketing Specialist">Social Media Manager </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="resume" class="font-weight-bold">Upload Resume (PDF)</label>
                            <input type="file" class="form-control-file shadow-sm" 
                                   id="resume" name="resume" accept=".pdf" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm mt-3">
                                Submit Application
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="mt-5 text-center">
    @include('frontend.layouts.footer')
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    body {
        background-color: #f8f9fa;
    }

    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .bg-gradient-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #0056b3;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
