<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Kategori Barang</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('stok') ?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Input Kategori
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
        <!-- Basic form layout section start -->
        <section id="horizontal-form-layouts">
          <div class="row">
            <div class="col-md-12">
              <div class="card box-shadow-2">
                <div class="card-content collpase show">
                  <div class="card-body">
                    <form class="form form-horizontal" action="<?php echo base_url()."index.php/stok/tambahkategori" ?>" method="post">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-bookmark"></i>Input Kategori</h4>
                        <input type="hidden" value="" id="projectinput5" class="form-control" placeholder=""name="id_kategori">
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput5">Nama Kategori</label>
                          <div class="col-md-9">
                            <input type="text" value="" id="projectinput5" class="form-control" placeholder="Nama Kategori" name="kategori" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput9">Deskripsi</label>
                          <div class="col-md-9">
                            <textarea id="projectinput9" rows="5" class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions right">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="fa fa-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>