  <?= isset($modelss) ? form_open_multipart('portfolio/update/'. $modelss->id) : form_open_multipart(); ?>
<section class="content">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Edit Portfolio</h3>
      </div>
      <!-- form start -->
<!--       <form role="form" action="" method="">
 -->        <div class="box-body">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="titles" class="form-control" id="" placeholder="Title" value="<?= isset($models) ? set_value("title", $models->title) : set_value('title'); ?>">
            <?php if(form_error('titles')) { ?>
            <div style="color:#DC143C">
                <?= str_replace('_',' ', form_error('titles')); ?>
            </div>
            <?php } ?>
          </div>

          <label for="text">Text</label>  
          <div class="form-group">       
            <form>
                  <textarea id="editor1" name="texts"  rows="10" cols="80">
                    <?= isset($models) ? set_value("text", $models->text) : set_value('text'); ?>
                  </textarea>
            </form>
            <?php if(form_error('texts')) { ?>
            <div style="color:#DC143C">
                <?= str_replace('_',' ', form_error('texts')); ?>
            </div>
            <?php } ?>
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="" name="userfile">

            <p class="help-block">gif|jpg|png|pdf|docx|doc|xls</p>
          </div>

          <div class="form-group">
            <label for="linkpage">Link Page</label>
            <input type="text" name="linkpages" class="form-control" id="linkpage" placeholder="Link Page" value="<?= isset($models) ? set_value("linkpage", $models->linkpage) : set_value('linkpage'); ?>">
            <?php if(form_error('linkpages')) { ?>
            <div style="color:#DC143C">
                <?= str_replace('_',' ', form_error('linkpages')); ?>
            </div>
            <?php } ?>
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
