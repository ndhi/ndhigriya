
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Partner</h3>
        </div>       
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th class="no">No</th>
              <th class="title">Name</th>
              <th class="text">Jabatan</th>
              <th class="text">Photo</th>
              <th class="action">Action</th>
            </tr>
            </thead>
            <tbody>

      <?php $no = 1 ; foreach ($query->result() as $data_partner) { ?>
            <tr>
              <td><?= $this->uri->segment(3)+$no; ?></td>
              <td><?= $data_partner->name; ?></td>
              <td><?= $data_partner->jabatan; ?></td>              
              <td><?= !empty($data_partner->image) ? img(['src' => base_url().'assets/uploads/partner/'.$data_partner->image,'style' => 'width:40px; height:40px;']) : img(['src' => base_url().'assets/uploads/no-image.png','style' => 'width:40px; height:40px;']); ?></td>
              <td>&nbsp;&nbsp;
                <?= anchor('admin/update_partner/'.$data_partner->id,' ',['class' => 'fa fa-pencil fa-fw']); ?> &nbsp;&nbsp;
                <?= anchor('admin/delete_partner/'.$data_partner->id,' ',['class' => 'fa fa-trash-o','onClick' => "return confirm('Are You Sure Delete Filed ?')"]); ?>              </td>
              </tr>
      <?php $no++; } ?>

            </tbody>
            <tfoot>
            <tr>
              <th class="">No</th>
              <th class="">Name</th>
              <th class="">Jabatan</th>
              <th class="text">Image</th>
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

