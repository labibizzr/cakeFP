<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <div class="row">
        <div class="col-12">
          <div class="row">
              <div class="col-sm-6">
                  <div class="form-group">
                      <label for="firstname">Nama Pemesan</label>
                      <input type="text" class="form-control" readonly id="firstname" value=<?php echo $order[0]['name']; ?> name='nama'>
                  </div>
              </div>
              <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                      <label for="firstname">Tanggal pesan</label>
                      <input type="text" class="form-control" readonly id="firstname" value=<?php echo $order[0]['date_order_placed']; ?> name='nama'>
                  </div>
              </div>
          </div>
          <div class="row">
                  <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                          <label for="zip">Nama Jalan</label>
                          <input type="text" class="form-control" readonly value='<?php echo $order[0]['jalan'] ?>' id="jalan" name="jalan">
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                          <label for="zip">Kode Pos</label>
                          <input type="text" class="form-control" readonly value='<?php echo $order[0]['zip'] ?>' id="jalan" name="jalan">
                      </div>
                  </div>
          </div>
          <div class="row">
                  <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                          <label for="zip">Kota</label>
                          <input type="text" class="form-control" readonly value='<?php echo $order[0]['kota'] ?>' id="jalan" name="jalan">
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                          <label for="zip">Kecamatan</label>
                          <input type="text" class="form-control" readonly value='<?php echo $order[0]['kecamatan'] ?>' id="jalan" name="jalan">
                      </div>
                  </div>
          </div>
          <div class="row">
                  <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                          <label for="zip">Telephone</label>
                          <input type="text" class="form-control" readonly value='<?php echo $order[0]['telephone'] ?>' id="jalan" name="jalan">
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                          <label for="zip">Total</label>
                          <input type="text" class="form-control" readonly value='<?php echo $order[0]['total'] ?>' id="jalan" name="jalan">
                      </div>
                  </div>
          </div>
          <div class="row">
                  <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                          <label for="zip">Status</label>
                          <input type="text" class="form-control" readonly value='<?php echo $order[0]['status'] ?>' id="jalan" name="jalan">
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <a href='<?php echo site_url('admin/tabel/order'); ?>'<button class='btn btn-primary'>Back</button></a>
      </div>
    </div>
  </div>
