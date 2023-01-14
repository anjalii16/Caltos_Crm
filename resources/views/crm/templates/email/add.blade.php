@extends('layout/theme')
@section('content')
    <script src="{{ asset('assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script>
        var options = {
            selector: "#kt_docs_tinymce_basic",
            height: "280"
        };

        if (KTThemeMode.getMode() === "dark") {
            options["skin"] = "oxide-dark";
            options["content_css"] = "dark";
        }

        tinymce.init(options);
    </script>
    <div class="card mx-auto" style="margin-top:15px;">

        <div class="col-xxl-12">
            <!--begin::Contacts-->
            <div class="px-2" class="card card-flush h-lg-100" id="kt_contacts_main">
                <!--begin::Card header-->
                <div class="card-header pt-4" id="kt_chat_contacts_header">
                    <!--begin::Card title-->
                    <div class="card-title">

                        <div class="d-flex justify-content-start">
                            <div class="d-flex">
                                <div class="p-2 ">
                                    <h2>Email Template</h2>
                                </div>
                                <div class="p-2">

                                    <h2 class="text-gray-400 fw-semibold  text-gray-400">Add</h2>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="card-body pt-8 px-lg-20">
                    <!--begin::Form-->

                    <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="#">



                        <div class="row row-cols-1 row-cols-sm-1 rol-cols-md-1 row-cols-lg-1">

                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 text-black form-label mt-1 mb-3">
                                        <span>Email Template Category</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Andro SMS</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Clatos
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Demo Video
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">General
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Payment Reminder
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Product Proposal
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input text-black" type="radio"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">premilar PC Demo
                                            </label>
                                        </div>


                                    </div>
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->

                            <!--end::Col-->
                        </div>

                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="fv-row mb-3">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>
                                    Subject
                                </span>


                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control " name="notes"></textarea>
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-3">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>
                                    Message
                                </span>


                            </label>
                            <textarea id="kt_docs_tinymce_basic" name="kt_docs_tinymce_basic" class="tox-target">
    <h3>Quick and Simple TinyMCE 5 Integration</h3>


</textarea>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">




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



                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-1 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 text-black form-label mt-1">
                                        <span>Title</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text"  class="form-control" />
                                    <!--end::Input-->

                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>

                        <!--end::Col-->
                        <!--begin::Col-->

                        <!--end::Col-->
                </div>

                <div class="d-flex justify-content-end mb-3">
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
