<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
        </nav>
       
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
           
                
                
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Events</h6>
              <br>
              <?= $this->session->flashdata('pesan'); ?>
              <br>
              <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <a href="<?= base_url('events/tambah_events');?>" class="btn btn-primary" style="float: right;">
         + tambah
        </a>
            </div>
            <br>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">event id</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">event name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">event date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">location</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">organizer</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                            $count = 0;
                            foreach ($queryAllevents as $row) {
                                $count = $count + 1;
                            ?>                     
                    <tr>
                    <td class="text-center" style="vertical-align: middle;"><?= $row->event_id ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->event_name ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->event_date ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->location ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->organizer ?></td>
                       
                        <td>
                        <a href="<?= base_url('events/edit_events/' . $row->event_id);?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                        <a href="<?= base_url('events/hapus_events/' . $row->event_id); ?>" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i> hapus</a>
                    </tr>
                    <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     