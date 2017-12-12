<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="<?php echo site_url('checkout1'); ?>">

                            <h1>Shopping cart</h1>
                            <p class="text-muted">You currently have <?php echo $this->cart->total_items(); ?> item(s) in your cart.</p>
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

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo site_url('menu'); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
                                    <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col-md-9 -->
