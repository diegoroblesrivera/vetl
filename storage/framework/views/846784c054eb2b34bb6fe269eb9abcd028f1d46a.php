
<?php $__env->startSection('content'); ?>
<div class="page-inner">
    <!--Modal-->
    <div class="modal fade" id="frmModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="inputForm" novalidate="novalidate">

                    <div class="modal-header">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold">
                                <?php echo e(translate('Department Info')); ?>

                            </span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group control-group form-inline ">
                            <label class="col-md-3">
                                <?php echo e(translate('Name')); ?>

                                <span class="required-label">*</span>
                            </label>
                            <div class="col-md-9 controls">
                                <input type="text" id="name" name="name" placeholder="<?php echo e(translate('Department name')); ?>" required class="form-control input-full" data-validation-required-message="Department name is required" />
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group control-group form-inline ">
                            <label class="col-md-3">
                            <?php echo e(translate('Order')); ?>

                            </label>
                            <div class="col-md-9 controls">
                                <input type="number" id="order" name="order" placeholder="<?php echo e(translate('Order value')); ?>" class="form-control input-full" />
                                <span class="help-block"></span>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><?php echo e(translate('Close')); ?></button>
                        <button type="submit" class="btn btn-success btn-sm"><?php echo e(translate('Save Change')); ?></button>

                    </div>
                </form>

            </div>
        </div>
    </div>


    <!--department datatable-->
    <div class="row">
        <div class="col-md-12">
            <div class="main-card card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">
                            <?php echo e(translate('Department Info')); ?>

                        </h4>
                        <button id="btnAdd" class="btn btn-primary btn-sm btn-round ml-auto">
                            <i class="fa fa-plus"></i> <?php echo e(translate('Add New Department')); ?>

                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="tableElement" class="table table-bordered w100"></table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo e(dsAsset('js/custom/settings/department.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/link/lp/vet/resources/views/settings/department.blade.php ENDPATH**/ ?>