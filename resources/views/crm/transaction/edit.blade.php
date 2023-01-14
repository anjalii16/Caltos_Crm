@extends('layout/theme')
@section('content')
    <div class="card card-flush py-4 px-5 m-10">
        <!--begin::Card header-->

        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="fv-row mb-3 fv-plugins-icon-container my-lg-5">
            <!--begin::Label-->
            <h2>Edit Transaction</h2>
            <!--end::Input-->

        </div>
        <div class="row row-cols-1 row-cols-sm-3 rol-cols-md-3 row-cols-lg-3">

            <div class="col">

                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6  text-black form-label mt-1">
                        <span class="required">Id</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="email" class="form-control " name="email" value="20" placeholder="20" readonly>
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
                        <span>Customer</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control " name="email" value="" placeholder="ramesh">
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
                   <input class="form-control  fw-bold pe-5 flatpickr-input"
                                        placeholder="Select date & Time" name="invoice_due_date" type="text"
                                        readonly="readonly" id="kt_datepicker_3" placeholder="26-12-22">
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
        <div class="row row-cols-1 row-cols-sm-3 rol-cols-md-3 row-cols-lg-3">

            <div class="col">

                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6  text-black form-label mt-1">
                        <span>Amount</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="email" class="form-control " name="email" value="">
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
                        <span class="required">Transaction Id</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control " name="email" value="">
                    <!--end::Input-->

                </div>
                <!--end::Input group-->
            </div>
            <div class="col">
                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 text-black form-label mt-1">
                        <span>payment Purpose</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control " name="email" value="">
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
                        <span class="required">Invoice</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="email" class="form-control " name="email" value="">
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
                        <span>Remarks</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control " name="email" value="">
                    <!--end::Input-->

                </div>
                <!--end::Input group-->
            </div>
            <div class="col">
                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 text-black form-label mt-1">
                        <span>Transaction Detail</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control " name="email" value="" placeholder="detail transaction">
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
                        <span>Screenshort</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control" id="formFileSm" type="file" value="file.txt" />
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
                    <label class="fs-6 text-black form-label mt-1 mb-3">
                        <span class="required">Approved</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input--><br>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            No
                        </label>
                    </div>
                    <!--end::Input-->

                </div>
                <!--end::Input group-->
            </div>
            <div class="col">
                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 text-black form-label mt-1 mb-3">
                        <span class="required">Getway</span>
                    </label><br>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Yes
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            No
                        </label>
                    </div>
                    <!--end::Input-->

                </div>
                <!--end::Input group-->
            </div>
            <!--end::Col-->
        </div>


        <!--end::Row-->
        <!--begin::Input group-->
        <div class="row row-cols-1 row-cols-sm-1 rol-cols-md-1 row-cols-lg-1">
            <!--begin::Col-->
            <div class="col">
                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container mb-4">
                    <!--begin::Label-->
                    <label class="fs-6  text-black form-label mt-1 mb-3">
                        <span class="required">Payment Mode</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->

                    <br>

                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Check
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Debit
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Cash
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Online
                        </label>
                    </div>


                </div>
                <!--end::Input group-->
            </div>

            <!--end::Col-->

            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Separator-->
        <div class="row row-cols-1 row-cols-sm-1 rol-cols-md-1 row-cols-lg-1 mb-4">
            <!--begin::Col-->
            <div class="col">
                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6  text-black form-label mb-3">
                        <span class="required">Company</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->

                    <br>

                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Orkia
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Shree
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Dunes
                        </label>
                    </div>


                </div>
                <!--end::Input group-->
            </div>

            <!--end::Col-->

            <!--end::Col-->
        </div>
        <!--end::Separator-->
        <!--begin::Action buttons-->
        <div class="row row-cols-1 row-cols-sm-1 rol-cols-md-1 row-cols-lg-1 mb-4">
            <!--begin::Col-->
            <div class="col">
                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6  text-black form-label mb-2">
                        <span class="required">Account Manager</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->

                    <br>

                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Harish
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Suman
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Sahil
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Priyansh
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault4"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault4">
                            Devanshi
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Harish
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Suman
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Sahil
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Priyansh
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault4"
                            checked>
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
@endsection
