<?php $__env->startSection('title', 'Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com'); ?>

<?php $__env->startSection('isikonten'); ?>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		<?php echo e(csrf_field()); ?>

		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.ceria', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B5026201076\resources\views/pegawai/tambah.blade.php ENDPATH**/ ?>