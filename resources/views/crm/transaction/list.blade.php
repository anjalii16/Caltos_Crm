@extends('layout/theme')
@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-1">Trasaction List</span>
                </h3>
                <div class="card-toolbar">
                    <div>
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
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
                            <input type="text" data-kt-ecommerce-category-filter="search"
                                class="form-control  w-250px ps-14" placeholder="Search">
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-body pt-0">
                <div class=".align-items-sm-start justify-content-sm-start">
                    <div class=mt-2>

                        <div class="dataTables_paginate paging_simple_numbers" id="kt_subscriptions_table_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled"
                                    id="kt_subscriptions_table_previous">
                                    <a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="0" tabindex="0"
                                        class="page-link"><i class="previous"></i></a>
                                </li>
                                <li class="paginate_button page-item active"><a href="#"
                                        aria-controls="kt_subscriptions_table" data-dt-idx="1" tabindex="0"
                                        class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="kt_subscriptions_table" data-dt-idx="2" tabindex="0"
                                        class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="kt_subscriptions_table_next"><a
                                        href="#" aria-controls="kt_subscriptions_table" data-dt-idx="3" tabindex="0"
                                        class="page-link"><i class="next"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex " data-kt-subscription-table-toolbar="base">
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
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px p-5" data-kt-menu="true">
                                <!--begin::Header-->
                                <div class="px-7">
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
                                        <label class="form-label fs-6 fw-semibold">Month:</label>
                                        <select name="business_type" formcontrolname="natureOfBussiness"
                                            data-control="select2" data-placeholder="Select..." data-allow-clear="true"
                                            data-hide-search="true"
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
                                        <select name="business_type" formcontrolname="natureOfBussiness"
                                            data-control="select2" data-placeholder="Select..." data-allow-clear="true"
                                            data-hide-search="true"
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
                                        <select name="business_type" formcontrolname="natureOfBussiness"
                                            data-control="select2" data-placeholder="Select..." data-allow-clear="true"
                                            data-hide-search="true"
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
                                        <select name="business_type" formcontrolname="natureOfBussiness"
                                            data-control="select2" data-placeholder="Select..." data-allow-clear="true"
                                            data-hide-search="true"
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

                            <!--end::Export-->
                            <!--begin::Add subscription-->


                            <!--end::Add subscription-->
                        </div>
                    </div>
                </div>

                <div id="kt_subscriptions_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                            id="kt_subscriptions_table">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0 ">
                                    <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="" style="width: 27.6px;">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_subscriptions_table .form-check-input"
                                                value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Customer: activate to sort column ascending" style="width: 125px;">
                                        Customer</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Status: activate to sort column ascending" style="width: 125px;">
                                        Status</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Billing: activate to sort column ascending" style="width: 125px;">
                                        Billing</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Product: activate to sort column ascending" style="width: 125px;">
                                        Product</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Created Date: activate to sort column ascending"
                                        style="width: 125px;">Created Date</th>
                                    <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Actions" style="width: 72.125px;">Actions</th>
                                </tr>

                            </thead>

                            <tbody class="text-gray-600 fw-semibold">




















                                <tr class="odd">

                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>

                                    <td>
                                        <a>Suman
                                        </a>
                                    </td>

                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>

                                    <td>
                                        <div class="badge badge-light">Auto-debit</div>
                                    </td>

                                    <td>Basic</td>

                                    <td data-order="2022-01-25T00:00:00+05:30">Oct 25, 2022</td>

                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>

                                        </a>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">

                                            <div class="menu-item px-3">
                                                <a href="{{ url('viewtransaction') }}" class="menu-link px-3">View</a>
                                            </div>

                                            <div class="menu-item px-3">
                                                <a href="{{ url('edittransaction') }}" class="menu-link px-3">Edit</a>
                                            </div>

                                            <div class="menu-item px-3">
                                                <a href="#" data-kt-subscriptions-table-filter="delete_row"
                                                    class="menu-link px-3">Delete</a>
                                            </div>

                                        </div>

                                    </td>


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
                                        <a id="kt_drawer_row2_button">Suresh

                                        </a>
                                    </td>
                                    <!--end::Customer=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Billing=-->
                                    <td>
                                        <div class="badge badge-light">Auto-debit</div>
                                    </td>
                                    <!--end::Billing=-->
                                    <!--begin::Product=-->
                                    <td>Basic</td>
                                    <!--end::Product=-->
                                    <!--begin::Date=-->
                                    <td data-order="2022-01-25T00:00:00+05:30">Oct 25, 2022</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url('viewtransaction') }}" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url('edittransaction') }}" class="menu-link px-3">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" data-kt-subscriptions-table-filter="delete_row"
                                                    class="menu-link px-3">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>


                                    <div id="kt_drawer_row2" class="bg-white drawer drawer-end" data-kt-drawer="true"
                                        data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_drawer_row2_button"
                                        data-kt-drawer-close="#kt_drawer_row2_close" data-kt-drawer-width="700px"
                                        style="width: 700px !important;">
                                        <!--begin::Card-->
                                        <div class="card w-100 rounded-0">
                                            <!--begin::Card header-->
                                            <div class="card-header pe-5">
                                                <!--begin::Title-->
                                                <div class="card-title">
                                                    <!--begin::User-->
                                                    <div class="d-flex justify-content-center flex-column me-3">
                                                        <a href="#"
                                                            class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">Example
                                                            Basic</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Close-->
                                                    <div class="btn btn-sm btn-icon btn-active-light-primary"
                                                        id="kt_drawer_row2_close">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="6" y="17.3137"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)" fill="currentColor">
                                                                </rect>
                                                                <rect x="7.41422" y="6" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)" fill="currentColor">
                                                                </rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="d-flex overflow-auto h-55px px-lg-4">
                                                <ul
                                                    class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-semibold flex-nowrap">
                                                    <!--begin::Nav item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 active"
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/folders.html">Order</a>
                                                    </li>
                                                    <!--end::Nav item-->
                                                    <!--begin::Nav item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Transaction</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Invoice</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Document</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Contact</a>
                                                    </li>
                                                    <!--end::Nav item-->
                                                </ul>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
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
                                        <a id="kt_drawer_row3_button">EmmaSmith

                                        </a>
                                    </td>
                                    <!--end::Customer=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Billing=-->
                                    <td>
                                        <div class="badge badge-light">Auto-debit</div>
                                    </td>
                                    <!--end::Billing=-->
                                    <!--begin::Product=-->
                                    <td>Basic</td>
                                    <!--end::Product=-->
                                    <!--begin::Date=-->
                                    <td data-order="2022-01-25T00:00:00+05:30">Oct 25, 2022</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url('viewtransaction') }}" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url('edittransaction') }}" class="menu-link px-3">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" data-kt-subscriptions-table-filter="delete_row"
                                                    class="menu-link px-3">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>


                                    <div id="kt_drawer_row3" class="bg-white drawer drawer-end" data-kt-drawer="true"
                                        data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_drawer_row3_button"
                                        data-kt-drawer-close="#kt_drawer_row3_close" data-kt-drawer-width="700px"
                                        style="width: 700px !important;">
                                        <!--begin::Card-->
                                        <div class="card w-100 rounded-0">
                                            <!--begin::Card header-->
                                            <div class="card-header pe-5">
                                                <!--begin::Title-->
                                                <div class="card-title">
                                                    <!--begin::User-->
                                                    <div class="d-flex justify-content-center flex-column me-3">
                                                        <a href="#"
                                                            class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">Example
                                                            Basic</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Close-->
                                                    <div class="btn btn-sm btn-icon btn-active-light-primary"
                                                        id="kt_drawer_row3_close">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="6" y="17.3137"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)" fill="currentColor">
                                                                </rect>
                                                                <rect x="7.41422" y="6" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)" fill="currentColor">
                                                                </rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="d-flex overflow-auto h-55px px-lg-4">
                                                <ul
                                                    class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-semibold flex-nowrap">
                                                    <!--begin::Nav item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 active"
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/folders.html">Order</a>
                                                    </li>
                                                    <!--end::Nav item-->
                                                    <!--begin::Nav item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Transaction</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Invoice</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Document</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Contact</a>
                                                    </li>
                                                    <!--end::Nav item-->
                                                </ul>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
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
                                        <a id="kt_drawer_row4_button">EmmaSmith

                                        </a>
                                    </td>
                                    <!--end::Customer=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Billing=-->
                                    <td>
                                        <div class="badge badge-light">Auto-debit</div>
                                    </td>
                                    <!--end::Billing=-->
                                    <!--begin::Product=-->
                                    <td>Basic</td>
                                    <!--end::Product=-->
                                    <!--begin::Date=-->
                                    <td data-order="2022-01-25T00:00:00+05:30">Oct 25, 2022</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url('viewtransaction') }}" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url('edittransaction') }}" class="menu-link px-3">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" data-kt-subscriptions-table-filter="delete_row"
                                                    class="menu-link px-3">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>


                                    <div id="kt_drawer_row4" class="bg-white drawer drawer-end" data-kt-drawer="true"
                                        data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_drawer_row4_button"
                                        data-kt-drawer-close="#kt_drawer_row4_close" data-kt-drawer-width="700px"
                                        style="width: 700px !important;">
                                        <!--begin::Card-->
                                        <div class="card w-100 rounded-0">
                                            <!--begin::Card header-->
                                            <div class="card-header pe-5">
                                                <!--begin::Title-->
                                                <div class="card-title">
                                                    <!--begin::User-->
                                                    <div class="d-flex justify-content-center flex-column me-3">
                                                        <a href="#"
                                                            class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">Example
                                                            Basic</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Close-->
                                                    <div class="btn btn-sm btn-icon btn-active-light-primary"
                                                        id="kt_drawer_row4_close">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="6" y="17.3137"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)" fill="currentColor">
                                                                </rect>
                                                                <rect x="7.41422" y="6" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)" fill="currentColor">
                                                                </rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="d-flex overflow-auto h-55px px-lg-4">
                                                <ul
                                                    class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-semibold flex-nowrap">
                                                    <!--begin::Nav item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 active"
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/folders.html">Order</a>
                                                    </li>
                                                    <!--end::Nav item-->
                                                    <!--begin::Nav item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Transaction</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Invoice</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Document</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary me-6 "
                                                            href="/metronic8/demo1/../demo1/apps/file-manager/settings.html">Contact</a>
                                                    </li>
                                                    <!--end::Nav item-->
                                                </ul>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Action=-->
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
                <div class="d-flex  justify-content-center mt-2">
                        <div class="d-flex ">
                            <div>
                                <ul class="nav" id="kt_chart_widget_8_tabs" role="tablist">

                                    <li class="nav-item" role="presentation">
                                        <div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_sales_table_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="kt_ecommerce_sales_table_previous"><a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a>
                                                </li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="kt_ecommerce_sales_table_next"><a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="6" tabindex="0" class="page-link"><i class="next"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </div>


                    </div>

            </div>



        </div>

    </div>
@endsection
