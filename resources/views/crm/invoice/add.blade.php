@extends('layout/theme')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
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
                                        data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-original-title="Specify invoice date ">
                                        <!--begin::Date-->
                                        <input class="form-control form-control-transparent fw-bold pe-5 flatpickr-input"
                                            placeholder="Select date" name="invoice_due_date" type="text"
                                            readonly="readonly" id="kt_datepicker_1">
                                        <!--end::Date-->
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
                                    <!--begin::Input-->
                                    <div class="position-relative d-flex align-items-center w-150px">
                                        <!--begin::Datepicker-->

                                        <!--end::Datepicker-->
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-2 position-absolute ms-4 end-0">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4"
                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-original-title="Enter invoice number" data-kt-initialized="1">
                                    <span class="fs-2x fw-bold text-gray-800">Invoice #</span>
                                    <input type="text"
                                        class="form-control form-control-flush fw-bold text-muted fs-3 w-125px"
                                        value="2021001" placehoder="...">
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex align-items-center justify-content-end flex-equal order-3 fw-row"
                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-original-title="Specify invoice due date" data-kt-initialized="1">
                                    <!--begin::Date-->
                                    <div class="fs-6 fw-bold text-gray-700 text-nowrap">Due Date:</div>
                                    <!--end::Date-->
                                    <!--begin::Input-->
                                    <div class="position-relative d-flex align-items-center w-150px">
                                        <!--begin::Datepicker-->
                                        <input
                                            class="form-control form-control-transparent fw-bold pe-5 flatpickr-input"
                                            placeholder="Select date" name="invoice_due_date" type="text"
                                            readonly="readonly" id="kt_datepicker_2">
                                        <!--end::Datepicker-->
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-2 position-absolute end-0 ms-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::Input-->
                                </div>
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
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Bill From</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Name">
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Email">
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="Who is this invoice from?"></textarea>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Bill To</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Name">
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Email">
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="What is this invoice for?"></textarea>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <div class="card-fluid mx-lg-9">
                                    <tbody>

                                        <div id="kt_docs_repeater_basic">

                                            <!--begin::Form group-->
                                            <div class="form-group-solid">

                                                <div data-repeater-list="kt_docs_repeater_basic">
                                                    <div data-repeater-item>

                                                        <div class="form-group-solid row">
                                                            <div class="col-md-2 col-lg-2">
                                                                <label class="form-label">Product</label>

                                                                <input type="email"
                                                                    class="form-control mb-2 mb-md-0"
                                                                    placeholder="Name" />
                                                            </div>
                                                            <div class="col-md-2 col-lg-2">
                                                                <label class="form-label">Qty</label>

                                                                <div data-kt-buttons="true">
                                                                    <div class="col"><input
                                                                            formcontrolname="noOfEmployees"
                                                                            type="number" min="1"
                                                                            max="50" step="1"
                                                                            class="form-control" name="noOfEmployees"
                                                                            placeholder="QTY"
                                                                            class="form-control form-control-lg  ng-untouched ng-pristine ng-valid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-lg-2">
                                                                <label class="form-label">Prize</label>

                                                                <input type="email"
                                                                    class="form-control mb-2 mb-md-0"
                                                                    placeholder="Prize" />
                                                            </div>
                                                            <div class="col-md-2 col-lg-2">
                                                                <label class="form-label">Total</label>

                                                                <input type="email"
                                                                    class="form-control mb-2 mb-md-0"
                                                                    placeholder="Total" />
                                                            </div>

                                                            <div class="col-md-4 mb-lg-3">
                                                                <label class="form-label">Description</label>

                                                                <input type="email" class="form-control"
                                                                    placeholder="Description" />
                                                            </div>


                                                            <div class="col" class="d-flex">

                                                                <a href="javascript:;" data-repeater-delete
                                                                    class="btn btn-light-danger mb-2 mb-md-0">
                                                                    <i class="la la-trash-o fs-1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Delete"></i>
                                                                </a>



                                                                <a class="btn btn-secondary mb-2 mb-md-0">
                                                                    <i class="bi-pencil-square fs-1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Edit"></i>
                                                                </a>

                                                            </div>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Form group-->

                                            <!--begin::Form group-->
                                            <div class="form-group mt-5 mb-3">
                                                <a href="javascript:;" data-repeater-create
                                                    class="btn btn-light-primary">
                                                    <i class="la la-plus"></i>Add
                                                </a>
                                            </div>
                                            <script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>

                                            <script>
                                                $('#kt_docs_repeater_basic').repeater({
                                                    initEmpty: false,

                                                    defaultValues: {
                                                        'text-input': 'foo'
                                                    },

                                                    show: function() {
                                                        $(this).slideDown();
                                                    },

                                                    hide: function(deleteElement) {
                                                        $(this).slideUp(deleteElement);
                                                    }
                                                });
                                            </script>
                                            <!--end::Form group-->
                                        </div>
                                    </tbody>
                                </div>
                                <!--begin::Table wrapper-->
                                <div class="table-responsive mb-10">

                                    <!--begin::Table-->
                                    <table class="table g-5 gs-0 mb-0 fw-bold text-gray-700" data-kt-element="items">
                                        <!--begin::Table head-->

                                        <!--end::Table head-->
                                        <!--begin::Table body-->



                                        <!--end::Table body-->
                                        <!--begin::Table foot-->
                                        <tfoot>
                                            <tr
                                                class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                                <th class="text-primary">
                                                    <button class="btn btn-link py-1" data-kt-element="item">Add
                                                        item</button>
                                                </th>
                                                <th colspan="2" class="border-bottom border-bottom-dashed ps-0">
                                                    <div class="d-flex flex-column align-items-start">
                                                        <div class="fs-5">Subtotal</div>
                                                        <button class="btn btn-link py-1" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover"
                                                            data-bs-original-title="Coming soon"
                                                            data-kt-initialized="1">Add tax</button>
                                                        <button class="btn btn-link py-1" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover"
                                                            data-bs-original-title="Coming soon"
                                                            data-kt-initialized="1">Add discount</button>
                                                    </div>
                                                </th>
                                                <th colspan="2"
                                                    class="border-bottom border-bottom-dashed text-end">$
                                                    <span data-kt-element="sub-total">0.00</span>
                                                </th>
                                            </tr>
                                            <tr class="align-top fw-bold text-gray-700">
                                                <th></th>
                                                <th colspan="2" class="fs-4 ps-0">Total</th>
                                                <th colspan="2" class="text-end fs-4 text-nowrap">$
                                                    <span data-kt-element="grand-total">0.00</span>
                                                </th>
                                            </tr>
                                        </tfoot>
                                        <!--end::Table foot-->
                                    </table>
                                </div>
                                <!--end::Table-->
                                <!--begin::Item template-->
                                <table class="table d-none" data-kt-element="item-template">
                                    <tbody>
                                        <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                            <td class="pe-7">
                                                <input type="text" class="form-control form-control-solid mb-2"
                                                    name="name[]" placeholder="Item name">
                                                <input type="text" class="form-control form-control-solid"
                                                    name="description[]" placeholder="Description">
                                            </td>
                                            <td class="ps-0">
                                                <input class="form-control form-control-solid" type="number"
                                                    min="1" name="quantity[]" placeholder="1"
                                                    data-kt-element="quantity">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-control-solid text-end"
                                                    name="price[]" placeholder="0.00" data-kt-element="price">
                                            </td>
                                            <td class="pt-8 text-end">$
                                                <span data-kt-element="total">0.00</span>
                                            </td>
                                            <td class="pt-5 text-end">
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-active-color-primary"
                                                    data-kt-element="remove-item">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                fill="currentColor"></path>
                                                            <path opacity="0.5"
                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                fill="currentColor"></path>
                                                            <path opacity="0.5"
                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table d-none" data-kt-element="empty-template">
                                    <tbody>
                                        <tr data-kt-element="empty">
                                            <th colspan="5" class="text-muted text-center py-10">No items</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Item template-->
                                <!--begin::Notes-->
                                <div class="mb-0">
                                    <label class="form-label fs-6 fw-bold text-gray-700">Notes</label>
                                    <textarea name="notes" class="form-control form-control-solid" rows="3"
                                        placeholder="Thanks for your business"></textarea>
                                </div>
                                <!--end::Notes-->
                            </div>
                            <!--end::Wrapper-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->
            <!--begin::Sidebar-->
            <div class="flex-lg-auto min-w-lg-300px">
                <!--begin::Card-->
                <div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice"
                    data-kt-sticky-offset="{default: false, lg: '200px'}"
                    data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto"
                    data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                    <!--begin::Card body-->
                    <div class="card-body p-10">
                        <!--begin::Input group-->
                        <!--begin::Menu-->
                        <div class="menu menu-rounded menu-column menu-gray-600 menu-state-bg fw-semibold "
                            data-kt-menu="true">
                            <!--begin::Menu item-->

                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                    <div class="fv-row mb-8"><label
                                            class="form-label fs-6 fw-semibold form-label mt-3">Currency
                                        </label><select name="business_type" formcontrolname="natureOfBussiness"
                                            data-control="select2" data-placeholder="Select..."
                                            placehoder="Select..." data-allow-clear="true" data-hide-search="true"
                                            class="form-select form-select-lg form-select-solid ng-untouched ng-pristine ng-valid">
                                            <option selected="">.. Please Select ..</option>
                                            <option value="S_Corporation">S Corporation</option>
                                            <option value="C_Corporation">C Corporation</option>
                                            <option value="Sole_Proprietorship">Sole Proprietorship
                                            </option>
                                            <option value="Non_profit">Non-profit</option>
                                            <option value="Limited_Liabilit">Limited Liability</option>
                                            <option value="General_Partnership">General Partnership
                                            </option>
                                        </select></div>
                                </div>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->

                            <!--end::Menu item-->

                            <!--begin::Menu item-->

                            <!--end::Menu item-->

                            <!--begin::Menu item-->

                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-8"></div>
                        <!--end::Separator-->
                        <!--begin::Input group-->
                        <div class="mb-8">
                            <!--begin::Option-->
                            <label
                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">Payment method</span>
                                <input class="form-check-input" type="checkbox" checked="checked" value="">
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
                                    <a href="#" class="btn btn-light btn-active-light-primary w-100">Preview</a>
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
            <!--end::Sidebar-->
        </div>
        <!--end::Layout-->
    </div>
    @section('js')
        <script>
            $("#kt_datepicker_2").flatpickr();
            $("#kt_datepicker_3").flatpickr();
            $("#kt_datepicker_1").flatpickr();
        </script>
    @endsection
    <!--end::Content container-->
</div>
@endsection
@section('toolbar')
<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Create</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
                <a href="/metronic8/demo1/../demo1/index.html" class="text-muted text-hover-primary">Home</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-400 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">Invoice Manager</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page title-->
    <!--begin::Actions-->
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <!--begin::Filter menu-->
        <div class="m-0">
            <!--begin::Menu toggle-->
            <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->Filter
            </a>
            <!--end::Menu toggle-->
            <!--begin::Menu 1-->
            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                id="kt_menu_639d61eecb1ff">
                <!--begin::Header-->
                <div class="px-7 py-5">
                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                </div>
                <!--end::Header-->
                <!--begin::Menu separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Menu separator-->
                <!--begin::Form-->
                <div class="px-7 py-5">
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Status:</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                            <select class="form-select form-select-solid select2-hidden-accessible"
                                data-kt-select2="true" data-placeholder="Select option"
                                data-dropdown-parent="#kt_menu_639d61eecb1ff" data-allow-clear="true"
                                data-select2-id="select2-data-7-1npb" tabindex="-1" aria-hidden="true"
                                data-kt-initialized="1">
                                <option data-select2-id="select2-data-9-d958"></option>
                                <option value="1">Approved</option>
                                <option value="2">Pending</option>
                                <option value="2">In Process</option>
                                <option value="2">Rejected</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-8-8zk0" style="width: 100%;"><span
                                    class="selection"><span
                                        class="select2-selection select2-selection--single form-select form-select-solid"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-10ea-container"
                                        aria-controls="select2-10ea-container"><span
                                            class="select2-selection__rendered" id="select2-10ea-container"
                                            role="textbox" aria-readonly="true" title="Select option"><span
                                                class="select2-selection__placeholder">Select option</span></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Member Type:</label>
                        <!--end::Label-->
                        <!--begin::Options-->
                        <div class="d-flex">
                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" value="1">
                                <span class="form-check-label">Author</span>
                            </label>
                            <!--end::Options-->
                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                <span class="form-check-label">Customer</span>
                            </label>
                            <!--end::Options-->
                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Notifications:</label>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" name="notifications"
                                checked="checked">
                            <label class="form-check-label">Enabled</label>
                        </div>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                            data-kt-menu-dismiss="true">Reset</button>
                        <button type="submit" class="btn btn-sm btn-primary"
                            data-kt-menu-dismiss="true">Apply</button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Menu 1-->
        </div>
        <!--end::Filter menu-->
        <!--begin::Secondary button-->
        <!--end::Secondary button-->
        <!--begin::Primary button-->
        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
            data-bs-target="#kt_modal_create_app">Create</a>
        <!--end::Primary button-->
    </div>
    <!--end::Actions-->
</div>
@endsection
