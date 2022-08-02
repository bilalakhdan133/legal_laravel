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
                  <a href="/category-crud">
                     <h5 class="text-white"><i class="uil uil-arrow-left"></i><u>Kembali</u></h5>
                  </a>
               </div>
               <h1 class="display-7 mb-4 text-white">
                  Create Category
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
                     <div class="col-xl-6 mx-auto">
                        <div class="card border-3 shadow-lg">
                           <div class="card-body py-lg-8 px-lg-12">
                              <form
                                 method="post"
                                 action="{{ url('/create-category') }}"
                                 enctype="multipart/form-data"
                                 >
                                 @csrf                               
                                 <div class="row gx-4">
                                    <div class="col-12">
                                       <div class="mb-3">
                                          <label
                                             for="NamaCategory"
                                             class="form-label"
                                             >Nama Category</label>
                                          <label for="NamaCategory" class="form-label text-red">*</label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="NamaCategory"
                                             name="NamaCategory"
                                             placeholder="Masukkan nama category"
                                             value="{{ old('NamaCategory') }}"
                                             />
                                             @error('NamaCategory')
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