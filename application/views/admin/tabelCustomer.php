<div class="content-wrapper">
<div class="row">
        <div class="col-12">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> Tabel customer</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>

                    <tr>
                      <th>Customer id</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Customer id</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($customer as $customer_item) { ?>
                    <tr>
                      <td><?php echo $customer_item['customer_id']; ?></td>
                      <td><?php echo $customer_item['name']; ?></td>
                      <td><?php echo $customer_item['email']; ?></td>
                      <td>
                        <?php echo anchor(site_url(uri_string() . "/delete/" . $customer_item['customer_id']), 'Delete', array('title' => 'Edit data','class' => 'btn')); ?>
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
  </div>
