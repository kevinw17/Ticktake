@extends('layouts.layout')

@section('content')
  
    <div class="row">
        <div class="col">

            <div id="carouselExampleCaptions" class="carousel slide py-4 ">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/image 31.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/image 31.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/image 31.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
             
            </div>
        </div>
    </div>

    <div class="row">
        <h5>Feature Events</h5>
        <div class="col"> 
          <div class="card my-4" style="width:300px">
              <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title" style="text-transform: capitalize">{{ $events["event_title"] }}</h4>
                <p class="card-text">{{ $events["event_date"] }} </p>
                <p class="card-text">{{ $events["event_price"] }}</p>
                <img src="img/{{ $events["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
                <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $events["producer_name"] }}</a>
              </div>
            </div>
        </div>

        <div class="col"> 
          <div class="card my-4" style="width:300px">
              <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title" style="text-transform: capitalize">{{ $events["event_title"] }}</h4>
                <p class="card-text">{{ $events["event_date"] }} </p>
                <p class="card-text">{{ $events["event_price"] }}</p>
                <img src="img/{{ $events["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
                <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $events["producer_name"] }}</a>
              </div>
            </div>
        </div>

        <div class="col"> 
          <div class="card my-4" style="width:300px">
              <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title" style="text-transform: capitalize">{{ $events["event_title"] }}</h4>
                <p class="card-text">{{ $events["event_date"] }} </p>
                <p class="card-text">{{ $events["event_price"] }}</p>
                <img src="img/{{ $events["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
                <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $events["producer_name"] }}</a>
              </div>
            </div>
        </div>

        <div class="col"> 
          <div class="card my-4" style="width:300px">
              <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title" style="text-transform: capitalize">{{ $events["event_title"] }}</h4>
                <p class="card-text">{{ $events["event_date"] }} </p>
                <p class="card-text">{{ $events["event_price"] }}</p>
                <img src="img/{{ $events["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
                <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $events["producer_name"] }}</a>
              </div>
            </div>
        </div>
      </div>
    
    <div class="row">
      <h5>Festival Fair</h5>
      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">{{ $events["event_title"] }}</h4>
              <p class="card-text">{{ $events["event_date"] }} </p>
              <p class="card-text">{{ $events["event_price"] }}</p>
              <img src="img/{{ $events["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $events["producer_name"] }}</a>
            </div>
          </div>
      </div>

      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">{{ $events["event_title"] }}</h4>
              <p class="card-text">{{ $events["event_date"] }} </p>
              <p class="card-text">{{ $events["event_price"] }}</p>
              <img src="img/{{ $events["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $events["producer_name"] }}</a>
            </div>
          </div>
      </div>

      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">{{ $events["event_title"] }}</h4>
              <p class="card-text">{{ $events["event_date"] }} </p>
              <p class="card-text">{{ $events["event_price"] }}</p>
              <img src="img/{{ $events["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $events["producer_name"] }}</a>
            </div>
          </div>
      </div>

      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">{{ $events["event_title"] }}</h4>
              <p class="card-text">{{ $events["event_date"] }} </p>
              <p class="card-text">{{ $events["event_price"] }}</p>
              <img src="img/{{ $events["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $events["producer_name"] }}</a>
            </div>
          </div>
      </div>

    </div> 
    
    <div class="container-fluid">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-3 my-3 ">
             <button class="btn btn-success text-capitalized"> see all</button>
          </div>
        </div>
      </div>
    </div>
    

@endsection