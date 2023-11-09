	
	<?php $__env->startSection('content'); ?>

	<!-- Start Voucher Area -->
	<section class="top-area section-gap">
		<div class="container">
			<div class="row">
				<?php $__currentLoopData = $vouchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4">
					<div class="single-service single-service-voucher">
						<div class="thum">
							<img src="<?php echo e($value->thumbnail); ?>" alt="">
						</div>
						<div class="details">
							<h4><?php echo e($value->name); ?></h4>
							<p><?php echo e($value->description); ?></p>
							<ul class="single-service-info">
								<li class="d-flex justify-content-between align-items-center fs-18">
									<span><?php echo e(translate('Price')); ?> </span>
									<b><?php echo e(round($value->price,2)); ?></b>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<button type="button" class="btn btn-booking-white add-to-cart" data-id="<?php echo e($value->id); ?>"><?php echo e(translate('Add To Cart')); ?></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-12 mt-4">
					<?php echo e($vouchers->links('pagination::bootstrap-4')); ?>

				</div>
			</div>
		</div>
	</section>
	<!-- End Voucher Area -->
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ap-booking-cc\resources\views/site/voucher-list.blade.php ENDPATH**/ ?>