<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center">
      <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          <span class="subheading">What we offer</span>
        <h2 class="mb-2">Katalog Mobil</h2>
      </div>
    </div>
    <style>
        .badge {
      padding: 4px 8px;
      text-align: center;
      border-radius: 5px;
    }
    .badge.badge-merah{
      background-color: red;
      color: white;
    }
    .badge.badge-ijo{
      background-color:greenyellow;
      color: black;
    }
      </style>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                    @if ($katalog == null)
                    <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            
                        </div>
                    </div>
                    @else
                    
                    @foreach ($katalog as $item)
                    <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end" style="background-image: url({{asset('asset')}}/images/{{$item->gambar}});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="#">{{$item->merek}}</a></h2>
                                
                                <div class="d-flex mb-3">
                                    <td>@if ($item->banyaknya <= 1 )
                                        <span class="badge badge-merah"> Tidak Ada Unit</span>
                                    @else
                                    <span class="badge badge-ijo">Tersisa {{$item->banyaknya}} Unit</span>
                                    @endif
                                    <p class="price ml-auto">{{$item->model}}</p>
                                </div>
                                <div class="d-flex mb-3">
                                    <span >No Polisi : {{$item->no_plat}}</span>
                                    <p class="price ml-auto">Rp.{{$item->perhari}} <span>/day</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a href="" class="btn btn-primary py-2 mr-1">Book now</a>
                                    <a href="" class="btn btn-secondary py-2 ml-1">Details</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>