@extends('layout/theme')
@section('content')
    <div class="card card-flush py-4 px-5 m-10">
        <!--begin::Card header-->

        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="fv-row mb-3 fv-plugins-icon-container my-lg-5">
            <!--begin::Label-->
            <h2>Add Order</h2>
            <!--end::Input-->

        </div>





        <!-- form -->


        <div class="card">
            <!--begin::Card header-->

            <!--end::Card header-->
            <!--begin::Form-->
            <div class="col-xxl-12">
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
                            <div class="fv-row mb-7 fv-plugins-icon-container">

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7 fv-plugins-icon-container">
                                            <div class="fv-row mb-8"><label
                                                    class="form-label fs-6 fw-semibold form-label mt-3">User
                                                </label>
                                                <input type="text" class="form-control" name="name" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7 fv-plugins-icon-container">
                                            <div class="fv-row mb-8"><label
                                                    class="form-label fs-6 fw-semibold form-label mt-3">
                                                    Remarks</label>
                                                <input type="text" class="form-control" name="name" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3 mb-3">
                                        <span class="required">Account Manager</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                                    </label><br>
                                    <!--end::Label-->
                                    <!--begin::Input-->

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Option 1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Option 2</label>
                                    </div>
                                </div>

                                <div class="card-fluid">


                                    <div id="kt_docs_repeater_basic">


                                        <div class="form-group-solid">

                                            <div data-repeater-list="kt_docs_repeater_basic">
                                                <div data-repeater-item="">

                                                    <div class="form-group row ">
                                                        <div class="col-md-2">
                                                            <label class="form-label">Product</label>
                                                            <div class="menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 menu-bullet-gray-400 menu-arrow-gray-400 menu-state-bg fw-semibold w-120px"
                                                                data-kt-menu="true" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item menu-sub-indention menu-accordion"
                                                                    data-kt-menu-trigger="click">
                                                                    <!--begin::Menu link-->




                                                                    <select class="form-select mb-2" data-control="select2">
                                                                        <option>Product</option>
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                        <option value="1">Option 1</option>

                                                                    </select>

                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="form-label">Quantity</label>
                                                            <div data-kt-buttons="true" data-kt-initialized="1">
                                                                <div class="col"><input formcontrolname="noOfEmployees"
                                                                        type="number" min="1" max="50"
                                                                        step="1" class="form-control mb-2"
                                                                        name="kt_docs_repeater_basic[0][noOfEmployees]"
                                                                        placeholder="QTY">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="form-label">Rate</label>
                                                            <input type="email" class="form-control mb-2"
                                                                placeholder="Rate">
                                                        </div>

                                                        <div class="col-md-2">
                                                            <label class="form-label">Period</label>
                                                            <div class="menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-400 menu-arrow-gray-400 menu-bullet-gray-400 menu-arrow-gray-400 menu-state-bg fw-semibold w-120px"
                                                                data-kt-menu="true" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item menu-sub-indention menu-accordion"
                                                                    data-kt-menu-trigger="click">
                                                                    <!--begin::Menu link-->
                                                                    <select class="form-select mb-2" data-control="select2">
                                                                        <option>Period</option>
                                                                        <option value="1">Option 1</option>
                                                                        <option value="2">Option 2</option>
                                                                        <option value="1">Option 1</option>

                                                                    </select>
                                                                    <!--end::Menu sub-->
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="form-label">Sub Total</label>
                                                            <input type="email" class="form-control mb-2 "
                                                                placeholder="Sub Total">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="form-label">Total</label>
                                                            <input type="email" class="form-control mb-2 "
                                                                placeholder="Total">
                                                        </div>
                                                        <div class="col">

                                                            <a href="javascript:;" data-repeater-delete=""
                                                                class="btn btn-light-danger mb-2 ">
                                                                <i class="la la-trash-o fs-1" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Delete"
                                                                    data-kt-initialized="1"></i>
                                                            </a>



                                                            <a class="btn btn-secondary mb-2 ">
                                                                <i class="bi-pencil-square fs-1" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" aria-label="Edit"
                                                                    data-kt-initialized="1"></i>
                                                            </a>

                                                        </div>


                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->

                                        <!--begin::Form group-->
                                        <div class="form-group mt-5 mb-3">
                                            <a href="javascript:;" data-repeater-create="" class="btn btn-light-primary">
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

                                </div>
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
