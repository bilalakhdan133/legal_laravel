@extends('legal/main')
@section('container')
<body>
   <div class="content-wrapper">
      <section class="wrapper bg-blue-legal">
         <div
            class="wrapper bg-full bg-image"
            data-image-src="{{ URL::asset('/legal/image/hero-bg.png')}}"
            >
            <div class="container pt-10 pb-15 pt-md-14 pb-md-10 text-center">
               <div class="row">
                  <div
                     class="col-md-10 col-lg-8 col-xl-8 col-xxl-10 mx-auto mb-13"
                     data-cues="slideInDown"
                     data-group="page-title"
                     >
                     <h1 class="display-7 mb-4 text-white">
                        Lihat bagaimana perusahaan lintas industri menggunakan
                        teknologi dan solusi Legal Analytics
                     </h1>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </div>
         </div>
         <!-- /.container -->
      </section>
      <section class="wrapper bg-light">
         <div class="container py-14 py-md-16">
            <div class="row">
               <div class="col-lg-11 mx-auto">
                  <h3 class="display-4 mb-6">Studi Kasus Pelanggan Kami</h3>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="container py-14 py-md-8">
               <div class="blog grid grid-view">
                  <div class="row isotope gy-6 rounded-2">
                     <div class="project item col-md-6 col-xl-4">
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
                        <!-- /.card-footer -->
                     </div>
                     <div class="project item col-md-6 col-xl-4">
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
                                    <h1 class="post-title h3 mt-1 " style="height:60px;"><a class="link-dark" href="blog-post.html">PT Telkom Indonesia (Persero) Tbk</a></h1>
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
                                                   <img style="width:50% ;" src="{{ URL::asset('/legal/image/resources/success_story/telkom-logo.png') }}" alt="telkom logo"  />
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
                        <!-- /.card-footer -->
                     </div>
                     <div class="project item col-md-6 col-xl-4">
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
                                                   <img style="width:50% ;" src="{{ URL::asset('/legal/image/resources/success_story/kemenhub-logo.png') }}" alt="kemenhub logo"  />
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
                        <!-- /.card-footer -->
                     </div>
                     <div class="project item col-md-6 col-xl-4">
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
                        <!-- /.card-footer -->
                     </div>
                  </div>
                
                  <!-- /.post -->
               </div>
               <!-- /.row -->
            </div>
         </div>
         <!-- /.position-relative -->
   </div>
   <!-- /.container -->
   </section>
   <!-- /section -->
   @endsection