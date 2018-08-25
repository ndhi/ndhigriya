<?= form_open_multipart('admin/add_partner'); ?>
<section class="content">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">New Partner</h3>
      </div>
      <!-- form start -->
      <!-- <form role="form" action="" method=""> -->
        <div class="box-body">
          <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="names" class="form-control" id="post_name" placeholder="Name" value="<?php echo set_value('names');?>">
            <?php if(form_error('names')) { ?>
            <div style="color:#DC143C">
                <?= str_replace('_',' ', form_error('names')); ?>
            </div>
            <?php } ?>
          </div>

          <div class="form-group">
            <label for="title">Jabatan</label>
            <input type="text" name="jabatans" class="form-control" id="post_name" placeholder="jabatan" value="<?php echo set_value('jabatans');?>">
            <?php if(form_error('jabatans')) { ?>
            <div style="color:#DC143C">
                <?= str_replace('_',' ', form_error('jabatans')); ?>
            </div>
            <?php } ?>
          </div>

          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="" name="userfile">

            <p class="help-block">gif|jpg|png|pdf|docx|doc|xls</p>
          </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <input type="submit" name="submit" value="submit" class="btn btn-primary">
          <button type="button" class="btn btn-default" onclick="javascript:history.back()">Back</button>
        </div>
      <!-- </form> -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>

</section>
<?php echo form_close();?>