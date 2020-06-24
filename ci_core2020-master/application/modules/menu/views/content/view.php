 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo $page_title; ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="col-md-2">
                        <a href="<?php echo base_url('menu/add');?>" class="btn btn-block btn-primary">Add Menu</a>
                    </div> <hr>

              <table id="dt_menu" class="table table-bordered table-striped">
                <thead>
                <tr>
                                <th width="5%">No</th>
                                <th>ID Menu</th>
                                <th>Nama Menu</th>
                                <th>Parent Menu</th>
                                <th>Menu Order</th>
                                <th>Icon</th>
                                <th>Link</th>
                                <th>Action</th>
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
                                        <td><?php echo $value['id'];?></td>
                                        <td><?php echo $value['menu'];?></td>
                                        <td><?php echo $value['parent_id'];?></td>
                                        <td><?php echo $value['menu_order'];?></td>
                                        <td><?php echo $value['icon'];?></td>
                                        <td><?php echo $value['link'];?></td>

                                        <td width="">
                                            <a href="<?php echo base_url('menu/edit/'.$value['id']);?>"> <button type="button"><i class="fa fa-edit"></i> Edit</button></a> |
                                            <a href="<?php echo base_url('menu/delete/'.$value['id']);?>" onclick="return confirm('Are you sure?')"> <button type="button"><i class="fa fa-trash"></i> Delete</button></a>
                                        </td>
                                    </tr>
                            <?php
                                    $i++;
                                }
                            }
                            ?>


                            </tbody>
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