@extends('layout/theme')
@section('content')
    <div class="card card-flush pt-3 mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2 class="fw-bold">View Invoice</h2>
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="btn btn-light-primary">
                   Preview Invoice</a>
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-1">
            <!--begin::Section-->
            <div class="mb-2">
                <!--begin::Title-->

                <!--end::Title-->
                <!--begin::Details-->
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="flex-equal me-5">
                        <!--begin::Details-->
                        <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
                            <!--begin::Row-->
                            <tbody>

                                <!--end::Row-->
                                <!--begin::Row-->
                                <tr>
                                    <td class="text-gray-400">Invoice No</td>
                                    <td class="text-gray-800">20</td>
                                </tr>
                                <tr>
                                    <td class="text-gray-400">Date</td>
                                    <td class="text-gray-800">20/12/22</td>
                                </tr>
                                <tr>
                                    <td class="text-gray-400">Customer Name:</td>
                                    <td class="text-gray-800">Emma Smith</td>
                                </tr>

                                <tr>
                                    <td class="text-gray-400">Bill From</td>
                                    <td class="text-gray-800">Duens</td>
                                </tr>

                                <tr>
                                    <td class="text-gray-400">Subscription Fees:</td>
                                    <td class="text-gray-800">$149.99 / Year</td>
                                </tr>
                                <!--end::Row-->
                                <!--begin::Row-->


                                <!--end::Row-->
                            </tbody>
                        </table>
                        <!--end::Details-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="flex-equal">
                        <!--begin::Details-->
                        <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
                            <!--begin::Row-->
                            <tbody>
                                <tr>
                                    <td class="text-gray-400 min-w-175px w-175px">Bill To</td>
                                    <td class="text-gray-800 min-w-200px">
                                        <a href="#" class="text-gray-800 text-hover-primary">Nilesh</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-gray-400">Address:</td>
                                    <td class="text-gray-800">Floor 10, 101 Avenue of the Light Square, New York, NY, 10050.
                                    </td>
                                </tr>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <tr>
                                    <td class="text-gray-400">Phone:</td>
                                    <td class="text-gray-800">(555) 555-1234</td>
                                </tr>
                                <tr>
                                    <td class="text-gray-400">Billing method:</td>
                                    <td class="text-gray-800">Annually</td>
                                </tr>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <tr>
                                    <td class="text-gray-400">Currency:</td>
                                    <td class="text-gray-800">USD - US Dollar</td>
                                </tr>
                                <!--end::Row-->
                                <!--begin::Row-->

                                <!--end::Row-->
                            </tbody>
                        </table>

                        <!--end::Details-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Row-->

                <!--end::Section-->
                <!--begin::Section-->
                <div class="mb-0">
                    <!--begin::Title-->
                    <h5 class="mb-4">Products Detail</h5>
                    <!--end::Title-->
                    <!--begin::Product table-->

                    <!--end::Product table-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Card body-->

            <div class="card-fluid mx-lg-9">
                <tbody>

                    <div id="kt_docs_repeater_basic">

                        <!--begin::Form group-->
                        <div class="form-group-solid">

                            <div data-repeater-list="kt_docs_repeater_basic">
                                <div data-repeater-item>

                                    <div class="form-group-solid row">
                                        <div class="col-md-2">

                                            <input type="email" class="form-control mb-2 mb-md-0" placeholder="caltos" />
                                        </div>
                                        <div class="col-md-2">

                                            <div data-kt-buttons="true">
                                                <div class="col"><input formcontrolname="noOfEmployees" type="number"
                                                        min="1" max="50" step="1" class="form-control"
                                                        name="noOfEmployees" placeholder="2"
                                                        class="form-control form-control-lg  ng-untouched ng-pristine ng-valid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">

                                            <input type="email" class="form-control mb-2 mb-md-0" placeholder="5000" />
                                        </div>
                                        <div class="col-md-2">

                                            <input type="email" class="form-control mb-2 mb-md-0" placeholder="10000" />
                                        </div>
                                        <div class="col-md-2" class="d-flex">

                                            <a href="javascript:;" data-repeater-delete
                                                class="btn btn-light-danger mb-2 mb-md-0">
                                                <i class="la la-trash-o fs-1"></i>
                                            </a>



                                            <a class="btn btn-light-secondary mb-2 mb-md-0">
                                                <i class="bi-pencil-square fs-1 text-black"></i>
                                            </a>

                                        </div>


                                    </div>

                                    <div class="form-group-solid row">
                                        <div class="col-md-4 mb-lg-3">

                                            <input type="email" class="form-control mt-lg-3" placeholder="Descrption" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group mt-5">
                            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
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
        </div>
        <div class="d-flex justify-content-end mb-4">
            <!--begin::Button-->
            <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel"
                class="btn btn-light me-5">Cancel</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                <span class="indicator-label">Save Changes</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
        </div>
    </div>
@endsection
