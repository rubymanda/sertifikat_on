
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <!-- Basic Layout -->
      <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Tambah peserta</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                    <?= form_open_multipart('events/fungsi_tambah_events'); ?>
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">event name</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="event_name"
                              placeholder="event_name" />
                          </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">event date</label>
                          <div class="col-sm-10">
                            <input
                              type="date"
                              class="form-control"
                              id="basic-default-company"
                              name="event_date"
                              placeholder="event_date" />
                          </div>
                       
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">location</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="location" placeholder="location" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">organizer</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="organizer"
                              placeholder="organizer" />
                          </div>
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
         