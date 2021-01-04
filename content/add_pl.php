
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Praktek Lapang
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Input Data Praktek Lapang</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" name="daftar" action="excecute/save_pl.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    
          
         <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Lengkap</label>
                      <div class="col-sm-10">
                        <input type="text" name="nama" required="" class="form-control" placeholder="">
                      </div>
                    </div>
         <div class="form-group">
                      <label class="col-sm-2 control-label">NPM</label>
                      <div class="col-sm-10">
                        <input type="text" name="npm" required="" class="form-control" placeholder="">
                      </div>
                    </div>    
          <div class="form-group">
                      <label class="col-sm-2 control-label">Judul PL</label>
                      <div class="col-sm-10">
                        <input type="text" name="judul" required="" class="form-control" placeholder="">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-2 control-label">Prodi</label>
                      <div class="col-sm-10">
                        <input type="text" name="prodi" required="" class="form-control" placeholder="">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-2 control-label">Pembimbing 1</label>
                      <div class="col-sm-10">
                        <input type="text" name="pembimbing1" required="" class="form-control" placeholder="">
                      </div>
                    </div>  
          <div class="form-group">
                      <label class="col-sm-2 control-label">Pembimbing 2</label>
                      <div class="col-sm-10">
                        <input type="text" name="pembimbing2" required="" class="form-control" placeholder="">
                      </div>
                    </div>    
           <div class="form-group">
                      <label class="col-sm-2 control-label">File PL</label>
                      <div class="col-sm-10">
                        <input type="file" name="filepl"  class="form-control">
                      </div>
                    </div> 
            
					<div class="form-group">
                      <label class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <textarea name="diskripsi" class="form-control" rows="3" placeholder="Enter ..." required=""></textarea>
                      </div>
                    </div>
					<!-- /.form-group -->
					<!-- /.form-group -->
         
                     
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
