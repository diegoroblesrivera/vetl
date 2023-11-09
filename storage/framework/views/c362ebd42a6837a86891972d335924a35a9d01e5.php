
<?php $__env->startSection('content'); ?>
<div class="page-inner">

    <div class="row">
        <div class="col-md-6">
            <div class="main-card card">
                <form class="form-horizontal" id="inputForm" novalidate="novalidate">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">
                                <?php echo e(translate('Language Information')); ?>

                            </h4>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group control-group form-inline ">
                            <label class="col-md-3">
                                <?php echo e(translate('Name')); ?>

                                <span class="required-label">*</span>
                            </label>
                            <div class="col-md-9 controls">
                                <input type="text" id="name" name="name" placeholder="<?php echo e(translate('Name')); ?> like(English)" required class="form-control input-full" data-validation-required-message="Language name is required" />
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group control-group form-inline ">
                            <label class="col-md-3">
                                <?php echo e(translate('Code')); ?>

                                <span class="required-label">*</span>
                            </label>
                            <div class="col-md-9 controls">
                                <input type="text" id="code" name="code" placeholder="<?php echo e(translate('Code')); ?> like(en,bn)" required class="form-control input-full" data-validation-required-message="Code is required" />
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group control-group form-inline ">

                            <div class="col-md-9 controls offset-md-3">
                                <label class="switch float-left">
                                    <input name="default_language" type="checkbox" value="1" id="default_language" class="rm-slider" />
                                    <span class="slider round"></span>
                                </label>
                                <label class="float-left ml-3"><?php echo e(translate('Default Language')); ?></label>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm btn-shadow"><?php echo e(translate('Save Change')); ?></button>
                    </div>
                </form>

            </div>

        </div>
    </div>



    <!--Role datatable-->
    <div class="row">
        <div class="col-md-12">
            <div class="main-card card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">
                            <?php echo e(translate('Language List')); ?>

                        </h4>
                    </div>
                </div>
                <div class="card-body">
                    <table id="tableElement" class="table table-bordered w100"></table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo e(dsAsset('js/custom/settings/language.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/link/lp/vet/resources/views/settings/language.blade.php ENDPATH**/ ?>