
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <!-- Basic Layout -->
      <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">edit certificate</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                    <?= form_open_multipart('certificate/fungsi_edit_certificate'); ?>
                      <form>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">certificate id</label>
                          <div class="col-sm-10">
                            <input
                              type="hidden"
                              class="form-control"
                              id="certificate_id"
                              name="certificate_id" placeholder="..."  value="<?= $queryAllcertificate->certificate_id ?>" />
                          </div>
                     
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">participant name</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="participant_name"
                              name="participant_name" placeholder="..."  value="<?= $queryAllcertificate->participant_name ?>" />
                          </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company"> event name</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="event_name"
                              name="event_name" placeholder="..."  value="<?= $queryAllcertificate->event_name ?>" />
                          </div>

                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">event date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="event_date" name="event_date"   placeholder="..." value="<?= $queryAllcertificate->event_date?>"/>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">certificate text</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="certificate_text" 
                              name="certificate_text"  placeholder="..."  value="<?= $queryAllcertificate->certificate_text ?>" />
                          </div>
                        </div>
                            <div class="form-text"></div>
                          </div>
                        </div>
                        </div>
                        <div class="d-flex justify-content-end gap-3">
          <!-- <button type="reset" class="btn btn-outline-secondary">Discard</button> -->
          <button class="btn btn-primary" type="submit">edit</button>
        </div>
                      </form>
                      <?= form_close(); ?>
                    </div>
                  </div>
                </div>
         