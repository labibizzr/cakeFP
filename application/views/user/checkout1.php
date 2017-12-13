<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Checkout - Address</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form onsubmit='return validasi(this)' method="post" action="<?php echo site_url('checkout1') ?>">
                            <h1>Checkout</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nama</label>
                                            <input type="text" class="form-control" readonly id="firstname" value=<?php echo $_SESSION['nama']; ?> name='nama'>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="zip">Nama Jalan</label>
                                                <input type="text" class="form-control" id="jalan" name="jalan">
                                            </div>
                                        </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="zip">Kode Pos</label>
                                            <input type="text" class="form-control" id="zip" name="zip">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="state">Kecamatan</label>
                                            <input class="form-control" id="kecamatan" name="kecamatan">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="country">Daerah kota Surabaya</label>
                                            <select class="form-control" id="kota" name="kota">
                                                    <option value="Surabaya Barat">Surabaya Barat</option>
                                                    <option value="Surabaya Selatan">Surabaya Selatan</option>
                                                    <option value="Surabaya Utara">Surabaya Utara</option>
                                                    <option value="Surabaya Timur">Surabaya Timur</option>
                                                    <option value="Surabaya Tengah">Surabaya Tengah</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">No. Telephone / WA</label>
                                            <input type="text" class="form-control" id="phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input readonly type="text" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo site_url('basket')?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to basket</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Continue to Order Review<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col-md-9 -->

                <script language="javascript">

                function validasi(form){
                if (form.jalan.value==""){
                  alert("Alamat jalan masih kosong");
                  form.jalan.focus();
                  return (false);
                }
                if (form.zip.value==""){
                  alert("Kode Pos masih kosong");
                  form.zip.focus();
                  return (false);
                }
                if (form.kecamatan.value==""){
                  alert("Kecamatan masih kosong");
                  form.kecamatan.focus();
                  return (false);
                }
                if (form.kota.value==""){
                  alert("Kota masih kosong");
                  form.kota.focus();
                  return (false);
                }
                if (form.phone.value==""){
                  alert("Nomor telpon masih kosong");
                  form.phone.focus();
                  return (false);
                }
                if (form.email.value==""){
                  alert("Email masih kosong");
                  form.email.focus();
                  return (false);
                }
                else
                confirm("Anda yakin ?");
                return (true);
                }
                </script>
