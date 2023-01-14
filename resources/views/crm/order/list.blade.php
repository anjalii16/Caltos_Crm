@extends('layout/theme')
@section('content')
    <div class="card">
        <div style=" max-width:1200px;">
            <div class="content">

                <div class="card-header">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark fs-1">Order List</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="{{url('order/add')}}" class="btn btn-primary">Add Order</a>

                    </div>
                </div>

                <div class="card-body">



                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                                       <div class="d-flex align-items-center position-relative me-2">
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-1 position-absolute ms-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" data-kt-ecommerce-category-filter="search" class="form-control  w-250px ps-14" placeholder="Search Order">
												</div>

                        </div>
                        <div class="d-flex">
                            <div>
                                 <div class="me-2" data-select2-id="select2-data-122-p6ul">
                                    <!--begin::Select2-->
                                    <select class="form-select " data-control="select2"
                                        data-placeholder="Status">

                                        <option value="all" data-select2-id="select2-data-128-6yua">All plans
                                        </option>
                                        <option value="Cancelled" data-select2-id="select2-data-129-40pg">
                                            Cancelled</option>
                                        <option value="Completed" data-select2-id="select2-data-130-qfl8">
                                            Completed</option>
                                        <option value="Denied" data-select2-id="select2-data-131-88ag">
                                            Denied
                                        </option>
                                        <option value="Expired" data-select2-id="select2-data-132-mtd1">
                                            Expired</option>
                                        <option value="Failed" data-select2-id="select2-data-133-eswh">
                                            Failed
                                        </option>
                                        <option value="Pending" data-select2-id="select2-data-134-49eh">
                                            Pending</option>
                                        <option value="Processing" data-select2-id="select2-data-135-ajql">
                                            Processing
                                        </option>
                                        <option value="Refunded" data-select2-id="select2-data-136-rrg7">
                                            Refunded</option>
                                        <option value="Delivered" data-select2-id="select2-data-137-6uyq">
                                            Delivered</option>
                                        <option value="Delivering" data-select2-id="select2-data-138-tb0v">
                                            Delivering
                                        </option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                            </div>
                            <div>
                                   <div class="input-group">
                                    <input class="form-control  rounded rounded-end-0 flatpickr-input"
                                        class="form-control  fw-bold pe-5 flatpickr-input"
                                        placeholder="Select date & Time" name="invoice_due_date" type="text"
                                        readonly="readonly" id="kt_datepicker_3">
                                    <button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1"
                                                    transform="rotate(-45 7.05025 15.5356)" fill="currentColor">
                                                </rect>
                                                <rect x="8.46447" y="7.05029" width="12" height="2" rx="1"
                                                    transform="rotate(45 8.46447 7.05029)" fill="currentColor">
                                                </rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>


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
                            </div>

                        </div>

                    </div>



                    <!--begin::Table-->
                    <div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">
                            <div class="container">
                                <div id="kt_content_container" class=" row ">
                                    <div class="card">


                                        <div>
                                            <table class="table align-middle table-row-dashed fs-6 gy-4"
                                                id="kt_docs_datatable_subtable">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-100px">Order ID</th>
                                                        <th class="text-end min-w-100px">Created</th>
                                                        <th class="text-end min-w-150px">Customer</th>
                                                        <th class="text-end min-w-100px">Total</th>
                                                        <th class="text-end min-w-100px">Profit</th>
                                                        <th class="text-end min-w-50px">Status</th>
                                                        <th class="text-end min-w-100px sorting_disabled" rowspan="1"
                                                            colspan="1" aria-label="Actions"
                                                            style="width: 132.925px;">Actions
                                                        </th>
                                                        <th class="text-end"></th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-bold text-gray-600">
                                                    <!--begin::SubTable template-->
                                                    <tr data-kt-docs-datatable-subtable="subtable_template"
                                                        class="d-none">
                                                        <td colspan="2">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <a href="#"
                                                                    class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                                    <img src="/html/metronic/docs/assets/media/stock/ecommerce/"
                                                                        alt=""
                                                                        data-kt-docs-datatable-subtable="template_image">
                                                                </a>
                                                                <div class="d-flex flex-column text-muted">
                                                                    <a href="#"
                                                                        class="text-dark text-hover-primary fw-bold"
                                                                        data-kt-docs-datatable-subtable="template_name">Product
                                                                        name</a>
                                                                    <div class="fs-7"
                                                                        data-kt-docs-datatable-subtable="template_description">
                                                                        Product description</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="text-dark fs-7">Cost</div>
                                                            <div class="text-muted fs-7 fw-bold"
                                                                data-kt-docs-datatable-subtable="template_cost">
                                                                1
                                                            </div>
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
                                                                name</div>
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="text-dark fs-7 me-3">On hand
                                                            </div>
                                                            <div class="text-muted fs-7 fw-bold"
                                                                data-kt-docs-datatable-subtable="template_stock">
                                                                32
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <!--end::SubTable template-->
                                                    <tr>
                                                        <!--begin::Order ID-->
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark text-hover-primary">#XGT-346</a>
                                                        </td>
                                                        <!--end::Order ID-->
                                                        <!--begin::Crated date-->
                                                        <td class="text-end">2 January 2023, 8:26 am
                                                        </td>
                                                        <!--end::Created date-->
                                                        <!--begin::Customer-->
                                                        <td class="text-end">
                                                            <a id="kt_drawer_example_basic_button">EmmaSmith

                                                            </a>
                                                        </td>
                                                        <!--end::Customer-->
                                                        <!--begin::Total-->
                                                        <td class="text-end">$630.00</td>
                                                        <!--end::Total-->
                                                        <!--begin::Profit-->
                                                        <td class="text-end">
                                                            <span class="text-dark fw-bold">$86.70</span>
                                                        </td>
                                                        <!--end::Profit-->
                                                        <!--begin::Status-->
                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-light btn-active-light-primary"
                                                                data-kt-menu-trigger="click"
                                                                data-kt-menu-placement="bottom-end">Actions
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                <span class="svg-icon svg-icon-5 m-0">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                            fill="currentColor">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                                data-kt-menu="true" style="">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="https://crm.clatos.in/vieworder"
                                                                        class="menu-link px-3">View</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="https://crm.clatos.in/editorder"
                                                                        class="menu-link px-3">Edit</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3"
                                                                        data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                        </td>
                                                        <!--end::Status-->
                                                        <!--begin::Actions-->
                                                        <td class="text-end">
                                                            <div class="accordion accordion-icon-toggle"
                                                                id="kt_accordion_2">
                                                                <!--begin::Item-->
                                                                <div class="">
                                                                    <!--begin::Header-->
                                                                    <div class="accordion-header d-flex"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#kt_accordion_2_item_1">
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
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <rect opacity="0.5"
                                                                                                x="11"
                                                                                                y="18"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-90 11 18)"
                                                                                                fill="currentColor">
                                                                                            </rect>
                                                                                            <rect x="6"
                                                                                                y="11"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                fill="currentColor">
                                                                                            </rect>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                                        <svg width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <rect x="6"
                                                                                                y="11"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                fill="currentColor">
                                                                                            </rect>
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
                                                            </div>
                                                        </td>
                                                        <!--end::Actions-->
                                                    </tr>








                                                    <tr id="kt_accordion_2_item_1" class="fs-6 collapse "
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



                                                    <tr id="kt_accordion_2_item_1" class="fs-6 collapse "
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
                                                        <!--begin::Order ID-->
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark text-hover-primary">#XGT-346</a>
                                                        </td>
                                                        <!--end::Order ID-->
                                                        <!--begin::Crated date-->
                                                        <td class="text-end">2 January 2023, 8:26 am
                                                        </td>
                                                        <!--end::Created date-->
                                                        <!--begin::Customer-->
                                                        <td class="text-end">
                                                            <a id="kt_drawer_example_basic_button">EmmaSmith

                                                            </a>
                                                        </td>
                                                        <!--end::Customer-->
                                                        <!--begin::Total-->
                                                        <td class="text-end">$630.00</td>
                                                        <!--end::Total-->
                                                        <!--begin::Profit-->
                                                        <td class="text-end">
                                                            <span class="text-dark fw-bold">$86.70</span>
                                                        </td>
                                                        <!--end::Profit-->
                                                        <!--begin::Status-->
                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-light btn-active-light-primary"
                                                                data-kt-menu-trigger="click"
                                                                data-kt-menu-placement="bottom-end">Actions
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                <span class="svg-icon svg-icon-5 m-0">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                            fill="currentColor">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                                data-kt-menu="true" style="">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="https://crm.clatos.in/vieworder"
                                                                        class="menu-link px-3">View</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="https://crm.clatos.in/editorder"
                                                                        class="menu-link px-3">Edit</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3"
                                                                        data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                        </td>
                                                        <!--end::Status-->
                                                        <!--begin::Actions-->
                                                        <td class="text-end">
                                                            <div class="accordion accordion-icon-toggle"
                                                                id="kt_accordion_2">
                                                                <!--begin::Item-->
                                                                <div class="">
                                                                    <!--begin::Header-->
                                                                    <div class="accordion-header d-flex"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#kt_accordion_3_item_4">
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
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <rect opacity="0.5"
                                                                                                x="11"
                                                                                                y="18"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-90 11 18)"
                                                                                                fill="currentColor">
                                                                                            </rect>
                                                                                            <rect x="6"
                                                                                                y="11"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                fill="currentColor">
                                                                                            </rect>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                                        <svg width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <rect x="6"
                                                                                                y="11"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                fill="currentColor">
                                                                                            </rect>
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
                                                            </div>
                                                        </td>
                                                        <!--end::Actions-->
                                                    </tr>








                                                    <tr id="kt_accordion_3_item_4" class="fs-6 collapse "
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



                                                    <tr id="kt_accordion_3_item_4" class="fs-6 collapse "
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
                                                        <!--begin::Order ID-->
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark text-hover-primary">#XGT-346</a>
                                                        </td>
                                                        <!--end::Order ID-->
                                                        <!--begin::Crated date-->
                                                        <td class="text-end">2 January 2023, 8:26 am
                                                        </td>
                                                        <!--end::Created date-->
                                                        <!--begin::Customer-->
                                                        <td class="text-end">
                                                            <a id="kt_drawer_example_basic_button">EmmaSmith

                                                            </a>
                                                        </td>
                                                        <!--end::Customer-->
                                                        <!--begin::Total-->
                                                        <td class="text-end">$630.00</td>
                                                        <!--end::Total-->
                                                        <!--begin::Profit-->
                                                        <td class="text-end">
                                                            <span class="text-dark fw-bold">$86.70</span>
                                                        </td>
                                                        <!--end::Profit-->
                                                        <!--begin::Status-->
                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-light btn-active-light-primary"
                                                                data-kt-menu-trigger="click"
                                                                data-kt-menu-placement="bottom-end">Actions
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                <span class="svg-icon svg-icon-5 m-0">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                            fill="currentColor">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                                data-kt-menu="true" style="">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="https://crm.clatos.in/vieworder"
                                                                        class="menu-link px-3">View</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="https://crm.clatos.in/editorder"
                                                                        class="menu-link px-3">Edit</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3"
                                                                        data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                        </td>
                                                        <!--end::Status-->
                                                        <!--begin::Actions-->
                                                        <td class="text-end">
                                                            <div class="accordion accordion-icon-toggle"
                                                                id="kt_accordion_2">
                                                                <!--begin::Item-->
                                                                <div class="">
                                                                    <!--begin::Header-->
                                                                    <div class="accordion-header d-flex"
                                                                        data-bs-toggle="collapse" data-bs-target="#row3">
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
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <rect opacity="0.5"
                                                                                                x="11"
                                                                                                y="18"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-90 11 18)"
                                                                                                fill="currentColor">
                                                                                            </rect>
                                                                                            <rect x="6"
                                                                                                y="11"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                fill="currentColor">
                                                                                            </rect>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                                        <svg width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <rect x="6"
                                                                                                y="11"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                fill="currentColor">
                                                                                            </rect>
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
                                                            </div>
                                                        </td>
                                                        <!--end::Actions-->
                                                    </tr>








                                                    <tr id="row3" class="fs-6 collapse "
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



                                                    <tr id="row3" class="fs-6 collapse "
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


                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--end::Table-->
                    <div class="d-flex  justify-content-center mt-2">
                        <div class="d-flex ">
                            <div>
                                <ul class="nav" id="kt_chart_widget_8_tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <select name="kt_ecommerce_sales_table_length"
                                            aria-controls="kt_ecommerce_sales_table"
                                            class="form-select form-select-sm form-select-solid">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="kt_ecommerce_sales_table_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="kt_ecommerce_sales_table_previous"><a href="#"
                                                        aria-controls="kt_ecommerce_sales_table" data-dt-idx="0"
                                                        tabindex="0" class="page-link"><i class="previous"></i></a>
                                                </li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="kt_ecommerce_sales_table" data-dt-idx="1"
                                                        tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="kt_ecommerce_sales_table" data-dt-idx="2"
                                                        tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="kt_ecommerce_sales_table" data-dt-idx="3"
                                                        tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="kt_ecommerce_sales_table" data-dt-idx="4"
                                                        tabindex="0" class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="kt_ecommerce_sales_table" data-dt-idx="5"
                                                        tabindex="0" class="page-link">5</a></li>
                                                <li class="paginate_button page-item next"
                                                    id="kt_ecommerce_sales_table_next"><a href="#"
                                                        aria-controls="kt_ecommerce_sales_table" data-dt-idx="6"
                                                        tabindex="0" class="page-link"><i class="next"></i></a>
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
    </div>
@endsection
