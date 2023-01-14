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
                        <h1>Service Support Ticket Form</h1>

                    </div>

                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->

                <div class="card-body pt-8">
                    <!--begin::Form-->
                    <h2 class="card-subtitle">Tell Us About The Issue</h2>
                    <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="#">
                        <!--begin::Input group-->

                        <!--end::Input group-->
                        <!--begin::Input group-->


                        <!--end::Input group-->


                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>What Product Were You Using Issue Occured?</span>

                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" name="name" value="">
                            <!--end::Input-->

                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>
                                    <h2>Tell Us What You Need Help With</h2>
                                </span>
                                <span>
                                    <div class="card-subtitle">Text will be use to recommend solution.Please add a breif
                                        summary and possibly a
                                        error message.Do'not include persnonal data or confidential information.</div>
                                </span>

                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" name="notes"></textarea>
                            <!--end::Input-->
                        </div>

                        <!--end::Row-->
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
                        <!--begin::Input group-->

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
@endsection
