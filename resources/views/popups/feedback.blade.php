<!-- Modal for Feedback Form -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-transition">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackModalLabel">Feedback</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="feedback-form">
                    <form id="feedback-form" action="{{ route('feedback.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="number" class="form-control" placeholder="Enter your number" required>
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" placeholder="Enter your city" required>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control" rows="3" placeholder="Enter your message" required></textarea>
                        </div>

                        <span class="mandatory">* All fields are mandatory.</span>

                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary submit-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<button id="openFeedback" class="btn btn-secondary">Open Feedback</button>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Show feedback modal if feedback_required session exists
        @if(session('feedback_required'))
            $('#feedbackModal').modal('show');
        @endif

        // Open feedback modal when the link is clicked
        document.getElementById("openFeedback").onclick = function() {
            $('#feedbackModal').modal('show');
        };

        // Handle form submission
        const feedbackForm = document.getElementById('feedback-form');

        feedbackForm.addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            const formData = new FormData(feedbackForm);

            fetch(feedbackForm.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json',
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success popup
                    Swal.fire({
                        icon: 'success',
                        title: 'Feedback Submitted!',
                        text: 'Thank you for your feedback.',
                        showConfirmButton: false,
                        timer: 2000 // Auto-close after 2 seconds
                    }).then(() => {
                        $('#feedbackModal').modal('hide'); // Close the modal
                        feedbackForm.reset(); // Reset the form fields
                    });
                } else if (data.error) {
                    // Show error popup
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.error,
                        showConfirmButton: true,
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
</script>
