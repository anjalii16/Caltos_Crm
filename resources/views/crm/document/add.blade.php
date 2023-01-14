@extends('layout/theme')
@section('content')
    <div class="card card-flush py-4 px-5 m-10">
        <!--begin::Card header-->

        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="fv-row mb-3 fv-plugins-icon-container my-lg-5">
            <!--begin::Label-->
            <h2>Add Document</h2>
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
                                                    class="form-label fs-6 fw-semibold form-label mt-3">Lead
                                                </label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7 fv-plugins-icon-container">
                                            <div class="fv-row mb-8"><label
                                                    class="form-label fs-6 fw-semibold form-label mt-3">
                                                    Name</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->

                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7 fv-plugins-icon-container">
                                            <div class="fv-row mb-8"><label
                                                    class="form-label fs-6 fw-semibold form-label mt-3">
                                                    Path</label>
                                                <input class="form-control " id="formFileSm" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-1 fv-plugins-icon-container mb-4">
                                            <!--begin::Label-->
                                            <label class="fs-6  text-black form-label mt-1 mb-3">
                                                <span class="required">User Type</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->

                                            <br>

                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                                    id="flexRadioDefault1" checked="">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Customer
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                                    id="flexRadioDefault2" checked="">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Lead
                                                </label>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>  
                                    
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
