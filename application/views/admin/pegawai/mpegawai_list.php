<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Mpegawai List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('mpegawai/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('mpegawai/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('mpegawai'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Pegawai</th>
		<th>Jabatan</th>
		<th>Alamat</th>
		<th>Kota</th>
		<th>NoTelp</th>
		<th>KC</th>
		<th>Action</th>
            </tr><?php
            foreach ($mpegawai_data as $mpegawai)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $mpegawai->Nama_Pegawai ?></td>
			<td><?php echo $mpegawai->Jabatan ?></td>
			<td><?php echo $mpegawai->Alamat ?></td>
			<td><?php echo $mpegawai->Kota ?></td>
			<td><?php echo $mpegawai->NoTelp ?></td>
			<td><?php echo $mpegawai->KC ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('mpegawai/read/'.$mpegawai->NIP),'Read'); 
				echo ' | '; 
				echo anchor(site_url('mpegawai/update/'.$mpegawai->NIP),'Update'); 
				echo ' | '; 
				echo anchor(site_url('mpegawai/delete/'.$mpegawai->NIP),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>