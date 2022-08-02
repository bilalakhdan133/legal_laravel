@extends('legal/main') @section('container')
<div class="content-wrapper">
   <section class="wrapper bg-blue-legal">
      <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
         <div class="row">
            <div
               class="col-md-10 col-lg-8 col-xl-8 col-xxl-9 mx-auto mb-5"
               data-cues="slideInDown"
               data-group="page-title"
               >
               <div class="back" style="text-align:left;">
               <a href="/event">
                  <h5 class="text-white " ><i class="uil uil-arrow-left"></i><u>Kembali</u></h5>
               </a>   
               </div>
               <h1 class="display-7 mb-4 text-white">
                 {{ $eventDetails->nama_event }}
               </h1>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
         <!-- /.container -->
      </div>
   </section>
   <section class="wrapper">
      <div class="container pb-11" data-cues="slideInDown">
         <div class="row mb-14 mb-md-16">
            <div class="col-xl-18 mx-auto mt-n19">
               <div class="container py-15 py-md-2">
                  <div class="row">
                     <div class="col-xl-8 mx-auto">
                        <div class="card border-3 shadow-lg">
                           <div class="card-body py-lg-6 px-lg-6">
                              <div class="row">
                                 <div class="col-12">
                                    <img src="{{ URL::asset($eventDetails->thumbnail_event) }}"  style="width: 100%; max-width:100% ; border-radius:25px;" alt="" />
                                 </div>
                                 <div class="col-12">
                                    <div class="classic-view">
                                       <article class="post">
                                          <div class="post-content-detail mt-5">
                                             <p>{!! $eventDetails->deskripsi_event !!}</p>
                                          </div>
                                       </article>
                                       <!-- /.post -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--/.card -->
                     </div>
                     <div class="col-xl-4 mx-auto">
                        <div class="card border-3 shadow-lg">
                           <div class="card-body py-lg-8 px-lg-6"> 
                              <h3>Ikuti Seminar</h3>
                                <p class="text-black mb-2" ><i class="uil uil-clock mx-1"></i><strong>Waktu : </strong> {{ $eventDetails->tanggal_event }}</p>                    
                                <p class="text-black mb-2" ><i class="uil uil-map-marker-alt mx-1"></i><strong>Lokasi :</strong>  {{ $eventDetails->lokasi_event }}</p>
                                <p class="text-black mb-4" ><i class="uil uil-user mx-1"></i><strong>Kuota : </strong>{{ $eventDetails->kuota_event }} Peserta</p>
                                <a class="btn btn-primary w-100" href="/event-register/{{ $eventDetails->id }}">Ikuti Event</a>

                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.row -->
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection