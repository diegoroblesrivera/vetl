
<?php $__env->startSection('content'); ?>
<link href="<?php echo e(dsAsset('site/css/custom/website-booking.css')); ?>" rel="stylesheet" />
<script src="<?php echo e(dsAsset('site/js/custom/website-booking.js')); ?>"></script>

<!--start banner section -->
<section class="banner-area position-relative" style="background:url(<?php echo e($appearance->background_image); ?>) no-repeat;">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="position-relative text-center">
                    <h1 class="text-capitalize mb-3 text-white"><?php echo e(translate('Appointment Booking')); ?></h1>
                    <a class="text-white" href="<?php echo e(route('site.home')); ?>"><?php echo e(translate('Home')); ?> </a>
                    <i class="icofont-long-arrow-right text-white"></i>
                    <a class="text-white" href="<?php echo e(route('site.appoinment.booking')); ?>"> <?php echo e(translate('Appointment Booking')); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner section -->

<!-- Start booking Area -->
<section class="appoinment-booking-area mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 order-sm-first order-last">
                <div class="single-booking-area single-booking-support mb-3">
                    <div class="mt-3">
                        <div class="support-man-icon mb-3">
                            <i class="icofont-support text-lg"></i>
                        </div>
                        <span class="h3"><?php echo e(translate('Call for any Emergency Support!')); ?></span>
                        <h2 class="text-color mt-3"><?php echo e($appearance->contact_phone); ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-3">
                <div class="single-booking-area">
                    <form class="form-wrap" id="formServiceBooking">
                        <div id="serviceStep">
                            <h3><?php echo e(translate('Service')); ?></h3>
                            <section>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="cmn_branch_id" class="float-start"><?php echo e(translate('Branch')); ?></label>
                                        <select id="cmn_branch_id" name="cmn_branch_id" class="serviceInput form-control">

                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="sch_service_category_id" class="float-start"><?php echo e(translate('Category')); ?></label>
                                        <select id="sch_service_category_id" name="sch_service_category_id" class="serviceInput form-control">

                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="sch_service_id" class="float-start"><?php echo e(translate('Service')); ?></label>
                                        <select id="sch_service_id" name="sch_service_id" class="serviceInput form-control">

                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="sch_employee_id" class="float-start"><?php echo e(translate('Staff')); ?></label>
                                        <select id="sch_employee_id" name="sch_employee_id" class="serviceInput form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-auto col-lg-auto col-sm-auto" id="divServiceCalendar">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="serviceDate" class="float-start"><?php echo e(translate('Service Date')); ?></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input id="serviceDate" name="service_date" class="form-control input-sm" type="text" readonly />
                                                <div id="divServiceDate" style="float: left;"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div id="divTopDays">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="float-start" id="divDaysName"></div>
                                                    <div class="float-end" id="divPreNext">
                                                        <i id="iPrvDate" title="Previous day" class="iChangeDate fa fa-chevron-left float-start"></i>
                                                        <i id="iNextDate" title="Next day" class="iChangeDate fa fa-chevron-right float-end"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row divServiceAvaiable">
                                                <div class="col-md-12" id="divServiceAvaiableTime">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col divSelectedService">
                                        <i class="fa fa-calendar float-start pl-2 mt-1 mr-1" aria-hidden="true"></i>
                                        <i id="iSelectedServiceText" class=""></i>
                                    </div>
                                    <div class="col-md-auto col-lg-auto col-sm-auto float-end">
                                        <button type="button" class="btn btn-success float-end" id="add-service-btn"><i class="fas fa-plus-circle"></i> <?php echo e(translate('Add more service')); ?></button>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <table id="tbl-service-cart" class="table table-responsive table-bordered fs-13 text-start d-none">
                                            <thead>
                                                <tr>
                                                    <th><?php echo e(translate('SL')); ?></th>
                                                    <th><?php echo e(translate('Service')); ?></th>
                                                    <th><?php echo e(translate('Staff')); ?></th>
                                                    <th><?php echo e(translate('Date')); ?></th>
                                                    <th><?php echo e(translate('Time')); ?></th>
                                                    <th><?php echo e(translate('Fee')); ?></th>
                                                    <th class="text-center"><?php echo e(translate('Opt')); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-start" id="iSelectedServiceList"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            <h3>Details</h3>
                            <section>
                                <div class="row p-1">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="full_name" class="float-start"><?php echo e(translate('Full Name')); ?> *</label>
                                                <input type="text" id="full_name" name="full_name" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="email" class="float-start"><?php echo e(translate('Email')); ?> *</label>
                                                <input type="email" id="email" name="email" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="phone_no" class="float-start"><?php echo e(translate('Phone')); ?> *</label>
                                                <input type="tel" id="phone_no" name="phone_no" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="state" class="float-start"><?php echo e(translate('State')); ?></label>
                                                <input type="text" id="state" name="state" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="city" class="float-start"><?php echo e(translate('City')); ?></label>
                                                <input type="text" id="city" name="city" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="postal_code" class="float-start"><?php echo e(translate('Postal Code')); ?></label>
                                                <input type="text" id="postal_code" name="postal_code" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="street_address" class="float-start"><?php echo e(translate('Street Address')); ?></label>
                                                <input type="text" id="street_address" name="street_address" class="form-control" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="service_remarks" class="float-start"><?php echo e(translate('Service Remarks')); ?></label>
                                                <input type="text" id="service_remarks" name="service_remarks" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3>Pay</h3>
                            <section>
                                <div class="row mt-3" id="divPaymentType">
                                    <div class="col-md-5 mb-4">
                                        <h6 class="float-start">Choose a way to pay</h6>
                                        <div id="divPaymentMethod" class="w100 float-start">

                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="w-100 float-start" id="divOrderSummary">
                                            <h5 class="text-start"><?php echo e(translate('Order Summary')); ?></h5>
                                            <div class="w-100 float-start">
                                                <div id="divServiceSection" class="w-100 float-start">
                                                    <!-- service list will append here-->
                                                    
                                                </div>

                                                <div class="service-item">
                                                    <div class="float-start">Subtotal</div>
                                                    <div class="float-end fw-bold" id="summary-subtotal">0</div>

                                                </div>
                                                <div class="service-item" id="summary-discount-parent">
                                                    <div class="float-start">Discount</div>
                                                    <div class="float-end fw-bold" id="summary-discount">0</div>
                                                </div>
                                                <div class="service-item">
                                                    <div class="float-start w-100 text-start">Apply Coupon Code</div>
                                                    <div class="float-start w-100">
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="coupon_code" id="coupon_code" class="form-control" aria-describedby="btn-apply-coupon">
                                                            <button class="btn btn-booking" type="button" id="btn-apply-coupon">Apply Coupon</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service-item">
                                                    <div class="service-border-button"></div>
                                                    <div class="float-start fw-bold">Total Amount</div>
                                                    <div class="float-end fw-bold" id="summary-total">0</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3>Done</h3>
                            <section>
                                <div class="color-success p-5"><?php echo e(translate('Your service booking is completed & service is under processing, Check your email.')); ?></div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End booking Area -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devsteed/testbooking.devsteed.com/resources/views/site/booking.blade.php ENDPATH**/ ?>