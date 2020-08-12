<section class="content-header">
  <h1>
	Akun Saya
	<small>Data Akun</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Akun Saya</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
  	<div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
    		  <!-- <h3 class="box-title">Data Diri Alumni</h3> -->
    		</div>
    		<!-- <div class="col-md-12">
    			<a href="<?php echo site_url('Pegawai/add'); ?>" class="btn btn-success" style="float: right;margin-right: 12px;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data</a><br><br>
    		</div> -->
    		<div class="col-md-12">
    			<?php echo $this->session->flashdata('message'); ?>
    		</div>
    		<!-- /.box-header -->
    		<div class="box-body">

          <div class="">
              <div class="row">
                <div class="col-sm-3"><!--left col-->


                  <div class="text-center">
                    <?php
                      if($data->foto == "") {
                        $photo = "http://ssl.gstatic.com/accounts/ui/avatar_2x.png";
                      } else {
                        $photo = base_url('assets/image/'.$data->foto);
                      }
                    ?>
                    <img src="<?php echo $photo; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
                      <!-- <h6>Upload photo anda...</h6>
                    <input type="file" name="foto" class="text-center center-block file-upload"> -->
                  </div></hr><br>
                </div><!--/col-3-->
              	<div class="col-sm-9">
                    <div class="tab-content">
                      <div class="tab-pane active" id="home">

                        <table class="ui definition celled table">
                            <tbody>
                            <tr>
                                <td style="background: #DDD;color: #000;" width="30%">Nama</td>
                                <td><?php echo $data->nama; ?></td>
                            </tr>
                            <tr>
                                <td style="background: #DDD;color: #000;">NIP</td>
                                <td>
                                  <?php echo $data->nip; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #DDD;color: #000;">Email</td>
                                <td><?php echo $data->email; ?></td>
                            </tr>
                            <tr>
                                <td style="background: #DDD;color: #000;">Jabatan</td>
                                <td><?php echo $data->jabatan; ?></td>
                            </tr>
                            <tr>
                                <td style="background: #DDD;color: #000;">Instansi</td>
                                <td><?php echo $data->instansi; ?></td>
                            </tr>
                            <tr>
                                <td style="background: #DDD;color: #000;">Tempat dan Tanggal Lahir</td>
                                <td><?php echo $data->tempat_lahir.', '.$data->tanggal_lahir; ?></td>
                            </tr>
                            <tr>
                                <td style="background: #DDD;color: #000;">Jenis Kalamin</td>
                                <td><?php echo $data->jenis_kelamin; ?></td>
                            </tr>
                            <tr>
                                <td style="background: #DDD;color: #000;">Nomor Telepon/HP</td>
                                <td><?php echo $data->telp; ?></td>
                            </tr>
                            <tr>
                                <td style="background: #DDD;color: #000;">Alamat</td>
                                <td><?php echo $data->alamat; ?></td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
              						<div class="box-footer">
              						  <a href="<?php echo site_url('Akun/lihat'); ?>" type="reset" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
              						</div>
              					</div>

                       </div><!--/tab-pane-->

                  </div><!--/col-9-->
              </div><!--/row-->

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
<?php
	echo $this->session->flashdata('notif');
	echo $this->session->flashdata('audio');
?>
<script>
$(document).ready(function() {

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>
