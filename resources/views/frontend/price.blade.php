@extends('layouts.front')

@section('title', 'Price')

@section('content')

        <section id="price" class="my-5">
            <div class="container text-center pricing-section">
                <h1 class="pink fw-bold">Our Price</h1>
                <p  id="heading">Choose the price that suits your needs, we will <br> always give the best for you</p>
                <div class="row justify-content-center g-4 my-5">
                    <!-- Base Plan -->
                    <div class="col-md-4">
                        <div class="card p-4 border-0 shadow-none text-start">
                            <div class="price mb-3">$50<span>/month</span></div>
                            <div class="plan h5 mb-3">Base</div>
                            <p class="description mb-4 text-muted">For most businesses that want to optimize web queries
                            </p>
                            <ul class="features list-unstyled mb-4">
                                <li><i class="fas fa-check-circle me-2"></i> All limited links</li>
                                <li><i class="fas fa-check-circle me-2"></i> Own analytics platform</li>
                                <li><i class="fas fa-check-circle me-2"></i> Chat support</li>
                                <li><i class="fas fa-check-circle me-2"></i> Optimize hashtags</li>
                                <li><i class="fas fa-check-circle me-2"></i> Unlimited users</li>
                            </ul>
                            <button class="btn btn-outline-danger choose-btn">Choose plan</button>
                        </div>
                    </div>
                    <!-- Pro Plan (Popular) -->
                    <div class="col-md-4">
                        <div class="card popular p-4 rounded-5 position-relative text-start">
                            <span class="badge rounded-4">MOST POPULAR</span>
                            <div class="price mb-3">$100<span>/month</span></div>
                            <div class="plan h5 mb-3">Pro</div>
                            <p class="description mb-4 text-light">For most businesses that want to optimize web queries
                            </p>
                            <ul class="features list-unstyled mb-4">
                                <li><i class="fas fa-check-circle me-2"></i> All limited links</li>
                                <li><i class="fas fa-check-circle me-2"></i> Own analytics</li>
                                <li><i class="fas fa-check-circle me-2"></i> Chat support</li>
                                <li><i class="fas fa-check-circle me-2"></i> Optimize hashtags</li>
                                <li><i class="fas fa-check-circle me-2"></i> Unlimited users</li>
                            </ul>
                            <button class="btn choose-btn">Choose plan</button>
                        </div>
                    </div>
                    <!-- Enterprise Plan -->
                    <div class="col-md-4">
                        <div class="card p-4 border-0 shadow-none text-start">
                            <div class="price mb-3">$200<span>/month</span></div>
                            <div class="plan h5 mb-3">Enterprise</div>
                            <p class="description mb-4 text-muted">For most businesses that want to optimize web queries
                            </p>
                            <ul class="features list-unstyled mb-4">
                                <li><i class="fas fa-check-circle me-2"></i> All limited links</li>
                                <li><i class="fas fa-check-circle me-2"></i> Own analytics platform</li>
                                <li><i class="fas fa-check-circle me-2"></i> Chat support</li>
                                <li><i class="fas fa-check-circle me-2"></i> Optimize hashtags</li>
                                <li><i class="fas fa-check-circle me-2"></i> Unlimited users</li>
                            </ul>
                            <button class="btn btn-outline-danger choose-btn">Choose plan</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        $(document).ready(function () {

            // Fetch initial data for inputs
            function fetchInitialData() {
                $.get('/api/headings/1', function (data) {
                    $('#heading').text(data.price);
                }).fail(function () {
                    console.error('Failed to fetch price heading data.');
                });
            }

            // Call the function to populate initial values
            fetchInitialData();
        });
    </script>
@endsection