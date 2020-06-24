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
                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="f_menu" method="post" action="<?php echo base_url('user/act_update/'.$id_user);?>">
                <div class="card-body">
                    
                <?php
                        if($menu_user){

                            foreach($menu_user as $value){
                                $menu_user_array[] = $value['id_menu'];
                            }
                        }else{
                            $menu_user_array = array();
                        }
                        if($menu_all){

                            foreach($menu_all as $value){
                                ?>


                                <div class="form-group">
                                    <input type="checkbox" name="nama[]" id="title" value="<?php echo $value['id'];?>" class="" <?php if(in_array($value['id'],$menu_user_array)){echo "checked";}  ?> > <b><?php echo $value['menu'];?></b>
                                </div>



                            <?
                                $this->load->model('general_model','general');
                                $id = $value['id'];
                                $data = $this->general->get_query_natural("select * from m_menu WHERE parent_id = $id",1);
                                if($data){
                                    foreach($data as $row){
                                        ?>

                                                <div class="form-group" style="margin-left: 20px;">
                                                    <input type="checkbox" name="nama[]" id="title" value="<?php echo $row['id'];?>" class="" <?php if(in_array($row['id'],$menu_user_array)){echo "checked";}  ?> > <?php echo $row['menu'];?>
                                                </div>


                                    <?php

                                        $this->load->model('general_model','general');
                                        $id2 = $row['id'];
                                        $data2 = $this->general->get_query_natural("select * from m_menu WHERE parent_id = $id2",1);
                                        if($data2) {
                                            foreach ($data2 as $row2) {
                                                ?>
                                                    <div class="form-group" style="margin-left: 40px;">
                                                        <input type="checkbox" name="nama[]" id="title" value="<?php echo $row2['id'];?>" class="" <?php if(in_array($row2['id'],$menu_user_array)){echo "checked";}  ?> > <?php echo $row2['menu'];?>
                                                    </div>

                                                <?php

                                            }
                                        }
                                    }
                                }
                            ?>


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