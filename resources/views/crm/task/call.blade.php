@extends('layout/theme')
@section('content')

    <head>
        <script>
            src =
                "https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js" >
        </script>


        <script id="rendered-js">
            function yesnoCheck() {
                if (document.getElementById('yesCheck').checked) {
                    document.getElementById('ifYes').style.visibility = 'visible';
                } else
                    document.getElementById('ifYes').style.visibility = 'hidden';

            }
            //# sourceURL=pen.js
        </script>

    </head>
    <div class id="kt_content_container" class="container-xxl my-3 content flex-column-fluid">
        <h3 class="px-lg-13 p-3 fs-1">Tasks</h3>
        <div class="container-xxl my-3 content flex-column-fluid">
            <div class=" card d-flex flex-column flex-md-row rounded border p-6">
                <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-200px"
                    role="tablist">
                    <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                        <a class="nav-link w-100 btn btn-flex btn-active-light-success active" data-bs-toggle="tab"
                            href="#kt_vtab_pane_4" aria-selected="true" role="tab">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-primary me-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class="d-flex flex-column align-items-start">
                                <span class="fs-4 fw-bold">Missed Task</span>
                                <span class="fs-7">Description</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                        <a class="nav-link w-100 btn btn-flex btn-active-light-info" data-bs-toggle="tab"
                            href="#kt_vtab_pane_5" aria-selected="false" role="tab" tabindex="-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen003.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.0079 2.6L15.7079 7.2L21.0079 8.4C21.9079 8.6 22.3079 9.7 21.7079 10.4L18.1079 14.4L18.6079 19.8C18.7079 20.7 17.7079 21.4 16.9079 21L12.0079 18.8L7.10785 21C6.20785 21.4 5.30786 20.7 5.40786 19.8L5.90786 14.4L2.30785 10.4C1.70785 9.7 2.00786 8.6 3.00786 8.4L8.30785 7.2L11.0079 2.6C11.3079 1.8 12.5079 1.8 13.0079 2.6Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class="d-flex flex-column align-items-start">
                                <span class="fs-4 fw-bold">Upcoming Task</span>
                                <span class="fs-7">Description</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item w-100" role="presentation">
                        <a class="nav-link w-100 btn btn-flex btn-active-light-danger" data-bs-toggle="tab"
                            href="#kt_vtab_pane_6" aria-selected="false" role="tab" tabindex="-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen017.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class="d-flex flex-column align-items-start">
                                <span class="fs-4 fw-bold">Today's Task</span>
                                <span class="fs-7">Description</span>
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="kt_vtab_pane_4" role="tabpanel">
                        <div class="card mb-3">
                            <div class="card-body pt-3 pb-0">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                    <!--begin: Pic-->
                                    <div class="me-7 mb-4">
                                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                            <div class="bi bi-telephone-fill fs-1 text-success"></div>

                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                        <!--begin::Title-->
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <!--begin::User-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Name-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="fs-7 ls-2 text-bold"><b>Call received
                                                            from Dunes Factory, +9100000000</b></div>
                                                </div>
                                                <!--end::Name-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">

                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->

                                                    <!--end::Svg Icon-->
                                                    <div><b>Last
                                                            Introduction</b>:20-10-2022,02:59PM</div>


                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Actions-->
                                            <div class="d-flex my-4">

                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->

                                                <!--end::Svg Icon-->
                                                <!--begin::Indicator label-->
                                                <button class="btn btn-light-primary btn-sm m-2"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="bi bi-telephone-fill    fs-1 fw-bold">

                                                    </i>
                                                </button>



                                                <div class="h-200px overflow-auto menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-white-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                    data-kt-menu="true">
                                                    <!--begin::Heading-->

                                                    <!--end::Heading-->
                                                    <!--begin::Menu item-->

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Karishma
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_feedback">

                                                            Chand
                                                            </button></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_closeticket">

                                                            Sonali
                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_closeticket">

                                                            Deepali
                                                            </button></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>




                                                <button class="btn btn-light-success btn-sm m-2"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="bi bi-whatsapp   fs-1  fw-bold "></i>
                                                </button>

                                                <div class="m-2">

                                                    <button class="btn btn-light-primary" data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">
                                                        <i
                                                            class="bi bi-list-task fs-1 fw-bold float-end rounded-circle"></i>
                                                    </button>

                                                    <!--begin::Menu 3-->
                                                    <div class="h-150px overflow-auto menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-white-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <!--begin::Heading-->

                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_comment">

                                                                Comment

                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_feedback">

                                                                Follow Up
                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_closeticket">

                                                                Close Ticket
                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Stats-->

                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Navs-->

                                    <!--begin::Navs-->
                                </div>
                            </div>






                        </div>
                        <div class="card mb-3">
                            <div class="card-body pt-9 pb-0">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                    <!--begin: Pic-->
                                    <div class="me-7 mb-4">
                                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                            <div class="bi bi-person-fill fs-1 text-primary"></div>

                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                        <!--begin::Title-->
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <!--begin::User-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Name-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="fs-7 ls-2 text-bold"><b>Call received
                                                            from Dunes Factory, +9100000000</b></div>
                                                </div>
                                                <!--end::Name-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">

                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->

                                                    <!--end::Svg Icon-->
                                                    <div><b>Last
                                                            Introduction</b>:20-10-2022,02:59PM</div>


                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Actions-->
                                            <div class="d-flex my-4">

                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->

                                                <!--end::Svg Icon-->
                                                <!--begin::Indicator label-->
                                                <button class="btn btn-light-primary btn-sm m-2"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="bi bi-telephone-fill    fs-1 fw-bold">

                                                    </i>
                                                </button>



                                                <div class="h-200px overflow-auto menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-white-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                    data-kt-menu="true">
                                                    <!--begin::Heading-->

                                                    <!--end::Heading-->
                                                    <!--begin::Menu item-->

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Karishma
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_feedback">

                                                            Chand
                                                            </button></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_closeticket">

                                                            Sonali
                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_closeticket">

                                                            Deepali
                                                            </button></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>




                                                <button class="btn btn-light-success btn-sm m-2"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="bi bi-whatsapp   fs-1  fw-bold "></i>
                                                </button>

                                                <div class="m-2">

                                                    <button class="btn btn-light-primary" data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">
                                                        <i
                                                            class="bi bi-list-task fs-1 fw-bold float-end rounded-circle"></i>
                                                    </button>

                                                    <!--begin::Menu 3-->
                                                    <div class="h-150px overflow-auto menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-white-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <!--begin::Heading-->

                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_comment">

                                                                Comment

                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_feedback">

                                                                Follow Up
                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_closeticket">

                                                                Close Ticket
                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Stats-->

                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Navs-->

                                    <!--begin::Navs-->
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body pt-9 pb-0">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-wrap flex-sm-nowrap">
                                        <!--begin: Pic-->
                                        <div class="me-7 mb-4">
                                            <div
                                                class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                <div class="bi bi-person-fill fs-1 text-warning"></div>

                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <!--begin::Title-->
                                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                                <!--begin::User-->
                                                <div class="d-flex flex-column">
                                                    <!--begin::Name-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="fs-7 ls-2 text-bold"><b>New Lead Action</b></div>
                                                    </div>
                                                    <!--end::Name-->
                                                    <!--begin::Info-->

                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Actions-->
                                                <div class="d-flex my-4">

                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->

                                                    <!--end::Svg Icon-->
                                                    <!--begin::Indicator label-->
                                                    <button class="btn btn-light-primary btn-sm m-2"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="bi bi-telephone-fill    fs-1 fw-bold">

                                                        </i>
                                                    </button>



                                                    <div class="h-200px overflow-auto menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-white-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <!--begin::Heading-->

                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                                Karishma
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_comment">

                                                                Naveen

                                                                </button></a>
                                                        </div>
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_comment">

                                                                Naveen

                                                                </button></a>
                                                        </div>
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_comment">

                                                                Naveen

                                                                </button></a>
                                                        </div>
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_comment">

                                                                Naveen

                                                                </button></a>
                                                        </div>
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_comment">

                                                                Naveen

                                                                </button></a>
                                                        </div>
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_comment">

                                                                Naveen

                                                                </button></a>
                                                        </div>

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_feedback">

                                                                Chand
                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_closeticket">

                                                                Sonali
                                                                </button></a>
                                                        </div>
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_closeticket">

                                                                Deepali
                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>




                                                    <button class="btn btn-light-success btn-sm m-2"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="bi bi-whatsapp   fs-1  fw-bold "></i>
                                                    </button>

                                                    <div class="m-2">

                                                        <button class="btn btn-light-primary" data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i
                                                                class="bi bi-list-task fs-1 fw-bold float-end rounded-circle"></i>
                                                        </button>

                                                        <!--begin::Menu 3-->
                                                        <div class="h-150px overflow-auto menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-white-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                            data-kt-menu="true">
                                                            <!--begin::Heading-->

                                                            <!--end::Heading-->
                                                            <!--begin::Menu item-->

                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->

                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3"> <a href="#"
                                                                    class="menu-link flex-stack px-3"
                                                                    style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_comment">

                                                                    Comment

                                                                    </button></a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3"> <a href="#"
                                                                    class="menu-link flex-stack px-3"
                                                                    style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_feedback">

                                                                    Follow Up
                                                                    </button></a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3"> <a href="#"
                                                                    class="menu-link flex-stack px-3"
                                                                    style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_closeticket">

                                                                    Close Ticket
                                                                    </button></a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu 3-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Stats-->

                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Navs-->

                                        <!--begin::Navs-->
                                    </div>
                                </div>






                            </div>





                        </div>
                        <!-- next 5 no -->

                    </div>
                    <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                        <div class="card mb-3">
                            <div class="card-body pt-3 pb-0">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                    <!--begin: Pic-->
                                    <div class="me-7 mb-4">
                                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                            <div class="bi bi-telephone-fill fs-1 text-primary"></div>

                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                        <!--begin::Title-->
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <!--begin::User-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Name-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="fs-7 ls-2 text-bold"><b>Call received
                                                            from Dunes Factory, +9100000000</b></div>
                                                </div>
                                                <!--end::Name-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">

                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->

                                                    <!--end::Svg Icon-->
                                                    <div><b>Last
                                                            Introduction</b>:20-10-2022,02:59PM</div>


                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Actions-->
                                            <div class="d-flex my-4">

                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->

                                                <!--end::Svg Icon-->
                                                <!--begin::Indicator label-->
                                                <button class="btn btn-light-primary btn-sm m-2"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="bi bi-telephone-fill    fs-1 fw-bold">

                                                    </i>
                                                </button>



                                                <div class="h-200px overflow-auto menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-white-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                    data-kt-menu="true">
                                                    <!--begin::Heading-->

                                                    <!--end::Heading-->
                                                    <!--begin::Menu item-->

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Karishma
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_feedback">

                                                            Chand
                                                            </button></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_closeticket">

                                                            Sonali
                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_closeticket">

                                                            Deepali
                                                            </button></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>




                                                <button class="btn btn-light-success btn-sm m-2"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="bi bi-whatsapp   fs-1  fw-bold "></i>
                                                </button>

                                                <div class="m-2">

                                                    <button class="btn btn-light-primary" data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">
                                                        <i
                                                            class="bi bi-list-task fs-1 fw-bold float-end rounded-circle"></i>
                                                    </button>

                                                    <!--begin::Menu 3-->
                                                    <div class="h-150px overflow-auto menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-white-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <!--begin::Heading-->

                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_comment">

                                                                Comment

                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_feedback">

                                                                Follow Up
                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_closeticket">

                                                                Close Ticket
                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Stats-->

                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Navs-->

                                    <!--begin::Navs-->
                                </div>
                            </div>






                        </div>
                    </div>
                    <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                        <div class="card mb-3">
                            <div class="card-body pt-9 pb-0">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                    <!--begin: Pic-->
                                    <div class="me-7 mb-4">
                                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                            <div class="bi bi-telephone-fill fs-1 text-danger"></div>

                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                        <!--begin::Title-->
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <!--begin::User-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Name-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="fs-7 ls-2 text-bold"><b>Call received
                                                            from Dunes Factory, +9100000000</b></div>
                                                </div>
                                                <!--end::Name-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">

                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->

                                                    <!--end::Svg Icon-->
                                                    <div><b>Last
                                                            Introduction</b>:20-10-2022,02:59PM</div>


                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Actions-->
                                            <div class="d-flex my-4">

                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->

                                                <!--end::Svg Icon-->
                                                <!--begin::Indicator label-->
                                                <button class="btn btn-light-primary btn-sm m-2"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="bi bi-telephone-fill    fs-1 fw-bold">

                                                    </i>
                                                </button>



                                                <div class="h-200px overflow-auto menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-white-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                    data-kt-menu="true">
                                                    <!--begin::Heading-->

                                                    <!--end::Heading-->
                                                    <!--begin::Menu item-->

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Karishma
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_comment">

                                                            Naveen

                                                            </button></a>
                                                    </div>

                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_feedback">

                                                            Chand
                                                            </button></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_closeticket">

                                                            Sonali
                                                            </button></a>
                                                    </div>
                                                    <div class="menu-item px-3"> <a href="#"
                                                            class="menu-link flex-stack px-3" style="color:rgb(7, 1, 1);"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_closeticket">

                                                            Deepali
                                                            </button></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>




                                                <button class="btn btn-light-success btn-sm m-2"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="bi bi-whatsapp   fs-1  fw-bold "></i>
                                                </button>

                                                <div class="m-2">

                                                    <button class="btn btn-light-primary" data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">
                                                        <i
                                                            class="bi bi-list-task fs-1 fw-bold float-end rounded-circle"></i>
                                                    </button>

                                                    <!--begin::Menu 3-->
                                                    <div class="h-150px overflow-auto menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-white-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <!--begin::Heading-->

                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_comment">

                                                                Comment

                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_feedback">

                                                                Follow Up
                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3"> <a href="#"
                                                                class="menu-link flex-stack px-3"
                                                                style="color:rgb(7, 1, 1);" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_closeticket">

                                                                Close Ticket
                                                                </button></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Stats-->

                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Navs-->

                                    <!--begin::Navs-->
                                </div>
                            </div>






                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  <div class="row">
                                                                                                                                                                                                                                            <div class="col-4 col-md-4">.col-6 .col-md-4</div>
                                                                                                                                                                                                                                            <div class="col-4 col-md-4">.col-6 .col-md-4</div>
                                                                                                                                                                                                                                            <div class="col-4 col-md-4">.col-6 .col-md-4</div>
                                                                                                                                                                                                                                          </div>-->
    <div class id="kt_content_container" class="container-xxl my-3 content flex-column-fluid">

        <div class="container-xxl my-3 content flex-column-fluid">






            <!-- next 6-->


        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_comment">
        <div class="modal-dialog top-25">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Comment Form</h2>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">User</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Comment</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                        </div>


                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_closeticket">
        <div class="modal-dialog top-25">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Close Ticket Form</h1>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">User</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Reason</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                        </div>


                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" tabindex="-1" id="kt_modal_feedback" id="center">
        <div class="modal-dialog top" style=" max-width:1200px; padding-left:10px;">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-4 mb-5px">
                            <h1>Follow Up And
                                Feedback Form</h1>
                        </a>
                        <!--end::Name-->
                        <!--begin::Email-->

                        <!--end::Email-->
                    </div>

                    <!--begin::Close-->

                    <!--end::Close-->
                </div>


                <div class="modal-body">



                    <!-- form -->


                    <div class="card">
                        <!--begin::Card header-->

                        <!--end::Card header-->
                        <!--begin::Form-->
                        <form id="kt_project_settings_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            novalidate="novalidate">
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <!--begin::Row-->

                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <div class="fs-6 fw-semibold mt-2 mb-3">User</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                        <input type="text" class="form-control form-control-solid" name="name"
                                            value="satish">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <div class="fs-6 fw-semibold mt-2 mb-3">Rate Lead</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-9 fv-row fv-plugins-icon-container">



                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Option 1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">Option 2</label>
                                        </div>

                                    </div>
                                </div>


                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <div class="fs-6 fw-semibold mt-2 mb-3">Remark </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                        <textarea name="remark" class="form-control form-control-solid h-150px">Organize your thoughts with an outline. Here’s the outlining strategy I use. I promise it works like a charm. Not only will it make writing your blog post easier, it’ll help you make your message</textarea>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--begin::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->







                                <div class="row mb-8 pt-lg-2px">
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <div class="fs-6 fw-semibold mt-2 mb-3">Follow Up</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"
                                                name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"
                                                name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </div>




                                    <div id="ifYes" style="visibility: hidden;">

                                        <div class="row mb-8" class="required">
                                            <!--begin::Col-->
                                            <div class="col-xl-3">
                                                <div class="fs-6 fw-semibold mt-2 mb-3"> Follow up Date & Time</div>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-5">
                                                <div class="input-group date" id="datepicker">
                                                    <input
                                                        class="form-control form-control-solid fw-bold pe-5 flatpickr-input"
                                                        placeholder="Select date & Time" name="invoice_due_date"
                                                        type="text" readonly="readonly" id="kt_datepicker_3">

                                                </div>
                                            </div>
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




                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row mb-8" class="required">
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-semibold mt-2 mb-3">Follow Up Agent</div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">Ajit Singh</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">Anju Soni</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">Deepika</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">sumit</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">Tanvi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->

                            <!--end::Row-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->

                        <!--end::Card footer-->
                        <input type="hidden">
                        <div></div>
                    </form>
                    <!--end:Form-->
                </div>



                <!-- form -->












            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" tabindex="-1" id="kt_modal_addnewlead" id="center">
    <div class="modal-dialog top" style=" max-width:1200px; padding-left:10px;">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex flex-column">
                    <!--begin::Name-->
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-2 mb-2px">
                        <h1>Follow Up And
                            Feedback Form</h1>
                    </a>
                    <!--end::Name-->
                    <!--begin::Email-->

                    <!--end::Email-->
                </div>

                <!--begin::Close-->

                <!--end::Close-->
            </div>


            <div class="modal-body">



                <!-- form -->


                <div class="card">
                    <!--begin::Card header-->

                    <!--end::Card header-->
                    <!--begin::Form-->
                    <form id="kt_project_settings_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        novalidate="novalidate">
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->

                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-1 mb-1">Name</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-1 mb-1">Company</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-1 mb-1">Mobile</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-1 mb-1">Email</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-1 mb-1">Gst</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-1 mb-1">City</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-1">State</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-1">Country</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-1">Lead For</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">



                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Product 1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Product 2</label>
                                    </div>

                                </div>
                            </div>


                            <!--end::Row-->
                            <!--begin::Row-->

                            <!--end::Row-->
                            <!--begin::Row-->

                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-1">Lead Source</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">



                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Facebook Adds</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Google Ads</label>
                                    </div>

                                </div>
                            </div>




                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-1">Account Manager</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">



                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Ajit Singh</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Rupen</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Rupen</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Rupen</label>
                                    </div>

                                </div>
                            </div>








                            <!--end::Row-->
                            <!--begin::Row-->

                            <!--end::Row-->
                            <!--begin::Row-->

                            <!--end::Row-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->

                        <!--end::Card footer-->

                    </form>
                    <!--end:Form-->
                </div>



                <!-- form -->












            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" tabindex="-1" id="kt_modal_5" id="center">
    <div class="modal-dialog top" style=" max-width:1200px; padding-left:10px;">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex flex-column">
                    <!--begin::Name-->
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-4 mb-5px">
                        <h1>Follow Up And
                            Feedback Form</h1>
                    </a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <a href="#" class="fw-semibold text-gray-600 text-hover-primary">Add</a>
                    <!--end::Email-->
                </div>

                <!--begin::Close-->

                <!--end::Close-->
            </div>


            <div class="modal-body">



                <!-- form -->


                <div class="card">
                    <!--begin::Card header-->

                    <!--end::Card header-->
                    <!--begin::Form-->
                    <form id="kt_project_settings_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        novalidate="novalidate">
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->

                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-3">Name</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-3">Company</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-3">Mobile</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-3">Email</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-3">Gst</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-3">City</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-3">State</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-3">Country</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        value="satish">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-3">Lead For</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">



                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Product 1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Product 2</label>
                                    </div>

                                </div>
                            </div>


                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-3">Remark </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <textarea name="remark" class="form-control form-control-solid h-150px">Organize your thoughts with an outline. Here’s the outlining strategy I use. I promise it works like a charm. Not only will it make writing your blog post easier, it’ll help you make your message</textarea>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--begin::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->







                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-semibold mt-2 mb-3">Follow Up</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1" />
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>








                            <!--end::Row-->
                            <!--begin::Row-->

                            <!--end::Row-->
                            <!--begin::Row-->

                            <!--end::Row-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->

                        <!--end::Card footer-->

                    </form>
                    <!--end:Form-->
                </div>



                <!-- form -->












            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
