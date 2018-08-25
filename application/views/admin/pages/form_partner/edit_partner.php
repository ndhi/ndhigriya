<?= isset($model) ? form_open_multipart('admin/update_partner/'. $model->id) : form_open_multipart(); ?>
<section class="content">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Edit Partner</h3>
      </div>
      <!-- form start -->
      <!-- <form role="form" action="" method=""> -->
        <div class="box-body">
          <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="names" class="form-control" id="" placeholder="Name" value="<?= isset($model) ? set_value("name", $model->name) : set_value('name'); ?>">
            <?php if(form_error('names')) { ?>
            <div style="color:#DC143C">
                <?= str_replace('_',' ', form_error('names')); ?>
            </div>
            <?php } ?>
          </div>

          <div class="form-group">
            <label for="title">Jabatan</label>
            <input type="text" name="jabatans" class="form-control" id="" placeholder="Jabatan" value="<?= isset($model) ? set_value("jabatan", $model->jabatan) : set_value('jabatan'); ?>">
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
<!--       </form>
 -->

    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>

</section>
