@extends('legal/main') @section('container')
<div class="content-wrapper">
    <section class="wrapper bg-soft-primary">
    <div
            class="wrapper bg-full bg-image"
            data-image-src="{{ URL::asset('/legal/image/hero-bg.png')}}"
            >
        <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div
                    class="col-md-10 col-lg-8 col-xl-8 col-xxl-auto mx-auto mb-13"
                    data-cues="slideInDown"
                    data-group="page-title"
                >
                    <h1
                        class="display-1 mb-4"
                        style="font-weight: 900; color: #fafafa"
                    >
                        FITUR PENGEMBANGAN KHUSUS
                    </h1>
                    <div
                        class="d-flex justify-content-center"
                        data-cues="slideInDown"
                        data-group="page-title-buttons"
                        data-delay="600"
                    >
                        <span
                            ><a class="btn btn-color-primary rounded mx-1"
                                >Ajukan Demo</a
                            ></span
                        >
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <!--Content Head-->
    <!-- Carefull-->

    <section class="wrapper bg-light">
        <div class="container pb-1 pb-md-3 mb-lg-21 mb-xl-2">
            <div class="row gx-0 mb-16 mb-mb-20">
                <div
                    class="col-9 col-sm-10 col-lg-7 mx-auto mt-n15 mt-md-n20"
                    data-cues
                    data-group="images"
                    data-delay="1500"
                >
                    <img
                        class="img-fluid mx-auto"
                        data-cue="slideInUp"
                        src="{{ URL::asset('/legal/image/solution/customdev-hero.png') }}"
                        alt="custom development ai hero" 
                    />
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->

            <!-- before Slider-->
        </div>

        <!--/.row -->
    </section>

    <section class="wrapper bg-light">
        <div class="container pb-1 pb-md-3 mb-lg-21 mb-xl-2">
            <!-- /.row -->
            <div
                class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18"
            >
                <div class="col-lg-6 order-lg-2">
                    <div class="position-relative">
                        <figure>
                            <img
                                data-cue="fadeIn"
                                data-delay="300"
                                src="{{ URL::asset('/legal/image/solution/customdev-summary.png') }}"
                        alt="custom development ai summary image" 
                            />
                        </figure>
                        <!-- /column -->

                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h3 class="display-4 mb-5" style="font-weight: 600">
                        Summary
                    </h3>
                    <p class="mb-5" style="font-weight: 200">
                        Dapat Melakukan analisa dan memberikan kesimpulan
                        terhadap suatu kasus hukum berdasarkan indikator yang
                        telah ditetapkan.
                    </p>

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
            <div
                class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18"
            >
                <div class="col-lg-6">
                    <div class="position-relative">
                        <figure>
                            <img
                                data-cue="fadeIn"
                                data-delay="300"
                                src="{{ URL::asset('/legal/image/solution/customdev-litigation.png') }}"
                        alt="custom development ai litigation image" 
                            />
                            <!-- /column -->
                        </figure>
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h3 class="display-4 mb-5">Litigation Analytics</h3>
                    <p class="mb-5">
                        Melakukan analisis suatu Putusan Pengadilan terkait
                        untuk memprediksi Putusan pada kasus serupa di masa
                        mendatang.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->

    <!--Section-->

    <section class="wrapper bg-light">
        <div class="container pb-1 pb-md-3 mb-lg-21 mb-xl-2">
            <!-- /.row -->
            <div
                class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18"
            >
                <div class="col-lg-6 order-lg-2">
                    <div class="position-relative">
                        <figure>
                            <img
                                data-cue="fadeIn"
                                data-delay="300"
                                src="{{ URL::asset('/legal/image/solution/customdev-ediscovery.png') }}"
                        alt="custom development ai ediscovery image" 
                            />
                        </figure>
                        <!-- /column -->

                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h3 class="display-4 mb-5" style="font-weight: 600">
                        E-Discovery
                    </h3>
                    <p class="mb-5" style="font-weight: 200">
                        Analisa untuk menemukan fakta yang relevan dari data
                        dokumen.
                    </p>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
        </div>
    </section>

    <section class="wrapper bg-soft-secondary">
        <div class="container pb-1 pb-md-3 mb-lg-21 mb-xl-2">
            <!-- /.row -->
            <div
                class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18"
            >
                <div class="col-lg-6">
                    <div class="position-relative">
                        <figure>
                            <img
                                data-cue="fadeIn"
                                data-delay="300"
                                src="{{ URL::asset('/legal/image/solution/customdev-early.png') }}"
                        alt="custom development ai early image" 
                            />
                        </figure>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h3 class="display-4 mb-5">Early Warning System</h3>
                    <p class="mb-5">
                        Memberikan informasi lengkap berupa materiil dan formil
                        terhadap suatu peraturan sebagai bahan analisa para
                        Legal di dalam menangani kasus selanjutnya.
                    </p>
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
            <div
                class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18"
            >
                <div class="col-lg-6 order-lg-2">
                    <div class="position-relative">
                        <figure>
                            <img
                                data-cue="fadeIn"
                                data-delay="300"
                                src="{{ URL::asset('/legal/image/solution/customdev-contract.png') }}"
                        alt="custom development ai contract image" 
                            />
                        </figure>
                        <!-- /column -->

                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h3 class="display-4 mb-5" style="font-weight: 600">
                        Contract Drafting
                    </h3>
                    <p class="mb-5" style="font-weight: 200">
                        Melakukan penyusunan Kontrak Bisnis secara digital mulai
                        dari Inisiasi sampai penandatanganan.
                    </p>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
        </div>
    </section>
    <!--simpanan-->
   
</div>
@endsection
