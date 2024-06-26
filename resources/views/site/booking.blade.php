@extends('site.layouts.site')
@section('content')
<link href="{{ dsAsset('site/css/custom/website-booking.css') }}" rel="stylesheet" />
<script src="{{ dsAsset('site/js/custom/website-booking.js') }}"></script>

<!--start banner section -->
<section class="banner-area position-relative" style="background:url({{$appearance->background_image}}) no-repeat;">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="position-relative text-center">
                    <h1 class="text-capitalize mb-3 text-white">{{translate('Appointment Booking')}}</h1>
                    <a class="text-white" href="{{route('site.home')}}">{{translate('Home')}} </a>
                    <i class="icofont-long-arrow-right text-white"></i>
                    <a class="text-white" href="{{route('site.appoinment.booking')}}"> {{translate('Appointment Booking')}}</a>
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
                        <span class="h3">{{translate('Call for any Emergency Support!')}}</span>
                        <h2 class="text-color mt-3">{{$appearance->contact_phone}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-3">
                <div class="single-booking-area">
                    <form class="form-wrap" id="formServiceBooking">
                        <div id="serviceStep">
                            <h3>{{translate('Service')}}</h3>
                            <section>
                                <div class="row">
                                    <div class="col-md-0">
                                        {{-- <label for="cmn_branch_id" class="float-start">{{translate('Branch')}}</label> --}}
                                        <select id="cmn_branch_id" name="cmn_branch_id" class="serviceInput form-control" hidden>

                                        </select>
                                    </div>
                                    <div class="col-md-0">
                                        {{-- <label for="sch_service_category_id" class="float-start">{{translate('Category')}}</label> --}}
                                        
                                        <select id="sch_service_category_id" name="sch_service_category_id" class="serviceInput form-control" hidden>
                                        
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sch_service_id" class="float-start">{{translate('Service')}}</label>
                                        <select id="sch_service_id" name="sch_service_id" class="serviceInput form-control" >

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sch_employee_id" class="float-start">{{translate('Staff')}}</label>
                                        <select id="sch_employee_id" name="sch_employee_id" class="serviceInput form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-auto col-lg-auto col-sm-auto" id="divServiceCalendar">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="serviceDate" class="float-start">{{translate('Service Date')}}</label>
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
                                    {{-- <div class="col-md-auto col-lg-auto col-sm-auto float-end">
                                        <button type="button" class="btn btn-success float-end" id="add-service-btn"><i class="fas fa-plus-circle"></i> {{translate('Add more service')}}</button>
                                    </div> --}}
                                    <div class="col-md-12 mt-3">
                                        <table id="tbl-service-cart" class="table table-responsive table-bordered fs-13 text-start d-none">
                                            <thead>
                                                <tr>
                                                    <th>{{translate('SL')}}</th>
                                                    <th>{{translate('Service')}}</th>
                                                    <th>{{translate('Staff')}}</th>
                                                    <th>{{translate('Date')}}</th>
                                                    <th>{{translate('Time')}}</th>
                                                    {{-- <th>{{translate('Fee')}}</th> --}}
                                                    {{-- <th class="text-center">{{translate('Opt')}}</th> --}}
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
                                                <label for="full_name" class="float-start">{{translate('Full Name')}} *</label>
                                                <input type="text" id="full_name" name="full_name" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="email" class="float-start">{{translate('Email')}} *</label>
                                                <input type="email" id="email" name="email" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="phone_no" class="float-start">{{translate('Phone')}} *</label>
                                                <input type="number" id="phone_no" name="phone_no" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="state" class="float-start">{{translate('State')}}</label>
                                                <input type="text" id="state" name="state" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="city" class="float-start">{{translate('City')}}</label>
                                                <input type="text" id="city" name="city" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="postal_code" class="float-start">{{translate('Postal Code')}}</label>
                                                <input type="text" id="postal_code" name="postal_code" class="form-control" />
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="street_address" class="float-start">{{translate('Street Address')}}</label>
                                                <input type="text" id="street_address" name="street_address" class="form-control" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="service_remarks" class="float-start">{{translate('Service Remarks')}}</label>
                                                <input type="text" id="service_remarks" name="service_remarks" class="form-control" />
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                            </section>
                            <h3>Detalles mascota</h3>
                            <section>
                                <div class="row p-1">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="pet_name" class="float-start">{{translate('Pet Name')}} *</label>
                                                <input type="text" id="pet_name" name="pet_name" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="specie" class="float-start">{{translate('Specie')}} *</label>
                                                {{-- <input type="text" id="specie" name="specie" class="form-control" /> --}}
                                                <select class="form-select" id="specie" name="specie" >
                                                    
                                                    <option value="Canino" selected>Canino</option>
                                                    <option value="Felino">Felino</option>
                                                    <option value="Otro">Otro</option>
                                                  </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="otro_esp" class="float-start">{{translate('Especifique Especie')}} </label>
                                                <input type="text" id="otro_esp" name="otro_esp" class="form-control" />
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="race" class="float-start">{{translate('Raza')}} </label>
                                                <input type="text" id="race" name="race" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="color" class="float-start">{{translate('Color')}} </label>
                                                <input type="text" id="color" name="color" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="micro" class="float-start">{{translate('N Microchip')}} </label>
                                                <input type="text   " id="micro" name="micro" class="form-control" />
                                            </div>
                                            
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="state" class="float-start">{{translate('Est. Reproductivo')}} *</label>
                                                <select class="form-select"  id="state" name="state" >
                                                    
                                                    <option value="Enter@" selected>Enter@</option>
                                                    <option value="Castrado antes de los 6 meses(primer celo)">Castrado antes de los 6 meses(primer celo)</option>
                                                    <option value="Castrado despues de los 6 meses(primer celo)">Castrado despues de los 6 meses(primer celo)</option>
                                                    <option value="No lo sé">No lo sé</option>
                                                  </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nac" class="float-start">{{translate('Nac Estimado')}} </label>
                                                <input type="text" id="nac" name="nac" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="sex" class="float-start">{{translate('Sexo')}} </label>
                                                {{-- <input type="text   " id="sex" name="sex" class="form-control" /> --}}
                                                <select class="form-select"  id="sex" name="sex" >
                                                    
                                                    <option value="Macho" selected>Macho</option>
                                                    <option value="Hembra">Hembra</option>
                                                  </select>
                                            </div>
                                            
                                          
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="state" class="float-start">{{translate('State')}}</label>
                                                <input type="text" id="state" name="state" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="city" class="float-start">{{translate('City')}}</label>
                                                <input type="text" id="city" name="city" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="postal_code" class="float-start">{{translate('Postal Code')}}</label>
                                                <input type="text" id="postal_code" name="postal_code" class="form-control" />
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="street_address" class="float-start">{{translate('Street Address')}}</label>
                                                <input type="text" id="street_address" name="street_address" class="form-control" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="service_remarks" class="float-start">{{translate('Service Remarks')}}</label>
                                                <input type="text" id="service_remarks" name="service_remarks" class="form-control" />
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                            </section>
                            <h3>Finalizar</h3>
                            <section>
                                <div class="color-success p-5">{{translate('Your service booking is completed & service is under processing, Check your email.')}}</div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End booking Area -->

@endsection