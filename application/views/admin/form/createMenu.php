<!-- Script alert -->
  <script language="javascript">

  function validasi(form){
    if (form.nama.value==""){
    alert("Nama masih kosong");
    form.username.focus();
    return (false);
  }
    if (form.harga.value==""){
    alert("Harga masih kosong");
    form.password.focus();
    return (false);
  }
  return (true);
  }
  </script>
<!-- end of script alert  -->
  <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <!-- <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active"><?php echo $page ?></li>
        </ol> -->

        <div class="row">

            <p>Create menu</p>
            <br /><br />
            <p> <?php echo $error; ?></p>
          </div>
          <div class="col-6">
          <?php
            $frm_edit_menu = array('onsubmit' => 'return validasi(this)');
            echo form_open_multipart(current_url(),$frm_edit_menu);
          ?>

          <div class="form-group">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>

              <?php $txtKode = array('name' => 'nama', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Menu', 'autofocus' =>'autofocus');
      	     echo form_input($txtKode);?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Harga</label>
              <?php $txtNama = array('name' => 'harga','class' => 'form-control', 'placeholder' => 'Masukkan harga menu');
          	 echo form_input($txtNama); ?>
            </div>

            <input type="file" name="userfile" size="20" />

              <br /><br />



            <?php $button = array('name' => 'Submit', 'class' => 'btn btn-lg btn-primary', 'type' => 'submit');?>
            <div class="row">
            <?php echo form_button($button,'Submit');
             echo anchor(site_url('admin/tabel/menu'), 'Cancel', array('title' => 'Cancel', 'class' => 'btn'));
             echo form_close(); ?>
           </div>
        </div>

      </div>
    </div>
  </div>
