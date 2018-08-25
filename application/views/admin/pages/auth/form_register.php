<section class="content">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Add User</h3>
      </div>
      <!-- form start -->
      <!-- <form role="form" action="" method=""> -->
<?= form_open('register')?>
      <div class="box-body">
          <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="names" class="form-control" value="<?=set_value('names')?>" placeholder="full name" required>
            <?php if(form_error('names')) { ?>
            <div style="color:#DC143C">
                <?= str_replace('_',' ', form_error('names')); ?>
            </div>
            <?php } ?>
          </div>
          <div class="form-group">
            <label for="title">Email</label>
            <input type="text" name="emails" class="form-control" value="<?=set_value('emails')?>" placeholder="Email" required>
            <?php if(form_error('emails')) { ?>
            <div style="color:#DC143C">
                <?= str_replace('_',' ', form_error('emails')); ?>
            </div>
            <?php } ?>
          </div>
          <!-- select -->
 <!--          <div class="form-group">
            <label>Level</label>
            <select class="form-control" required>
             <option value='' disabled selected>Pilih Status</option>
 

            </select>
          </div> -->
          <div class="form-group">
            <label for="title">Password</label>
            <input type="password" name="passwords" class="form-control" value="<?=set_value('passwords')?>" placeholder="Password" required>
            <?php if(form_error('passwords')) { ?>
            <div style="color:#DC143C">
                <?= str_replace('_',' ', form_error('passwords')); ?>
            </div>
            <?php } ?>
          </div>
           <div class="form-group">
            <label for="title">Retype Password</label>
            <input type="password" name="passwords2" class="form-control" value="<?=set_value('passwords2')?>" placeholder="Retype Password" required>
            <?php if(form_error('passwords2')) { ?>
            <div style="color:#DC143C">
                <?= str_replace('_',' ', form_error('passwords2')); ?>
            </div>
            <?php } ?>
          </div>
      </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <input type="submit" name="submit" value="submit" class="btn btn-primary">
          <button type="button" class="btn btn-default" onclick="javascript:history.back()">Back</button>
        </div>
<?= form_close();?>    
      <!-- </form> -->


    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>

</section>
<?php echo form_close();?>