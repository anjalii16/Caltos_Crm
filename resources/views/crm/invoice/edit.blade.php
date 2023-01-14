@extends('layout/theme')
@section('content')
    <div class="card card-flush py-4 px-5 m-10">
        <!--begin::Card header-->

        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="fv-row mb-3 fv-plugins-icon-container my-lg-5">
            <!--begin::Label-->
            <h2>Edit Invoice</h2>
            <!--end::Input-->

        </div>
        <div class="row row-cols-1 row-cols-sm-3 rol-cols-md-3 row-cols-lg-3">

            <div class="col">

                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6  text-black form-label mt-1">
                        <span class="required">Invoice No</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="email" class="form-control " name="email" value="" placeholder="20">
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col">
                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 text-black form-label mt-1">
                        <span>Customer Name</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control " name="email" value="" placeholder="Suresh">
                    <!--end::Input-->

                </div>
                <!--end::Input group-->
            </div>
            <div class="col">
                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 text-black form-label mt-1">
                        <span class="required">Date</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control  fw-bold pe-5 flatpickr-input" placeholder="26-12-22" name="invoice_due_date"
                        type="text" readonly="readonly" id="kt_datepicker_3">
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
                <!--end::Input-->

            </div>
            <!--end::Input group-->
        </div>
        <!--end::Col-->
    </div>
    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-2 row-cols-lg-2">

        <div class="col">

            <!--begin::Input group-->
            <div class="fv-row mb-1 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6  text-black form-label mt-1">
                    <span>Bill From</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="email" class="form-control " name="email" value="" placeholder="Dunes">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col">
            <!--begin::Input group-->
            <div class="fv-row mb-1 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6 text-black form-label mt-1">
                    <span class="required">Bill To</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control " name="email" value="" placeholder="Ramesh">
                <!--end::Input-->

            </div>
            <!--end::Input group-->
        </div>

        <!--end::Col-->
    </div>
    <div class="row row-cols-1 row-cols-sm-3 rol-cols-md-3 row-cols-lg-3">

        <div class="col">

            <!--begin::Input group-->
            <div class="fv-row mb-1 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6  text-black form-label mt-1">
                    <span class="required">Subscription Fees</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="business_type" formcontrolname="natureOfBussiness" data-control="select2"
                    data-placeholder="Select..." placehoder="Select..." data-allow-clear="true" data-hide-search="true"
                    class="form-select form-select-lg  ng-untouched ng-pristine ng-valid">
                    <option selected="">2000</option>
                    <option value="S_Corporation">S Corporation</option>
                    <option value="C_Corporation">C Corporation</option>
                    <option value="Sole_Proprietorship">Sole Proprietorship
                    </option>
                    <option value="Non_profit">Non-profit</option>
                    <option value="Limited_Liabilit">Limited Liability</option>
                    <option value="General_Partnership">General Partnership
                    </option>
                </select>
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col">
            <!--begin::Input group-->
            <div class="fv-row mb-1 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6 text-black form-label mt-1">
                    <span>Billing Method</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control " name="email" value="" placeholder="check">
                <!--end::Input-->

            </div>
            <!--end::Input group-->
        </div>
        <div class="col">
            <!--begin::Input group-->
            <div class="fv-row mb-1 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6 text-black form-label mt-1">
                    <span>Currency</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control " name="email" value="" placeholder="Indian">
                <!--end::Input-->

            </div>
            <!--end::Input group-->
        </div>
        <!--end::Col-->
    </div>
    <div class="row row-cols-1 row-cols-sm-3 rol-cols-md-3 row-cols-lg-3">

        <div class="col">

            <!--begin::Input group-->
            <div class="fv-row mb-1 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6  text-black form-label mt-1">
                    <span>Product Name</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="business_type" formcontrolname="natureOfBussiness" data-control="select2"
                    data-placeholder="Select..." placehoder="Select..." data-allow-clear="true" data-hide-search="true"
                    class="form-select form-select-lg  ng-untouched ng-pristine ng-valid">
                    <option selected="">caltos cloud</option>
                    <option value="S_Corporation">S Corporation</option>
                    <option value="C_Corporation">C Corporation</option>
                    <option value="Sole_Proprietorship">Sole Proprietorship
                    </option>
                    <option value="Non_profit">Non-profit</option>
                    <option value="Limited_Liabilit">Limited Liability</option>
                    <option value="General_Partnership">General Partnership
                    </option>
                </select>
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Col-->
        <div class="col">

            <!--begin::Input group-->
            <div class="fv-row mb-1 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6  text-black form-label mt-1">
                    <span>QTY</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input formcontrolname="noOfEmployees" type="number" min="1" max="50" step="1"
                    class="form-control" name="noOfEmployees" placeholder="QTY"
                    class="form-control form-control-lg  ng-untouched ng-pristine ng-valid">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Input group-->
        </div>

        <!--begin::Col-->
        <div class="col">

            <!--begin::Input group-->
            <div class="fv-row mb-1 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6  text-black form-label mt-1">
                    <span>Phone</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="email" class="form-control " name="email" value=""
                    placeholder="736767636276">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Input group-->
        </div>

        <!--end::Col-->
    </div>
    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-2 row-cols-lg-2">


        <!--end::Col-->
        <div class="col">

            <!--begin::Input group-->
            <div class="fv-row mb-1 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6  text-black form-label mt-1">
                    <span>Address Line 1</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="email" class="form-control " name="email" value=""
                    placeholder="Gangashahar">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Input group-->
        </div>

        <!--begin::Col-->
        <div class="col">

            <!--begin::Input group-->
            <div class="fv-row mb-1 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6  text-black form-label mt-1">
                    <span>Address Line 2</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="email" class="form-control " name="email" value="" placeholder="Bikaner">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Input group-->
        </div>

        <!--end::Col-->
    </div>

    <!--end::Row-->
    <!--begin::Input group-->



    <div class="card-fluid mt-5 mb-5">
        <tbody>
            <h2>Product Detail</h2>
            <div id="kt_docs_repeater_basic">

                <!--begin::Form group-->
                <div class="form-group-solid">

                    <div data-repeater-list="kt_docs_repeater_basic">
                        <div data-repeater-item>

                            <div class="form-group-solid row">
                                <div class="col-md-2">

                                    <input type="email" class="form-control mb-2 mb-md-0" placeholder="item" />
                                </div>
                                <div class="col-md-2">

                                    <div data-kt-buttons="true">
                                        <div class="col"><input formcontrolname="noOfEmployees" type="number"
                                                min="1" max="50" step="1" class="form-control"
                                                name="noOfEmployees" placeholder="QTY"
                                                class="form-control form-control-lg  ng-untouched ng-pristine ng-valid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">

                                    <input type="email" class="form-control mb-2 mb-md-0" placeholder="prize" />
                                </div>
                                <div class="col-md-2">

                                    <input type="email" class="form-control mb-2 mb-md-0" placeholder="total" />
                                </div>
                                <div class="col-md-2">

                                    <a href="javascript:;" data-repeater-delete
                                        class="btn btn-light-danger mb-2 mb-md-0">
                                        <i class="la la-trash-o fs-1"></i>
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
        </tbody>
    </div>
    <!--end::Action buttons-->
    <div></div>
    </form>
    <!--end::Form-->
@endsection
