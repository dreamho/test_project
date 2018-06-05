@extends('main')
@section('content')
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/index.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/index2.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/index3.jpeg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row">

            <div class="col-md-6">
                <h1>Contact us</h1>
                <form>
                    <label>Your name</label><br>
                    <input type="text" name="name" class="form-control" ><br><br>
                    <label>Your Email</label><br>
                    <input type="email" name="email" class="form-control"><br><br>
                    <label>Your Phone</label><br>
                    <input type="number" name="phone" class="form-control"><br><br>
                    <input type="submit" name="btn-submit" value="Submit" class="btn btn-default">

                </form>
            </div>
            <div class="col-md-6">Map</div>

        </div>
    </div>
@stop