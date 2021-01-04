
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Buku
            <small>All Data Buku</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Buku</a></li>
            <li class="active">Add Buku</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Buku</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" name="daftar" action="excecute/save_ebook.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    
         
          <div class="form-group">
                      <label class="col-sm-2 control-label">Judul Ebook</label>
                      <div class="col-sm-10">
                        <input type="text" name="judul" required="" class="form-control" placeholder="">
                      </div>
                    </div>  
          <div class="form-group">
                      <label class="col-sm-2 control-label">Pengarang</label>
                      <div class="col-sm-10">
                        <input type="text" name="pengarang" required="" class="form-control" placeholder="">
                      </div>
                    </div> 
          <div class="form-group">
                      <label class="col-sm-2 control-label">Penerbit</label>
                      <div class="col-sm-10">
                        <input type="text" name="penerbit" required="" class="form-control" placeholder="">
                      </div>
                    </div>                
          <div class="form-group">
                      <label class="col-sm-2 control-label">Diskripsi</label>
                      <div class="col-sm-10">
                        <input type="text" name="diskripsi" required="" class="form-control" placeholder="">
                      </div>
                    </div>
         
         <div class="form-group">
                      <label class="col-sm-2 control-label">Link</label>
                      <div class="col-sm-10">
                        <input type="text" name="link" required="" class="form-control" placeholder="">
                      </div>
                    </div>
               
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <input name="daftar" type="submit" class="btn btn-info pull-right" value="Input">
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->