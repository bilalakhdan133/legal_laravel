@extends('legal/main') @section('container')
<div class="content-wrapper">
    <section class="wrapper bg-blue-legal">
    <div
            class="wrapper bg-full bg-image"
            data-image-src="{{ URL::asset('/legal/image/hero-bg.png')}}"
            >
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
                        Daftar Event {{ $eventDetails->nama_event }} 
                    </h1>
  
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <!-- /.container -->
        </div>
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
                                        <h2 class="mb-5 text-black">Informasi Data Diri</h2>
                                        <form
                                            method="post"
                                            action="{{ url('/register-event') }}"
                                        >             
                                        @csrf                               
                                          <div class="row gx-4">
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label
                                                            for="NamaDepan"
                                                            class="form-label"
                                                            >Nama Depan</label>
                                                        <label for="NamaDepan" class="form-label text-red">*</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="NamaDepan"
                                                            name="NamaDepan"
                                                            placeholder="Masukkan nama depan anda"
                                                            value="{{ old('NamaDepan') }}"
                                                        />
                                                        @error('NamaDepan')
                                                        <p class="text-red">
                                                                {{ $message }}
                                                        </p>
                                                        @enderror                                                        
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label
                                                            for="NamaBelakang"
                                                            class="form-label"
                                                            >Nama Belakang</label>                                                       
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="NamaBelakang"
                                                            name="NamaBelakang"
                                                            placeholder="Masukkan nama belakang anda"
                                                            value="{{ old('NamaBelakang') }}"
                                                        />
                                                        @error('NamaBelakang')
                                                        <p class="text-red">
                                                                {{ $message }}
                                                        </p>
                                                        @enderror    
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label
                                                            for="Domisili"
                                                            class="form-label"
                                                            >Domisili</label>
                                                            <label for="Domisili" class="form-label text-red">*</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="Domisili"
                                                            name="Domisili"
                                                            placeholder="Masukkan domisili anda"
                                                            value="{{ old('Domisili') }}"
                                                        />
                                                        @error('Domisili')
                                                        <p class="text-red">
                                                                {{ $message }}
                                                        </p>
                                                        @enderror 
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label
                                                            for="Perusahaan"
                                                            class="form-label"
                                                            >Asal Perusahaan/Instansi</label>
                                                            <label for="Perusahaan" class="form-label text-red">*</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="Perusahaan"
                                                            name="Perusahaan"
                                                            placeholder="Masukkan asal perusahaan anda"
                                                            value="{{ old('Perusahaan') }}"
                                                        />
                                                        @error('Perusahaan')
                                                        <p class="text-red">
                                                                {{ $message }}
                                                        </p>
                                                        @enderror 
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label
                                                            for="Pekerjaan"
                                                            class="form-label"
                                                            >Pekerjaan</label>
                                                            <label for="Pekerjaan" class="form-label text-red">*</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="Pekerjaan"
                                                            name="Pekerjaan"
                                                            placeholder="Masukkan pekerjaan anda"
                                                            value="{{ old('Pekerjaan') }}"
                                                        />
                                                        @error('Pekerjaan')
                                                        <p class="text-red">
                                                                {{ $message }}
                                                        </p>
                                                        @enderror 
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label
                                                            for="Email"
                                                            class="form-label"
                                                            > Email</label>
                                                            <label for="Email" class="form-label text-red">*</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="Email"
                                                            name="Email"
                                                            placeholder="Masukkan email anda"
                                                            value="{{ old('Email') }}"
                                                        />
                                                        @error('Email')
                                                        <p class="text-red">
                                                                {{ $message }}
                                                        </p>
                                                        @enderror 
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2">
                                             <label for="NomorTelepon" class="form-label"
                                                >Nomor Telepon</label>
                                             <label for="NomorTelepon" class="form-label text-red"
                                                >*</label>
                                             <div class="row">
                                                <div class="col-4">
                                                      <select class="form-select border" name="interPhone" id="interPhone" aria-label="Default select example">
                                                         <option
                                                            value="(+62)"
                                                            data-imagesrc="https://flagcdn.com/32x24/id.png"
                                                            
                                                            >
                                                            +62
                                                         </option>
                                                         <option
                                                            value="(+60)"
                                                            data-imagesrc="https://flagcdn.com/32x24/my.png"
                                                            
                                                            >
                                                            +60
                                                         </option>
                                                         <option
                                                            value="(+65)"
                                                            data-imagesrc="https://flagcdn.com/32x24/sg.png" 
                                                            
                                                            >
                                                            +65
                                                         </option>
                                                         <option
                                                            value="(+66)"
                                                            data-imagesrc="https://flagcdn.com/32x24/th.png" 
                                                          
                                                            >
                                                            +66
                                                         </option>
                                                         <option
                                                            value="(+673)"
                                                            data-imagesrc="https://flagcdn.com/32x24/bn.png" 
                                                       
                                                            >
                                                            +673
                                                         </option>
                                                         <option
                                                            value="(+95)"
                                                            data-imagesrc="https://flagcdn.com/32x24/mm.png" 
                                                           
                                                            >
                                                            +95
                                                         </option>
                                                         <option
                                                            value="(+63)"
                                                            data-imagesrc="https://flagcdn.com/32x24/ph.png" 
                                                          
                                                            >
                                                            +63
                                                         </option>
                                                         <option
                                                            value="(+84)"
                                                            data-imagesrc="https://flagcdn.com/32x24/vn.png" 
                                                           
                                                            >
                                                            +84
                                                         </option>
                                                         <option
                                                            value="(+856)"
                                                            data-imagesrc="https://flagcdn.com/32x24/la.png" 
                                                           
                                                            >
                                                            +856
                                                         </option>
                                                         <option
                                                            value="(+855)"
                                                            data-imagesrc="https://flagcdn.com/32x24/kh.png" 
                                                          
                                                            >
                                                            +855
                                                         </option>
                                                      </select> 
                                                </div>
                                                <div class="col-8">
                                                   <input
                                                      type="text"
                                                      class="form-control"
                                                      id="NomorTelepon"
                                                      placeholder="821-345-675"
                                                      name="NomorTelepon"
                                                      value="{{ old('NomorTelepon') }}"
                                                      />
                                                </div>
                                                @error('NomorTelepon')
                                                        <p class="text-red">
                                                                {{ $message }}
                                                        </p>
                                                        @enderror 
                                               
                                             </p>
                                             </div>
                                          </div>
                                          <input name="EventID" type="hidden" value="{{ $eventDetails->id }}">
                                          <input name="EventName" type="hidden" value="{{ $eventDetails->nama_event }}">
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
