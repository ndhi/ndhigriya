<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Pengguna/User</h3>
        </div>       
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th class="no">No</th>
              <th class="title">Name</th>
              <th class="text">Email</th>
              <th class="text">Level</th>
              <th class="text">Status</th>
              <th class="action">Action</th>
            </tr>
            </thead>
            <tbody>

      <?php $no = 1 ; foreach ($query->result() as $query_data_user) { ?>
            <tr>
              <td><?= $this->uri->segment(3)+$no; ?></td>
              <td><?= $query_data_user->name; ?></td>
              <td><?= $query_data_user->email; ?></td>  
              <td><?= $query_data_user->status; ?></td>  
              <td><?= $query_data_user->role; ?></td>              
              <td>&nbsp;&nbsp;
                <?= anchor('admin/delete/'.$query_data_user->id,' ',['class' => 'fa fa-trash-o','onClick' => "return confirm('Are You Sure Delete Filed ?')"]); ?>              
              </td>
            </tr>
      <?php $no++; } ?>

            </tbody>
            <tfoot>
            <tr>
              <th class="no">No</th>
              <th class="title">Name</th>
              <th class="text">Email</th>
              <th class="text">Level</th>
              <th class="text">Status</th>
              <th class="action">Action</th>
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

