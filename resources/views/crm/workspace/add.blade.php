@extends('layout/theme')
@section('content')



<div class="card mt-11 me-11 mx-11 mb-11">
    <div class="card-body">
        <div id="kt_create_account_stepper" class="stepper stepper-links d-flex">
            <div class="stepper-nav">
                <div class="stepper-item current">
                    <h3 class="stepper-title">Workspace Info</h3>
                </div>
                <div class="stepper-item">
                    <h3 class="stepper-title">Business Details</h3>
                </div>
                <form novalidate="novalidate" id="kt_create_account_form"
                    class="mx-auto mw-600px w-100 pt-15 pb-10 ng-untouched ng-pristine ng-valid">
                    <div data-kt-stepper-element="content" class="current">
                        <div class="w-100">
                            <div class="mb-8 fv-row"><label class="form-label mb-3">Company Name<span
                                        class="text-danger">*</span></label><input type="text"
                                    formcontrolname="companyName" name="companyName" placeholder="Company Name"
                                    value=""
                                    class="form-control form-control-lg form-control-solid ng-untouched ng-pristine ng-valid">
                                <!---->
                            </div>
                            <div class="mb-8 fv-row position-relative"><label class="form-label mb-3">Workspace URL<span
                                        class="text-danger">*</span></label><input type="text" formcontrolname="url"
                                    name="url" placeholder="Url" value=""
                                    class="form-control form-control-lg form-control-solid ng-untouched ng-pristine ng-valid">
                                <!---->
                                <!---->
                                <div>
                                    <!---->
                                </div>
                                <div>
                                    <div class="ng-star-inserted"><span class="text-danger"> </span></div>
                                    <!---->
                                </div><span
                                    class="position-absolute end-0 top-0 mt-14 me-12 fw-bold fs-6">.clatos.com</span>
                            </div>
                            <div class="mb-0 fv-row"><label class="d-flex align-items-center form-label mb-5">Workspace
                                    Plan</label>
                                <div class="mb-0">
                                    <div class="mb-0"><label class="d-flex flex-stack mb-5 cursor-pointer"><span
                                                class="d-flex align-items-center me-2"><span
                                                    class="symbol symbol-50px me-6"><span class="symbol-label"><span
                                                            class="svg-icon svg-icon-1 svg-icon-gray-600"><svg
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                                                                    fill="currentColor"></path>
                                                                <path opacity="0.3"
                                                                    d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                                                                    fill="currentColor"></path>
                                                            </svg></span></span></span><span
                                                    class="d-flex flex-column"><span
                                                        class="fw-bold text-gray-800 text-hover-primary fs-5">Free
                                                        Package</span><span class="fs-6 fw-semibold text-muted">Use
                                                        images to enhance your
                                                        post flow</span></span></span><span
                                                class="form-check form-check-custom form-check-solid"><input
                                                    formcontrolname="plan_id" type="radio" name="plan_id"
                                                    value="1"
                                                    class="form-check-input ng-untouched ng-pristine ng-valid"></span></label>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-stack pt-8"><a routerlink="/workspace" class="mr-2"
                            href="{{url('/chooseworkspace')}}"><button type="button" class="btn btn-lg btn-light-primary me-3"><span
                                    class="svg-icon svg-icon-4 me-1"></span>Back</button></a><a routerlink="/bussinessdetail" class="mr-2"
                            href="{{url('/workspace/bussinessdeatil/add')}}"><button type="button" class="btn btn-lg btn-light-primary me-3"><span
                                    class="svg-icon svg-icon-4 me-1"></span>Next</button></a></div>
                </form>
            </div>
            <div><img style="transform: scaleX(-1);" alt="" class="img-fluid ms-auto rotateImg"
                    src="assets/createnew.png">
            </div>
        </div>
    </div>
</div>
@endsection
