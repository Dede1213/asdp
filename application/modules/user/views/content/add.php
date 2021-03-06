<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Validation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div> -->
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
                <h3 class="card-title"><?php echo $page_title;?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="f_menu" method="post" action="<?php echo base_url('user/act_add');?>">
                <div class="card-body">
                    
                <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" id="title" class="form-control" >
                            </div>


                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" id="title" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" id="title" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>Group</label>
                                <select name="group">
                                <?php
                                if($group){
                                  foreach($group as $row){
                                    ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['nama_group'];?></option>
                                    <?php
                                  }

                                }
                                ?>
                                    
                                </select>
                            </div>

                
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