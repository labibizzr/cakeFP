
    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href='<?php echo site_url(); ?>'>Home</a>
                        </li>
                        <li>Menu</li>
                    </ul>
                </div>



                <div class="col-md-12">
                    <div class="box">
                        <h1>Menu Kue</h1>
                        <p>Best exciting cake in Surabaya</p>
                    </div>



                    <div class="row products">

                      <?php foreach ($menu as $menu_item) { ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets/uploads/') . $menu_item['img']; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="<?php echo base_url('assets/uploads/') . $menu_item['img']; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="<?php echo base_url('assets/uploads/') . $menu_item['img']; ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html"><?php echo $menu_item['menu_name']; ?></a></h3>
                                    <p class="price">Rp <?php echo $menu_item['menu_price']; ?></p>
                                    <p class="buttons">
                                        <a href="detail.html" class="btn btn-default" >View detail</a>
                                        <a href="<?php echo site_url('menu/add/'.$menu_item['menu_id']); ?>" class="btn btn-primary" onclick="addMenu()"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                      <?php } ?>


                    </div>
                    <!-- /.products -->

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
        <script>
        function addMenu() {
            alert("Menu ditambahkan ke shopping cart !");
            }
        </script>
