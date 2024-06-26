
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
                                    <div class="col-md-0">
                                        
                                        <select id="cmn_branch_id" name="cmn_branch_id" class="serviceInput form-control" hidden>

                                        </select>
                                    </div>
                                    <div class="col-md-0">
                                        
                                        
                                        <select id="sch_service_category_id" name="sch_service_category_id" class="serviceInput form-control" hidden>
                                        
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sch_service_id" class="float-start"><?php echo e(translate('Service')); ?></label>
                                        <select id="sch_service_id" name="sch_service_id" class="serviceInput form-control" >

                                        </select>
                                    </div>
                                    <div class="col-md-6">
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
                                    
                                    <div class="col-md-12 mt-3">
                                        <table id="tbl-service-cart" class="table table-responsive table-bordered fs-13 text-start d-none">
                                            <thead>
                                                <tr>
                                                    <th><?php echo e(translate('SL')); ?></th>
                                                    <th><?php echo e(translate('Service')); ?></th>
                                                    <th><?php echo e(translate('Staff')); ?></th>
                                                    <th><?php echo e(translate('Date')); ?></th>
                                                    <th><?php echo e(translate('Time')); ?></th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody class="text-start" id="iSelectedServiceList"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            <h3>Datos Cliente</h3>
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
                                                <input type="number" id="phone_no" name="phone_no" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </section>
                            <h3>Detalles mascota</h3>
                            <section>
                                <div class="row p-1">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="pet_name" class="float-start"><?php echo e(translate('Pet Name')); ?> *</label>
                                                <input type="text" id="pet_name" name="pet_name" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="specie" class="float-start"><?php echo e(translate('Specie')); ?> *</label>
                                                
                                                <select class="form-select" id="specie" name="specie" >
                                                    
                                                    <option value="Canino" selected>Canino</option>
                                                    <option value="Felino">Felino</option>
                                                    <option value="Otro">Otro</option>
                                                  </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="otro_esp" class="float-start"><?php echo e(translate('Especifique Especie')); ?> </label>
                                                <input type="text" id="otro_esp" name="otro_esp" class="form-control" />
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="race" class="float-start"><?php echo e(translate('Raza')); ?> </label>
                                                <input type="text" id="race" name="race" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="color" class="float-start"><?php echo e(translate('Color')); ?> </label>
                                                <input type="text" id="color" name="color" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="micro" class="float-start"><?php echo e(translate('N Microchip')); ?> </label>
                                                <input type="text   " id="micro" name="micro" class="form-control" />
                                            </div>
                                            
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="state" class="float-start"><?php echo e(translate('Est. Reproductivo')); ?> *</label>
                                                <select class="form-select"  id="state" name="state" >
                                                    
                                                    <option value="Enter@" selected>Enter@</option>
                                                    <option value="Castrado antes de los 6 meses(primer celo)">Castrado antes de los 6 meses(primer celo)</option>
                                                    <option value="Castrado despues de los 6 meses(primer celo)">Castrado despues de los 6 meses(primer celo)</option>
                                                    <option value="No lo sé">No lo sé</option>
                                                  </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nac" class="float-start"><?php echo e(translate('Nac Estimado')); ?> </label>
                                                <input type="text" id="nac" name="nac" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="sex" class="float-start"><?php echo e(translate('Sexo')); ?> </label>
                                                
                                                <select class="form-select"  id="sex" name="sex" >
                                                    
                                                    <option value="Macho" selected>Macho</option>
                                                    <option value="Hembra">Hembra</option>
                                                  </select>
                                            </div>
                                            
                                          
                                        </div>
                                    </div>
                                    
                                </div>
                            </section>
                            <h3>Finalizar</h3>
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
<?php echo $__env->make('site.layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/link/lp/vet/resources/views/site/booking.blade.php ENDPATH**/ ?>