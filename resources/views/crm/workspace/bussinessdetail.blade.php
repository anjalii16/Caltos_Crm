@extends('layout/theme')
@section('content')

<div class="card mt-10 mb-50 me-10 mx-10">
    <div class="card-body">
        <div id="kt_create_account_stepper" class="stepper stepper-links d-flex flex-equal">
            <div class="stepper-nav mb-20">
                <div class="stepper-item">
                    <h3 class="stepper-title">Workspace Info</h3>
                </div>
                <div class="stepper-item current">
                    <h3 class="stepper-title">Business Details</h3>
                </div>
                <form novalidate=""
                    class="mx-auto mw-600px mt-10 w-100 ng-untouched ng-pristine ng-valid">
                    <div data-kt-stepper-element="content" class="current">
                        <div class="w-100">
                            <div class="row mb-8 flex-column"><label
                                    class="col-lg-4 col-form-label fw-semibold fs-6">Logo</label>
                                <div class="col-lg-8">
                                    <div data-kt-image-input="true"
                                        class="image-input image-input-outline">
                                        <div class="image-input-wrapper w-200px h-150px"><img
                                                alt="Company Logo" width="100%" height="100%"
                                                src="assets/images/No_img.png"></div><label
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="Change avatar"
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"><i
                                                class="bi bi-pencil-fill fs-7"></i><input
                                                formcontrolname="logo" type="file"
                                                accept=".png, .jpg, .jpeg"
                                                class="ng-untouched ng-pristine ng-valid"><input
                                                type="file" accept=".png, .jpg, .jpeg"></label><span
                                            data-kt-image-input-action="cancel"
                                            data-bs-toggle="tooltip" title="Cancel avatar"
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"><i
                                                class="bi bi-x fs-2"></i></span><span
                                            data-kt-image-input-action="remove"
                                            data-bs-toggle="tooltip" title="Remove avatar"
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"><i
                                                class="bi bi-x fs-2"></i></span>
                                    </div>
                                    <div class="form-text">Allowed file types: png, jpg, jpeg. <br
                                           > Logo size 190px 140px</div>
                                </div>
                            </div>
                            <div class="mb-8 fv-row"><label
                                    class="d-flex align-items-center form-label mb-3">Specify Team Size</label>
                                <div data-kt-buttons="true" class="row mb-2">
                                    <div class="col"><input
                                            formcontrolname="noOfEmployees" type="number" min="0" max="50"
                                            step="1" name="noOfEmployees" placeholder="1"
                                            class="form-control form-control-lg form-control-solid fs-2 active w-100 w-25 ng-untouched ng-pristine ng-valid">
                                    </div>
                                </div>
                                <div class="form-text">Customers will see this shortened version
                                    of your statement descriptor</div>
                            </div>
                            <div class="fv-row mb-8"><label
                                    class="form-label">Website</label><input
                                    formcontrolname="website" name="business_name" placeholder="Dunesfactory.com"
                                    value=""
                                    class="form-control form-control-lg form-control-solid ng-untouched ng-pristine ng-valid">
                                <!---->
                                <!---->
                            </div>
                            <div class="fv-row mb-8"><label
                                    class="form-label">Business Type</label><select
                                    name="business_type" formcontrolname="natureOfBussiness" data-control="select2"
                                    data-placeholder="Select..." placehoder="Select..." data-allow-clear="true"
                                    data-hide-search="true"
                                    class="form-select form-select-lg form-select-solid ng-untouched ng-pristine ng-valid">
                                    <option selected="">.. Please Select ..</option>
                                    <option value="S_Corporation">S Corporation</option>
                                    <option value="C_Corporation">C Corporation</option>
                                    <option value="Sole_Proprietorship">Sole Proprietorship
                                    </option>
                                    <option value="Non_profit">Non-profit</option>
                                    <option value="Limited_Liabilit">Limited Liability</option>
                                    <option value="General_Partnership">General Partnership
                                    </option>
                                </select></div>
                            <div class="fv-row mb-8"><label
                                    class="form-label">Business Phone</label><input
                                    formcontrolname="mobile" name="business_phone" placeholder="8544072104"
                                    value=""
                                    class="form-control form-control-lg form-control-solid ng-untouched ng-pristine ng-valid">
                                <!---->
                                <!---->
                            </div>
                            <div class="fv-row mb-8"><label
                                    class="form-label">Business Email</label><input
                                    formcontrolname="email" name="business_email"
                                    placeholder="Dunesfactory@gmail.com" value=""
                                    class="form-control form-control-lg form-control-solid ng-untouched ng-pristine ng-valid">
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-stack">
                        <div class="mr-2"><a
                                routerlink="{{'/workspace/add'}}" type="button"
                                class="btn btn-lg btn-primary me-3" href="{{'/workspace/add'}}"><span
                                    class="svg-icon svg-icon-4 me-1"><svg
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="11"
                                            width="13" height="2" rx="1" fill="currentColor"></rect>
                                        <path
                                            d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                            fill="currentColor"></path>
                                    </svg></span>Back </a></div>
                        <div class="mr-2"><button type="submit"
                                class="btn btn-lg btn-light-primary me-3"> Skip </button></div><button
                            type="submit" class="btn btn-lg btn-primary"
                            data-kt-indicator="off"><span
                                class="indicator-label">Submit</span><span
                                class="indicator-progress">Please wait... <span
                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span></button>
                    </div>
                </form>
            </div>
            <div class="flex-fill flex-center"><img alt=""
                    class="img-fluid rounded my-lg-19 mx-auto d-block h-500px"
                    src="assets/wrk_bill.png"></div>
        </div>
    </div>
</div>
@endsection
