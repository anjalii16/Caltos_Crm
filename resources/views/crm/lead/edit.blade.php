@extends('layout/theme')
@section('content')
    <div class="card card-flush py-4 px-5 m-10">
        <!--begin::Card header-->

        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="fv-row mb-3 fv-plugins-icon-container my-lg-5">
            <!--begin::Label-->
            <h1>Lead Edit</h1>
            <!--end::Input-->

        </div>
        <div class="row row-cols-1 row-cols-sm-3 rol-cols-md-3 row-cols-lg-3">


            <!--end::Col-->
            <!--begin::Col-->
            <div class="col">
                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 text-black form-label mt-1">
                        <span>Id</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control " name="email" value="" placeholder="20">
                    <!--end::Input-->

                </div>
                <!--end::Input group-->
            </div>
          <div class="col">
                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 text-black form-label mt-1">
                        <span>Name</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" placeholder="Sarita" class="form-control " name="email" value="">
                    <!--end::Input-->

                </div>
                <!--end::Input group-->
            </div>
            <div class="col">
                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 text-black form-label mt-1">
                        <span>Company</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" placeholder="Orkia" class="form-control " name="email" value="">
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
                        <span>Gst</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="email" placeholder="18%" class="form-control " name="email" value="">
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
                        <span class="required">Address</span>
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
                        <span>City</span>
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
                        <span class="required">State</span>
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
                        <span>Country</span>
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
                        <span>Pincode</span>
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
                        <span>Remarks</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                  <input type="text" class="form-control " name="email" value="">
                </div>
                <!--end::Input group-->
            </div>
              <div class="col">

                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6  text-black form-label mt-1">
                        <span>Bussiness Nature</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                  <input type="text" class="form-control " name="email" value="">
                </div>
                <!--end::Input group-->
            </div>
              <div class="col">

                <!--begin::Input group-->
                <div class="fv-row mb-1 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6  text-black form-label mt-1">
                        <span>No Of Employees</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                  <input type="text" class="form-control " name="email" value="">
                </div>
                <!--end::Input group-->
            </div>

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
                        <span class="required">Lead Status</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->

                    <br>

                    <div class="form-check-inline m-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Attempted
                        </label>
                    </div>
                    <div class="form-check-inline m-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            New Lead
                        </label>
                    </div>
                    <div class="form-check-inline m-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Follow Up
                        </label>
                    </div>
                    <div class="form-check-inline m-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Online
                        </label>
                    </div>
                     <div class="form-check-inline m-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Not Interested
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
                        <span class="required">Bussiness Type</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->

                    <br>

                    <div class="form-check-inline m-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Advertising
                        </label>
                    </div>
                    <div class="form-check-inline m-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Education
                        </label>
                    </div>
                    <div class="form-check-inline m-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Healthcare
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

@endsection
