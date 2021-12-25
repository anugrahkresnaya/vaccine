<form action="<?=base_url('home/ubahData')?>" method="post">
	<input type="hidden" name="id_user" value="<?=$user['id_user']?>">
	<div class="container">
		<div class="mb-3">
    		<label for="nik" class="form-label">NIK</label>
    		<input type="number" name="nik"  class="form-control" value="<?=$user['nik']?>">
  		</div>
		<div class="mb-3">
    		<label for="name" class="form-label">Nama Lengkap</label>
    		<input type="text" name="nama" class="form-control" value="<?=$user['nama']?>">
  		</div>
  		<div class="mb-3">
    		<label for="address" class="form-label">Alamat</label>
    		<input type="address" name="alamat" class="form-control" value="<?=$user['alamat']?>">
  		</div>
		<div class="mb-3">
    		<label for="tgl_vac1" class="form-label">Tanggal Vaksin 1</label>
    		<input type="date" name="tgl_vac1" class="form-control" value="<?=$user['tgl_vac1']?>">
  		</div>
		<div class="mb-3">
    		<label for="tgl_vac2" class="form-label">Tanggal Vaksin 2</label>
    		<input type="date" name="tgl_vac2" class="form-control" value="<?=$user['tgl_vac2']?>">
  		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>
