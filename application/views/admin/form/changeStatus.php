<div class="content-wrapper">
    <div class="container-fluid">


      <div class="row">

          <p>Ganti status Order  No. #  <?php echo $order_id; ?></p>
          <br /><br />
          <p> <?php echo $error; ?></p>
        </div>
        <div class="col-6">
        <?php

          echo form_open(current_url());
        ?>

        <div class="form-group">
          <div class="form-group">
            <label for="exampleInputEmail1">Ganti status untuk order </label>
            <br />
<?php
          $data = array(
        'name'          => 'status',
        'value'         => 'Belum bayar',
        'style'         => 'margin:10px'
);

echo form_radio($data);
?><button disabled class='btn btn-warning'>Belum bayar</button>
<br/>
<?php
          $data = array(
        'name'          => 'status',
        'id'            => 'Diproses',
        'value'         => 'Diproses',
        'style'         => 'margin:10px'
);

echo form_radio($data);
?>
<button disabled class='btn btn-info'>Diproses</button>
<br />
<?php
          $data = array(
        'name'          => 'status',
        'id'            => 'Selesai',
        'value'         => 'Selesai',
        'style'         => 'margin:10px'
);

echo form_radio($data);
?>
<button disabled class='btn btn-success'>Selesai</button>
          </div>


          <?php $button = array('name' => 'Submit', 'class' => 'btn btn-lg btn-primary', 'type' => 'submit');?>
          <div class="row">
          <?php echo form_button($button,'Submit');
           echo anchor(site_url('admin/tabel/order'), 'Cancel', array('title' => 'Cancel', 'class' => 'btn'));
           echo form_close(); ?>
         </div>
      </div>

    </div>
  </div>
</div>
