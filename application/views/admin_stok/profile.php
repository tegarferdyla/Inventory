<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Profile</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Edit Profile</a>
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
                   <?php if ($this->session->flashdata('updateberhasil')): ?> 
                    <div class="alert alert-success alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>Well done!</strong> Profile berhasil di update <a href="#" class="alert-link">important</a> alert message.
                    </div>
                    <?php  elseif ($this->session->flashdata('updategagal')): ?>
                     <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>Oh snap!</strong>Profile tidak berhasil di update <a href="#" class="alert-link">few things up</a> and submit again.
                     </div>
                   <?php endif ?> 
                  <?php echo form_open_multipart('stok/changeprofile'); ?>
                    <form class="form form-horizontal">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-image"></i>Foto Profile</h4>
                        <div class="form-group row">
                          <div class="col-md-12 text-center">
                            <img src="<?php echo base_url('app-assets/images/portrait/small/'.$user['foto_user']) ?>" class="rounded-circle  height-150" alt="Card image">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput1">Ganti Foto</label>
                          <div class="col-md-9">
                            <fieldset class="form-group">
                              <input type="file" class="form-control-file" id="basicInputFile" name="myfiles" accept="image/*">
                            </fieldset>
                          </div>
                        </div>
                        <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                        <input type="hidden" value="<?php echo $user['id_user'] ?>" id="projectinput5" class="form-control" placeholder=""name="id_user">
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput5">Nama Lengkap</label>
                          <div class="col-md-9">
                            <input type="text" value="<?php echo $user['nama_user'] ?>" id="projectinput5" class="form-control" placeholder=""
                            name="nama_user">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput9">Alamat</label>
                          <div class="col-md-9">
                            <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder=""></textarea>
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
                    <?php echo form_close(); ?>
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