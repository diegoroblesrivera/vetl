
<?php $__env->startSection('content'); ?>
<link href="<?php echo e(dsAsset('css/custom/service/service.css')); ?>" rel="stylesheet" />
<div class="page-inner">
    <!--Modal add menu-->
    <div class="modal fade" id="frmModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="inputForm" novalidate="novalidate" enctype="multipart/form-data">

                    <input type="hidden" name="id" id="id" value="" />
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold">
                                <?php echo e(translate('Service Information')); ?>

                            </span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group control-group form-inline ">
                                    <div class="col-md-12 controls">
                                        <label class="label"><?php echo e(translate('Service Category')); ?> <span class="required-label">*</span></label>
                                        <select id="sch_service_category_id" name="sch_service_category_id" required data-validation-required-message="Service Type is required" class="form-control input-full">
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group control-group form-inline ">
                                    <div class="col-md-12 controls">
                                        <label class="label"><?php echo e(translate('Service Title')); ?> <span class="required-label">*</span></label>
                                        <input type="text" id="title" name="title" placeholder="<?php echo e(translate('Service Title')); ?>" required data-validation-required-message="Service title is required" class="form-control input-full" />
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group form-inline ">
                                    <div class="col-md-12 controls">
                                        <label class="label"><?php echo e(translate('Service Price')); ?> <span class="required-label">*</span></label>
                                        <input type="number" id="price" name="price" required data-validation-required-message="Service price is required" class="form-control input-full">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group control-group form-inline ">
                            <div class="col-md-3 controls">
                                <img id="imagepreview" width="160px" height="75px" />
                                <span class="w-100 float-left"><?php echo e(translate('Image')); ?>: 260 X 260</span>
                            </div>
                            <div class="col-md-9 controls">
                                <input type="file" id="serviceimage" name="serviceimage" />
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <hr />
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group control-group form-inline p-1 pl-4">
                                    <label class="label"><?php echo e(translate('Service Duration')); ?></label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group control-group form-inline pt-0">
                                    <div class="col-md-12 controls">
                                        <select id="duration_in_days" name="duration_in_days" class="form-control input-full">
                                            <?php for($i =0; $i<365;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> day</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group form-inline pt-0">
                                    <div class="col-md-12 controls">
                                        <select id="durationTimeHour" name="durationTimeHour" class="form-control input-full">
                                            <?php for($i =0; $i<24;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> hour</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block">

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group form-inline pt-0">
                                    <div class="col-md-12 controls">
                                        <select id="durationTimeMinute" name="durationTimeMinute" required class="form-control input-full">
                                            <option value="">Select minute</option>
                                            <?php for($i =0; $i<60;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> minute</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group control-group form-inline p-1 pl-4">
                                    <label class="label"><?php echo e(translate('Service Time Slot')); ?> <span class="required-label">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group control-group form-inline pt-0">
                                    <div class="col-md-12 controls">
                                        <select id="time_slot_in_time_hour" name="time_slot_in_time_hour" required data-validation-required-message="Service price is required" class="form-control input-full">
                                            <?php for($i =0; $i<=23;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> hour</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group control-group form-inline pt-0">
                                    <div class="col-md-12 controls">
                                        <select id="time_slot_in_time_minute" name="time_slot_in_time_minute" required data-validation-required-message="Service time slot minute is required" class="form-control input-full">
                                            <option value="">Select Minute</option>
                                            <?php for($i =1; $i<=59;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> minute </option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="row">
                            <div class="col-md-6 form-inline">
                                <div class="col-md-12">
                                    <div class="form-group control-group form-inline p-1 pl-2">
                                        <label class="label "><?php echo e(translate('Gap Time Before')); ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group control-group form-inline pt-0">
                                        <select id="padding_time_before_hour" name="padding_time_before_hour" class="form-control input-full">
                                            <?php for($i =0; $i<=23;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> hour</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group control-group form-inline pt-0">
                                        <select id="padding_time_before_minute" name="padding_time_before_minute" class="form-control input-full">
                                            <?php for($i =0; $i<=59;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> minute</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-inline">
                                <div class="col-md-12">
                                    <div class="form-group control-group form-inline p-1 pl-2">
                                        <label class="label "><?php echo e(translate('Gap Time After')); ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group control-group form-inline pt-0">
                                        <select id="padding_time_after_hour" name="padding_time_after_hour" class="form-control input-full">
                                            <?php for($i =0; $i<=23;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> hour</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group control-group form-inline pt-0">
                                        <select id="padding_time_after_minute" name="padding_time_after_minute" class="form-control input-full">
                                            <?php for($i =1; $i<=59;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> minute</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <hr />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group control-group form-inline ">
                                    <label class="col-md-12"><?php echo e(translate('Appointment Limit Type')); ?></label>
                                    <div class="col-md-12 controls">
                                        <select id="appoinntment_limit_type" name="appoinntment_limit_type" required data-validation-required-message="Appointment type is required" class="form-control input-full">
                                            <option selected value="0">OFF</option>
                                            <option value="1">Daily</option>
                                            <option value="2">Weekly</option>
                                            <option value="3">Monthly</option>
                                            <option value="4">Yearly</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group control-group form-inline ">
                                    <label class="col-md-12"><?php echo e(translate('No of Limit')); ?></label>
                                    <div class="col-md-12 controls">
                                        <input type="number" id="appoinntment_limit" value="0" name="appoinntment_limit" required data-validation-required-message="Appointment limit is required" class="form-control input-full">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group control-group form-inline p-1 pl-4">
                                    <label class="label"><?php echo e(translate('Minimum Time Required to Service Booking')); ?> <span class="required-label">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group form-inline pt-0">
                                    <div class="col-md-12 controls">
                                        <select id="minimum_time_required_to_booking_in_days" name="minimum_time_required_to_booking_in_days" class="form-control input-full">
                                            <?php for($i =0; $i<365;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> day</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group form-inline pt-0">
                                    <div class="col-md-12 controls">
                                        <select id="minimum_time_required_to_booking_in_hour" name="minimum_time_required_to_booking_in_hour" class="form-control input-full">
                                            <?php for($i =0; $i<=23;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> hour</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group form-inline pt-0">
                                    <div class="col-md-12 controls">
                                        <select id="minimum_time_required_to_booking_in_minute" required name="minimum_time_required_to_booking_in_minute" class="form-control input-full">
                                            <option value="">Select minute</option>
                                            <?php for($i =0; $i<=59;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> minute</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group control-group form-inline p-1 pl-4">
                                    <label class="label"><?php echo e(translate('Minimum Time Required to Cancel')); ?> <span class="required-label">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group form-inline pt-0">
                                    <div class="col-md-12 controls">
                                        <select id="minimum_time_required_to_cancel_in_days" name="minimum_time_required_to_cancel_in_days" class="form-control input-full">
                                            <?php for($i =0; $i<365;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> day</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group form-inline pt-0">
                                    <div class="col-md-12 controls">
                                        <select id="minimum_time_required_to_cancel_in_hour" name="minimum_time_required_to_cancel_in_hour" class="form-control input-full">
                                            <?php for($i =0; $i<=23;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> hour</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group form-inline pt-0">
                                    <div class="col-md-12 controls">
                                        <select id="minimum_time_required_to_cancel_in_minute" required name="minimum_time_required_to_cancel_in_minute" class="form-control input-full">
                                            <option value="">Select minute</option>
                                            <?php for($i =0; $i<=59;$i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?> minute</option>
                                                <?php endfor; ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />
                        <div class="form-group control-group form-inline ">
                            <div class="col-md-12 controls">
                                <label class="label"><?php echo e(translate('Details')); ?></label>
                                <textarea id="remarks" name="remarks" class="form-control input-full" rows="3"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group control-group form-inline ">
                            <div class="col-md-12 controls">
                                <label class="label"><?php echo e(translate('Service Visibility')); ?></label>
                                <select id="visibility" name="visibility" class="form-control input-full">
                                    <option value="1">Public</option>
                                    <option value="2">Private</option>
                                </select>
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

    <!-- category datatable -->
    <div class="row">
        <div class="col-md-12">
            <div class="main-card card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">
                            <?php echo e(translate('Service Info')); ?>

                        </h4>
                        <button id="btnAdd" class="btn btn-primary btn-sm btn-round ml-auto">
                            <i class="fa fa-plus"></i> <?php echo e(translate('Add New Service')); ?>

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
<script src="<?php echo e(dsAsset('js/custom/services/service.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/link/lp/vet/resources/views/services/service.blade.php ENDPATH**/ ?>