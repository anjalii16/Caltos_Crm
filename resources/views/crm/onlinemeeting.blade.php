@extends('layout/theme')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-1 py-lg-6">
                <!--begin::Toolbar container-->

                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid mb-3 mb-lg-0 me-lg-7 me-xl-10">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body p-12">
                                    <!--begin::Form-->
                                    <form action="" id="kt_invoice_form">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-start flex-xxl-row">
                                            <!--begin::Input group-->
                                            <div class="d-flex align-items-center flex-equal fw-row me-4 order-2"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-kt-initialized="1">
                                                <!--begin::Date-->
                                                <div class="fs-6 fw-bold text-gray-700 text-nowrap">
                                                    <h1>Online Meeting Scheduled</h1>
                                                </div>
                                                <!--end::Date-->
                                                <!--begin::Input-->

                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->

                                            <!--end::Input group-->
                                            <!--begin::Input group-->

                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Top-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-10"></div>
                                        <!--end::Separator-->
                                        <!--begin::Wrapper-->
                                        <div class="mb-0">
                                            <!--begin::Row-->
                                            <div class="row gx-10 mb-5">
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Title</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="Name">
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->

                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Start Date
                                                        Time</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                                                                         <input
                                                class="form-control form-control-solid fw-bold pe-5 flatpickr-input"
                                                placeholder="Select date & Time" name="invoice_due_date" type="text"
                                                readonly="readonly" id="kt_datepicker_3">
                                                    <!--end::Input-->
 @section('js')
        <script>
            $("#kt_datepicker_2").flatpickr();

            $("#kt_datepicker_1").flatpickr();
            $("#kt_datepicker_3").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
});
        </script>

    @endsection
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->

                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <div class="row gx-10 mb-5">
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Assign
                                                        to</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="Name">
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->

                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bold text-gray-700 mb-3">End Date
                                                        Time</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                                                                      <input
                                                class="form-control form-control-solid fw-bold pe-5 flatpickr-input"
                                                placeholder="Select date & Time" name="invoice_due_date" type="text"
                                                readonly="readonly" id="kt_datepicker_3">
                                                    <!--end::Input-->
 @section('js')
        <script>
            $("#kt_datepicker_2").flatpickr();

            $("#kt_datepicker_1").flatpickr();
            $("#kt_datepicker_3").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
});
        </script>

    @endsection
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->

                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <div class="row gx-10 mb-5">
                                                <!--begin::Col-->
                                                <div class="col-lg-12">
                                                    <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Meeting
                                                        Agenda
                                                    </label>
                                                    <!--begin::Input group-->
                                                    <textarea class="form-control form-control-solid" name="notes"></textarea>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->

                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->

                                            </div>
                                            <div class="row gx-10 mb-5">
                                                <!--begin::Col-->
                                                <div class="col-lg-12">
                                                    <label class="form-label fs-6 fw-bold text-gray-700 mb-3">
                                                        Reminder
                                                    </label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="Name">
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->

                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->

                                            </div>
                                            <div class="row gx-10 mb-5">
                                                <!--begin::Col-->
                                                <!--begin::Row-->
                                                <h1>Meeting Type</h1>
                                                <div class="row" class="card">
                                                    <!--begin::Col-->
                                                    <div class="col-3 me-4  col-sm-5 col-lg-4">

                                                        <label class="form-check-clip text-center">
                                                            <input class="btn-check" type="radio" value="1" checked
                                                                name="option" />

                                                            <div class="form-check-wrapper h-lg-80px w-lg-200px">
                                                                <td>
                                                                    <div class="form-check-indicator"></div>
                                                                    <img class="form-check-content" src="assets/webcx.png "
                                                                        style="height:50px;width:50px;" />
                                                                </td>


                                                                <td class="ps-0">
                                                                    <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html"
                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                        1802 gffdg</a>

                                                                </td>
                                                            </div>

                                                        </label>





                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-3 me-4 col-sm-5 col-lg-4">

                                                        <label class="form-check-clip text-center">
                                                            <input class="btn-check" type="radio" value="1" checked
                                                                name="option" />

                                                            <div class="form-check-wrapper h-lg-80px w-lg-200px">
                                                                <td>
                                                                    <div class="form-check-indicator"></div>
                                                                    <img class="form-check-content "
                                                                        src="assets/google.png "
                                                                        style="height:50px;width:50px;" />
                                                                </td>


                                                                <td class="ps-0">
                                                                    <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html"
                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                        1802 gffdg</a>

                                                                </td>
                                                            </div>

                                                        </label>





                                                    </div>

                                                    <!--end::Col-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-3 me-4 col-sm-5 col-lg-4">

                                                            <label class="form-check-clip text-center">
                                                                <input class="btn-check" type="radio" value="1"
                                                                    checked name="option" />

                                                                <div class="form-check-wrapper  h-lg-80px w-lg-200px">
                                                                    <td>
                                                                        <div class="form-check-indicator"></div>
                                                                        <img class="form-check-content"
                                                                            src="assets/skype.png "
                                                                            style="height:50px;width:50px;" />
                                                                    </td>


                                                                    <td class="ps-0">
                                                                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                            1802 gffdg</a>

                                                                    </td>
                                                                </div>

                                                            </label>





                                                        </div>
                                                        <div class="col-3 me-4 col-sm-5 col-lg-4">

                                                            <label class="form-check-clip text-center">
                                                                <input class="btn-check" type="radio" value="1"
                                                                    checked name="option" />

                                                                <div class="form-check-wrapper  h-lg-80px w-lg-200px">
                                                                    <td>
                                                                        <div class="form-check-indicator"></div>
                                                                        <img class="form-check-content"
                                                                            src="assets/zoom.png "
                                                                            style="height:50px;width:50px;" />
                                                                    </td>


                                                                    <td class="ps-0">
                                                                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                            1802 gffdg</a>

                                                                    </td>
                                                                </div>

                                                            </label>





                                                        </div>







                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--end::Col-->
                                            <!--begin::Col-->

                                        </div>

                                        <!--end::Row-->
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
                                        <!--begin::Table wrapper-->

                                        <!--end::Table-->
                                        <!--begin::Item template-->

                                        <!--end::Notes-->
                                </div>
                                <!--end::Wrapper-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <div class="flex-lg-auto min-w-lg-300px">
                            <!--begin::Card-->
                            <div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice"
                                data-kt-sticky-offset="{default: false, lg: '200px'}"
                                data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto"
                                data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                                <!--begin::Card body-->
                                <div class="card-body p-10">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold fs-6 text-gray-700">Currency</label>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select name="currnecy" aria-label="Select a Timezone" data-control="select2"
                                            data-placeholder="Select currency"
                                            class="form-select form-select-solid select2-hidden-accessible"
                                            data-select2-id="select2-data-10-ughs" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="" data-select2-id="select2-data-12-cwsm"></option>
                                            <option data-kt-flag="flags/united-states.svg" value="USD">
                                                USD&nbsp;-&nbsp;USA dollar</option>
                                            <option data-kt-flag="flags/united-kingdom.svg" value="GBP">
                                                GBP&nbsp;-&nbsp;British pound</option>
                                            <option data-kt-flag="flags/australia.svg" value="AUD">
                                                AUD&nbsp;-&nbsp;Australian dollar</option>
                                            <option data-kt-flag="flags/japan.svg" value="JPY">
                                                JPY&nbsp;-&nbsp;Japanese yen</option>
                                            <option data-kt-flag="flags/sweden.svg" value="SEK">
                                                SEK&nbsp;-&nbsp;Swedish krona</option>
                                            <option data-kt-flag="flags/canada.svg" value="CAD">
                                                CAD&nbsp;-&nbsp;Canadian dollar</option>
                                            <option data-kt-flag="flags/switzerland.svg" value="CHF">
                                                CHF&nbsp;-&nbsp;Swiss franc</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-11-lvz2"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-currnecy-6j-container"
                                                    aria-controls="select2-currnecy-6j-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-currnecy-6j-container" role="textbox"
                                                        aria-readonly="true" title="Select currency"><span
                                                            class="select2-selection__placeholder">Select
                                                            currency</span></span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mb-8"></div>
                                    <!--end::Separator-->
                                    <!--begin::Input group-->
                                    <div class="mb-8">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                            <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">Payment
                                                method</span>
                                            <input class="form-check-input" type="checkbox" checked="checked"
                                                value="">
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                            <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">Late fees</span>
                                            <input class="form-check-input" type="checkbox" value="">
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">Notes</span>
                                            <input class="form-check-input" type="checkbox" value="">
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mb-8"></div>
                                    <!--end::Separator-->
                                    <!--begin::Actions-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row mb-5">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <a href="#"
                                                    class="btn btn-light btn-active-light-primary w-100">Preview</a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <a href="#"
                                                    class="btn btn-light btn-active-light-primary w-100">Download</a>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <button type="submit" href="#" class="btn btn-primary w-100"
                                            id="kt_invoice_submit_button">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.3"
                                                        d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Send Invoice
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->

                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->

    <!--end::Footer-->
    </div>
@endsection
