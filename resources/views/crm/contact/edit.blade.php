@extends('layout/app')
@section('content')
  <div class="card card-flush py-4 px-5 m-10">
        <!--begin::Card header-->

        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="fv-row mb-3 fv-plugins-icon-container my-lg-5">
            <!--begin::Label-->
            <h2>Edit Contact</h2>
            <!--end::Input-->

        </div>





        <!-- form -->






        <!-- form -->


        <div class="card">
            <!--begin::Card header-->
            <div class="col-xl-12">
                <!--begin::Contacts-->
                <div class="card card-flush h-lg-100" id="kt_contacts_main">
                    <!--begin::Card header-->

                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-5">
                        <!--begin::Form-->
                        <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            action="#">
                            <!--begin::Input group-->

                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Name</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Enter the contact's email."
                                                data-bs-original-title="Enter the contact's email."
                                                data-kt-initialized="1" placeholder="Ramesh"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="email" class="form-control " name="email" placeholder="Harish" >
                                        <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span>Company Name</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Enter the contact's phone number (optional)."
                                                data-bs-original-title="Enter the contact's phone number (optional)."
                                                data-kt-initialized="1"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control " name="phone" value="" placeholder="Orkia">
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Email</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Enter the contact's email."
                                                data-bs-original-title="Enter the contact's email."
                                                data-kt-initialized="1"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="email" class="form-control " name="email" value=""  placeholder="abc@gmail.com">
                                        <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span>Phone</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Enter the contact's phone number (optional)."
                                                data-bs-original-title="Enter the contact's phone number (optional)."
                                                data-kt-initialized="1"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control " name="phone" value="123456789" placholder="8989849332">
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span>City</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Enter the contact's city of residence (optional)."
                                                data-bs-original-title="Enter the contact's city of residence (optional)."
                                                data-kt-initialized="1"></i>
                                        </label>
                                        <select name="business_type" formcontrolname="natureOfBussiness"
                                            data-control="select2" data-placeholder="Select..." placehoder="Bikaner"
                                            data-allow-clear="true" data-hide-search="true"
                                            class="form-select form-select-lg  ng-untouched ng-pristine ng-valid">
                                            <option selected="">.. Please Select ..</option>
                                            <option value="S_Corporation">S Corporation</option>
                                            <option value="C_Corporation">C Corporation</option>
                                            <option value="Sole_Proprietorship">Sole Proprietorship
                                            </option>
                                            <option value="Non_profit">Non-profit</option>
                                            <option value="Limited_Liabilit">Limited Liability</option>
                                            <option value="General_Partnership">General Partnership
                                            </option>
                                        </select>
                                        <!--end::Label-->

                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Country</span>
                                        </label>
                                        <!--end::Label-->
                                        <select name="business_type" formcontrolname="natureOfBussiness"
                                            data-control="select2" data-placeholder="Select..." placehoder="India"
                                            data-allow-clear="true" data-hide-search="true"
                                            class="form-select form-select-lg  ng-untouched ng-pristine ng-valid">
                                            <option selected="">.. Please Select ..</option>
                                            <option value="S_Corporation">S Corporation</option>
                                            <option value="C_Corporation">C Corporation</option>
                                            <option value="Sole_Proprietorship">Sole Proprietorship
                                            </option>
                                            <option value="Non_profit">Non-profit</option>
                                            <option value="Limited_Liabilit">Limited Liability</option>
                                            <option value="General_Partnership">General Partnership
                                            </option>
                                        </select>

                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span>Notes</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        aria-label="Enter any additional notes about the contact (optional)."
                                        data-bs-original-title="Enter any additional notes about the contact (optional)."
                                        data-kt-initialized="1"></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea class="form-control " placeholder="Remark Here"  name="notes"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Separator-->

                            <!--end::Separator-->
                            <!--begin::Action buttons-->

                            <!--end::Action buttons-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Contacts-->
            </div>
            <!--end::Card header-->
            <!--begin::Form-->

            <!--end:Form-->
        </div>



        <!-- form -->





        <!-- form -->
        <div class="d-flex justify-content-end">
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
    </div>
@endsection
