 <!-- Page-Title -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h1> KATALOG PRODUK YANG READY : </h1>
                        </div>
                    </div>
                </div>
                    <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    $no = 1;
                                    foreach($query->result() as $p){ 
                                        echo"<tr>
                                        <td>".$no."</td>
                                        <td>".$p->nama_produk."</td>
                                        <td>".$p->harga."</td>
                                        <td>".$p->kategori."</td>
                                        <td>".$p->status."</td>
                                    </tr>";
                                    $no++;
                                    } 
                                    ?>
                            </tbody>
                        </table>
                 <!--container div  -->

                <!-- end row -->
