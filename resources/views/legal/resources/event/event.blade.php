
  @extends('legal/main')
  @section('container')
<body>
  <div class="content-wrapper">

    <section class="wrapper bg-soft-primary">
    <div
            class="wrapper bg-full bg-image"
            data-image-src="{{ URL::asset('/legal/image/hero-bg.png')}}"
            >
      <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-auto mx-auto mt-5 mb-10" data-cues="slideInDown" data-group="page-title">
            <h1 class="display-60px mb-4"">Event Legal Analytics</h1>
          
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-auto mb-1" data-cues="slideInDown" data-group="page-title">
            <h1 class="display-36px mb-4" style="color:#FAFAFA;">Event Terbaru</h1>
          
          </div>
          <!-- /column -->
        </div>
      </div>
      <!-- /.container -->
      </div>
    </section>
    <!-- /section -->
 
    <!--Content Head-->
    <!-- Carefull-->
    <section class="wrapper bg-light mt-18">
      <div class="container pb-1 pb-md-3 mb-lg-6 mb-xl-6">
        <div class="row gx-0">
          <div class="position-relative mt-n18 mt-md-n23 ">
            
            <div class="card shadow">
              <div class="row gx-0">
                <div class="col-lg-4 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="{{ URL::asset($latestEvent->thumbnail_event) }}">
                </div>
                <!--/column -->
                <div class="col-lg-8">
                  <div class="p-10 p-md-11 p-lg-8">
                    <div class="swiper-container dots-closer mb-4" data-margin="30" data-dots="true">
                      <div class="swiper">
                        <div class="avail" style="text-align:right;">
                            <span class="badge badge-lg bg-leaf rounded">Kuota Tersedia</span>
                        </div>
                        <div class="post-header">
                          <h1 class="display-1 mt-1 mb-3"><a class="link-dark" href="/blog-post-detail">{{ $latestEvent->nama_event }}</a></h1>
                        </div>

                        <div class="post-content" >
                            <div class="row">
                                <div class="col-7">
                                <p class="text-black mb-2" ><i class="uil uil-clock mx-1"></i><strong>Waktu : </strong>{{ $latestEvent->tanggal_event }}</p>   
                                </div>
                                <div class="col-5">
                                <p class="text-black mb-2" ><i class="uil uil-user mx-1"></i><strong>Kuota : </strong>{{ $latestEvent->kuota_event }} Peserta</p>
                                </div>
                                <div class="col-12">
                                <p class="text-black mb-4" ><i class="uil uil-map-marker-alt mx-1"></i><strong>Lokasi :</strong>  {{ $latestEvent->lokasi_event }}</p>
                                </div>
                            </div>  
                            <a class="btn btn-primary w-100 mt-2" href="/event-detail/{{ $latestEvent->id }}">Ikuti Event</a> 
                        </div>
                      </div>
                      <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                  </div>
                  <!--/div -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /column -->
        </div>

    </section>
  



   
    
    <section class="wrapper bg-light"> 
      <div class="container py-14 pt-md-0 pb-md-2">
       
        <!-- /.row -->
        <div class="row text-left">
          <div class="col-12 ">
            <h3 class="display-36px mb-6 mx-3" style="float: left;">{{ $spTwoCategories[0]->nama_kategori_event }}</h3>
            <span><a  href="/event/{{ $spTwoCategories[0]->id }}" class="display-20px mx-3 mt-3" >Lihat Semua<i class="uil uil-angle-right-b"></i></a>
            </span>

          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative">
          
          <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
              <div class="swiper-wrapper">
              @foreach($firstCate as $firCat)
                <div class="swiper-slide">
                  <div class="item-inner">
                    <article>
                      <div class="card shadow">
                        <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/blog-post-detail"> <img src="{{ URL::asset($firCat->thumbnail_event) }}" alt="" /></a>
                          <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                          </figcaption>
                        </figure>
                        <div class="card-body" style="height:340px;">
                          <div class="post-header mx-2">
                            <div class="avail mb-2">
                            <span class="badge badge-lg bg-leaf rounded">Kuota Tersedia</span>
                            </div>
                            <h1 class="post-title h1 mt-1 " style="height:80px;"><a class="link-dark" href="/event-detail">{{ $firCat->nama_event }}</a></h1>
                          </div>
                          <!-- /.post-header -->
                          <div class="post-content mx-1">
                                <p class="text-black mb-2" ><i class="uil uil-clock mx-1"></i><strong>Waktu : </strong>{{ $firCat->tanggal_event }}</p>                    
                                <p class="text-black mb-2" ><i class="uil uil-map-marker-alt mx-1"></i><strong>Lokasi : </strong>{{ $firCat->lokasi_event }}</p>
                                <p class="text-black mb-4" ><i class="uil uil-user mx-1"></i><strong>Kuota : </strong>{{ $firCat->kuota_event }} Peserta</p>
                                
                          </div>
                          <a class="btn btn-primary w-100" href="/event-detail/{{ $firCat->id }}">Ikuti Event</a>
                        </div>
                   
                      </div>
                      <!-- /.card -->
                    </article>
                    <!-- /article -->
                  </div>
                  <!-- /.item-inner -->
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
        </div>

      </div>

    </section>

    <section class="wrapper bg-light"> 
      <div class="container py-14 pt-md-0 pb-md-2">
       
        <!-- /.row -->
        <div class="row text-left">
          <div class="col-12 ">
            <h3 class="display-36px mb-6 mx-3" style="float: left;">{{ $spTwoCategories[1]->nama_kategori_event }}</h3>
            <span><a  href="/event/{{ $spTwoCategories[1]->id }}" class="display-20px mx-3 mt-3" >Lihat Semua<i class="uil uil-angle-right-b"></i></a>
            </span>

          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative">
          
          <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
              <div class="swiper-wrapper">
              @foreach($secondCate as $secCat)
                <div class="swiper-slide">
                  <div class="item-inner">
                    <article>
                      <div class="card shadow">
                        <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/blog-post-detail"> <img src="{{ URL::asset($secCat->thumbnail_event) }}" alt="" /></a>
                          <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                          </figcaption>
                        </figure>
                        <div class="card-body" style="height:340px;">
                          <div class="post-header mx-2">
                            <div class="avail mb-2">
                            <span class="badge badge-lg bg-leaf rounded">Kuota Tersedia</span>
                            </div>
                            <h1 class="post-title h1 mt-1 " style="height:80px;"><a class="link-dark" href="/event-detail">{{ $secCat->nama_event }}</a></h1>
                          </div>
                          <!-- /.post-header -->
                          <div class="post-content mx-1">
                                <p class="text-black mb-2" ><i class="uil uil-clock mx-1"></i><strong>Waktu : </strong>{{ $secCat->tanggal_event }}</p>                    
                                <p class="text-black mb-2" ><i class="uil uil-map-marker-alt mx-1"></i><strong>Lokasi : </strong>{{ $secCat->lokasi_event }}</p>
                                <p class="text-black mb-4" ><i class="uil uil-user mx-1"></i><strong>Kuota : </strong>{{ $secCat->kuota_event }} Peserta</p>
                                
                          </div>
                          <a class="btn btn-primary w-100" href="/event-detail/{{ $secCat->id }}">Ikuti Event</a>
                        </div>
                   
                      </div>
                      <!-- /.card -->
                    </article>
                    <!-- /article -->
                  </div>
                  <!-- /.item-inner -->
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
        </div>

      </div>

    </section>


  
@endsection