
  @extends('legal/main')
  @section('container')
    <div class="content-wrapper">
     
      <section class="wrapper bg-docrec angled lower-start">
        <div
          class="wrapper bg-full bg-image"
          data-image-src="assets/img/hero-bg3.png"
        >
          <div class="container pt-7 pt-md-11 pb-8">
            <div class="row gx-0 gy-10">
              <div
                class="col-lg-6"
                data-cues="slideInDown"
                data-group="page-title"
                data-delay="100"
              >
                <h1 class="display-1 text-black mb-4">Document Recap</h1>

                <p
                  class="lead fs-24 lh-sm text-black mb-7 pe-md-18 pe-lg-0 pe-xxl-15"
                >
                  Membangun sistem untuk merekap seluruh aktivitas dalam
                  perancangan peraturan hukum secara menyeluruh.
                </p>
              </div>
              <!-- /column -->
              <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
                <div class="position-relative">
                  <figure>
                    <img src="{{ URL::asset('/legal/image/product/dr-docrec-hero.png') }}" alt="document recap hero" />
                  </figure>
                </div>
                <!-- /div -->
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.container -->
      </section>

      <!-- /section -->
      <section class="wrapper bg-light">
        <div
          class="container pt-21 pt-md-20 pb-14 pb-md-10"
          data-cues="slideInDown"
          data-delay="100"
        >
          <!-- /.row -->
          <!--/.row -->
          <div
            class="row gy-10 gy-sm-13 gx-lg-3 mb-14 mb-md-18 align-items-center"
          >
            <div class="col-md-8 col-lg-6 position-relative">
              <figure class="rounded">
                <img
                  src="{{ URL::asset('/legal/image/product/dr-complete-recap.png') }}"
                  alt="complete recap image"
                />
              </figure>
            </div>
            <!--/column -->
            <div class="col-lg-5 col-xl-4 offset-lg-1">
              <h3 class="display-4 mb-7">Complete Recap</h3>
              <div class="d-flex flex-row">
                <div>
                  <p class="mb-0">
                    Memungkinkan untuk memberikan rekomendasi yang memudahkan
                    user dalam menyusun peraturan perundang-undangan.
                  </p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div
            class="row gy-10 gy-sm-13 gx-lg-3 align-items-center"
            data-cues="slideInDown"
          >
            <div
              class="col-md-8 col-lg-6 offset-lg-1 order-lg-2 position-relative"
            >
              <figure class="rounded">
                <img
                  src="{{ URL::asset('/legal/image/product/dr-attachment-history.png') }}"
                  alt="attachment history image"
                />
              </figure>
            </div>

            <!--/column -->
            <div class="col-lg-5">
              <h3 class="display-4 mb-7">Attachment History</h3>
              <div class="d-flex flex-row">
                <div>
                  <p class="mb-0">
                    Memudahkan untuk melihat riwayat dari pekerjaan menyusun
                    peraturan perundang-undangan
                  </p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div
            class="row gy-10 gy-sm-13 gx-lg-3 mb-16 mb-md-18 pt-14 pt-md-19 align-items-center"
            data-cues="slideInDown"
          >
            <div class="col-md-8 col-lg-6 position-relative">
              <figure class="rounded">
                <img
                  src="{{ URL::asset('/legal/image/product/dr-unlimited-recap.png') }}"
                  alt="unlimited recap image"
                />
              </figure>
            </div>
            <!--/column -->
            <div class="col-lg-5 col-xl-4 offset-lg-1">
              <h3 class="display-4 mb-7">Unlimited Recap</h3>
              <div class="d-flex flex-row">
                <div>
                  <p class="mb-0">
                    Memungkinkan user untuk menyimpan peraturan
                    perundangan-undangan baik yang sudah ada maupun yang akan
                    disusun dengan kapasitas sesuai keinginan
                  </p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div
            class="row gy-10 gy-sm-13 gx-lg-3 align-items-center"
            data-cues="slideInDown"
          >
            <div
              class="col-md-8 col-lg-6 offset-lg-1 order-lg-2 position-relative"
            >
              <figure class="rounded">
                <img
                  src="{{ URL::asset('/legal/image/product/dr-collaborative-workspace.png') }}"
                  alt="collaborative workspace image"
                />
              </figure>
            </div>

            <!--/column -->
            <div class="col-lg-5">
              <h3 class="display-4 mb-7">Collaborative Workspace</h3>
              <div class="d-flex flex-row">
                <div>
                  <p class="mb-0">
                    Memberikan akses ke anggota lain dari tim untuk
                    berkolaborasi dalam menyusun peraturan perundang-undangan.
                  </p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
        </div>
        <!-- /.container -->
      </section>
      <section class="wrapper" data-cues="slideInDown">
        <div class="container py-14 py-md-10">
          <div class="row">
            <div class="col-lg-11 col-xxl-10 mx-auto text-center">
              <h3 class="display-7 mb-10 px-lg-12 px-xl-10 px-xxl-15">FAQ's</h3>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div class="row">
            <div class="col-lg-7 mx-auto">
              <div id="accordion-3" class="accordion-wrapper">
                <div class="card accordion-item shadow-lg">
                  <div class="card-header" id="accordion-heading-3-1">
                    <button
                      class="collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-collapse-3-1"
                      aria-expanded="false"
                      aria-controls="accordion-collapse-3-1"
                    >
                      <i class="uil uil-plus"></i>
                      Apa yang dimaksud dengan Layanan Pelanggan Otomatis ?
                    </button>
                  </div>
                  <!-- /.card-header -->
                  <div
                    id="accordion-collapse-3-1"
                    class="collapse"
                    aria-labelledby="accordion-heading-3-1"
                    data-bs-target="#accordion-3"
                  >
                    <div class="card-body">
                      <p>
                        Layanan pelanggan otomatis memudahkan Anda untuk memberikan dukungan pelanggan tanpa campur tangan manusia. Ini bekerja paling baik ketika pelanggan membutuhkan jawaban untuk pertanyaan langsung yang berulang, pembaruan status, atau bantuan untuk menemukan sumber daya tertentu.
                      </p>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
                </div>
                <!-- /.card -->
                <div class="card accordion-item shadow-lg">
                  <div class="card-header" id="accordion-heading-3-2">
                    <button
                      class="collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-collapse-3-2"
                      aria-expanded="false"
                      aria-controls="accordion-collapse-3-2"
                    >
                    <i class="uil uil-plus"></i>
                    Apa perbedaan antara solusi AI Legal Analytics dengan JDIH ?
                    </button>
                  </div>
                  <!-- /.card-header -->
                  <div
                    id="accordion-collapse-3-2"
                    class="collapse"
                    aria-labelledby="accordion-heading-3-2"
                    data-bs-target="#accordion-3"
                  >
                    <div class="card-body">
                      <p>
                        Teknologi Legal Analytics kami didukung oleh NLP dan OCR terbaik dalam Bahasa Indonesia maupun Bahasa Inggris. Inilah sebabnya mengapa Legal Analytics dapat secara akurat memahami maksud dan konteks kalimat dan menghasilkan data yang lengkap dan akurat. Legal Analytics satu-satunya Solusi Legal AI yang memiliki fitur analisis dan pembanding peraturan yang akurat secara lengkap. Anda dapat menemukan kesaksian dan studi kasus mereka di halaman Resources.
                      </p>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
                </div>
                <!-- /.card -->
                <div class="card accordion-item shadow-lg">
                  <div class="card-header" id="accordion-heading-3-3">
                    <button
                      class="collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-collapse-3-3"
                      aria-expanded="false"
                      aria-controls="accordion-collapse-3-3"
                    >
                    <i class="uil uil-plus"></i>
                    Bagaimana cara berlangganan Solusi AI  Legal Analytics ?
                    </button>
                  </div>
                  <!-- /.card-header -->
                  <div
                    id="accordion-collapse-3-3"
                    class="collapse"
                    aria-labelledby="accordion-heading-3-3"
                    data-bs-target="#accordion-3"
                  >
                    <div class="card-body">
                      <p>
                        Untuk berlangganan, Anda dapat menghubungu kami melalui Halaman Contact Us dengan mengisi data diri dan kami terbuka untuk pertemuan bisnis lainnya.
                      </p>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
                </div>
                <!-- /.card -->
                <div class="card accordion-item shadow-lg">
                  <div class="card-header" id="accordion-heading-3-4">
                    <button
                      class="collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-collapse-3-4"
                      aria-expanded="false"
                      aria-controls="accordion-collapse-3-4"
                    >
                    <i class="uil uil-plus"></i>
                    Berapa harga Solusi AI Legal Analytics ? 
                    </button>
                  </div>
                  <!-- /.card-header -->
                  <div
                    id="accordion-collapse-3-4"
                    class="collapse"
                    aria-labelledby="accordion-heading-3-4"
                    data-bs-target="#accordion-3"
                  >
                    <div class="card-body">
                      <p>
Kami menawarkan berbagai paket untuk solusi AI Legal Analytics yang memudahkan pelanggan didalam berlangganan. Untuk lebih jelasnya, Anda dapat memeriksa halaman Harga kami.
                      </p>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
                </div>
                <div class="card accordion-item shadow-lg">
                  <div class="card-header" id="accordion-heading-3-5">
                    <button
                      class="collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-collapse-3-5"
                      aria-expanded="false"
                      aria-controls="accordion-collapse-3-5"
                    >
                    <i class="uil uil-plus"></i>
                    Apa saja fitur – fitur yang terdapat di dalam Solusi AI Legal Analytics ?
                    </button>
                  </div>
                  <!-- /.card-header -->
                  <div
                    id="accordion-collapse-3-5"
                    class="collapse"
                    aria-labelledby="accordion-heading-3-5"
                    data-bs-target="#accordion-3"
                  >
                    <div class="card-body">
                      <p>
                        Ada 5 fitur utama kami, Fitur Legal Drafting Recap, Fitur Legal Analytics Automation, Fitur Legal Format Automation, Fitur NLP Search, Fitur Legal Reminder dan Fitur News. Sebaga bentuk pelayanan maksima kami terhadap pelanggan, solusi AI Legal Analytics dapat menyediakan Fitur baru sesuai kebutuhan pelanggan. Anda dapat menemukan penjelasan Fitur tambahan sesuai keinginan pelanggan di halaman Solution.
                      </p>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.accordion-wrapper -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
    </div>
  @endsection