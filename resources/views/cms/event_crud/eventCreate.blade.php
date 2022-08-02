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
                  <a href="/event-crud">
                     <h5 class="text-white"><i class="uil uil-arrow-left"></i><u>Kembali</u></h5>
                  </a>
               </div>
               <h1 class="display-7 mb-4 text-white">
                  Create Event
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
            <div class="col-xl-10 mx-auto mt-n19">
               <div class="container py-15 py-md-2">
                  <div class="row">
                     <div class="col-xl-12 mx-auto">
                        <div class="card border-3 shadow-lg">
                           <div class="card-body py-lg-8 px-lg-12">
                              <form
                                 method="post"
                                 action="{{ url('/create-event') }}"
                                 enctype="multipart/form-data"
                                 >
                                 @csrf                               
                                 <div class="row gx-4">
                                    <div class="col-6">
                                       <div class="mb-3">
                                          <label
                                             for="NamaEvent"
                                             class="form-label"
                                             >Nama Event</label>
                                          <label for="NamaEvent" class="form-label text-red">*</label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="NamaEvent"
                                             name="NamaEvent"
                                             placeholder="Masukkan nama event"
                                             value="{{ old('NamaEvent') }}"
                                             />
                                             @error('NamaEvent')
                                                <p class="text-red">
                                                    {{ $message }}
                                                </p>
                                             @enderror 
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-3">
                                          <label
                                             for="KategoriEvent"
                                             class="form-label"
                                             >Kategori Event</label>
                                          <label for="KategoriEvent" class="form-label text-red">*</label>
                                          <select class="form-select" name="KategoriEvent" aria-label="Default select example">
                                             <option selected> Pilih kategori event </option>
                                             @foreach($eventCategories as $evecat)
                                             <option value="{{ $evecat->id }}" {{($evecat->id == old('KategoriEvent')) ? 'selected' : ''}} >
                                                {{ $evecat->nama_kategori_event }}
                                             </option>
                                             @endforeach
                                          </select>
                                          @error('KategoriEvent')
                                                <p class="text-red">
                                                    {{ $message }}
                                                </p>
                                             @enderror 
                                       </div>
                                      
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-3">
                                          <label
                                             for="LokasiEvent"
                                             class="form-label"
                                             >Lokasi Event</label>
                                          <label for="LokasiEvent" class="form-label text-red">*</label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="LokasiEvent"
                                             name="LokasiEvent"
                                             placeholder="Masukkan lokasi event"
                                             value="{{ old('LokasiEvent') }}"
                                             />
                                             @error('LokasiEvent')
                                                <p class="text-red">
                                                    {{ $message }}
                                                </p>
                                             @enderror 
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-3">
                                          <label
                                             for="KuotaEvent"
                                             class="form-label"
                                             >Kuota Event</label>
                                          <label for="KuotaEvent" class="form-label text-red">*</label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="KuotaEvent"
                                             name="KuotaEvent"
                                             placeholder="Masukkan kuota event"
                                             value="{{ old('KuotaEvent') }}"
                                             />
                                             @error('KuotaEvent')
                                                <p class="text-red">
                                                    {{ $message }}
                                                </p>
                                             @enderror 
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-3">
                                          <label
                                             for="TanggalEvent"
                                             class="form-label"
                                             >Tanggal Event</label>
                                          <label for="TanggalEvent" class="form-label text-red">*</label>
                                          <input
                                             type="date"
                                             class="form-control"
                                             id="TanggalEvent"
                                             name="TanggalEvent"
                                             value="{{ old('TanggalEvent') }}"
                                             />
                                             @error('TanggalEvent')
                                                <p class="text-red">
                                                    {{ $message }}
                                                </p>
                                             @enderror 
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-3">
                                          <label
                                             for="ThumbnailEvent"
                                             class="form-label"
                                             >Thumbnail Event</label>
                                          <label for="ThumbnailEvent" class="form-label text-red">*</label>
                                          <div class="container">
                                             <div class="col-lg-12 cvimg">
                                                <img src="{{ URL::asset('/cms/image/file.png') }}"/>
                                                <input type="file" name="ThumbnailEvent" id="file" accept="image/png, image/jpeg,  image/jpg"  hidden/>
                                                <label class="btn btn-primary mx-3 mb-2" for="file" style="width:auto; height:auto;" >Pilih File</label>
                                                <br>
                                                <a class="mx-10 " style="margin-right: 1rem !important;color:#BDBDBD;">Files supported : image (max 10 mb)</a>
                                             </div>
                                          </div>
                                          @error('ThumbnailEvent')
                                                <p class="text-red">
                                                    {{ $message }}
                                                </p>
                                             @enderror 
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-3">
                                          <label
                                             for="DeskripsiEvent"
                                             class="form-label"
                                             >Deskripsi Event </label >
                                          <label for="DeskripsiEvent" class="form-label text-red"
                                             >*</label>
                                          <textarea
                                             class="form-control"
                                             id="article-ckeditor"
                                             rows="4"
                                             placeholder="Isi teks di sini"
                                             name="DeskripsiEvent"
                                             value="{{ old('DeskripsiEvent') }}" 
                                             >{{ old('DeskripsiEvent') }}</textarea>
                                             @error('DeskripsiEvent')
                                                <p class="text-red">
                                                    {{ $message }}
                                                </p>
                                             @enderror 
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 text-center mt-5">
                                    <input
                                       type="submit"
                                       class="btn btn-primary btn-send"
                                       value="Submit"
                                       />
                                 </div>
                                 <!-- /column -->
                           </div>
                           <!-- /.row -->
                           </form>
                           <!-- /form -->
                        </div>
                        <!--/.card-body -->
                     </div>
                     <!--/.card -->
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </div>
         </div>
      </div>
</div>
</section>
</div>
@endsection