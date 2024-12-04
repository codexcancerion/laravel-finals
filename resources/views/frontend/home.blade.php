@extends('layouts.front')

@section('title', 'Home')

@section('content')
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex flex-column justify-items-center h-100">
                    <h1 id="heading" class="fw-bold"></h1>
                    <p id="paragraph" class="text-wrap"></p>
                    <button type="button" class="btn w-25 btn-primary">Get Started</button>
                </div>
                <div class="col-6">
                    <img src="./assets/images/home.png" alt="" class="h-75">
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Fetch and populate heading and paragraph data
            function loadHomeContent() {
                $.get('/api/headings/1', function (data) {
                    $('#heading').text(data.home);
                }).fail(function () {
                    console.error('Failed to load heading data.');
                });

                $.get('/api/paragraphs/1', function (data) {
                    $('#paragraph').text(data.home);
                }).fail(function () {
                    console.error('Failed to load paragraph data.');
                });
            }

            // Call the function to fetch data
            loadHomeContent();
        });
    </script>
@endsection
