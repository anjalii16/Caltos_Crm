@extends('layout/theme')
@section('content')
    <div class="card mx-auto">

        <div class="col-xxl-12">
            <!--begin::Contacts-->
            <div class="card card-flush h-lg-100" id="kt_contacts_main">
                <!--begin::Card header-->
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                        <span class="svg-icon svg-icon-1 me-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                    fill="currentColor"></path>
                                <path opacity="0.3"
                                    d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <h2>Add lead</h2>
                    </div>
                    <!--end::Card title-->
                </div>
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
                            <div class="col ">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-black form-label mt-1">
                                        <span>Name</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control " name="email" value="">
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col ">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-black form-label mt-1">
                                        <span>Company Name </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control " name="email" value="">
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <!--begin::Col-->
                            <div class="col ">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-black form-label mt-1">
                                        <span>Email</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control " name="email" value="">
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col ">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-black form-label mt-1">
                                        <span>Mobile Number</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control " name="email" value="">
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>

                        <!--begin::Input group-->

                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <!--begin::Col-->
                            <div class="col ">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-black form-label mt-1">
                                        <span>GST</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control " name="email" value="">
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col ">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-black form-label mt-1">
                                        <span>Pincode</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control " name="email" value="">
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <!--begin::Col-->
                            <div class="col ">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-black form-label mt-1">
                                        <span>City</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                      <select class="form-select" data-control="select2" data-placeholder="Select City">
        <option></option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="1">Option 1</option>

    </select>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col ">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-black form-label mt-1">
                                        <span>State</span>
                                    </label>
                                     <select class="form-select" data-control="select2" data-placeholder="Select State">
        <option></option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="1">Option 1</option>

    </select>
                                    <!--end::Label-->
                                    <!--begin::Input-->

                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <!--begin::Col-->
                            <div class="col ">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-black form-label mt-1">
                                        <span>Country</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                     <select class="form-select" data-control="select2" data-placeholder="Select Country">
        <option></option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="1">Option 1</option>
            <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="1">Option 1</option>
            <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="1">Option 1</option>
            <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="1">Option 1</option>
            <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="1">Option 1</option>
            <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="1">Option 1</option>


    </select>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col ">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold text-black form-label mt-1">
                                        <span>Remarks</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control " name="email" value="">
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>


                        <!--end::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container ">
                            <!--begin::Label-->
                            <label class="fw-semibold form-label mt-3 fs-6 fw-bold text-black">
                                <span class="required mb-3">Lead For</span>

                            </label><br>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input text-black" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">Option 1</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input text-black" type="radio"
                                            name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Option
                                            2</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fv-row mb-7 fv-plugins-icon-container ">
                            <!--begin::Label-->
                            <label class="fw-semibold form-label mt-3 fs-6 fw-bold text-black">
                                <span class="required mb-3">Lead Source</span>

                            </label><br>
                            <!--end::Label-->
                            <!--begin::Input-->

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions1"
                                    id="inlineRadio2" value="option2" />
                                <label class="form-check-label" for="inlineRadio2">Option 1</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions1"
                                        id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">Option
                                        2</label>
                                </div>
                            </div>

                        </div>
                        <!--begin::Row-->
                        <div class="fv-row mb-7 fv-plugins-icon-container ">
                            <!--begin::Label-->
                            <label class="fw-semibold form-label mt-3 fs-6 fw-bold text-black">
                                <span class="required mb-3">Account Manager</span>

                            </label><br>
                            <!--end::Label-->
                            <!--begin::Input-->

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                    id="inlineRadio2" value="option2" />
                                <label class="form-check-label" for="inlineRadio2">Option 1</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                        id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">Option
                                        2</label>
                                </div>
                            </div>

                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <button type="reset" data-kt-contacts-type="cancel"
                                class="btn btn-light me-3">Cancel</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Input group-->

                        <!--end::Input group-->
                        <!--begin::Separator-->

                        <!--end::Separator-->
                        <!--begin::Action buttons-->

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
