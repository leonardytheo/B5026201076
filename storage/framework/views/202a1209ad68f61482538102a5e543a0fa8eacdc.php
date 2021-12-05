<?php $__env->startSection('title', 'Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com'); ?>

<?php $__env->startSection('isikonten'); ?>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="/pegawai/update" method="post">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="id" value="<?php echo e($p->pegawai_id); ?>"> <br/>
		Nama <input type="text" required="required" name="nama" value="<?php echo e($p->pegawai_nama); ?>"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="<?php echo e($p->pegawai_jabatan); ?>"> <br/>
		Umur <input type="number" required="required" name="umur" value="<?php echo e($p->pegawai_umur); ?>"> <br/>
		Alamat <textarea required="required" name="alamat"><?php echo e($p->pegawai_alamat); ?></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.ceria', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B5026201076\resources\views/pegawai/edit.blade.php ENDPATH**/ ?>