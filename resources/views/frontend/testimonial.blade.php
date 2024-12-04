@extends('layouts.front')

@section('title', 'Testimonial')

@section('content')

        <section id="testimonials">
            <div class="w-100">
                <div class="testimonials-section p-5 row">
                    <div class="arrows col-2">
                        <button class="white-arrow-btn mb-2"><i class="fas fa-arrow-up"></i></button>
                        <button class="arrow-btn"><i class="fas fa-arrow-down"></i></button>
                    </div>
                    <div class="testimonial-card col">
                        <div class="d-flex align-items-center">
                            <img src="./assets/images/tesimonials.png" alt="Profile Picture">
                            <div class="ms-3">
                                <div class="testimonial-name">Jhone Lown</div>
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">"After 1 month, I consistently do sports in sprints, finally I lose
                            about 20 kg in weight."</p>
                    </div>
                    <div class="testimonial-section-text ms-5 col">
                        <h2 id="heading">Testimonials<br>Eset Up Customers</h2>
                        <p id="paragraph" class="text-muted">What our customers have to say about our service, check below!</p>
                    </div>
                </div>

        </section>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Fetch and populate heading and paragraph data
            function loadHomeContent() {
                $.get('/api/headings/1', function (data) {
                    $('#heading').text(data.testimonials);
                }).fail(function () {
                    console.error('Failed to load heading data.');
                });

                $.get('/api/paragraphs/1', function (data) {
                    $('#paragraph').text(data.testimonials);
                }).fail(function () {
                    console.error('Failed to load paragraph data.');
                });
            }

            // Call the function to fetch data
            loadHomeContent();
        });
    </script>
@endsection