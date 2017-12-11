<div class="content-wrapper">
<div class="row">
        <div class="col-12">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> Tabel Menu</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>

                    <tr>
                      <th>Nama Menu</th>
                      <th>Harga</th>
                      <th>Image</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Menu</th>
                      <th>Harga</th>
                      <th>Image</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($menu as $menu_item) { ?>
                    <tr>
                      <td><?php echo $menu_item['menu_name']; ?></td>
                      <td><?php echo $menu_item['menu_price']; ?></td>
                      <td>
                      
                        <img class = 'img-responsive' height = '150' width = '150' src='<?php echo base_url('assets/uploads/') . $menu_item['img']; ?>'>
                      </td>

                      <td>
                        <?php echo anchor(site_url(uri_string() . "/edit/" . $menu_item['menu_id']), 'Edit', array('title' => 'Edit data','class' => 'btn')); ?>
                        <?php echo anchor(site_url(uri_string() . "/delete/" . $menu_item['menu_id']), 'Delete', array('title' => 'Edit data','class' => 'btn')); ?>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <?php echo anchor(site_url(uri_string(). "/create"), 'Buat dosen baru', array('title' => 'Buat dosen baru', 'class' => 'btn btn-primary')); ?>
            </div>
            </div>
      </div>
    </div>
  </div>
