<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Data Barang</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('Stok') ?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('Stok/daftarbarang')?>"> Daftar Barang</a>
                </li>
                <li class="breadcrumb-item active">Detail Barang
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <?php date_default_timezone_set('Asia/Jakarta'); date_default_timezone_set("Asia/Jakarta"); $jam  =  date("H:i:s");  ?>
            <h6 class="text-success"><i class="ft-calendar"> <?php echo date('d-m-Y') ?> </i></h6>&nbsp; &nbsp; &nbsp;
            <i class="ft-clock text-info  "></i>&nbsp; &nbsp;<h6 class="text-info" id="txt"></h6>         
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Card heading color options section start -->
        <section id="card-heading-color-options">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="card box-shadow-2">
                <div class="card-header card-head-inverse bg-info">
                  <h3 class="card-title">Kemeja Anak Bagus</h3>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="<?php echo base_url('app-assets/images/foto_barang/1.jpg') ?>" class="d-block w-100" alt="First slide">
                      </div>
                      <div class="col-md-6">
                       <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <small>Harga</small>
                          <h2 class="float-right" style="color: green"><b>Rp. 125.000</b> </h2>
                        </li>
                        <li class="list-group-item">
                           <h4><b>Hijau</b></h4>
                          <table class="table table-xs">
                          <thead class="bg-success">
                            <tr>
                              <th class="text-white">Ukuran</th>
                              <th class="text-white">Stok</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>XL</td>
                              <td>30</td>
                            </tr>
                          </tbody>
                        </table>
                          <h4><b>Merah</b></h4>
                          <table class="table table-xs">
                          <thead class="bg-success">
                            <tr>
                              <th class="text-white">Ukuran</th>
                              <th class="text-white">Stok</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>XL</td>
                              <td>30</td>
                            </tr>
                            <tr>
                              <td>L</td>
                              <td>20</td>
                            </tr>
                            <tr>
                              <td>M</td>
                              <td>10</td>
                            </tr>
                          </tbody>
                        </table>
                         <h4><b>Biru</b></h4>
                          <table class="table table-xs">
                          <thead class="bg-success">
                            <tr>
                              <th class="text-white">Ukuran</th>
                              <th class="text-white">Stok</th>
                            </tr>
                          </thead>
                          <tbody>
                              <td>L</td>
                              <td>20</td>
                            </tr>
                            <tr>
                              <td>M</td>
                              <td>10</td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                        <li class="list-group-item">
                          <small>Deskripsi</small>
                          <h4 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex deserunt tempore illo molestias repudiandae similique hic autem dolorem obcaecati tenetur nostrum, enim rem aliquam repellendus voluptate maxime fugit doloremque in.</h4>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-md-6">
                              <button type="button" class="btn mr-1 mb-1 btn-block btn-success"><i class="fa fa-edit"></i> Update Stok</button>
                            </div>
                            <div class="col-md-6">
                              <button type="button" class="btn mr-1 mb-1 btn-block btn-danger"><i class="fa fa-trash"></i> Hapus Stok</button>
                            </div>
                          </div>
                        </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </section>
        <!-- // Card heading color options section end -->
      </div>
    </div>
  </div>