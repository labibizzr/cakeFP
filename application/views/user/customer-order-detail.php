<div class="col-md-9" id="customer-order">
                    <div class="box">
                        <h1>Order #<?php echo $order[0]['order_id']; ?></h1>

                        <p class="lead">Order # <?php echo $order[0]['order_id']; ?> dimulai pada <strong><?php echo $order[0]['date_order_placed']; ?></strong> dan sekarang sedang pada tahap <strong><?php echo $order[0]['status']; ?></strong>.</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $total = 0;
                                $shipping = 10000;
                                foreach($details as $detail) { ?>
                                <?php $subtotal = $detail['menu_price'] * $detail['qty'];
                                        $total+=$subtotal;
                                 ?>
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <img src="<?php echo base_url('assets/uploads/').$detail['img'] ?>" alt="<?php echo $detail['menu_name'];?>">
                                            </a>
                                        </td>
                                        <td><a href="#"><?php echo $detail['menu_name']; ?></a></td>
                                        <td><?php echo $detail['qty'];?></td>
                                        <td>Rp <?php echo $detail['menu_price']; ?></td>
                                        <td>Rp <?php echo $subtotal; ?></td>
                                    </tr>
                                        <?php } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5" class="text-right">Order subtotal</th>
                                        <th>Rp <?php echo $total; ?></th>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">Shipping and handling</th>
                                        <th>Rp <?php echo $shipping; ?></th>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">Total</th>
                                        <th>Rp <?php echo $total+$shipping; ?></th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- /.table-responsive -->

                        <div class="row addresses">
                            <div class="col-md-12">
                                <h2>Alamat pengiriman</h2>
                                <p>John Brown
                                    <br><?php echo $order[0]['jalan'] ?>
                                    <br><?php echo $order[0]['kota']; ?>
                                    <br><?php echo $order[0]['zip']; ?>
                            </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
