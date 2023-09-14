@extends('template')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Data Program</h4>

                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pengaturan</a></li>
                                    <li class="breadcrumb-item active">Data Program</li>
                                </ol>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- Start Page-content-Wrapper -->
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between ">
                                        <h4 class="card-title">Data Program</h4>
                                        <button style="margin-top:0!important;" class="btn btn-purple text-white m-3"><i
                                                class="mdi mdi-plus"></i>Tambahkan
                                            Data</button>
                                    </div>



                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="table-primary text-center">
                                            <tr>
                                                <th>NO</th>
                                                <th>Kode</th>
                                                <th>Nama Program</th>
                                                <th>OPD</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>



                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- End Page-content -->

            </div>
            <!-- Container-Fluid -->
        </div>
        <!-- End Page-content-wrapper -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Agroxa <span class="d-none d-sm-inline-block">- Crafted with <i
                                class="mdi mdi-heart text-primary"></i> by
                            Themesbrand.</span>
                    </div>

                </div>
            </div>
        </footer>
    </div>
@endsection
