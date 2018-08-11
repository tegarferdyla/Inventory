<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Daftar Kategori</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Daftar Kategori</a>
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
        <section>
          <div class="row">
            <div class="col-12">
              <div class="card box-shadow-2">
                <div class="card-header">
                  <h4 class="card-title">List Kategori Barang</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body card-dashboard">
                    <?php if ($this->session->flashdata('updateberhasil')): ?> 
                    <div class="alert alert-success alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>Well done!</strong> Kategori berhasil di update. 
                    </div>
                    <?php elseif ($this->session->flashdata('berhasil')): ?> 
                    <div class="alert alert-success alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>Well done!</strong> Kategori berhasil di tambahkan. 
                    </div>
                    <?php  elseif ($this->session->flashdata('updategagal')): ?>
                     <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>Oh snap!</strong>Kategori tidak berhasil di update.
                     </div>
                     <?php elseif ($this->session->flashdata('hapusberhasil')): ?> 
                    <div class="alert alert-success alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>Well done!</strong> Kategori berhasil di hapus.
                    </div>
                   <?php endif ?> 
                    <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Kategori</th>
                          <th>Deskripsi</th>
                          <th width="110px">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        <?php 
                          foreach ($kategori as $u ) {
                         ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo ucwords($u->kategori) ?></td>
                          <td><?php echo $u->deskripsi ?></td>
                          <td>
                            <a class="btn btn-icon btn-success mr-1" href="<?php echo base_url()."stok/editkategori/".$u->id_kategori;?>" title="Edit"><i class="ft-edit"></i></a>
                            <a onclick="return confirm('Apa anda yakin ingin menghapus kategori ini?')" class="btn btn-icon btn-danger" href="<?php echo base_url()."stok/hapuskategori/".$u->id_kategori;?>" title="Hapus"><i class="ft-trash"></i></a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>