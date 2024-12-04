@extends('layouts.front')

@section('title', 'About')

@section('content')
    <section id="about">
        <div class="container text-center">
                <h5 class="pink fw-bold">Meet Our Clients</h5>
                <p id="heading" class="fs-3">This guys are using our service and <br /> they're more than happier ever.</p>
            <p id="paragraph" class="fs-3"></p>
            <div class="py-5 d-flex align-items-center gap-5 justify-content-center">
                <img class="h-25" src="./assets/images/uber logo.png" alt="">
                <img class="h-25" src="./assets/images/paypal logo.png" alt="">
                <img class="h-25" src="./assets/images/google logo.png" alt="">
                <img class="h-25" src="./assets/images/microsoft logo.png" alt="">
                <img class="h-25" src="./assets/images/dribbble logo.png" alt="">
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Fetch and populate heading and paragraph data
            function loadAboutContent() {
                $.get('/api/headings/1', function (data) {
                    $('#heading').text(data.about);
                }).fail(function () {
                    console.error('Failed to load heading data.');
                });

                $.get('/api/paragraphs/1', function (data) {
                    $('#paragraph').text(data.about);
                }).fail(function () {
                    console.error('Failed to load paragraph data.');
                });
            }

            // Call the function to fetch data
            loadAboutContent();
        });
    </script>
@endsection
