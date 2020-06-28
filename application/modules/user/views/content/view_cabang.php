<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Validation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cabang User</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="f_menu" method="post" action="<?php echo base_url('user/act_update/'.$id_user);?>">
                <div class="card-body">
                    
                <?php
                        if($cabang_user){

                            foreach($cabang_user as $value){
                                $cabang_user_array[] = $value['id_cabang'];
                            }
                        }else{
                            $cabang_user_array = array();
                        }
                        if($cabang_all){

                            foreach($cabang_all as $value){
                                ?>


                                <div class="form-group">
                                    <input type="checkbox" name="nama[]" id="title" value="<?php echo $value['id'];?>" class="" <?php if(in_array($value['id'],$cabang_user_array)){echo "checked";}  ?> > <b><?php echo $value['regional'];?> - <?php echo $value['nama_cabang'];?></b>
                                </div>

                        <?php
                            }
                        }
                        ?>

                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->