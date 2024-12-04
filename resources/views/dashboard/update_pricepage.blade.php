@extends('layouts.dash')

@section('content')

    <!-- Success Alert -->
    <div class="container my-3">
        <div id="successAlert" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
            <strong>Success!</strong> Price content updated successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <h2>Update Price Content</h2>
        <form id="updateForm">
            <div class="mb-3">
                <label for="headingText" class="form-label">Price Heading Text:</label>
                <textarea id="headingText" class="form-control" rows="5"></textarea>
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
                    $('#headingText').val(data.price);
                }).fail(function () {
                    console.error('Failed to fetch price heading data.');
                });
            }

            // Call the function to populate initial values
            fetchInitialData();

            // Handle form submission
            $('#updateForm').on("submit", function (e) {
                e.preventDefault();

                // Get the input value
                const headingText = $('#headingText').val();

                // Perform AJAX request to update the data
                $.ajax({
                    url: '/api/headings/1/price',
                    method: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    data: { price: headingText },
                })
                .done(function () {
                    $('#successAlert').show();
                    console.log('Update successful');
                })
                .fail(function () {
                    console.error('Error updating price content.');
                    alert('Failed to update. Please try again.');
                });
            });
        });
    </script>

@endsection
