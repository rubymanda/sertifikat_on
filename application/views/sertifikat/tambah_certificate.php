
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <!-- Basic Layout -->
      <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Tambah sertifikat</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                    <?= form_open_multipart('certificate/fungsi_tambah_certificate'); ?>
                      <form>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">participant name</label>
                          <div class="col-sm-10">
                          <select class="form-control" id="participant_name" name="participant_name">
                                                <option selected="true" disabled="disabled"> </option>
                                                <?php
                                               foreach($desha as $users){
                                                ?>
                                                <option value="<?= $users->full_name ?>"><?= $users->full_name ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                             
                          </div>
                       
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">event name</label>
                          <div class="col-sm-10">
                          <select class="form-control" id="event_name" name="event_name">
                                                <option selected="true" disabled="disabled"> </option>
                                                <?php
                                               foreach($events as $events){
                                                ?>
                                                <option value="<?= $events->event_name ?>"><?= $events->event_name ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">event date</label>
                          <div class="col-sm-10">
                            <input
                              type="date"
                              class="form-control"
                              id="basic-default-company"
                              name="event_date"
                              placeholder="..." />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">certificate text</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="certificate_text"
                              placeholder="..." />
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
         