@extends('layout/app')
@section('content')

    <div class="card mx-auto" style="margin-top:15px;">

        <div class="col-xxl-12">
            <!--begin::Contacts-->
            <div class="px-2" class="card card-flush h-lg-100" id="kt_contacts_main">
                <!--begin::Card header-->
                <div class="card-header pt-4" id="kt_chat_contacts_header">
                    <!--begin::Card title-->
                    <div class="card-title">

                        <div class="d-flex justify-content-start">
                            <div class="d-flex">
                                <div class="p-2 ">
                                    <h2>Support Ticket</h2>
                                </div>
                                <div class="p-2">

                                    <h2 class="text-gray-400 fw-semibold  text-gray-400">Edit</h2>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="card-body pt-8 px-lg-20">
                    <!--begin::Form-->

                    <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="#">

                          <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">




                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 text-black form-label mt-1">
                                        <span>Id</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control " type="text" placeholder="20" />
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>



                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 text-black form-label mt-1">
                                        <span>Subject</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text"  class="form-control" placeholder="Subject" />
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>

                        <div class="row row-cols-1 row-cols-sm-1 rol-cols-md-1 row-cols-lg-1">

                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 text-black form-label mt-1 mb-3">
                                        <span>Prefered Mode Of Contact</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" checked />
                                            <label class="form-check-label" for="inlineRadio2">Call</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Email
                                            </label>
                                        </div>

                                     <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Whatsap
                                            </label>
                                        </div>

                                    </div>
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->

                            <!--end::Col-->
                        </div>
<div class="row row-cols-1 row-cols-sm-1 rol-cols-md-1 row-cols-lg-1">

                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 text-black form-label mt-1 mb-3">
                                        <span>Preferred Mode Of Time</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2" checked>Morning</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Afternoon
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Evening
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Any Time
                                            </label>
                                        </div>





                                    </div>
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->

                            <!--end::Col-->
</div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="fv-row mb-3">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>
                                    Message
                                </span>


                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control " name="notes"></textarea>
                            <!--end::Input-->
                        </div>

                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">




                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 text-black form-label mt-1">
                                        <span>Attachements</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control " id="formFileSm" type="file" />
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>

<div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 text-black form-label mt-1">
                                        <span>Product</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control "  type="text" placeholder="Productname"/>
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>



                        </div>

                        <!--end::Col-->
                        <!--begin::Col-->

                        <!--end::Col-->
                </div>

                <div class="d-flex justify-content-end mb-3">
                    <!--begin::Button-->
                    <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                        <span class="indicator-label">Save</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Action buttons-->
                <div></div>
                </form>
                <!--end::Form-->
            </div>

            <!--end::Card body-->
        </div>
        <!--end::Contacts-->
    </div>

    <!--end:Form-->
    </div>
@endsection
