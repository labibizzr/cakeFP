
                <div class="col-md-9" id="customer-orders">
                    <div class="box">
                        <h1>My orders</h1>

                        <p class="lead">Your orders on one place.</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-hover">
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
                                        <td><span class="label
                                        <?php if (strcmp($order['status'], 'standby') == 0)
                                        echo 'label-warning';
                                        else if (strcmp($order['status'], 'diproses') == 0)
                                        echo 'label-info';
                                        else
                                        echo 'label-success';
                                        ?>">
                                        <?php echo $order['status']; ?>
                                        </span>
                                        </td>
                                        <td><a href="<?php echo site_url('customer_order/view/'. $order['order_id']) ?>" class="btn btn-primary btn-sm">View</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
