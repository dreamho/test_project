@extends('app')
@section('content')
    <div class="row">

        <div class="col-md-12 text-center"><h1>Quantox Hotel</h1></div>

    </div>

    <div class="row">

        <div class="col-md-12">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
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
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-6"><h3>Contact us</h3></div>
        <div class="col-md-6"><h3>Visit us</h3></div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <form>
                <label>Your name</label><br>
                <input type="text" name="name" class="form-control" ><br>
                <label>Your Email</label><br>
                <input type="email" name="email" class="form-control"><br>
                <label>Your Phone</label><br>
                <input type="number" name="phone" class="form-control"><br>
                <input type="submit" name="btn-submit" value="Submit" class="btn btn-default btn-block">

            </form>
        </div>
        <div class="col-md-6" id="map">

        </div>

    </div>
    <div class="row">

        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="dl-horizontal">
                <dd>Address:</dd>
                <dt>Kneza Mihaila 112, Kragujevac</dt>
            </div>
        </div>
    </div>
    <hr>
@stop