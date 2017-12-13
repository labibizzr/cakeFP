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
                          <th>No. Order</th>
                          <th>Date</th>
                          <th>Total</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                          <?php foreach($orders as $order) {?>
                      <tr>
                          <th># <?php echo $order['order_id']; ?></th>
                          <td><?php echo $order['date_order_placed']; ?></td>
                          <td>Rp <?php echo $order['total']; ?></td>
                          <td><a href='<?php echo site_url(uri_string().'/changestatus/' . $order['order_id']) ?>'><span class="btn btn-sm
                          <?php if (strcmp($order['status'], 'Belum bayar') == 0)
                          echo 'btn-warning';
                          else if (strcmp($order['status'], 'Diproses') == 0)
                          echo 'btn-info';
                          else if (strcmp($order['status'], 'Selesai') == 0)
                          echo 'btn-success';
                          ?>">
                          <?php echo $order['status']; ?>
                        </span></a>
                          </td>
                          <td><a href="<?php echo site_url('admin/customer_order/view/'. $order['order_id']) ?>" class="btn btn-primary btn-sm">View</a>
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
