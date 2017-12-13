<!-- Script alert -->
  <script language="javascript">

  function validasi(form){
    if (form.nama.value==""){
    alert("username masih kosong");
    form.username.focus();
    return (false);
  }
    if (form.harga.value==""){
    alert("password baru masih kosong");
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

            <h5>Ganti Password</h5>
            <br /><br />

          </div>
          <div class="col-6">
          <?php
            $frm_edit_menu = array('onsubmit' => 'return validasi(this)');
            echo form_open  (current_url(),$frm_edit_menu);
          ?>

          <div class="form-group">
            <div class="form-group">
              <label for="exampleInputEmail1">username</label>

              <?php $txtKode = array('name' => 'username', 'class' => 'form-control', 'placeholder' => 'Masukan Username', 'autofocus' =>'autofocus');
      	     echo form_input($txtKode);?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password Baru</label>
              <?php $txtNama = array('name' => 'passwordBaru','class'=> 'form-control', 'placeholder' => 'Masukkan password baru','type' => 'password');
          	 echo form_input($txtNama); ?>
            </div>


            <?php $button = array('name' => 'Submit', 'class' => 'btn btn-lg btn-primary', 'type' => 'submit');?>
            <div class="row">
            <?php echo form_button($button,'Submit');
             echo anchor(site_url('admin'), 'Cancel', array('title' => 'Cancel', 'class' => 'btn'));
             echo form_close(); ?>
           </div>
        </div>

      </div>
    </div>
  </div>
