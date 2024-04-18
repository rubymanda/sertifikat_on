
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <!-- Basic Layout -->
      <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Tambah Certificate</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                    <?= form_open_multipart('gn_certificate/fungsi_tambah_generate'); ?>
                      <form>
                          <!-- <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">assignment id</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="assignment_id"
                              name="assignment_id"
                              placeholder="" />
                          </div>
                        -->
                        <div class="form-group">
                      <label for="inputAddress2" class="form-label">certificate id</label>
                      <select class="form-control" id="certificate_id" name="certificate_id">
                        <option selected="true" disabled="disabled"></option>
                        <?php
                          foreach($certificate as $certificate){
                        ?>
                        <option value="<?= $certificate->certificate_id ?>"><?= $certificate->certificate_id ?></option>
                        <?php
                          }
                        ?>
                      </select>
                     </div>
                     <div class="form-group">
                      <label for="inputAddress2" class="form-label">Name</label>
                      <select class="form-control" id="user_id" name="user_id">
                        <option selected="true" disabled="disabled"></option>
                        <?php
                          foreach($desha as $users){
                        ?>
                        <option value="<?= $users->user_id ?>"><?= $users->full_name ?></option>
                        <?php
                          }
                        ?>
                      </select>
                     </div>
                     <div class="form-group">
                      <label for="inputAddress2" class="form-label">event name</label>
                      <select class="form-control" id="event_id" name="event_id">
                        <option selected="true" disabled="disabled"></option>
                        <?php
                          foreach($events as $events){
                        ?>
                        <option value="<?= $events->event_id ?>"><?= $events->event_name ?></option>
                        <?php
                          }
                        ?>
                      </select>
                     </div>
                         <div class="form-text"></div>
                          </div>
                        </div>
                       <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </form>
                      <?= form_close(); ?>
                    </div>
                  </div>
                </div>
         