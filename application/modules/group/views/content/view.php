 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div> -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo $page_title;?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="col-md-2">
                        <a href="<?php echo base_url('group/add');?>" class="btn btn-block btn-primary">Add Group</a>
                    </div> <hr>

              <table id="dt_menu" class="table table-bordered table-striped" width="100%">
                <thead>
                <tr>
                                <th width="5%">No</th>
                                <th width="">Nama Group</th>
                                <th width="">Created</th>
                                <th width="30%">Action</th>
                            </tr>
                </thead>
                <tbody>
                <?php
                            if($data){
                                $i = 1;
                                foreach($data as $value){
                                    ?>

                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $value['nama_group'];?></td>
                                        <td><?php echo $value['created'];?></td>

                                        <td width="">

                                            <a href="<?php echo base_url('group/edit/'.$value['id']);?>"><button type="button"><i class="fa fa-edit">Edit</i></button></a>
                                            <a href="<?php echo base_url('group/delete/'.$value['id']);?>" onclick="return confirm('Are you sure?')"> <button type="button"><i class="fa fa-trash">Delete</i></button></a>
                                       
                                            <a href="<?php echo base_url('group/hak_akses/'.$value['id']);?>"> <button type="button"><i class="fa fa-edit">Menu</i></button></a>
                                        </td>
                                    </tr>
                            <?php
                                    $i++;
                                }
                            }
                            ?>
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->