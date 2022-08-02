@extends('legal/main')
  @section('container')

    <div class="content-wrapper">

      <section class="wrapper bg-blue-legal">
      <div
          class="wrapper bg-full bg-image"
          data-image-src="{{ URL::asset('/legal/image/hero-bg.png')}}"
        >
        <div class="container pt-10 pb-15 pt-md-8 pb-md-20 text-center">
          <div class="row">
            <div
              class="col-md-10 col-lg-8 col-xl-8 col-xxl-9 mx-auto mb-13"
              data-cues="slideInDown"
              data-group="page-title"
            >
              <h1 class="display-7 mb-4 text-white">
                Mengangkat potensi dokumen dan legalitas melalui AI
              </h1>
            </div>
          
          </div>
         
        </div>
        </div>
      </section>
      <!-- /section -->
      <section class="wrapper bg-light">
        <div class="row gx-0 mb-16 mb-mb-20 mt-22">
          <div
            class="col-9 col-sm-10 col-lg-9 mx-auto mt-n15 mt-md-n20"
          >
          <div class="container py-14 pt-md-16 pt-lg-0 pb-md-8">
            <div class="row text-center" data-cue="slideInUp">
              <div class="col-lg-10 mx-auto">
                <div class="mt-lg-n20 mt-xl-n22 position-relative">
                  <div class="shape bg-dot red rellax w-16 h-18" data-rellax-speed="1" style="top: 1rem; left: -3.9rem;"></div>
                  <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1" style="bottom: 2rem; right: -3rem;"></div>
                   <iframe class="responsive-iframe"src="https://www.youtube.com/embed/BKhfi6Z1e7U?start=1" width="100%" title="Legal Analytics in Telkom Indonesia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </section>
      
      <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16 mb-lg-21 mb-xl-7">
          
          <div
            class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-18"
            data-cues="slideInDown"
          >
            <!--/column -->
            <div
              class="display-4 fw-light col-lg-12 "
              style="text-align: justify; color: black;"
            >
              <p >
                &nbsp;&nbsp;&nbsp;&nbsp;Legal Analytics adalah sebuah produk
                digital berbentuk website berbasis Big Data sebagai bentuk
                transformasi digital pada bidang hukum, yang memberikan solusi
                terhadap digitalisasi Pembentukan dan Perancangan regulasi di
                Indonesia dengan cara menghimpun seluruh data regulasi yang
                bersifat akurat, valid, dan terkini sehingga memudahkan pengguna
                untuk mengakses dan menganalisa secara kompleks seluruh regulasi
                yang dibutuhkan.
              </p>
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;Kami percaya Artificial Intelligence
                sebagai inti aktivitas dalam Legal Analytics membuktikan bahwa
                kecerdasan buatan telah mengawal lajunya perkembangan hukum di
                Indonesia yang membantu pelanggan melakukan analisa regulasi dan
                perancangan yang berkualitas sebagai bentuk visi kami untuk
                membantu memajukan sistem hukum di Indonesia. Solusi kami
                memiliki Nilai fleksibilitas dan ekstensibilitas yang siap untuk
                memenuhi kebutuhan user melalui data regulasi akurat yang
                berhasil kami kumpulkan sebesar 123.472 Data Regulasi.
              </p>

              <!--/.row -->
            </div>
            <!--/column -->
          </div>
          <div
            class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18 text-justify"
            data-cues="slideInDown"
          >
            <div class="col-lg-12 col-xl-10 col-xxl-8 mx-auto text-center">
              <h1 class="display-1 mb-4 px-xxl-11">Sejarah Legal Analytics</h1>
            </div>
            <!--/column -->
            <div class="display-4 fw-light col-lg-12 "
            style="text-align: justify; color: black;">
            <p>
              &nbsp;&nbsp;&nbsp;&nbsp;Legal Analytics adalah sebuah produk
              digital berbentuk website berbasis Big Data sebagai bentuk
              transformasi digital pada bidang hukum, yang memberikan solusi
              terhadap digitalisasi Pembentukan dan Perancangan regulasi di
              Indonesia dengan cara menghimpun seluruh data regulasi yang
              bersifat akurat, valid, dan terkini sehingga memudahkan pengguna
              untuk mengakses dan menganalisa secara kompleks seluruh regulasi
              yang dibutuhkan.
            </p>

            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <section class="wrapper bg-light">
          <div class="container py-14 py-md-10 text-center">
            <div class="grid grid-view projects-masonry">
              <div class="row gx-md-6 gy-6 isotope" data-cues="slideInDown">
                <div class="project item col-md-6 col-xl-4">
                  <figure class="overlay overlay-1 rounded">
                    <img 
                    src="{{ URL::asset('/legal/image/company/about_us/about-us-11.png') }}"
                    alt="about us image 1"
                      >
                  </figure>
                </div>
                <div class="project item col-md-6 col-xl-4">
                  <figure class="overlay overlay-1 rounded">
                  <img 
                    src="{{ URL::asset('/legal/image/company/about_us/about-us-12.png') }}"
                    alt="about us image 1"
                      >
                  </figure>
                </div>
                <div class="project item col-md-6 col-xl-4">
                  <figure class="overlay overlay-1 rounded">
                  <img 
                    src="{{ URL::asset('/legal/image/company/about_us/about-us-13.png') }}"
                    alt="about us image 1"
                      >
                  </figure>
                </div>
                <div class="project item col-md-6 col-xl-8">
                  <figure class="overlay overlay-1 rounded">
                  <img 
                    src="{{ URL::asset('/legal/image/company/about_us/about-us-4.png') }}"
                    alt="about us image 1"
                      >
                  </figure>
                </div>
                <div class="project item col-md-6 col-xl-4">
                  <figure class="overlay overlay-1 rounded">
                  <img 
                    src="{{ URL::asset('/legal/image/company/about_us/about-us-23.png') }}"
                    alt="about us image 1"
                      >
                  </figure>
                </div>
                <div class="project item col-md-6 col-xl-4">
                  <figure class="overlay overlay-1 rounded">
                  <img 
                    src="{{ URL::asset('/legal/image/company/about_us/about-us-33.png') }}"
                    alt="about us image 1"
                      >
                  </figure>
                </div>
                <!-- /.project -->
              </div>
            </div>
            <!-- /.grid -->
          </div>
          <!-- /.container -->
        </section>
        <!-- /section -->
        <!-- /.container -->
        
      </section>
    </div>
 @endsection