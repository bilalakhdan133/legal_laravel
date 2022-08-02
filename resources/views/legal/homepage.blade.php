
  @extends('legal/main')
  @section('container')
  <div class="content-wrapper">

    <section class="wrapper bg-soft-primary">
    <div
          class="wrapper bg-full bg-image"
          data-image-src="{{ URL::asset('/legal/image/hero-bg.png')}}"
        >
      <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-auto mx-auto mb-13" data-cues="slideInDown" data-group="page-title">
            <p class="display-1 fs-54 mb-5  mx-md-n5 mx-lg-2 mt-7" > <br class="d-md-none"> <span class="rotator-fade text-primary" >Relevancy ,Economy & Efficienct,Accuracy & Realibility, Timeless </span>    <img class="rotator-fade text-primary mt-2 mx-2" src="assets/img/brands/carbon_improve-relevance.png" alt=""/> </p>
            <h1 class="display-1 mb-4" style="font-weight: 900; color:#FAFAFA;">Platform Legal berbasis AI untuk menghasilkan perundang - undangan berkualitas</h1>
            <p class="lead fs-lg px-xl-10 px-xxl-21 mb-6" style=" color:#FAFAFA; ">Susun, Harmonisasikan dan Kolaborasikan dengan tim secara mudah untuk menghasilkan rancangan perundang-undangan yang berkualitas</p>
            <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600">
              <span><a class="btn btn-color-primary rounded mx-1">Ajukan Demo</a></span>
            </div>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      </div>
    </section>
    <!-- /section -->
 
    <!--Content Head-->
    <!-- Carefull-->
    


    
    <section class="wrapper bg-light">
        <div class="container pb-1 pb-md-3 mb-lg-21 mb-xl-2">
        <div class="row gx-0 mb-16 mb-mb-20">
          <div class="col-9 col-sm-10 col-lg-7  mx-auto mt-n15 mt-md-n20" data-cues data-group="images" data-delay="1500">
            <img class="img-fluid mx-auto " data-cue="slideInUp" src="{{ URL::asset('/legal/image/head.png') }}"
                    alt="homepage hero"  />

          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row text-center mt-12">
          <div class="col-lg-9 mx-auto">
            <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15"> Jelajahi Fitur fitur dari Legal Analytics</h3>
        
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- before Slider-->


    
        </div>

        <!--/.row -->
      </section>

      <section class="wrapper bg-soft-secondary">
        <div class="container pb-1 pb-md-8 mb-lg-21 mb-xl-2">

        <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
          <div class="swiper">
            <div class="swiper-wrapper">
           
              <div class="swiper-slide  bg-soft-secondary">
                <div class="container h-100">
                  <div class="row h-100" style="flex-wrap:nowrap ;"> 
                    <div class="col-lg-6 order-lg-2 mt-18">

                        <!-- <h1 class=" mb-4 animate__animated animate__fadeInUp  animate__delay-1s  mx-12 rounded-circle display-30px " style="float:left ;color: #2a51a4;">------- 1 ------- <h1> -->
                 
                    <span class="icon btn btn-circle btn-lg btn-primary disabled mb-4 animate__animated animate__fadeInUp  animate__delay-1s  mx-15  rounded-circle display-30px " style="float:center ; background-color:#fff ;color: #2a51a4;"> 1</span>
  
              
                    <div class="container offset-md-1 mt-14 offset-lg-0 mx-10  text-center text-lg-start justify-content-center align-self-center align-items-start" >
                      <h2 class=" mb-4  animate__animated animate__fadeInUp  animate__delay-1s display-30px">Relevan</h2>
                      <p class="lead lh-sm mb-7  animate__animated animate__fadeInDown  animate__delay-2s display-20px-black">Selalu menyediakan informasi yang relevan sesuai dengan keinginan atau & kebutuhan user dalam perancangan pertauran hukum</p>
                     
                     </div>
                    </div>

                    <div class="col-lg-6 order-lg-3 mt-18">
                      <div class=" position-relative">
                          <figure>
                              <img data-cue="fadeIn" data-delay="300" src="{{ URL::asset('/legal/image/relevan.png') }}"
                    alt="relevant image"/>
                            </figure>
                        <!-- /column -->
                       
                        <!-- /column -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!--/.container -->
              </div>
              <div class="swiper-slide  bg-soft-secondary">
                <div class="container h-100">
                  <div class="row h-100" style="flex-wrap:nowrap ;"> 
                    <div class="col-lg-6 order-lg-2 mt-18">

                      <span class="icon btn btn-circle btn-lg btn-primary disabled mb-4 animate__animated animate__fadeInUp  animate__delay-1s  mx-15  rounded-circle display-30px " style="float:center ; background-color:#fff ;color: #2a51a4;"><span class="number">2</span></span>

                      <div class="container offset-md-1 mt-14 offset-lg-0 mx-10  text-center text-lg-start justify-content-center align-self-center align-items-start" >
                      <h2 class=" mb-4  animate__animated animate__fadeInUp  animate__delay-1s display-30px">Efektif & Efisien</h2>
                      <p class="lead lh-sm mb-7  animate__animated animate__fadeInDown  animate__delay-2s display-20px-black">Memberikan dampak yang besar dan efisien dalam proses perancangan peraturan hukum  </p>
                     
                     </div>
                    </div>

                    <div class="col-lg-6 order-lg-3 mt-18">
                      <div class=" position-relative">
                          <figure>
                              <img data-cue="fadeIn" data-delay="300" src="{{ URL::asset('/legal/image/efektif-efisien.png') }}"
                    alt="efektif dan efisien image" />
                            </figure>
                        <!-- /column -->
                       
                        <!-- /column -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!--/.container -->
              </div>
    
              <div class="swiper-slide  bg-soft-secondary">
                <div class="container h-100">
                  <div class="row h-100" style="flex-wrap:nowrap ;"> 
                    <div class="col-lg-6 order-lg-2 mt-18">
                      <span class="icon btn btn-circle btn-lg btn-primary disabled mb-4 animate__animated animate__fadeInUp  animate__delay-1s  mx-15 rounded-circle display-30px " style="float:center ; background-color:#fff ;color: #2a51a4;"><span class="number">3</span></span>

                      <div class="container offset-md-1 mt-14 offset-lg-0 mx-10 text-center text-lg-start justify-content-center align-self-center align-items-start" >
                      <h2 class=" mb-4  animate__animated animate__fadeInUp  animate__delay-1s display-30px">Akurat & Handal</h2>
                      <p class="lead lh-sm mb-7  animate__animated animate__fadeInDown  animate__delay-2s display-20px-black">Selalu Menyediakan informasi yang relevan sesuai dengan keinginan & kebutuhan user dalam perancangan peraturan </p>
                     
                     </div>
                    </div>

                    <div class="col-lg-6 order-lg-3 mt-18">
                      <div class=" position-relative">
                          <figure>
                              <img data-cue="fadeIn" data-delay="300" src="{{ URL::asset('/legal/image/akurat-handal.png') }}"
                    alt="akurat dan handal image" />
                            </figure>
                        <!-- /column -->
                       
                        <!-- /column -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!--/.container -->
              </div>
    
              <div class="swiper-slide  bg-soft-secondary">
                <div class="container h-100">
                  <div class="row h-100" style="flex-wrap:nowrap ;"> 
                    <div class="col-lg-6 order-lg-2 mt-18">

                      <span class="icon btn btn-circle btn-lg btn-primary disabled mb-4 animate__animated animate__fadeInUp  animate__delay-1s  mx-15 rounded-circle display-30px " style="float:center ; background-color:#fff ;color: #2a51a4;"><span class="number">4</span></span>

                      <div class="container offset-md-1 mt-14 offset-lg-0 mx-10 text-center text-lg-start justify-content-center align-self-center align-items-start" >
                      <h2 class="mb-4  animate__animated animate__fadeInUp  animate__delay-1s display-30px">Mutakhir</h2>
                      <p class="lead lh-sm mb-7  animate__animated animate__fadeInDown  animate__delay-2s display-20px-black">Melakukan pembaharuan secara berkala sehingga data dan analisa yang ada mengikuti perkembangan saat ini</p>
                     
                     </div>
                    </div>

                    <div class="col-lg-6 order-lg-3 mt-18">
                      <div class=" position-relative">
                          <figure>
                              <img data-cue="fadeIn" data-delay="300" src="{{ URL::asset('/legal/image/mutakhir.png') }}"
                    alt="mutakhir image" />
                            </figure>
                        <!-- /column -->
                       
                        <!-- /column -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!--/.container -->
              </div>
    
          
                <!--/.container -->
              </div>
              <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
      </section>
      

    <section class="wrapper bg-light">
      <div class="container pb-1 pb-md-3 mb-lg-21 mb-xl-2">
      
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
          <div class="col-lg-6 order-lg-2">
            <div class=" position-relative">
                <figure>
                    <img data-cue="fadeIn" data-delay="300" src="{{ URL::asset('/legal/image/product/dr-docrec-hero.png') }}" alt="document recap image"/>
                  </figure>
              <!-- /column -->
             
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-5" style="font-weight:600 ;">Document Recap</h3>
            <p class="mb-5"  style="font-weight:200 ;">Membangun sistem untuk merekap seluruh aktivitas dalam perancangan peraturan hukum secara menyeluruh.</p>
           
            <!-- <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join"> -->
              <span><a href="documentRecap.html" class="btn btn-primary rounded mx-1">Jelajahi Fitur</a></span>
              <!-- <span><a class="btn btn-green rounded mx-1">Free Trial</a></span> -->
            <!-- </div> -->
            <!--/.row -->
          </div>
          <!--/column -->
        </div>

        </div>
    </section>
    <!--Section-->
    <section class="wrapper bg-soft-secondary">
      <div class="container pb-1 pb-md-3 mb-lg-21 mb-xl-2">
      
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center  mb-14 mb-md-18">
          <div class="col-lg-6">
            <div class=" position-relative">
             <figure>
                <img data-cue="fadeIn" data-delay="300" src="{{ URL::asset('/legal/image/product/da-docan-hero.png') }}"
                    alt="document analytics image"  />
              <!-- /column -->
             </figure>
            </div>
            <!-- /.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-5">Document Analytics</h3>
            <p class="mb-5">Menganalisis & mengharmoniskan dokumen dengan membandingkan antar dokumen peraturan.</p>
            <span><a href="documentAnalytics.html"class="btn btn-primary rounded mx-1">Jelajahi Fitur</a></span>

            </div>
          </div>

        </div>
    </section>
    <!-- /section -->

    <!--Section-->

    <section class="wrapper bg-light">
      <div class="container pb-1 pb-md-3 mb-lg-21 mb-xl-2">
      
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
          <div class="col-lg-6 order-lg-2">
            <div class=" position-relative">
                <figure>
                    <img data-cue="fadeIn" data-delay="300" src="{{ URL::asset('/legal/image/product/dsd-docsetdraf-hero.png') }}"
                        alt="document setting and drafting image" />
                  </figure>
              <!-- /column -->
             
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-5" style="font-weight:600 ;">Document Setting & Drafting </h3>
            <p class="mb-5"  style="font-weight:200 ;">Melakukan penyusunan otomatis terhadap naskah rancangan sesuai dengan ketentuan.</p>
           
            <!-- <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join"> -->
              <span><a href="documentSettingDrafting.html"class="btn btn-primary rounded mx-1">Jelajahi Fitur</a></span>
              <!-- <span><a class="btn btn-green rounded mx-1">Free Trial</a></span> -->
            <!-- </div> -->
            <!--/.row -->
          </div>
          <!--/column -->
        </div>

        </div>
    </section>


    <section class="wrapper bg-soft-secondary">
      <div class="container pb-1 pb-md-3 mb-lg-21 mb-xl-2">
      
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center  mb-14 mb-md-18">
          <div class="col-lg-6">
            <div class="position-relative">
                <figure>
                   <img data-cue="fadeIn" data-delay="300" src="{{ URL::asset('/legal/image/product/sr-seanrem-hero.png') }}"
                      alt="search and reminder image"  />
                </figure>
              <!-- /column -->
            
            </div>
            <!-- /.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-5">Search & Reminders</h3>
            <p class="mb-5">Melakukan pencarian pada dokumen tertentu, serta menampilkan daftar dokumen yang harus diselesaikan</p>
            <span><a href="searchReminder.html" class="btn btn-primary rounded mx-1">Jelajahi Fitur</a></span>

              <!--/column -->
            </div>
            <!--/.row -->
          </div>

        </div>
    </section>


    <!--Section-->
    <section class="wrapper bg-light">
      <div class="container pb-1 pb-md-3 mb-lg-21 mb-xl-2">
      
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
          <div class="col-lg-6 order-lg-2">
            <div class=" position-relative">
                <figure>
                    <img data-cue="fadeIn" data-delay="300" src="{{ URL::asset('/legal/image/product/sma-socmed-hero.png') }}"
                    alt="social media analytics image"  />
                  </figure>
              <!-- /column -->
             
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-5" style="font-weight:600 ;">Social media Analytics</h3>
            <p class="mb-5"  style="font-weight:200 ;">Memberikan informasi mengenai berita hangat dan respon masyarakat terkait keyword tertentu.</p>
           
            <!-- <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join"> -->
              <span><a href="socialMediaAnalytics.html"class="btn btn-primary rounded mx-1">Jelajahi Fitur</a></span>
              <!-- <span><a class="btn btn-green rounded mx-1">Free Trial</a></span> -->
            <!-- </div> -->
            <!--/.row -->
          </div>
          <!--/column -->
        </div>

        </div>
    </section>
    <!--simpanan-->
    <section class="wrapper bg-soft-primary">
      <div class="container pb-1 pb-md-14 pt-12 pt-md-8 mb-lg-1 mb-xl-5">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h3 class="display-4 mb-10 px-xl-10" style="color: #fff;">Solusikan dengan Legal Analytics ! </h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative">
          <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
          <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
          <div class="row gx-md-5 gy-5 text-center">
            <div class="col-md-6 col-xl-6" >
              <div class="card shadow-lg h-100">
                <div class="card-body">
                  <img src="{{ URL::asset('/legal/image/saas-logo.png') }}"
                    alt="software as a service logo" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" style=" float:left"  />
                  <h4 class="mx-6 my-2" style="float:left;">Software As A Service</h4>
                  <p class="mb-2 mx-13" style="float:left; text-align: left;">Menyediakan layanan Legal Analytics secara langsung tanpa perlu banyak persiapan dan kebutuhan tertentu</p>
                </div>
                <br>

                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-6" >
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="{{ URL::asset('/legal/image/saas-logo.png') }}"
                    alt="software as a service logo" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" style=" float:left" />
                  <h4 class="mx-6 my-2" style="float:left;">Custom Development AI</h4>
                  <p class="mb-2 mx-13" style="float:left; text-align: left;">Menyolusikan permasalahan digitalisasi peraturan legal & bispro lainnya sesuai kebutuhan kebutuhan user secara personal menggunakan pendekatan Aritficial Intelegence </p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
         
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.position-relative -->
      </div>
      <!-- /.container -->
    </section>


        <!--simpanan-->


    <!-- /section -->
     

    <section class="wrapper bg-light">
      
      <!--/.row -->
      <div class="row text-center mt-12">
        <div class="col-lg-9 mx-auto">
          <h3 class="display-24px mb-0 text-center px-xl-10 px-xxl-15">Perusahaan - perusahaan yang percaya Legal Analytics</h3>
        
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>

    
    <!-- /.container -->
  </section>


  <section class="wrapper bg-light">
    <div class="container py-14 py-md-1">
      <div class="row gx-lg-8 gx-xl-12 gy-6 mb-14 align-items-center">
       
      <!--/.row -->
      <div class="px-lg-5">
        <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">
         
          <!--/column -->
          <div class="col-4 col-md-4">
            <figure class="px-6 px-md-0 px-lg-2 px-xl-5 px-xxl-4 text-center"><img src="assets/img/brands/cropped-DINAS-PERHUBUNGAN.png" style="width:45%;"    alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-4 col-md-4">
            <figure class="px-6 px-md-0 px-lg-2 px-xl-5 px-xxl-4 text-center"><img src="assets/img/brands/cropped-DINAS-PERHUBUNGAN2.png" style="width:60%;"  alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-4 col-md-4">
            <figure class="px-6 px-md-0 px-lg-2 px-xl-5 px-xxl-4 mt-2 text-left"><img src="assets/img/brands/kemen.png" style="width:60%;"  alt="" /></figure>
          </div>
          <!--/column -->
       
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /div -->
    </div> 
    <!-- /.container -->
  </section>
    
 <section class="wrapper bg-light">
      <div class="container py-14 pt-md-0 pb-md-16">
       
        <!-- /.row -->
        <div class="row text-left">
          <div class="col-12 ">
            <h3 class="display-4 mb-6 mx-3" style=" float: left;">Success story Legal Analytics</h3>
            <span><a href="/success-story" class="btn btn-primary rounded mx-3"style=" width:195px;height:60px ;float: right;" >See All Success Story</a></span>

          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative">

          <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
              <div class="swiper-wrapper">
      <div class="swiper-slide">
   <div class="item-inner">
      <article>
         <div class="card shadow h-100">
            <figure class="card-img-top overlay overlay-1 hover-scale">
               <a href="blog-legal-detail.html"> <img src="{{ URL::asset('/legal/image/resources/success_story/setneg-cover.jpg') }}" alt="setneg image" /></a>
               <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
               </figcaption>
            </figure>
            <div class="card-body" style="height:280px;">
               <div class="post-header">
                  <h1 class="post-title h3 mt-1 " style="height:60px;"><a class="link-dark" href="blog-post.html">Kementrian Sekretariat Negara Republik Indonesia</a></h1>
               </div>
               <!-- /.post-header -->
               <div class="post-content">
                  <p>Implementasi Legal Analytics untuk perencanaan, penyusunan, dan analisa peraturan perundang-undangan.</p>
               </div>
               <div class="row">
                  <ul class="post-meta d-flex mb-0">
                     <div class="col-3 text-center">
                        <li class="display-1">
                           <figure>
                              <div class="medium-img">
                                 <img style="width:50% ;" src="{{ URL::asset('/legal/image/resources/success_story/setneg-logo.png') }}" alt="setneg logo" />
                              </div>
                           </figure>
                        </li>
                     </div>
                     <div class="col-9 mx-auto" style="text-align:right ;">
                        <a class="btn btn-color-primary" href="/success-story-detail">Lihat Detail<i class="uil uil-angle-right-b fs-28 pb-1" ></i></a>
                     </div>
                  </ul>
                  <!-- /.post-meta -->
               </div>
            </div>
         </div>
         <!-- /.card -->
      </article>
      <!-- /article -->
   </div>
   <!-- /.item-inner -->
</div>
<div class="swiper-slide">
   <div class="item-inner">
      <article>
         <div class="card shadow h-100">
            <figure class="card-img-top overlay overlay-1 hover-scale">
               <a href="blog-legal-detail.html"> <img src="{{ URL::asset('/legal/image/resources/success_story/telkom-cover.png') }}" alt="telkom image" /></a>
               <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
               </figcaption>
            </figure>
            <div class="card-body" style="height:280px;">
               <div class="post-header">
                  <h1 class="post-title h3 mt-1 " style="height:60px;"><a class="link-dark" href="blog-post.html">PT Telkom Indonesia (Persero) Tbk </a></h1>
               </div>
               <!-- /.post-header -->
               <div class="post-content">
                  <p>Implementasi Legal Analytics untuk perencanaan, penyusunan, dan analisa peraturan perundang-undangan.</p>
               </div>
               <div class="row">
                  <ul class="post-meta d-flex mb-0">
                     <div class="col-3 text-center">
                        <li class="display-1">
                           <figure>
                              <div class="medium-img">
                                 <img style="width:50% ;" src="{{ URL::asset('/legal/image/resources/success_story/telkom-logo.png') }}" alt="telkom logo" />
                              </div>
                           </figure>
                        </li>
                     </div>
                     <div class="col-9 mx-auto" style="text-align:right ;">
                        <a class="btn btn-color-primary" href="/success-story-detail">Lihat Detail<i class="uil uil-angle-right-b fs-28 pb-1" ></i></a>
                     </div>
                  </ul>
                  <!-- /.post-meta -->
               </div>
            </div>
         </div>
         <!-- /.card -->
      </article>
      <!-- /article -->
   </div>
   <!-- /.item-inner -->
</div>
<div class="swiper-slide">
   <div class="item-inner">
      <article>
         <div class="card shadow h-100">
            <figure class="card-img-top overlay overlay-1 hover-scale">
               <a href="blog-legal-detail.html"> <img src="{{ URL::asset('/legal/image/resources/success_story/kemenhub-cover.jpeg') }}" alt="kemenhub image" /></a>
               <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
               </figcaption>
            </figure>
            <div class="card-body" style="height:280px;">
               <div class="post-header">
                  <h1 class="post-title h3 mt-1 " style="height:60px;"><a class="link-dark" href="blog-post.html">Kementrian Perhubungan Republik Indonesia</a></h1>
               </div>
               <!-- /.post-header -->
               <div class="post-content">
                  <p>Implementasi Legal Analytics untuk perencanaan, penyusunan, dan analisa peraturan perundang-undangan.</p>
               </div>
               <div class="row">
                  <ul class="post-meta d-flex mb-0">
                     <div class="col-3 text-center">
                        <li class="display-1">
                           <figure>
                              <div class="medium-img">
                                 <img style="width:50% ;" src="{{ URL::asset('/legal/image/resources/success_story/kemenhub-logo.png') }}" alt="kemenhub logo" />
                              </div>
                           </figure>
                        </li>
                     </div>
                     <div class="col-9 mx-auto" style="text-align:right ;">
                        <a class="btn btn-color-primary" href="/success-story-detail">Lihat Detail<i class="uil uil-angle-right-b fs-28 pb-1" ></i></a>
                     </div>
                  </ul>
                  <!-- /.post-meta -->
               </div>
            </div>
         </div>
         <!-- /.card -->
      </article>
      <!-- /article -->
   </div>
   <!-- /.item-inner -->
</div>


                
              </div>
              
              <!--/.swiper-wrapper -->
            </div>

            
            <!--/.swiper -->
          </div>

          <div class="row text-center mt-16">
            <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto">
              <h2 class="fs-16 text-uppercase mb-3" style="color:#3734A9 ;">Testimonials</h2>
              <h3 class="display-4 mb-10 px-md-13 px-lg-4 px-xl-0">Check what our clients are saying</h3>
            </div>
            <!-- /column -->
          </div>
          
          <div class="row gx-0">
            <div class="col-lg-4 image-wrapper bg-image bg-cover " style="background-color:#E8F2FF ; border-radius:20px ;" data-image-src="{{ URL::asset('/legal/image/mr-andri.png') }}" alt="mr andri image">
            </div>
            <!--/column -->
            <div class="col-lg-8">
              <div class="p-10 p-md-11 mx-15 px-lg-13 py-lg-14">
                <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide text-center">
                        <blockquote class="icon icon-top fs-lg text-left pt-2" style="color:#2A51A4 !important;">
                        </blockquote>
                        <span class="ratings five mt-4 mb-3 pt-2 reviews"></span>

                        <blockquote class="border-0 fs-lg text-center">
                          <p class="reviews">Sebelum menggunakan Legal Analytics, kami bekerja secara manual. Pekerjaan kami yang sebelumnya kami kerjakan memakan waktu 1-2 hari, sekarang bisa langsung terselesaikan hanya dalam beberapa menit saja setelah melakukan digitilasisasi menggunakan teknologi yang ada di dalam Legal Analytics.</p>
                          <div class="blockquote-details justify-content-center reviews">
                            <div class="info ps-0">
                              <h5 class="mb-1">V. Andri Hananto</h5>
                              <p class="mb-0">Analis Hukum</p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!--/.swiper-slide -->
                      <div class="swiper-slide text-center">
                        <blockquote class="icon icon-top fs-lg text-left pt-2" style="color:#2A51A4 !important;">
                        </blockquote>
                        <span class="ratings five mt-4 mb-3 reviews"></span>
                        <blockquote class="border-0 fs-lg text-center">
                          <p class="reviews">“Solusi ini membantu perusahaan dalam menghadapati tantangan saat proses penyusunan peraturan seperti kemudahan drafting, kemudahan interaksi & kolaborasi, reminder , analisa keselarasan peraturan, penyusunan otomatis dan sistematis”</p>
                          <div class="blockquote-details justify-content-center reviews">
                            <div class="info ps-0">
                              <h5 class="mb-1">Junian Sidhiarta</h5>
                              <p class="mb-0">VP Legal & Compliance TELIS
                              </p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                
                      <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
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
          <!-- /.swiper-container -->
        </div>
        
        <!-- /.position-relative -->
      </div>


      
      <!-- /.container -->
    </section>
   
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pt-14 pb-18 pt-md-17 pb-md-22 text-center">
        <div class="row mb-5">
          <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
            <h3 class="display-4 mb-15 mb-md-6 px-lg-10">Know the Legal Analytics</h3>
          </div>
          <!--/column -->
          <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600">
            <span><a class="btn btn-primary rounded mx-1">Get Started</a></span>
          </div>
        </div>
        
        </div>
        <!--/.row -->

     

    
      <!-- /.container -->
    </section>
    <!-- /section -->
  
    
    <!-- /section -->
      <section class="wrapper  bg-light">
      <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">

        <div class="row text-center" data-cue="slideInUp">
          <div class="col-lg-10 mx-auto">
            <div class="mt-lg-n20 mt-xl-n22 position-relative">
              <div class="shape bg-dot red rellax w-16 h-18" data-rellax-speed="1" style="top: 1rem; left: -3.9rem;"></div>
              <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1" style="bottom: 2rem; right: -3rem;"></div>
             

               <iframe class="responsive-iframe"src="https://www.youtube.com/embed/BKhfi6Z1e7U?start=1" width="100%" title="Legal Analytics in Telkom Indonesia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <!-- <video poster="assets/img/photos/movie.jpg" class="player" playsinline controls preload="none">-->
             
                
            </div>
          </div>
          
        </div>

      </div>
 
    </section>





  @endsection