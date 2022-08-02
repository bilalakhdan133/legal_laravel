@extends('legal.main')
@section('content')
<section class="wrapper bg-blue-legal">
   <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
      <div class="row">
         <div
            class="col-md-10 col-lg-8 col-xl-8 col-xxl-9 mx-auto mb-13"
            data-cues="slideInDown"
            data-group="page-title"
            >
            <h1 class="display-7 mb-4 text-white">
               Terima kasih atas minat Anda dengan Legal Analytics
            </h1>
            <h5 class="mb-2 text-white">
               Ingin belajar tentang Legal Analytics? kirimkan formulir ini dan
               team kami akan segera menghubungi Anda.
            </h5>
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
                        <div class="card-body py-lg-13 px-lg-12">
                           <h3 class="display-4 mb-6 ">Informasi Data Diri</h3>
                           <form
                              method="post" 
                              action="candidate.php"
                              enctype="multipart/form-data"
                              >
                              <div class="messages"></div>
                              <div class="row gx-4">
                                 <div class="col-12 mb-5">
                                    <div class = "row">
                                       <div class="col-6">
                                          <label for="NamaDepan" class="form-label"
                                             >Nama depan </label>
                                          <label for="NamaDepan" class="form-label text-red"
                                             >*</label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="NamaDepan"
                                             placeholder="Masukkan nama depan anda"
                                             name="nama_depan"
                                             value="<?php echo $nameDepanTemp; ?>"
                                             />
                                          <p class="text-red">
                                             <?php echo $nameDepanError; ?>
                                          </p>
                                       </div>
                                       <div class="col-6">
                                          <label for="NamaBelakang" class="form-label"
                                             >Nama Belakang </label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="NamaBelakang"
                                             placeholder="Masukkan nama belakang anda"
                                             name="nama_belakang"
                                             value="<?php echo $nameBelakangTemp; ?>"
                                             />
                                          <p class="text-red">
                                             <?php echo $nameBelakangError; ?>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 mb-5">
                                    <div class = "row">
                                       <div class="col-6">
                                          <label for="Domisili" class="form-label"
                                             >Domisili </label>
                                          <label for="Domisili" class="form-label text-red"
                                             >*</label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="domisili"
                                             placeholder="Masukkan domisili anda"
                                             name="domisili"
                                             value="<?php echo $NameDomisiliTemp; ?>"
                                             />
                                          <p class="text-red">
                                             <?php echo $nameDomisiliError; ?>
                                          </p>
                                       </div>
                                       <div class="col-6">
                                          <label for="Email" class="form-label"
                                             >email</label>
                                          <label for="email" class="form-label text-red"
                                             >*</label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="Email"
                                             placeholder="eg.user@yourmail.com"
                                             name="email"
                                             value="<?php echo $emailTemp; ?>"
                                             />
                                          <p class="text-red">
                                             <?php echo $emailError; ?>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 mb-5">
                                    <div class="row">
                                       <label for="NomorTelepon" class="form-label"
                                          >Nomor Telepon <label for="NomorTelepon" class="form-label text-red"
                                          >*</label></label>
                                       <div class="row">
                                          <div class="col-2">
                                             <select class="form-select border" name="interPhone" id="interPhone" aria-label="Default select example">
                                                <option
                                                   value="(+62)"
                                                   data-imagesrc="https://flagcdn.com/32x24/id.png"
                                                   <?php if (
                                                       isset(
                                                           $_POST["interPhone"]
                                                       ) &&
                                                       $_POST["interPhone"] ==
                                                           "(+62)"
                                                   ) {
                                                       echo "selected = 'selected';";
                                                   } ?>   
                                                   >
                                                   +62
                                                </option>
                                                <option
                                                   value="(+60)"
                                                   data-imagesrc="https://flagcdn.com/32x24/my.png"
                                                   <?php if (
                                                       isset(
                                                           $_POST["interPhone"]
                                                       ) &&
                                                       $_POST["interPhone"] ==
                                                           "(+60)"
                                                   ) {
                                                       echo "selected = 'selected';";
                                                   } ?>   
                                                   >
                                                   +60
                                                </option>
                                                <option
                                                   value="(+65)"
                                                   data-imagesrc="https://flagcdn.com/32x24/sg.png" 
                                                   <?php if (
                                                       isset(
                                                           $_POST["interPhone"]
                                                       ) &&
                                                       $_POST["interPhone"] ==
                                                           "(+65)"
                                                   ) {
                                                       echo "selected = 'selected';";
                                                   } ?>  
                                                   >
                                                   +65
                                                </option>
                                                <option
                                                   value="(+66)"
                                                   data-imagesrc="https://flagcdn.com/32x24/th.png" 
                                                   <?php if (
                                                       isset(
                                                           $_POST["interPhone"]
                                                       ) &&
                                                       $_POST["interPhone"] ==
                                                           "(+66)"
                                                   ) {
                                                       echo "selected = 'selected';";
                                                   } ?>  
                                                   >
                                                   +66
                                                </option>
                                                <option
                                                   value="(+673)"
                                                   data-imagesrc="https://flagcdn.com/32x24/bn.png" 
                                                   <?php if (
                                                       isset(
                                                           $_POST["interPhone"]
                                                       ) &&
                                                       $_POST["interPhone"] ==
                                                           "(+673)"
                                                   ) {
                                                       echo "selected = 'selected';";
                                                   } ?>  
                                                   >
                                                   +673
                                                </option>
                                                <option
                                                   value="(+95)"
                                                   data-imagesrc="https://flagcdn.com/32x24/mm.png" 
                                                   <?php if (
                                                       isset(
                                                           $_POST["interPhone"]
                                                       ) &&
                                                       $_POST["interPhone"] ==
                                                           "(+95)"
                                                   ) {
                                                       echo "selected = 'selected';";
                                                   } ?>  
                                                   >
                                                   +95
                                                </option>
                                                <option
                                                   value="(+63)"
                                                   data-imagesrc="https://flagcdn.com/32x24/ph.png" 
                                                   <?php if (
                                                       isset(
                                                           $_POST["interPhone"]
                                                       ) &&
                                                       $_POST["interPhone"] ==
                                                           "(+63)"
                                                   ) {
                                                       echo "selected = 'selected';";
                                                   } ?>  
                                                   >
                                                   +63
                                                </option>
                                                <option
                                                   value="(+84)"
                                                   data-imagesrc="https://flagcdn.com/32x24/vn.png" 
                                                   <?php if (
                                                       isset(
                                                           $_POST["interPhone"]
                                                       ) &&
                                                       $_POST["interPhone"] ==
                                                           "(+84)"
                                                   ) {
                                                       echo "selected = 'selected';";
                                                   } ?>  
                                                   >
                                                   +84
                                                </option>
                                                <option
                                                   value="(+856)"
                                                   data-imagesrc="https://flagcdn.com/32x24/la.png" 
                                                   <?php if (
                                                       isset(
                                                           $_POST["interPhone"]
                                                       ) &&
                                                       $_POST["interPhone"] ==
                                                           "(+856)"
                                                   ) {
                                                       echo "selected = 'selected';";
                                                   } ?>  
                                                   >
                                                   +856
                                                </option>
                                                <option
                                                   value="(+855)"
                                                   data-imagesrc="https://flagcdn.com/32x24/kh.png" 
                                                   <?php if (
                                                       isset(
                                                           $_POST["interPhone"]
                                                       ) &&
                                                       $_POST["interPhone"] ==
                                                           "(+855)"
                                                   ) {
                                                       echo "selected = 'selected';";
                                                   } ?>  
                                                   >
                                                   +855
                                                </option>
                                             </select>
                                          </div>
                                          <div class="col-4">
                                             <input
                                                type="text"
                                                class="form-control"
                                                id="NomorTelepon"
                                                placeholder="821-345-675"
                                                name="nomor_telepon"
                                                value="<?php echo $noTelpTemp; ?>"
                                                />
                                          </div>
                                       </div>
                                       <p class="text-red">
                                          <?php echo $noTelpError; ?>
                                       </p>
                                    </div>
                                 </div>
                                 <!-- <div class="col-md-12 my-2">
                                    <label class="form-label">Nomor telepon *</label>
                                    <input name="phone" type="text" id="phone" />
                                    <div class="input-group mb-3">
                                      <div class="pd-telephone-input">
                                        <input
                                          type="tel"
                                          class="form-control"
                                          name=""
                                          id=""
                                        />
                                      </div>
                                    </div>
                                    </div> -->
                                 <h3 class="display-4 mb-6 ">Resume/CV</h3>
                                 <div class="col-6">
                                    <div class="mb-3">
                                       <div class="container">
                                          <div class="col-lg-12 cvimg">
                                             <img src="assets/img/brands/filealt.png"/>
                                             <input type="file" name="file" id="file" accept="application/pdf"  hidden/>
                                             <label class="btn btn-primary mx-3 mb-2" for="file"style="width:auto; height:auto;" >Pilih File</label>
                                             <br>
                                             <a class="mx-12 " style="margin-right: 1rem !important;color:#BDBDBD;">Files supported : pdf (max 10 mb)</a>
                                             <p class="text-red">
                                                <?php echo $fileError; ?>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <label class="form-label"
                                       >Pilih Pekerjaan Anda</label
                                       >
                                    <label for="job" class="form-label text-red"
                                       >*</label>
                                    <select
                                       class="form-select"
                                       aria-label="Default select example"
                                       name="job"
                                       >
                                       <option value="tidak dipilih" selected>
                                          Pilih Pekerjaan Yang Anda Inginkan
                                       </option>
                                       <option value="UI/UX"
                                          <?php if (
                                              isset($_POST["job"]) &&
                                              $_POST["job"] == "UI/UX"
                                          ) {
                                              echo "selected = 'selected';";
                                          } ?>
                                          >UI/UX</option>
                                       <option value="Front End Developer"
                                          <?php if (
                                              isset($_POST["job"]) &&
                                              $_POST["job"] ==
                                                  "Front End Developer"
                                          ) {
                                              echo "selected = 'selected';";
                                          } ?>
                                          >Front End Developer</option>
                                       <option value=".Net Developer"
                                          <?php if (
                                              isset($_POST["job"]) &&
                                              $_POST["job"] == ".Net Developer"
                                          ) {
                                              echo "selected = 'selected';";
                                          } ?>
                                          >.Net Developer</option>
                                    </select>
                                 </div>
                                 <h3 class="display-4 mb-6 ">Social Media</h3>
                                 <div class="col-12 mb-5">
                                    <div class = "row">
                                       <div class="col-6">
                                          <label for="Linkedin" class="form-label"
                                             >Linkedin </label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="linkedin"
                                             placeholder=""
                                             name="linkedin"
                                             value="<?php echo $linkedinTemp; ?>"
                                             />
                                          <p class="text-red">
                                             <?php echo $linkedinError; ?>
                                          </p>
                                       </div>
                                       <div class="col-6">
                                          <label for="Facebook" class="form-label"
                                             >Facebook </label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="facebook"
                                             placeholder=""
                                             name="facebook"
                                             value="<?php echo $facebookTemp; ?>"
                                             />
                                          <p class="text-red">
                                             <?php echo $facebookError; ?>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 mb-5">
                                    <div class = "row">
                                       <div class="col-6">
                                          <label for="Twitter" class="form-label"
                                             >Twitter </label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="twitter"
                                             placeholder=""
                                             name="twitter"
                                             value="<?php echo $twitterTemp; ?>"
                                             />
                                          <p class="text-red">
                                             <?php echo $twitterError; ?>
                                          </p>
                                       </div>
                                       <div class="col-6">
                                          <label for="Website" class="form-label"
                                             >Website </label>
                                          <input
                                             type="text"
                                             class="form-control"
                                             id="website"
                                             placeholder=""
                                             name="website"
                                             value="<?php echo $websiteTemp; ?>"
                                             />
                                          <p class="text-red">
                                             <?php echo $websiteError; ?>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <h3 class="display-4 mb-6 ">Pesan untuk Manajer Perekrutan</h3>
                                 <div class="col-12">
                                    <div class="mb-3">
                                       <label
                                          for="minat"
                                          class="form-label"
                                          >Beri tahu perusahaan tentang minat Anda bekerja di sana</label >
                                       <label for="minat" class="form-label text-red"
                                          >*</label>
                                       <textarea
                                          class="form-control"
                                          id="minat"
                                          rows="4"
                                          placeholder="Isi teks di sini"
                                          name="minat"
                                          ><?php echo $minatTemp; ?></textarea>
                                       <p
                                          class="text-red mt-1"
                                          style="font-size: 15px"
                                          >
                                          <?php echo $minatError; ?>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-12 text-center mt-5">
                                    <input type="submit" class="btn btn-primary" value="Submit" name="proses"
                                       />
                                 </div>
                                 <!-- /column -->
                              </div>
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
<!-- /section -->
<div class="container pb-7" data-cues="slideInDown">
   <div class="card image-wrapper bg-blue-legal mb-13">
      <div class="card-body p-9 p-xl-11">
         <div class="row align-items-center gy-6">
            <div class="col-lg-7">
               <h3 class="display-5 text-white">
                  Siap membuat peraturan & perundang-undangan yang berkualitas
                  berbasis AI?
               </h3>
            </div>
            <!-- /column -->
            <div class="col-lg-5 col-xl-4 offset-xl-1">
               <div class="text-center">
                  <a href="#" class="btn btn-color-primary">Hubungi Kami</a>
               </div>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!--/.card-body -->
   </div>
</div>
</div>
@endsection