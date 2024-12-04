@extends('layouts.front')

@section('title', 'Service')

@section('content')
        <section id="service" class="services my-5">
            <div class="d-flex justify-content-center" style="color: #EF0178;">
                <h5 class="pink fw-bold">Our Service</h5>
            </div>
            <div class="d-flex justify-content-center p-3">
                <h1>
                    <h2 id="heading">Determine the service you need</h2>
                </h1>
            </div>


            <div class="container ">
                <div class="row text-center">
                    <div class="col-md-3 p-5">
                        <img src="assets/service image (1).png" class="img-fluid" alt="Service 1">
                        <div class="title font-weight-bold" style="font-weight: bolder;">Development</div>
                        <div class="description">Create a platform with the best and coolest quality from us.</div>
                    </div>
                    <div class="col-md-3 p-5">
                        <img src="assets/service image (2).png" class="img-fluid" alt="Service 2">
                        <div class="title font-weight-bold" style="font-weight: bolder;">UI/UX Designer</div>
                        <div class="description">We provide UI/UX Design services, and of course with the best quality
                        </div>
                    </div>
                    <div class="col-md-3 p-5">
                        <img src="assets/service image (3).png" class="img-fluid" alt="Service 3">
                        <div class="title font-weight-bold" style="font-weight: bolder;">Motion Graphik</div>
                        <div class="description">Create a platform with the best and coolest quality from us.</div>
                    </div>
                    <div class="col-md-3 p-5">
                        <img src="assets/service image (4).png" class="img-fluid" alt="Service 4">
                        <div class="title font-weight-bold" style="font-weight: bolder;">Best Award History</div>
                        <div class="description">we have placed various awards for our performance</div>
                    </div>
                </div>

                <div class="purple-container ">
                    <div class="message" style="font-size: 40px;font-family: 'Montserrat'; font-weight: bolder;">
                        Hire the world’s best developers<br>
                        <span>and designers around!</span>
                    </div>
                    <button class="btn btn-pink" style="color: white;margin-right: 50px;">Hire Developer</button>
                </div>
            </div>
        </section>


        
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        $(document).ready(function () {

            // Fetch initial data for inputs
            function fetchInitialData() {
                $.get('/api/headings/1', function (data) {
                    $('#heading').text(data.service);
                }).fail(function () {
                    console.error('Failed to fetch service heading data.');
                });
            }

            // Call the function to populate initial values
            fetchInitialData();
        });
    </script>
@endsection