
 <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-offset-3 col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Brand Update</h3>
            </div>
            <form name="frm" action="<?php echo base_url('admin/category/update');?>" method="post">
            <div class="box-body">
              <div class="form-group">
                <label>Classification_ID</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="Classification_ID" value="<?php echo $brand[0]->Classification_ID;?>" >
                </div>
              </div>

              <div class="form-group">
                <label>Engine_Classification</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="Engine_Classification" value="<?php echo $brand[0]->Engine_Classification;?>">
                  <input type="hidden" class="form-control" name="Classification_ID" value="<?php echo $brand[0]->Classification_ID;?>">
                </div>
              </div>
               <div class="form-group">
                <div class="input-group">
                 
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php $this->load->view('include/admin_footer');?>