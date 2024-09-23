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
                    <form action="{{ route('feedback.store') }}" method="post">
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
    });
</script>

