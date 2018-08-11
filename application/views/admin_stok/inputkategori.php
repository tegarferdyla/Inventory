<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Profile</h3>
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
            <div class="btn-group" role="group">
              <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1"
              type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="#">Contoh 1</a>
                <a class="dropdown-item" href="#">Contoh 2</a>
              </div>
            </div>
            <a class="btn btn-outline-primary" href="#"><i class="ft-mail"></i></a>
            <a class="btn btn-outline-primary" href="#"><i class="ft-pie-chart"></i></a>
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