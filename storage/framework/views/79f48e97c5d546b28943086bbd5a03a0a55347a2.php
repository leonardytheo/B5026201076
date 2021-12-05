<?php $__env->startSection('title', 'DATA PEGAWAI'); ?>

<?php $__env->startSection('isikonten'); ?>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($p->pegawai_nama); ?></td>
			<td><?php echo e($p->pegawai_jabatan); ?></td>
			<td><?php echo e($p->pegawai_umur); ?></td>
			<td><?php echo e($p->pegawai_alamat); ?></td>
			<td>
				<a href="/pegawai/edit/<?php echo e($p->pegawai_id); ?>">Edit</a>
				|
				<a href="/pegawai/hapus/<?php echo e($p->pegawai_id); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.ceria', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B5026201076\resources\views/pegawai/index.blade.php ENDPATH**/ ?>