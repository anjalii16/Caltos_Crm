@extends('layout/theme')
@section('content')

    <div id="kt_app_content_container" class="app-container container-xxl">

        <div class="card" style="margin-top:10px;">

            <div class="card-header border-0 pt-6">


                <div class="card-title">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-1">Invoice List</span>
                </h3>
                </div>

                <div class="card-toolbar">


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
                                <!--begin::Action-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset"
                                        class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                        data-kt-menu-dismiss="true"
                                        data-kt-subscription-table-filter="reset">Reset</button>
                                    <button type="submit" class="btn btn-primary fw-semibold px-6"
                                        data-kt-menu-dismiss="true"
                                        data-kt-subscription-table-filter="filter">Apply</button>
                                </div>

                            </div>

                        </div>

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


                        <a href="{{url('createinvoice')}}" class="btn btn-primary">
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
                           Add Invoice
                        </a>

                    </div>

                    <div class="d-flex justify-content-end align-items-center d-none"
                        data-kt-subscription-table-toolbar="selected">
                        <div class="fw-bold me-5">
                            <span class="me-2" data-kt-subscription-table-select="selected_count"></span>Selected
                        </div>
                        <button type="button" class="btn btn-danger"
                            data-kt-subscription-table-select="delete_selected">Delete Selected</button>
                    </div>
                    <!--end::Group Action-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <div class="card card-flush mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
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
                        <!--end::Card title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Tab nav-->
                            <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs nav-line-tabs-2x border-transparent"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_year_tab" class="nav-link text-active-primary"
                                        data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1"
                                        aria-selected="false" tabindex="-1">This Year</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3"
                                        data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_2"
                                        aria-selected="false" tabindex="-1">2020</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3"
                                        data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_3"
                                        aria-selected="false" tabindex="-1">2019</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3 active"
                                        data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_4"
                                        aria-selected="true">2018</a>
                                </li>
                            </ul>
                            <!--end::Tab nav-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-2">
                        <!--begin::Tab Content-->
                        <div id="kt_referred_users_tab_content" class="tab-content">
                            <!--begin::Tab panel-->
                            <div id="kt_customer_details_invoices_1" class="tab-pane fade" role="tabpanel"
                                aria-labelledby="#kt_referrals_year_tab">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_customer_details_invoices_table_1"
                                        class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                        <!--begin::Thead-->
                                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                            <tr class="text-start text-gray-400">
                                                <th class="min-w-100px">Order</th>
                                                <th class="min-w-100px">Name</th>
                                                <th class="min-w-100px">Status</th>
                                                <th class="min-w-125px">Date</th>
                                                <th class="w-100px">Invoice</th>
                                                <th class="w-100px">Action</th>
                                                <th class="text-end"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary">523445943</a>
                                                </td>
                                                <td class="text-danger"><a id="kt_drawer_example_basic_button"
                                                        class="">Harish

                                                    </a></td>
                                                <td>
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td>May 30, 2020</td>
                                                <td class="">
                                                    <button
                                                        class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-light btn-active-light-primary btn-sm"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Action
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->

                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('viewinvoice') }}"
                                                                class="menu-link px-3">View</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('editinvoice') }}"
                                                                class="menu-link px-3">Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Delete</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Share</a>
                                                        </div>

                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>

                                                <td class="text-end">
                                                    <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                                        <!--begin::Item-->
                                                        <div class="">
                                                            <!--begin::Header-->
                                                            <div class="accordion-header d-flex" data-bs-toggle="collapse"
                                                                data-bs-target="#kt_thisyear">
                                                                <span class="accordion-icon"><span
                                                                        class="svg-icon svg-icon-4">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                            data-kt-docs-datatable-subtable="expand_row"
                                                                            aria-hidden="true">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect opacity="0.5" x="11"
                                                                                        y="18" width="12"
                                                                                        height="2" rx="1"
                                                                                        transform="rotate(-90 11 18)"
                                                                                        fill="currentColor" />
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </button>
                                                                    </span></span>

                                                            </div>
                                                            <!--end::Header-->

                                                            <!--begin::Body-->

                                                            <!--end::Body-->
                                                        </div>
                                                </td>
                                                <!--end::Actions-->









                                            <tr id="kt_thisyear" class="fs-6 collapse " data-bs-parent="#kt_accordion_2">
                                                <td colspan="2">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <a href="#"
                                                            class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                            <img src="/assets/product.gif" alt=""
                                                                data-kt-docs-datatable-subtable="template_image">
                                                        </a>
                                                        <div class="d-flex flex-column text-muted">
                                                            <a href="#" class="text-dark text-hover-primary fw-bold"
                                                                data-kt-docs-datatable-subtable="template_name">Dry-fit
                                                                Sports T-shirt</a>
                                                            <div class="fs-7"
                                                                data-kt-docs-datatable-subtable="template_description">
                                                                Comfortable sportswear for
                                                                everyday use.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Cost</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_cost">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Qty</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_qty">
                                                        1
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Total</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_total">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7 me-3">On hand
                                                    </div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_stock">
                                                        <div class="badge badge-light-success">
                                                            In Stock</div>
                                                    </div>
                                                </td>
                                                <td></td>


                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary">523445943</a>
                                                </td>
                                                <td class="text-danger"><a id="kt_drawer_example_basic_button"
                                                        class="">EmmaSmith

                                                    </a></td>
                                                <td>
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td>May 30, 2020</td>
                                                <td class="">
                                                    <button
                                                        class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-light btn-active-light-primary btn-sm"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Action
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->

                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('viewinvoice') }}"
                                                                class="menu-link px-3">View</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('editinvoice') }}"
                                                                class="menu-link px-3">Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Delete</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Share</a>
                                                        </div>

                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>

                                                <td class="text-end">
                                                    <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                                        <!--begin::Item-->
                                                        <div class="">
                                                            <!--begin::Header-->
                                                            <div class="accordion-header d-flex" data-bs-toggle="collapse"
                                                                data-bs-target="#kt_thisyear_2">
                                                                <span class="accordion-icon"><span
                                                                        class="svg-icon svg-icon-4">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                            data-kt-docs-datatable-subtable="expand_row"
                                                                            aria-hidden="true">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect opacity="0.5" x="11"
                                                                                        y="18" width="12"
                                                                                        height="2" rx="1"
                                                                                        transform="rotate(-90 11 18)"
                                                                                        fill="currentColor" />
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </button>
                                                                    </span></span>

                                                            </div>
                                                            <!--end::Header-->

                                                            <!--begin::Body-->

                                                            <!--end::Body-->
                                                        </div>
                                                </td>
                                                <!--end::Actions-->









                                            <tr id="kt_thisyear_2" class="fs-6 collapse "
                                                data-bs-parent="#kt_accordion_2">
                                                <td colspan="2">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <a href="#"
                                                            class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                            <img src="/assets/product.gif" alt=""
                                                                data-kt-docs-datatable-subtable="template_image">
                                                        </a>
                                                        <div class="d-flex flex-column text-muted">
                                                            <a href="#" class="text-dark text-hover-primary fw-bold"
                                                                data-kt-docs-datatable-subtable="template_name">Dry-fit
                                                                Sports T-shirt</a>
                                                            <div class="fs-7"
                                                                data-kt-docs-datatable-subtable="template_description">
                                                                Comfortable sportswear for
                                                                everyday use.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Cost</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_cost">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Qty</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_qty">
                                                        1
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Total</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_total">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7 me-3">On hand
                                                    </div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_stock">
                                                        <div class="badge badge-light-success">
                                                            In Stock</div>
                                                    </div>
                                                </td>
                                                <td></td>



                                            </tr>
                                            <div id="kt_drawer_example_basic" class="bg-white drawer drawer-end"
                                                data-kt-drawer="true" data-kt-drawer-activate="true"
                                                data-kt-drawer-toggle="#kt_drawer_example_basic_button"
                                                data-kt-drawer-close="#kt_drawer_example_basic_close"
                                                data-kt-drawer-width="700px" style="width: 700px !important;">
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
                                                                id="kt_drawer_example_basic_close">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="6"
                                                                            y="17.3137" width="16" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="7.41422" y="6"
                                                                            width="16" height="2" rx="1"
                                                                            transform="rotate(45 7.41422 6)"
                                                                            fill="currentColor"></rect>
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
                                            </tr>
                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div id="kt_customer_details_invoices_2" class="tab-pane fade" role="tabpanel"
                                aria-labelledby="#kt_referrals_2019_tab">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_customer_details_invoices_table_2"
                                        class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                        <!--begin::Thead-->
                                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                            <tr class="text-start text-gray-400">
                                                <th class="min-w-100px">Order ID</th>
                                                <th class="min-w-100px">Name</th>
                                                <th class="min-w-100px">Status</th>
                                                <th class="min-w-125px">Date</th>
                                                <th class="w-100px">Invoice</th>
                                                <th class="w-100px">Action</th>
                                            </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary">523445943</a>
                                                </td>
                                                <td class="text-danger"><a id="kt_drawer_example_basic_button"
                                                        class="">EmmaSmith

                                                    </a></td>
                                                <td>
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td>May 30, 2020</td>
                                                <td class="">
                                                    <button
                                                        class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-light btn-active-light-primary btn-sm"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Action
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->

                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('viewinvoice') }}"
                                                                class="menu-link px-3">View</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('editinvoice') }}"
                                                                class="menu-link px-3">Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Delete</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Share</a>
                                                        </div>

                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>

                                                <td class="text-end">
                                                    <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                                        <!--begin::Item-->
                                                        <div class="">
                                                            <!--begin::Header-->
                                                            <div class="accordion-header d-flex" data-bs-toggle="collapse"
                                                                data-bs-target="#kt_2020">
                                                                <span class="accordion-icon"><span
                                                                        class="svg-icon svg-icon-4">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                            data-kt-docs-datatable-subtable="expand_row"
                                                                            aria-hidden="true">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect opacity="0.5" x="11"
                                                                                        y="18" width="12"
                                                                                        height="2" rx="1"
                                                                                        transform="rotate(-90 11 18)"
                                                                                        fill="currentColor" />
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </button>
                                                                    </span></span>

                                                            </div>
                                                            <!--end::Header-->

                                                            <!--begin::Body-->

                                                            <!--end::Body-->
                                                        </div>
                                                </td>
                                                <!--end::Actions-->









                                            <tr id="kt_2020" class="fs-6 collapse " data-bs-parent="#kt_accordion_2">
                                                <td colspan="2">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <a href="#"
                                                            class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                            <img src="/assets/product.gif" alt=""
                                                                data-kt-docs-datatable-subtable="template_image">
                                                        </a>
                                                        <div class="d-flex flex-column text-muted">
                                                            <a href="#" class="text-dark text-hover-primary fw-bold"
                                                                data-kt-docs-datatable-subtable="template_name">Dry-fit
                                                                Sports T-shirt</a>
                                                            <div class="fs-7"
                                                                data-kt-docs-datatable-subtable="template_description">
                                                                Comfortable sportswear for
                                                                everyday use.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Cost</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_cost">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Qty</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_qty">
                                                        1
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Total</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_total">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7 me-3">On hand
                                                    </div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_stock">
                                                        <div class="badge badge-light-success">
                                                            In Stock</div>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary">523445943</a>
                                                </td>
                                                <td class="text-danger"><a id="kt_drawer_example_basic_button"
                                                        class="">Raman

                                                    </a></td>
                                                <td>
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td>May 30, 2020</td>
                                                <td class="">
                                                    <button
                                                        class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-light btn-active-light-primary btn-sm"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Action
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->

                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('viewinvoice') }}"
                                                                class="menu-link px-3">View</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('editinvoice') }}"
                                                                class="menu-link px-3">Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Delete</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Share</a>
                                                        </div>

                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>

                                                <td class="text-end">
                                                    <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                                        <!--begin::Item-->
                                                        <div class="">
                                                            <!--begin::Header-->
                                                            <div class="accordion-header d-flex" data-bs-toggle="collapse"
                                                                data-bs-target="#kt_2020_2">
                                                                <span class="accordion-icon"><span
                                                                        class="svg-icon svg-icon-4">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                            data-kt-docs-datatable-subtable="expand_row"
                                                                            aria-hidden="true">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect opacity="0.5" x="11"
                                                                                        y="18" width="12"
                                                                                        height="2" rx="1"
                                                                                        transform="rotate(-90 11 18)"
                                                                                        fill="currentColor" />
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </button>
                                                                    </span></span>

                                                            </div>
                                                            <!--end::Header-->

                                                            <!--begin::Body-->

                                                            <!--end::Body-->
                                                        </div>
                                                </td>
                                                <!--end::Actions-->









                                            <tr id="kt_2020_2" class="fs-6 collapse " data-bs-parent="#kt_accordion_2">
                                                <td colspan="2">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <a href="#"
                                                            class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                            <img src="/assets/product.gif" alt=""
                                                                data-kt-docs-datatable-subtable="template_image">
                                                        </a>
                                                        <div class="d-flex flex-column text-muted">
                                                            <a href="#" class="text-dark text-hover-primary fw-bold"
                                                                data-kt-docs-datatable-subtable="template_name">Dry-fit
                                                                Sports T-shirt</a>
                                                            <div class="fs-7"
                                                                data-kt-docs-datatable-subtable="template_description">
                                                                Comfortable sportswear for
                                                                everyday use.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Cost</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_cost">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Qty</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_qty">
                                                        1
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Total</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_total">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7 me-3">On hand
                                                    </div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_stock">
                                                        <div class="badge badge-light-success">
                                                            In Stock</div>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <div id="kt_drawer_example_basic" class="bg-white drawer drawer-end"
                                                data-kt-drawer="true" data-kt-drawer-activate="true"
                                                data-kt-drawer-toggle="#kt_drawer_example_basic_button"
                                                data-kt-drawer-close="#kt_drawer_example_basic_close"
                                                data-kt-drawer-width="700px" style="width: 700px !important;">
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
                                                                id="kt_drawer_example_basic_close">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="6"
                                                                            y="17.3137" width="16" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="7.41422" y="6"
                                                                            width="16" height="2" rx="1"
                                                                            transform="rotate(45 7.41422 6)"
                                                                            fill="currentColor"></rect>
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
                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div id="kt_customer_details_invoices_3" class="tab-pane fade" role="tabpanel"
                                aria-labelledby="#kt_referrals_2018_tab">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_customer_details_invoices_table_3"
                                        class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                        <!--begin::Thead-->
                                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                            <tr class="text-start text-gray-400">
                                                <th class="min-w-100px">Order ID</th>
                                                <th class="min-w-100px">Name</th>
                                                <th class="min-w-100px">Status</th>
                                                <th class="min-w-125px">Date</th>
                                                <th class="w-100px">Invoice</th>
                                                <th class="w-100px">Action</th>
                                                <th class="w-100px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody class="fs-6 fw-semibold text-gray-600">

                                            <tr>
                                                <td>
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary">523445943</a>
                                                </td>
                                                <td class="text-danger"><a id="kt_drawer_example_basic_button"
                                                        class="">Mohit

                                                    </a></td>
                                                <td>
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td>May 30, 2020</td>
                                                <td class="">
                                                    <button
                                                        class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-light btn-active-light-primary btn-sm"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Action
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->

                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('viewinvoice') }}"
                                                                class="menu-link px-3">View</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('editinvoice') }}"
                                                                class="menu-link px-3">Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Delete</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Share</a>
                                                        </div>

                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>

                                                <td class="text-end">
                                                    <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                                        <!--begin::Item-->
                                                        <div class="">
                                                            <!--begin::Header-->
                                                            <div class="accordion-header d-flex" data-bs-toggle="collapse"
                                                                data-bs-target="#kt_2019">
                                                                <span class="accordion-icon"><span
                                                                        class="svg-icon svg-icon-4">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                            data-kt-docs-datatable-subtable="expand_row"
                                                                            aria-hidden="true">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect opacity="0.5" x="11"
                                                                                        y="18" width="12"
                                                                                        height="2" rx="1"
                                                                                        transform="rotate(-90 11 18)"
                                                                                        fill="currentColor" />
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </button>
                                                                    </span></span>

                                                            </div>
                                                            <!--end::Header-->

                                                            <!--begin::Body-->

                                                            <!--end::Body-->
                                                        </div>
                                                </td>
                                                <!--end::Actions-->









                                            <tr id="kt_2019" class="fs-6 collapse " data-bs-parent="#kt_accordion_2">
                                                <td colspan="2">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <a href="#"
                                                            class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                            <img src="/assets/product.gif" alt=""
                                                                data-kt-docs-datatable-subtable="template_image">
                                                        </a>
                                                        <div class="d-flex flex-column text-muted">
                                                            <a href="#" class="text-dark text-hover-primary fw-bold"
                                                                data-kt-docs-datatable-subtable="template_name">Dry-fit
                                                                Sports T-shirt</a>
                                                            <div class="fs-7"
                                                                data-kt-docs-datatable-subtable="template_description">
                                                                Comfortable sportswear for
                                                                everyday use.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Cost</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_cost">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Qty</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_qty">
                                                        1
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Total</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_total">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7 me-3">On hand
                                                    </div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_stock">
                                                        <div class="badge badge-light-success">
                                                            In Stock</div>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary">523445943</a>
                                                </td>
                                                <td class="text-danger"><a id="kt_drawer_example_basic_button"
                                                        class="">Raman

                                                    </a></td>
                                                <td>
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td>May 30, 2020</td>
                                                <td class="">
                                                    <button
                                                        class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-light btn-active-light-primary btn-sm"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Action
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->

                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('viewinvoice') }}"
                                                                class="menu-link px-3">View</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('editinvoice') }}"
                                                                class="menu-link px-3">Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Delete</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Share</a>
                                                        </div>

                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>

                                                <td class="text-end">
                                                    <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                                        <!--begin::Item-->
                                                        <div class="">
                                                            <!--begin::Header-->
                                                            <div class="accordion-header d-flex" data-bs-toggle="collapse"
                                                                data-bs-target="#kt_2019_2">
                                                                <span class="accordion-icon"><span
                                                                        class="svg-icon svg-icon-4">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                            data-kt-docs-datatable-subtable="expand_row"
                                                                            aria-hidden="true">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect opacity="0.5" x="11"
                                                                                        y="18" width="12"
                                                                                        height="2" rx="1"
                                                                                        transform="rotate(-90 11 18)"
                                                                                        fill="currentColor" />
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </button>
                                                                    </span></span>

                                                            </div>
                                                            <!--end::Header-->

                                                            <!--begin::Body-->

                                                            <!--end::Body-->
                                                        </div>
                                                </td>
                                                <!--end::Actions-->









                                            <tr id="kt_2019_2" class="fs-6 collapse " data-bs-parent="#kt_accordion_2">
                                                <td colspan="2">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <a href="#"
                                                            class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                            <img src="/assets/product.gif" alt=""
                                                                data-kt-docs-datatable-subtable="template_image">
                                                        </a>
                                                        <div class="d-flex flex-column text-muted">
                                                            <a href="#" class="text-dark text-hover-primary fw-bold"
                                                                data-kt-docs-datatable-subtable="template_name">Dry-fit
                                                                Sports T-shirt</a>
                                                            <div class="fs-7"
                                                                data-kt-docs-datatable-subtable="template_description">
                                                                Comfortable sportswear for
                                                                everyday use.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Cost</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_cost">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Qty</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_qty">
                                                        1
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Total</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_total">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7 me-3">On hand
                                                    </div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_stock">
                                                        <div class="badge badge-light-success">
                                                            In Stock</div>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>


                                            <div id="kt_drawer_example_basic" class="bg-white drawer drawer-end"
                                                data-kt-drawer="true" data-kt-drawer-activate="true"
                                                data-kt-drawer-toggle="#kt_drawer_example_basic_button"
                                                data-kt-drawer-close="#kt_drawer_example_basic_close"
                                                data-kt-drawer-width="700px" style="width: 700px !important;">
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
                                                                id="kt_drawer_example_basic_close">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="6"
                                                                            y="17.3137" width="16"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="7.41422" y="6"
                                                                            width="16" height="2"
                                                                            rx="1"
                                                                            transform="rotate(45 7.41422 6)"
                                                                            fill="currentColor"></rect>
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

                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div id="kt_customer_details_invoices_4" class="tab-pane fade active show" role="tabpanel"
                                aria-labelledby="#kt_referrals_2017_tab">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_customer_details_invoices_table_4"
                                        class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                        <!--begin::Thead-->
                                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                            <tr class="text-start text-gray-400">
                                                <th class="min-w-100px">Order ID</th>
                                                <th class="min-w-100px">Name</th>
                                                <th class="min-w-100px">Status</th>
                                                <th class="min-w-125px">Date</th>
                                                <th class="w-100px">Invoice</th>
                                                <th class="w-100px">Action</th>
                                            </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary">523445943</a>
                                                </td>
                                                <td class="text-danger"><a id="kt_drawer_example_basic_button"
                                                        class="">Priti

                                                    </a></td>
                                                <td>
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td>May 30, 2020</td>
                                                <td class="">
                                                    <button
                                                        class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-light btn-active-light-primary btn-sm"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Action
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->

                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('viewinvoice') }}"
                                                                class="menu-link px-3">View</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('editinvoice') }}"
                                                                class="menu-link px-3">Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Delete</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Share</a>
                                                        </div>

                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>

                                                <td class="text-end">
                                                    <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                                        <!--begin::Item-->
                                                        <div class="">
                                                            <!--begin::Header-->
                                                            <div class="accordion-header d-flex"
                                                                data-bs-toggle="collapse" data-bs-target="#kt_2018">
                                                                <span class="accordion-icon"><span
                                                                        class="svg-icon svg-icon-4">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                            data-kt-docs-datatable-subtable="expand_row"
                                                                            aria-hidden="true">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect opacity="0.5" x="11"
                                                                                        y="18" width="12"
                                                                                        height="2" rx="1"
                                                                                        transform="rotate(-90 11 18)"
                                                                                        fill="currentColor" />
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </button>
                                                                    </span></span>

                                                            </div>
                                                            <!--end::Header-->

                                                            <!--begin::Body-->

                                                            <!--end::Body-->
                                                        </div>
                                                </td>
                                                <!--end::Actions-->









                                            <tr id="kt_2018" class="fs-6 collapse "
                                                data-bs-parent="#kt_accordion_2">
                                                <td colspan="2">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <a href="#"
                                                            class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                            <img src="/assets/product.gif" alt=""
                                                                data-kt-docs-datatable-subtable="template_image">
                                                        </a>
                                                        <div class="d-flex flex-column text-muted">
                                                            <a href="#"
                                                                class="text-dark text-hover-primary fw-bold"
                                                                data-kt-docs-datatable-subtable="template_name">Dry-fit
                                                                Sports T-shirt</a>
                                                            <div class="fs-7"
                                                                data-kt-docs-datatable-subtable="template_description">
                                                                Comfortable sportswear for
                                                                everyday use.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Cost</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_cost">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Qty</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_qty">
                                                        1
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Total</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_total">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7 me-3">On hand
                                                    </div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_stock">
                                                        <div class="badge badge-light-success">
                                                            In Stock</div>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary">523445943</a>
                                                </td>
                                                <td class="text-danger"><a id="kt_drawer_example_basic_button"
                                                        class="">Hari

                                                    </a></td>
                                                <td>
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td>May 30, 2020</td>
                                                <td class="">
                                                    <button
                                                        class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-light btn-active-light-primary btn-sm"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Action
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->

                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('viewinvoice') }}"
                                                                class="menu-link px-3">View</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('editinvoice') }}"
                                                                class="menu-link px-3">Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Delete</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                data-kt-subscriptions-table-filter="delete_row"
                                                                class="menu-link px-3">Share</a>
                                                        </div>

                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>

                                                <td class="text-end">
                                                    <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                                        <!--begin::Item-->
                                                        <div class="">
                                                            <!--begin::Header-->
                                                            <div class="accordion-header d-flex"
                                                                data-bs-toggle="collapse" data-bs-target="#kt_2018_2">
                                                                <span class="accordion-icon"><span
                                                                        class="svg-icon svg-icon-4">
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                            data-kt-docs-datatable-subtable="expand_row"
                                                                            aria-hidden="true">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect opacity="0.5" x="11"
                                                                                        y="18" width="12"
                                                                                        height="2" rx="1"
                                                                                        transform="rotate(-90 11 18)"
                                                                                        fill="currentColor" />
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect x="6" y="11"
                                                                                        width="12" height="2"
                                                                                        rx="1"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </button>
                                                                    </span></span>

                                                            </div>
                                                            <!--end::Header-->

                                                            <!--begin::Body-->

                                                            <!--end::Body-->
                                                        </div>
                                                </td>
                                                <!--end::Actions-->









                                            <tr id="kt_2018_2" class="fs-6 collapse "
                                                data-bs-parent="#kt_accordion_2">
                                                <td colspan="2">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <a href="#"
                                                            class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                            <img src="/assets/product.gif" alt=""
                                                                data-kt-docs-datatable-subtable="template_image">
                                                        </a>
                                                        <div class="d-flex flex-column text-muted">
                                                            <a href="#"
                                                                class="text-dark text-hover-primary fw-bold"
                                                                data-kt-docs-datatable-subtable="template_name">Dry-fit
                                                                Sports T-shirt</a>
                                                            <div class="fs-7"
                                                                data-kt-docs-datatable-subtable="template_description">
                                                                Comfortable sportswear for
                                                                everyday use.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Cost</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_cost">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Qty</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_qty">
                                                        1
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7">Total</div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_total">
                                                        89.00</div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="text-dark fs-7 me-3">On hand
                                                    </div>
                                                    <div class="text-muted fs-7 fw-bold"
                                                        data-kt-docs-datatable-subtable="template_stock">
                                                        <div class="badge badge-light-success">
                                                            In Stock</div>
                                                    </div>
                                                </td>
                                                <td></td>

                                            </tr>
                                            <div id="kt_drawer_example_basic" class="bg-white drawer drawer-end"
                                                data-kt-drawer="true" data-kt-drawer-activate="true"
                                                data-kt-drawer-toggle="#kt_drawer_example_basic_button"
                                                data-kt-drawer-close="#kt_drawer_example_basic_close"
                                                data-kt-drawer-width="700px" style="width: 700px !important;">
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
                                                                id="kt_drawer_example_basic_close">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="6"
                                                                            y="17.3137" width="16"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="7.41422" y="6"
                                                                            width="16" height="2"
                                                                            rx="1"
                                                                            transform="rotate(45 7.41422 6)"
                                                                            fill="currentColor"></rect>
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
                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Tab panel-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                   <div class=".align-items-sm-start justify-content-sm-start">
                    <div>

                        <div class="dataTables_paginate paging_simple_numbers" id="kt_subscriptions_table_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="kt_subscriptions_table_previous">
                                    <a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a>
                                </li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="kt_subscriptions_table_next"><a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                </div>
                <!--end::Table-->
            </div>

        </div>


    </div>

@endsection
