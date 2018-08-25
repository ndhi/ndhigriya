
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Portfolio</h3>
        </div>       
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th class="no">No</th>
              <th class="title">Title</th>
              <th class="text">Text</th>
              <th class="text">Image</th>
              <th class="text">Link Page</th>
              <th class="action">Action</th>
            </tr>
            </thead>
            <tbody>

      <?php $no = 1 ; foreach ($query->result() as $query_portfolio) { ?>
            <tr>
              <td><?= $this->uri->segment(3)+$no; ?></td>
              <td><?= $query_portfolio->title; ?></td>
              <td><?= $query_portfolio->text; ?></td>              
              <td><?= !empty($query_portfolio->image) ? img(['src' => base_url().'assets/uploads/portfolio/'.$query_portfolio->image,'style' => 'width:40px; height:40px;']) : img(['src' => base_url().'assets/uploads/no-image.png','style' => 'width:40px; height:40px;']); ?></td>
              <td>
              <a class="btn btn-primary btn-xs" href="<?= $query_portfolio->linkpage; ?>" target="_blank" role="button">View Project</a>
              </td>
              <td>&nbsp;&nbsp;
                <?= anchor('portfolio/update/'.$query_portfolio->id,' ',['class' => 'fa fa-pencil fa-fw']); ?> &nbsp;&nbsp;
                <?= anchor('portfolio/delete/'.$query_portfolio->id,' ',['class' => 'fa fa-trash-o','onClick' => "return confirm('Are You Sure Delete Filed ?')"]); ?>              </td>
            </tr>
      <?php $no++; } ?>

            </tbody>
            <tfoot>
            <tr>
              <th class="">No</th>
              <th class="">Title</th>
              <th class="">Text</th>
              <th class="text">Image</th>
              <th class="text">Link Page</th>
              <th class="">Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

