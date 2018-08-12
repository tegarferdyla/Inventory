 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Data Barang</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('stok') ?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Daftar Barang
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
        <!-- Content types section start -->
        <section id="content-types">

          <div class="row match-height">
            <div class="col-xl-12 col-md-12 col-sm-12">
              <fieldset>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Barang ...">
                        <div class="input-group-append">
                          <button style="border-radius: 0"type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only"></span>
                            Kategori
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Baju Anak </a>
                            <a class="dropdown-item" href="#">Baju Gamis</a>
                            <a class="dropdown-item" href="#">Baju Koko</a>
                            <a class="dropdown-item" href="#">Baju Muslim</a>
                          </div>
                          <button type="button" class="btn btn-primary"><i class="ft-search"></i></button>
                        </div>
                      </div>
                </fieldset>
            </div>
          </div>
          <br>

          <div class="row match-height">
            <div class="col-xl-3 col-md-12 col-sm-12">
              <div class="card box-shadow-2">
                <div class="card-content">
                  <div class="card-body">
                    <h4 class="card-title">Kemeja Anak Bagus</h4>
                  </div>
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img src="<?php echo base_url('app-assets/images/foto_barang/1.jpg') ?>" class="d-block w-100" alt="First slide">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="small"><i class="ft-bookmark blue"></i> Baju Anak</p>
                      </div>
                      <div class="col-md-6 ">
                        <p class="float-right small"><i class="ft-calendar red"></i> 07-12-2018</p>
                      </div>
                    </div>
                     <a href="<?php echo base_url('Stok/detailbarang') ?>" class="btn btn-block btn-success">Check Detail</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-12 col-sm-12">
              <div class="card box-shadow-2">
                <div class="card-content">
                  <div class="card-body">
                    <h4 class="card-title">Gamis Bagus</h4>
                  </div>
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img src="<?php echo base_url('app-assets/images/foto_barang/02.jpg') ?>" class="d-block w-100" alt="First slide">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="small"><i class="ft-bookmark blue"></i> Baju Gamis</p>
                      </div>
                      <div class="col-md-6 ">
                        <p class="float-right small"><i class="ft-calendar red"></i> 07-12-2018</p>
                      </div>
                    </div>
                     <a href="#" class="btn btn-block btn-success">Check Detail</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-12 col-sm-12">
              <div class="card box-shadow-2">
                <div class="card-content">
                  <div class="card-body">
                    <h4 class="card-title">Baju Koko Bagus</h4>
                  </div>
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img src="<?php echo base_url('app-assets/images/foto_barang/02.jpg') ?>" class="d-block w-100" alt="First slide">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="small"><i class="ft-bookmark blue""></i> Baju Koko</p>
                      </div>
                      <div class="col-md-6 ">
                        <p class="float-right small"><i class="ft-calendar red"></i> 07-12-2018</p>
                      </div>
                    </div>
                     <a href="#" class="btn btn-block btn-success">Check Detail</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-12 col-sm-12">
              <div class="card box-shadow-2">
                <div class="card-content">
                  <div class="card-body">
                    <h4 class="card-title">Baju Muslim</h4>
                  </div>
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img src="<?php echo base_url('app-assets/images/foto_barang/02.jpg') ?>" class="d-block w-100" alt="First slide">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="small"><i class="ft-bookmark blue""></i> Baju Muslim</p>
                      </div>
                      <div class="col-md-6 ">
                        <p class="float-right small"><i class="ft-calendar red"></i> 07-12-2018</p>
                      </div>
                    </div>
                     <a href="#" class="btn btn-block btn-success">Check Detail</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
      </div>
    </div>
  </div>