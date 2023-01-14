@extends('layout/theme')
@section('content')
    <div class="card mx-auto" style="margin-top:15px;">

        <div class="col-xxl-12">
            <!--begin::Contacts-->
            <div class="px-2" class="card card-flush h-lg-100" id="kt_contacts_main">
                <!--begin::Card header-->
                <div class="card-header pt-4" id="kt_chat_contacts_header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->

                        <!--end::Svg Icon-->
                        <h1>New service support ticket generated form</h1>

                    </div>

                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->

                <div class="card-body pt-8 px-lg-20">
                    <!--begin::Form-->

                    <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="#">


                        <!--end::Input group-->



                        <!--end::Input group-->

                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

                            <div class="col">


                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6  text-black form-label mt-1 mb-4">
                                        <span>Lead</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control " name="email" value="">

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">

                               <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6  text-black form-label mt-1 mb-4">
                                        <span>Date & Time </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                                     <input class="form-control  fw-bold pe-5 flatpickr-input"
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
                            </div>
                            <!--end::Col-->
                        </div>




                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="fv-row mb-3">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>
                                    purpose
                                </span>


                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control " name="notes"></textarea>
                            <!--end::Input-->
                        </div>


                        <div class="fv-row mb-3 fv-plugins-icon-container">
                            <!--begin::Label-->

                            <!--end::Label-->
                            <!--begin::Input-->
                            <div class="form-check form-switch mb-10">

                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Lead Closed</label>
                            </div>
                            <!--end::Input-->

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
                    </form>
            </div>
            </div>
        </div>
    </div>
@endsection
