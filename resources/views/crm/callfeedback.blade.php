@extends('layout/theme')
@section('content')
    <div class="card mx-auto" style="margin-top:15px;">

        <div class="col-xxl-12">
            <!--begin::Contacts-->
            <div class="px-2" class="card card-flush h-lg-100" id="kt_contacts_main">
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
                        <h2>Incoming Call Feedback</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div >
                    <div class="card-body pt-5">
                        <!--begin::Form-->
                        <form id="kt_ecommerce_settings_general_form"
                            class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                            <!--begin::Input group-->

                            <!--end::Input group-->
                            <!--begin::Input group-->



                            <div class="fv-row mb-7 fv-plugins-icon-container ">
                                <!--begin::Label-->
                                <label class="fw-semibold form-label mt-3 fs-6 fw-bold text-black">
                                    <span>
                                        <h3>New or returning customers?</h3>
                                    </span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div class="form ">


                                    <div class="form form-check-custom form-check-sm">
                                        <input class="form-check-input" class="form-check-sm" type="radio" value=""
                                            id="flexCheckDefault1" name="radio2">
                                        <label class="form-check-label" for="flexCheckDefault1">New</label>
                                    </div>
                                    <div class="form form-check-custom form-check-sm">
                                        <input class="form-check-input" class="form-check-sm" type="radio" value=""
                                            id="flexCheckDefault1" name="radio2">
                                        <label class="form-check-label" for="flexCheckDefault1">Returning</label>
                                    </div>
                                </div>
                            </div>
                            <!--begin::Row-->
                            <div class="fv-row mb-7 fv-plugins-icon-container ">
                                <!--begin::Label-->
                                <label class="fw-semibold form-label mt-3 fs-6 fw-bold text-black">
                                    <h3>How satisfied were you overall with customers?</h3>

                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div class="form">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-2">
                                            Highly Disstaisfied
                                        </div>
                                        <div class="col-2">
                                        </div>
                                        <div class="col-2">
                                        </div>
                                        <div class="col-2">
                                        </div>
                                        <div class="col-2">
                                            Highly Staisfied
                                        </div>
                                    </div>
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-2">

                                            <label class="form-check-clip text-center">
                                                <input class="btn-check" type="radio" value="1" checked
                                                    name="option" />

                                                <div class="form-control ">
                                                    <div class="form-check-wrapper px-lg-15 py-lg-3">
                                                        <div class="form-check-indicator"></div>
                                                        <span class="form-check-content ">
                                                            <h2>1</h2>

                                                        </span>
                                                    </div>
                                                </div>

                                            </label>
                                        </div>
                                        <div class="col-2">

                                            <label class="form-check-clip text-center">
                                                <input class="btn-check" type="radio" value="1" checked
                                                    name="option" />
                                                <div class="form-control ">
                                                    <div class="form-check-wrapper px-lg-15 py-lg-3">
                                                        <div class="form-check-indicator"></div>
                                                        <span class="form-check-content ">
                                                            <h2>2</h2>

                                                        </span>
                                                    </div>
                                                </div>

                                            </label>
                                        </div>
                                        <div class="col-2">

                                            <label class="form-check-clip text-center">
                                                <input class="btn-check" type="radio" value="1" checked
                                                    name="option" />
                                                <div class="form-control ">
                                                    <div class="form-check-wrapper px-lg-15 py-lg-3">
                                                        <div class="form-check-indicator"></div>
                                                        <span class="form-check-content ">
                                                            <h2>3</h2>

                                                        </span>
                                                    </div>
                                                </div>

                                            </label>
                                        </div>


                                        <!--begin::Col-->

                                        <!--end::Col-->


                                        <!--begin::Col-->

                                        <!--end::Col-->

                                        <div class="col-2">

                                            <label class="form-check-clip text-center">
                                                <input class="btn-check" type="radio" value="1" checked
                                                    name="option" />
                                                <div class="form-control ">
                                                    <div class="form-check-wrapper px-lg-15 py-lg-3">
                                                        <div class="form-check-indicator"></div>
                                                        <span class="form-check-content ">
                                                            <h2>4</h2>

                                                        </span>
                                                    </div>
                                                </div>

                                            </label>
                                        </div>
                                        <div class="col-2">

                                            <label class="form-check-clip text-center">
                                                <input class="btn-check" type="radio" value="1" checked
                                                    name="option" />
                                                <div class="form-control ">
                                                    <div class="form-check-wrapper px-lg-15 py-lg-3">
                                                        <div class="form-check-indicator"></div>
                                                        <span class="form-check-content ">
                                                            <h2>5</h2>

                                                        </span>
                                                    </div>
                                                </div>

                                            </label>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->

                                <!--end::Row-->
                                <!--begin::Input group-->

                                <!--end::Input group-->
                                <!--begin::Separator-->

                                <!--end::Separator-->
                                <!--begin::Action buttons-->

                                <!--end::Action buttons-->
                                <div></div>
                            </div>
                            <div class="fv-row mb-7 fv-plugins-icon-container ">
                                <!--begin::Label-->
                                <label class="fw-semibold form-label mt-3 fs-6 fw-bold text-black">
                                    <span>
                                        <h3>Please tell us primay reaon for leaving the rating</h3>
                                    </span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div class="form ">
                                    <textarea class="form-control form-control-solid" name="notes"></textarea>
                                </div>
                            </div>

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
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contacts-->
        </div>

        <!--end:Form-->
    </div>
@endsection
