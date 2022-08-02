
  @extends('legal/main')
  @section('container')

  <body>
    <div class="content-wrapper">

      <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
          <div class="row">
          <a href="/event">
                  <h5 class="text-white " ><i class="uil uil-arrow-left"></i><u>Kembali</u></h5>
               </a>   
            <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-auto mx-auto mt-5 mb-10" data-cues="slideInDown" data-group="page-title">
              <h1 class="display-60px mb-4"">Event Legal Analytics</h1>
            
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
  
          <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-auto mb-1" data-cues="slideInDown" data-group="page-title">
              <h1 class="display-36px mb-4" style="color:#FAFAFA;">{{ $spCategories->first()->eventCategory->nama_kategori_event }}</h1>
            
            </div>
            <!-- /column -->
          </div>
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->

      <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
          <!-- /.row -->
          <div class="row">
            <div class="container pb-14 pb-md-16">
              <div class="blog grid grid-view">
                <div
                  class="row isotope gy-6 rounded-2 mx-auto mt-n15 mt-md-n20"
                >
                @foreach($spCategories as $spcat)
                  <div class="project item col-md-6 col-xl-4">
                  <article>
                      <div class="card shadow">
                        <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/blog-post-detail"> <img src="{{ URL::asset($spcat->thumbnail_event) }}" alt="" /></a>
                          <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                          </figcaption>
                        </figure>
                        <div class="card-body">
                          <div class="post-header mx-2">
                            <div class="avail mb-2">
                            <span class="badge badge-lg bg-leaf rounded">Kuota Tersedia</span>
                            </div>
                            <h2 class="post-title h1 mt-1 "><a class="link-dark" href="/event-detail">{{ $spcat->nama_event }}</a></h2>
                          </div>
                          <!-- /.post-header -->
                          <div class="post-content mx-1">
                                <p class="text-black mb-2" ><i class="uil uil-clock mx-1"></i><strong>Waktu : </strong>{{ $spcat->tanggal_event }}</p>                    
                                <p class="text-black mb-2" ><i class="uil uil-map-marker-alt mx-1"></i><strong>Lokasi : </strong>{{ $spcat->lokasi_event }}</p>
                                <p class="text-black mb-4" ><i class="uil uil-user mx-1"></i><strong>Kuota : </strong>{{ $spcat->kuota_event }} Peserta</p>
                                
                          </div>
                          <a class="btn btn-primary w-100" href="/event-detail/{{ $spcat->id }}">Ikuti Event</a>
                        </div>
                   
                      </div>
                      <!-- /.card -->
                    </article>
                  </div>
                  @endforeach
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.position-relative -->
          </div>
          <!-- /container -->
        </div>
      </section>
      

@endsection
