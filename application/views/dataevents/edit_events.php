
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <!-- Basic Layout -->
      <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">edit event</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                    <?= form_open_multipart('events/fungsi_edit_events'); ?>
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">event name</label>
                          <div class="col-sm-10">
                            <input
                              type="hidden"
                              class="form-control"
                              id="event_name"
                              name="event_id" placeholder="..."  value="<?= $queryAllevents->event_id ?>" />
                            <input
                              type="text"
                              class="form-control"
                              id="event_name"
                              name="event_name" placeholder="..."  value="<?= $queryAllevents->event_name ?>" />
                          </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">event date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="event_date" name="event_date"   placeholder="..." value="<?= $queryAllevents->event_date?>"/>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">location</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="location" 
                              name="location"  placeholder="..."  value="<?= $queryAllevents->location ?>" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">organizer</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="organizer"
                                name="organizer" value="<?= $queryAllevents->organizer ?>"
                                class="form-control"
                                placeholder="..."
                                aria-label="john.doe"
                                aria-describedby="basic-default-email2" />
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
         