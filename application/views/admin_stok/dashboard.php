 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- Stats -->
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <a href="<?php echo site_url('stok/daftarkategori') ?>">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-primary bg-darken-2">
                    <i class="icon-tag font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-primary white media-body">
                    <h5>Kategori</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-chevron-right"></i> <?php echo $jmlkategori ?></h5>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-danger bg-darken-2">
                    <i class="icon-user font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-danger white media-body">
                    <h5>New Users</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>1,238</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-warning bg-darken-2">
                    <i class="icon-basket-loaded font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-warning white media-body">
                    <h5>Jumlah Stok</h5>
                    <h5 class="text-bold-400 mb-0 text-center"><i class=""></i> 4,658</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-success bg-darken-2">
                    <i class="icon-wallet font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-success white media-body">
                    <h5>Total Profit</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i> 5.6 M</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Stats -->
        <!--Product sale & buyers -->
        <div class="row match-height">
           <div class="col-md-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Simple Pie Chart</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <canvas id="simple-pie-chart" height="400"></canvas>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!--/ Product sale & buyers -->
        <!--/ Basic Horizontal Timeline -->
      </div>
    </div>
  </div>