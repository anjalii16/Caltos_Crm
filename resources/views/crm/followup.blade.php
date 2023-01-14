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
                        <h1>New Follow Up Added To Any Lead Form</h1>

                    </div>

                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->

                <div class="card-body pt-8 px-lg-20">
                    <!--begin::Form-->
                    <h2 class="card-subtitle mb-4">Task Information</h2>
                    <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="#">
                        <!--begin::Input group-->

                        <!--end::Input group-->
                        <!--begin::Input group-->


                        <!--end::Input group-->


                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

                            <div class="col">


                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6  text-black form-label mt-1 mb-4">
                                        <span>Assign To</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select" data-control="select2" data-placeholder="Select Assign To">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="1">Option 1</option>

                                    </select>

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">

                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6  text-black form-label mt-1 mb-4">
                                        <span>Due Date</span>
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
                                Comments
                            </span>


                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <textarea class="form-control " name="notes"></textarea>
                        <!--end::Input-->
                    </div>
                    <div class="fv-row mb-3 fv-plugins-icon-container my-lg-5">
                        <!--begin::Label-->
                        <h2>Additional Information</h2>
                        <!--end::Input-->

                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

                        <div class="col">

                            <!--begin::Input group-->
                            <div class="fv-row mb-1 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6  text-black form-label mt-1">
                                    <span>Status</span>
                                </label>
                                <textarea id="kt_docs_tinymce_plugins" name="kt_docs_tinymce_plugins" class="tox-target">
    <h1>Quick and Simple TinyMCE 5 Integration</h1>
    <p>Here goes the&nbsp;<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the&nbsp;<em>printing and typesetting</em>&nbsp;industry.</p>
    <blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
    <h3 style="text-align: right;">Flexible &amp; Powerful</h3>
    <p style="text-align: right;"><strong>Lorem Ipsum has been the industry's</strong>&nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
    <ul>
        <li>List item 1</li>F
        <li>List item 2</li>
        <li>List item 3</li>
        <li>List item 4</li>
    </ul>
</textarea>
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
                                    <span>Priority</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input text-black" type="radio"
                                            name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Yes</label>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Input-->

                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Input group-->

                    <!--end::Input group-->
                    <!--begin::Separator-->

                    <!--end::Separator-->
                    <!--begin::Action buttons-->
                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                        <!--begin::Col-->
                        <div class="col">
                            <!--begin::Input group-->
                            <div class="fv-row mb-1 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6  text-black form-label mt-1">
                                    <span>Reminder</span>
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
                        <!--begin::Col-->
                        <div class="col">
                            <!--begin::Input group-->
                            <div class="fv-row mb-1 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6 text-black form-label mt-1">
                                    <span>Attachements</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control " id="formFileSm" type="file" />
                                <!--end::Input-->

                            </div>
                            <!--end::Input group-->
                        </div>
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
