<?php if ($this->session->flashdata('pesan') == 'Ditambah') : ?>
	<div class="alert alert-success text-center" role="alert">
		Data berhasil ditambah
	</div>
<?php elseif ($this->session->flashdata('pesan') == 'Diubah') : ?>
	<div class="alert alert-success text-center" role="alert">
		Data berhasil diubah
	</div>
<?php elseif ($this->session->flashdata('pesan') == 'Dihapus') : ?>
	<div class="alert alert-success text-center" role="alert">
		Data berhasil dihapus
	</div>
<?php endif ?>
<table class="table table-dark table-striped table-hover">
	<thead>
		<tr>
			<th scope="col">No.</th>
			<th scope="col">NIK</th>
			<th scope="col">Nama</th>
			<th scope="col">Alamat</th>
			<th scope="col">tgl_vac1</th>
			<th scope="col">tgl_vac2</th>
			<th scope="col" <?php if (!$this->session->userdata('login')) {
										echo 'hidden';
									} ?>>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		foreach ($user as $data) : ?>
			<tr>
				<th scope="row"><?= $no++; ?></th>
				<td><?= $data['nik'] ?></td>
				<td><?= $data['nama'] ?></td>
				<td><?= $data['alamat'] ?></td>
				<td><?= $data['tgl_vac1'] ?></td>
				<td><?= $data['tgl_vac2'] ?></td>
				<?php echo $this->session->flashdata('belum_login'); ?>

				<td>
					<a href="<?= base_url('home/hapus/' . $data['id_user']) ?>" class="btn btn-danger" <?php if (!$this->session->userdata('login')) {
																													echo 'hidden';
																												} ?>>Delete</a>
					<a href="<?= base_url('home/formEdit/' . $data['id_user']) ?>" class="btn btn-primary" <?php if (!$this->session->userdata('login')) {
																														echo 'hidden';
																													} ?>>Change</a>
				</td>

			</tr>
		<?php
		endforeach;
		?>
		</tr>
	</tbody>
</table>