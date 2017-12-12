<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Checkout - Order review</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">

                            <h1>Checkout - Order review</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="<?php echo site_url('checkout1'); ?>"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>

                            <div class="content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Product</th>
                                                    <th>Quantity</th>
                                                    <th>Unit price</th>

                                                    <th colspan="2">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($this->cart->contents() as $items): ?>
                                                <tr>

                                                    <td>

                                                            <img src="<?php echo base_url('assets/uploads/'. $items['img']); ?>" alt="<?php $items['name'] ?>">

                                                    </td>
                                                    <td><?php echo $items['name'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', 'class' => 'form-control', 'min' => '10')); ?>
                                                </td>
                                                    <td>Rp <?php echo $items['price']; ?></td>
                                                    <td>Rp <?php echo $items['subtotal']; ?></td>
                                                    <td><a href="#"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                        <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="5">Total</th>
                                                    <th colspan="2">Rp <?php echo $this->cart->total(); ?></th>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                    <!-- /.table-responsive -->
                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo site_url('checkout1'); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to Address</a>
                                </div>
                                <div class="pull-right">
                                    <a href='<?php echo site_url('checkout'); ?>'><button type="submit" class="btn btn-primary">Place an order<i class="fa fa-chevron-right"></i>
                                    </button></a>
                                </div>
                            </div>

                    </div>
                    <!-- /.box -->
