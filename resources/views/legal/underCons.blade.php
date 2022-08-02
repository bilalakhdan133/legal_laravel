@extends('legal/mainNoDiv') @section('container')
<div class="content-wrapper">
    <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-9 col-xl-8 mx-auto">
                    <figure class="mb-10">
                        <img
                            class="img-fluid"
                            src="{{ URL::asset('/legal/image/under-cons.png') }}"
                            alt="under construction image"
                        />
                    </figure>
                </div>
                <!-- /column -->
                <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                    <!-- <h1 class="mb-3">Oops! Page Not Found.</h1> -->
                    <p
                        class="lead mb-7 px-md-12 px-lg-5 px-xl-7 fs-17 text-center"
                        style="
                            letter-spacing: 4px;
                            line-height: 34px;
                            font-weight: 600;
                            color: #242d40;
                        "
                    >
                        Mohon maaf ! Halaman dalam tahap pengembangan
                    </p>
                    <span>
                        <a
                            href="/"
                            class="btn btn-primary rounded fs-16"
                            style="font-weight: 500; width: 273px; height: 52px"
                            >Kembali Ke Halaman Awal</a
                        ></span
                    >
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
</div>
@endsection
