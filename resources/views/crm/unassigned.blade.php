@extends('layout/theme')
@section('content')
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Card-->
        <div class="card" style="margin-top:10px;">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">

                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                    rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-subscription-table-filter="search"
                            class="form-control form-control-solid w-250px ps-14" placeholder="Search">
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->

                    <div class="d-flex justify-content-end " data-kt-subscription-table-toolbar="base">
                        <!--begin::Filter-->
                        <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filter
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Separator-->

                            <!--begin::Content-->



                            <div class="px-7 py-5" data-kt-subscription-table-filter="form">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Status:</label>
                                    <select name="business_type" formcontrolname="natureOfBussiness" data-control="select2"
                                        data-placeholder="Select..." data-allow-clear="true" data-hide-search="true"
                                        class="form-select form-select-lg form-select-solid ng-untouched ng-pristine ng-valid">
                                        <option></option>
                                        <option value="jan">January</option>
                                        <option value="feb">February</option>
                                        <option value="mar">March</option>
                                        <option value="apr">April</option>
                                        <option value="may">May</option>
                                        <option value="jun">June</option>
                                        <option value="jul">July</option>
                                        <option value="aug">August</option>
                                        <option value="sep">September</option>
                                        <option value="oct">October</option>
                                        <option value="nov">November</option>
                                        <option value="dec">December</option>
                                    </select>

                                </div>





                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Status:</label>
                                    <select name="business_type" formcontrolname="natureOfBussiness" data-control="select2"
                                        data-placeholder="Select..." data-allow-clear="true" data-hide-search="true"
                                        class="form-select form-select-lg form-select-solid ng-untouched ng-pristine ng-valid">
                                        <option></option>

                                        <option value="Active">Active</option>
                                        <option value="Expiring">Expiring</option>
                                        <option value="Suspended">Suspended</option>
                                    </select>

                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Billing Method:</label>
                                    <select name="business_type" formcontrolname="natureOfBussiness" data-control="select2"
                                        data-placeholder="Select..." data-allow-clear="true" data-hide-search="true"
                                        class="form-select form-select-lg form-select-solid ng-untouched ng-pristine ng-valid">
                                        <option></option>

                                        <option value="Active">Texable</option>
                                        <option value="Expiring">Non Teaxable</option>

                                    </select>

                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Product:</label>
                                    <select name="business_type" formcontrolname="natureOfBussiness" data-control="select2"
                                        data-placeholder="Select..." data-allow-clear="true" data-hide-search="true"
                                        class="form-select form-select-lg form-select-solid ng-untouched ng-pristine ng-valid">
                                        <option></option>

                                        <option value="Active">Product 1</option>
                                        <option value="Expiring">Product 2</option>
                                        <option value="Suspended">Product 3</option>
                                    </select>

                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset"
                                        class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                        data-kt-menu-dismiss="true"
                                        data-kt-subscription-table-filter="reset">Reset</button>
                                    <button type="submit" class="btn btn-primary fw-semibold px-6"
                                        data-kt-menu-dismiss="true"
                                        data-kt-subscription-table-filter="filter">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Filter-->
                        <!--begin::Export-->
                        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                            data-bs-target="#kt_subscriptions_export_modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2"
                                        rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor"></rect>
                                    <path
                                        d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.3"
                                        d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Export
                        </button>
                        <!--end::Export-->
                        <!--begin::Add subscription-->

                        <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="btn btn-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                        rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                        fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Add Invoice
                        </a>
                        <!--end::Add subscription-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Group actions-->
                    <div class="d-flex justify-content-end align-items-center d-none"
                        data-kt-subscription-table-toolbar="selected">
                        <div class="fw-bold me-5">
                            <span class="me-2" data-kt-subscription-table-select="selected_count"></span>Selected
                        </div>
                        <button type="button" class="btn btn-danger"
                            data-kt-subscription-table-select="delete_selected">Delete Selected</button>
                    </div>
                    <!--end::Group actions-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <div id="kt_subscriptions_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                            id="kt_subscriptions_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0 ">
                                    <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="



														" style="width: 27.6px;">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_subscriptions_table .form-check-input"
                                                value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Customer: activate to sort column ascending" style="width: 125px;">
                                        Id</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Status: activate to sort column ascending" style="width: 125px;">
                                        Company</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Billing: activate to sort column ascending" style="width: 125px;">
                                        Name</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Product: activate to sort column ascending" style="width: 125px;">
                                        Code</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Created Date: activate to sort column ascending"
                                        style="width: 125px;">Date</th>
                                    <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Actions" style="width: 72.125px;">Lead For</th>
                                    <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Actions" style="width: 72.125px;">Assigned To</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-semibold">
                                <tr class="odd">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Customer=-->
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/customers/view.html"
                                            class="text-gray-800 text-hover-primary mb-1">10</a>
                                    </td>
                                    <!--end::Customer=-->
                                    <!--begin::Status=-->
                                    <td>
                                        Dunes
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Billing=-->
                                    <td>
                                        <div class="badge badge-light">Sahil</div>
                                    </td>
                                    <!--end::Billing=-->
                                    <!--begin::Product=-->
                                    <td>Basic</td>
                                    <!--end::Product=-->
                                    <!--begin::Date=-->
                                    <td data-order="2022-01-25T00:00:00+05:30">Oct 25, 2022</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td>Whatsap Marketing</td>
                                    <td id="center"><span class="badge badge-info fs-1" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_order"><i
                                                class="bi bi-person-badge-fill fs-1 text-white" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title=" Select Account Manager"
                                                data-bs-custom-class="tooltip-inverse"></i></span></td>

                                    <!--end::Action=-->
                                </tr>

                                <tr class="odd">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Customer=-->
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/customers/view.html"
                                            class="text-gray-800 text-hover-primary mb-1">10</a>
                                    </td>
                                    <!--end::Customer=-->
                                    <!--begin::Status=-->
                                    <td>
                                        Dunes
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Billing=-->
                                    <td>
                                        <div class="badge badge-light">Sahil</div>
                                    </td>
                                    <!--end::Billing=-->
                                    <!--begin::Product=-->
                                    <td>Basic</td>
                                    <!--end::Product=-->
                                    <!--begin::Date=-->
                                    <td data-order="2022-01-25T00:00:00+05:30">Oct 25, 2022</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td>Whatsap Marketing</td>
                                    <td id="center"><span class="badge badge-info fs-1" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_order" data-bs-target="#kt_modal_offer_a_deal"
                                            id="kt_activities_toggle" data-bs-toggle="tooltip"><i
                                                class="bi bi-person-badge-fill fs-1 text-white" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title=" Select Account Manager"
                                                data-bs-custom-class="tooltip-inverse"></i></span></td>

                                    <!--end::Action=-->
                                </tr>
                                <tr class="odd">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Customer=-->
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/customers/view.html"
                                            class="text-gray-800 text-hover-primary mb-1">10</a>
                                    </td>
                                    <!--end::Customer=-->
                                    <!--begin::Status=-->
                                    <td>
                                        Dunes
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Billing=-->
                                    <td>
                                        <div class="badge badge-light">Sahil</div>
                                    </td>
                                    <!--end::Billing=-->
                                    <!--begin::Product=-->
                                    <td>Basic</td>
                                    <!--end::Product=-->
                                    <!--begin::Date=-->
                                    <td data-order="2022-01-25T00:00:00+05:30">Oct 25, 2022</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td>Whatsap Marketing</td>
                                    <td id="center"><span class="badge badge-info fs-1" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_order"><i
                                                class="bi bi-person-badge-fill fs-1 text-white" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title=" Select Account Manager"
                                                data-bs-custom-class="tooltip-inverse" tooltip-color="black"></i></span>
                                    </td>

                                    <!--end::Action=-->
                                </tr>
                                <tr class="odd">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Customer=-->
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/customers/view.html"
                                            class="text-gray-800 text-hover-primary mb-1">10</a>
                                    </td>
                                    <!--end::Customer=-->
                                    <!--begin::Status=-->
                                    <td>
                                        Dunes
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Billing=-->
                                    <td>
                                        <div class="badge badge-light">Sahil</div>
                                    </td>
                                    <!--end::Billing=-->
                                    <!--begin::Product=-->
                                    <td>Basic</td>
                                    <!--end::Product=-->
                                    <!--begin::Date=-->
                                    <td data-order="2022-01-25T00:00:00+05:30">Oct 25, 2022</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td>Whatsap Marketing</td>
                                    <td id="center"><span class="badge badge-info fs-1" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_order"><i
                                                class="bi bi-person-badge-fill fs-1 text-white" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-custom-class="tooltip-inverse"
                                                title=" Select Account Manager"></i></span></td>

                                    <!--end::Action=-->
                                </tr>
                                <tr class="odd">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Customer=-->
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/customers/view.html"
                                            class="text-gray-800 text-hover-primary mb-1">10</a>
                                    </td>
                                    <!--end::Customer=-->
                                    <!--begin::Status=-->
                                    <td>
                                        Dunes
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Billing=-->
                                    <td>
                                        <div class="badge badge-light">Sahil</div>
                                    </td>
                                    <!--end::Billing=-->
                                    <!--begin::Product=-->
                                    <td>Basic</td>
                                    <!--end::Product=-->
                                    <!--begin::Date=-->
                                    <td data-order="2022-01-25T00:00:00+05:30">Oct 25, 2022</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td>Whatsap Marketing</td>
                                    <td id="center"><span class="badge badge-info fs-1" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_order"><i
                                                class="bi bi-person-badge-fill fs-1 text-white" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-custom-class="tooltip-inverse"
                                                title=" Select Account Manager"></i></span></td>

                                    <!--end::Action=-->
                                </tr>
                                <tr class="odd">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Customer=-->
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/customers/view.html"
                                            class="text-gray-800 text-hover-primary mb-1">10</a>
                                    </td>
                                    <!--end::Customer=-->
                                    <!--begin::Status=-->
                                    <td>
                                        Dunes
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Billing=-->
                                    <td>
                                        <div class="badge badge-light">Sahil</div>
                                    </td>
                                    <!--end::Billing=-->
                                    <!--begin::Product=-->
                                    <td>Basic</td>
                                    <!--end::Product=-->
                                    <!--begin::Date=-->
                                    <td data-order="2022-01-25T00:00:00+05:30">Oct 25, 2022</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td>Whatsap Marketing</td>
                                    <td id="center"><span class="badge badge-info fs-1" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_order"><i
                                                class="bi bi-person-badge-fill fs-1 text-white" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-custom-class="tooltip-inverse"
                                                title=" Select Account Manager"></i></span></td>

                                    <!--end::Action=-->
                                </tr>

                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-start">
                            <a href="{{ url('invoiceitem') }}">
                                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                    <span class="svg-icon svg-icon-2">
                                    </span>
                                    <!--end::Svg Icon-->Invoice Item
                                </button></a>
                            <a href="{{ url('leadstable') }}"> <button type="button" class="btn btn-light-primary me-3"
                                    data-bs-toggle="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                    <span class="svg-icon svg-icon-2">

                                    </span>
                                    <!--end::Svg Icon-->Leads Table
                                </button></a>
                        </div>
                        <div
                            class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                            <div class="dataTables_paginate paging_simple_numbers" id="kt_subscriptions_table_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="kt_subscriptions_table_previous">
                                        <a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="0"
                                            tabindex="0" class="page-link"><i class="previous"></i></a>
                                    </li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="kt_subscriptions_table" data-dt-idx="1" tabindex="0"
                                            class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="kt_subscriptions_table" data-dt-idx="2" tabindex="0"
                                            class="page-link">2</a></li>
                                    <li class="paginate_button page-item next" id="kt_subscriptions_table_next"><a
                                            href="#" aria-controls="kt_subscriptions_table" data-dt-idx="3"
                                            tabindex="0" class="page-link"><i class="next"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Modals-->
        <!--begin::Modal - Adjust Balance-->
        <div class="modal fade" id="kt_subscriptions_export_modal" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bold">Export Subscriptions</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id="kt_subscriptions_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                        rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <!--begin::Form-->
                        <form id="kt_subscriptions_export_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            action="#">
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold form-label mb-5">Select Export Format:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select data-control="select2" data-placeholder="Select a format" data-hide-search="true"
                                    name="format" class="form-select form-select-solid select2-hidden-accessible"
                                    data-select2-id="select2-data-22-51il" tabindex="-1" aria-hidden="true"
                                    data-kt-initialized="1">
                                    <option value="excell" data-select2-id="select2-data-24-gic4">Excel</option>
                                    <option value="pdf">PDF</option>
                                    <option value="cvs">CVS</option>
                                    <option value="zip">ZIP</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5"
                                    dir="ltr" data-select2-id="select2-data-23-1mlt" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-format-3b-container"
                                            aria-controls="select2-format-3b-container"><span
                                                class="select2-selection__rendered" id="select2-format-3b-container"
                                                role="textbox" aria-readonly="true" title="Excel">Excel</span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold form-label mb-5">Select Date Range:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid flatpickr-input" placeholder="Pick a date"
                                    name="date" type="hidden"><input
                                    class="form-control form-control-solid form-control input" placeholder="Pick a date"
                                    tabindex="0" type="text" readonly="readonly">
                                <!--end::Input-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Row-->
                            <div class="row fv-row mb-15">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold form-label mb-5">Payment Type:</label>
                                <!--end::Label-->
                                <!--begin::Radio group-->
                                <div class="d-flex flex-column">
                                    <!--begin::Radio button-->
                                    <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                        <input class="form-check-input" type="checkbox" value="1" checked="checked"
                                            name="payment_type">
                                        <span class="form-check-label text-gray-600 fw-semibold">All</span>
                                    </label>
                                    <!--end::Radio button-->
                                    <!--begin::Radio button-->
                                    <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked"
                                            name="payment_type">
                                        <span class="form-check-label text-gray-600 fw-semibold">Visa</span>
                                    </label>
                                    <!--end::Radio button-->
                                    <!--begin::Radio button-->
                                    <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                        <input class="form-check-input" type="checkbox" value="3"
                                            name="payment_type">
                                        <span class="form-check-label text-gray-600 fw-semibold">Mastercard</span>
                                    </label>
                                    <!--end::Radio button-->
                                    <!--begin::Radio button-->
                                    <label class="form-check form-check-custom form-check-sm form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="4"
                                            name="payment_type">
                                        <span class="form-check-label text-gray-600 fw-semibold">American Express</span>
                                    </label>
                                    <!--end::Radio button-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" id="kt_subscriptions_export_cancel"
                                    class="btn btn-light me-3">Discard</button>
                                <button type="submit" id="kt_subscriptions_export_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - New Card-->
        <!--end::Modals-->
    </div>
    <!--end::Content container-->
    </div>
@endsection
@section('toolbar')
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0 px-lg-10">
                Unassigned Leads
            </h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->

            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->

        <!--end::Actions-->
    </div>
    <div class="modal fade" tabindex="-1" id="kt_modal_order" id="center">
        <div class="modal-dialog top" style=" max-width:600px; padding-left:10px;">
            <div class="modal-content">



                <div class="modal-body">



                    <!-- form -->

                    <div class="p-2">
                        <h4 class="fw-bold">Select Account Manager</h4>

                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 rol-cols-md-1 row-cols-lg-1 mb-4">
                        <!--begin::Col-->
                        <div class="col">
                            <!--begin::Input group-->
                            <div class="fv-row mb-1 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6  text-black form-label mb-2">

                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->

                                <br>

                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Harish
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                        id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Suman
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Sahil
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Priyansh
                                    </label>
                                </div>


                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Priyansh
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                        id="flexRadioDefault4" checked>
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        Devanshi
                                    </label>
                                </div>


                            </div>
                            <!--end::Input group-->
                        </div>

                        <!--end::Col-->

                        <!--end::Col-->
                    </div>





                    <!-- form -->

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light">Submit</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
