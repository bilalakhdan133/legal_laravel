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
                     <!-- <h5 class="text-white"><i class="uil uil-arrow-left"></i><u>Kembali</u></h5> -->
                  </a>
               </div>
               <h1 class="display-7 mb-4 text-white">
                  Category
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
                        <div class="card shadow-lg">
                        <a class="btn btn-primary m-10" href="/category-create-page">Create Category</a>
                           <table class="table table-borderless">
                              <tr>
                                 <th>Kategori ID</th>
                                 <th>Nama Kategori</th>
                                 <th>Action</th>
                              </tr>
                              @foreach($categories as $cat)
                              <tr>
                                 <td>{{ $cat->id }}</td>
                                 <td>{{ $cat->nama_kategori_event }}</td>

                                 <td>
                                    <div class="gap-2 d-md-flex" >
                                        <a class="btn btn-success" href="/category-detail/{{ $cat->id }}">Edit Category</a>
                                          <form action="/delete-category/{{ $cat->id }}" method="post">
                                             {{method_field('delete')}}
                                             {{csrf_field()}}
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                           </form>
                                    </div>
                              
                                </td>
                              </tr>
                              @endforeach
                           </table>
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