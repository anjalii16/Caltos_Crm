@extends('layout/theme')

@section('content')
    <style>
        .card {
            transition: .5s
        }

        .hover-zoom:hover {

            box-shadow: -1px 1px 13px 3px #7d8280 !important;
        }
    </style>
    <div class="card">
        <!--begin::Card head-->
        <div class="card-header card-header-stretch">
            <!--begin::Title-->
            <div class="card-title d-flex align-items-center">
                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                <img alt="" class="mw-30px img-fluid fs-1" src="assets/treasure_box.png">
                <!--end::Svg Icon-->
                <h3 class="fw-bold m-0 text-gray-800">Treasure Box</h3>
            </div>
            <!--end::Title-->
            <!--begin::Toolbar-->
            <div class="card-toolbar m-0">
                <!--begin::Tab nav-->
                <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a id="kt_activity_Lead_tab" class="nav-link justify-content-center text-active-gray-800 active"
                            data-bs-toggle="tab" role="tab" href="#kt_activity_Lead" aria-selected="true">Lead</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="kt_activity_Expired_tab" class="nav-link justify-content-center text-active-gray-800"
                            data-bs-toggle="tab" role="tab" href="#kt_activity_Expired" aria-selected="false"
                            tabindex="-1">Expired</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800"
                            data-bs-toggle="tab" role="tab" href="#kt_activity_Followup" aria-selected="false"
                            tabindex="-1">Followup</a>
                    </li>

                </ul>
                <!--end::Tab nav-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card head-->
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Tab Content-->
            <div class="tab-content">
                <!--begin::Tab panel-->
                <div id="kt_activity_Lead" class="card-body p-0 tab-pane fade active show" role="tabpanel"
                    aria-labelledby="kt_activity_Lead_tab">

                    <div class="row row-cols-1 row-cols-sm-3 rol-cols-md-3 row-cols-lg-3">



                        <div class="col">

                            <div class="card rounded border hover-zoom">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->

                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-1 fw-bold text-gray-600 me-2 lh-1 ls-n2">Aditya
                                                Sharma(13401)</span>
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">



                                                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
                                                    data-bs-placement="top" title="Add To Lead" data-bs-toggle="tooltip"
                                                    data-bs-custom-class="tooltip-inverse">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->

                                                    <i height="24" width="24" class="bi bi-gem fs-1"></i>

                                                    <!--end::Svg Icon-->
                                                </div>

                                            </span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            {{-- <span class="badge badge-light-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13"
                                                            height="2" rx="1" transform="rotate(90 13 6)"
                                                            fill="currentColor"></rect>
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span> --}}
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        {{-- <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span> --}}
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->

                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Date</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">7-1-2023</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->

                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Query For</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Whatsap Marketing</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Reports To</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Navin Swami,978478733</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>

                        </div>

                        <div class="col">

                            <div class="card rounded border hover-zoom">

                                <div class="card-header">

                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">


                                            <span class="fs-1 fw-bold text-gray-600 me-2 lh-1 ls-n2">Aditya
                                                Sharma(13401)</span>
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">



                                                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
                                                    data-bs-placement="top" title="Add To Lead" data-bs-toggle="tooltip"
                                                    data-bs-custom-class="tooltip-inverse">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->

                                                    <i height="24" width="24" class="bi bi-gem fs-1"></i>

                                                    <!--end::Svg Icon-->
                                                </div>

                                            </span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            {{-- <span class="badge badge-light-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13"
                                                            height="2" rx="1" transform="rotate(90 13 6)"
                                                            fill="currentColor"></rect>
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span> --}}
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        {{-- <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span> --}}
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->

                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Date</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">7-1-2023</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->

                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Query For</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Whatsap Marketing</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Reports To</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Navin Swami,978478733</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>

                        </div>
                        <div class="col">

                            <div class="card rounded border hover-zoom">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->

                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-1 fw-bold text-gray-600 me-2 lh-1 ls-n2">Aditya
                                                Sharma(13401)</span>
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">



                                                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
                                                    data-bs-placement="top" title="Add To Lead" data-bs-toggle="tooltip"
                                                    data-bs-custom-class="tooltip-inverse">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->

                                                    <i height="24" width="24" class="bi bi-gem fs-1"></i>

                                                    <!--end::Svg Icon-->
                                                </div>

                                            </span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            {{-- <span class="badge badge-light-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13"
                                                            height="2" rx="1" transform="rotate(90 13 6)"
                                                            fill="currentColor"></rect>
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span> --}}
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        {{-- <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span> --}}
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->

                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Date</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">7-1-2023</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->

                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Query For</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Whatsap Marketing</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Reports To</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Navin Swami,978478733</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>

                        </div>
                        <!--end::Col-->
                    </div>

                </div>

                <div id="kt_activity_Expired" class="card-body p-0 tab-pane fade" role="tabpanel"
                    aria-labelledby="kt_activity_Expired_tab">

                    <div class="row row-cols-1 row-cols-sm-3 rol-cols-md-3 row-cols-lg-3">

                        <div class="col">

                            <div class="card rounded border hover-zoom">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->

                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-1 fw-bold text-gray-600 me-2 lh-1 ls-n2">Aditya
                                                Sharma(13401)</span>
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">





                                            </span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            {{-- <span class="badge badge-light-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13"
                                                            height="2" rx="1" transform="rotate(90 13 6)"
                                                            fill="currentColor"></rect>
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span> --}}
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        {{-- <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span> --}}
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->

                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Date</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">7-1-2023</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->

                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Total Amount Paid</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">4,500</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Reports To</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Navin Swami,978478733</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>

                        </div>

                        <div class="col">

                            <div class="card rounded border hover-zoom">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->

                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-1 fw-bold text-gray-600 me-2 lh-1 ls-n2">Aditya
                                                Sharma(13401)</span>
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">





                                            </span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            {{-- <span class="badge badge-light-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13"
                                                            height="2" rx="1" transform="rotate(90 13 6)"
                                                            fill="currentColor"></rect>
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span> --}}
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        {{-- <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span> --}}
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->

                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Date</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">7-1-2023</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->

                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Total Amount Paid</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">4,500</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Reports To</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Navin Swami,978478733</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>

                        </div>
                        <div class="col">

                            <div class="card rounded border hover-zoom">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->

                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-1 fw-bold text-gray-600 me-2 lh-1 ls-n2">Aditya
                                                Sharma(13401)</span>
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">





                                            </span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            {{-- <span class="badge badge-light-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13"
                                                            height="2" rx="1" transform="rotate(90 13 6)"
                                                            fill="currentColor"></rect>
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span> --}}
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        {{-- <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span> --}}
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->

                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Date</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">7-1-2023</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->

                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Total Amount Paid</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">4,500</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Reports To</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Navin Swami,978478733</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>

                        </div>

                    </div>
                </div>

                <div id="kt_activity_Followup" class="card-body p-0 tab-pane fade" role="tabpanel"
                    aria-labelledby="kt_activity_Followup_tab">
                    <div class="row row-cols-1 row-cols-sm-3 rol-cols-md-3 row-cols-lg-3">
                        <div class="col">

                            <div class="card rounded border hover-zoom">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->

                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-1 fw-bold text-gray-600 me-2 lh-1 ls-n2">Aditya
                                                Sharma(13401)</span>
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">



                                                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
                                                    data-bs-placement="top" title="Followup" data-bs-toggle="tooltip"
                                                    data-bs-custom-class="tooltip-inverse">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->

                                                    <img alt="" class="mw-24px img-fluid"
                                                        src="assets/followup.png">

                                                    <!--end::Svg Icon-->
                                                </div>

                                            </span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            {{-- <span class="badge badge-light-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13"
                                                            height="2" rx="1" transform="rotate(90 13 6)"
                                                            fill="currentColor"></rect>
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span> --}}
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        {{-- <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span> --}}
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->

                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Follow up Date Time</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">7-1-2023</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->

                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Lead Type</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">4</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Ticket Giver</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Navin Swami,978478733</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Ticket Taker</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Mansukh Rajpurohit</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Ticket Account Manager</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Mansukh Rajpurohit</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>

                        </div>

                        <div class="col">

                            <div class="card rounded border hover-zoom">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->

                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-1 fw-bold text-gray-600 me-2 lh-1 ls-n2">Aditya
                                                Sharma(13401)</span>
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">



                                                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
                                                    data-bs-placement="top" title="Followup" data-bs-toggle="tooltip"
                                                    data-bs-custom-class="tooltip-inverse">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->

                                                    <img alt="" class="mw-24px img-fluid"
                                                        src="assets/followup.png">

                                                    <!--end::Svg Icon-->
                                                </div>

                                            </span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            {{-- <span class="badge badge-light-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13"
                                                            height="2" rx="1" transform="rotate(90 13 6)"
                                                            fill="currentColor"></rect>
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span> --}}
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        {{-- <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span> --}}
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->

                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Follow up Date Time</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">7-1-2023</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->

                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Lead Type</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">4</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Ticket Giver</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Navin Swami,978478733</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Ticket Taker</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Mansukh Rajpurohit</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Ticket Account Manager</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Mansukh Rajpurohit</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>

                        </div>
                        <div class="col">

                            <div class="card rounded border hover-zoom">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->

                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-1 fw-bold text-gray-600 me-2 lh-1 ls-n2">Aditya
                                                Sharma(13401)</span>
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">



                                                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
                                                    data-bs-placement="top" title="Followup" data-bs-toggle="tooltip"
                                                    data-bs-custom-class="tooltip-inverse">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->

                                                    <img alt="" class="mw-24px img-fluid"
                                                        src="assets/followup.png">

                                                    <!--end::Svg Icon-->
                                                </div>

                                            </span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            {{-- <span class="badge badge-light-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13"
                                                            height="2" rx="1" transform="rotate(90 13 6)"
                                                            fill="currentColor"></rect>
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span> --}}
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        {{-- <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span> --}}
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->

                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Follow up Date Time</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">7-1-2023</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->

                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Lead Type</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">4</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Ticket Giver</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Navin Swami,978478733</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Ticket Taker</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Mansukh Rajpurohit</div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Ticket Account Manager</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">Mansukh Rajpurohit</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>

                        </div>


                    </div>


                </div>

            </div>
            <!--end::Card body-->
        </div>
    @endsection
