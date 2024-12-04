@extends('layouts.dash')

@section('content')

    <!-- Success Alert -->
    <div class="container my-3">
        <div id="successAlert" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
            <strong>Success!</strong> Testimonial content updated successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <h2>Update Testimonial Content</h2>
        <form id="updateForm">
            <div class="mb-3">
                <label for="headingText" class="form-label">Testimonial Heading Text:</label>
                <textarea id="headingText" class="form-control" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="paragraphText" class="form-label">Testimonial Paragraph Text:</label>
                <textarea id="paragraphText" class="form-control" rows="5"></textarea>
            </div>

            <button type="submit" id="updateButton" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Hide the success alert initially
            $('#successAlert').hide();

            // Fetch initial data for inputs
            function fetchInitialData() {
                $.get('/api/headings/1', function (data) {
                    $('#headingText').val(data.testimonials);
                }).fail(function () {
                    console.error('Failed to fetch testimonial heading data.');
                });

                $.get('/api/paragraphs/1', function (data) {
                    $('#paragraphText').val(data.testimonials);
                }).fail(function () {
                    console.error('Failed to fetch testimonial paragraph data.');
                });
            }

            // Call the function to populate initial values
            fetchInitialData();

            // Handle form submission
            $('#updateForm').on("submit", function (e) {
                e.preventDefault();

                // Get input values
                const headingText = $('#headingText').val();
                const paragraphText = $('#paragraphText').val();

                // Perform AJAX requests to update the data
                const updateRequests = [
                    $.ajax({
                        url: '/api/headings/1/testimonials',
                        method: 'PATCH',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        },
                        data: { testimonials: headingText },
                    }),
                    $.ajax({
                        url: '/api/paragraphs/1/testimonials',
                        method: 'PATCH',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        },
                        data: { testimonials: paragraphText },
                    })
                ];

                // Wait for all requests to complete
                $.when(...updateRequests).done(function () {
                    $('#successAlert').show();
                    console.log('Update successful');
                }).fail(function () {
                    console.error('Error updating testimonial content.');
                    alert('Failed to update. Please try again.');
                });
            });
        });
    </script>

@endsection
