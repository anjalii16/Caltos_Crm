@extends('layout/theme')
@section('content')
    <div class="d-flex justify-content-between">
        <div class="d-flex ">
            <div class="p-2">
                <h1 style="text-color:grey">Leads & Customers</h1>
            </div>
        </div>
        <div class="d-flex ">
            <div class="p-2">
                <button type="button" class="btn  btn-sm btn-primary" data-kt-menu-trigger="click"
                    data-kt-menu-placement="bottom-end">

                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    Filter
                </button>

                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px p-5" data-kt-menu="true">

                    <div class="px-7">
                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                    </div>

                    <div class="separator border-gray-200"></div>




                    <div class="px-7 py-5" data-kt-subscription-table-filter="form">

                        <div class="mb-10">
                            <label class="form-label fs-6 fw-semibold">Month:</label>
                            <select name="business_type" formcontrolname="natureOfBussiness" data-control="select2"
                                data-placeholder="Select..." data-allow-clear="true" data-hide-search="true"
                                class="form-select form-select-lg form-select-solid ng-untouched ng-pristine ng-valid">
                                <option></option>
                                <option value="jan">January</option>
                                <option value="feb">February</option>
                                <option value="mar">March</option>
                                <option value="apr">April</option>
                                <option value="may">May</option>
                                <option value="jun">June</option>
                                <option value="jul">July</option>
                                <option value="aug">August</option>
                                <option value="sep">September</option>
                                <option value="oct">October</option>
                                <option value="nov">November</option>
                                <option value="dec">December</option>
                            </select>

                        </div>






                        <div class="mb-10">
                            <label class="form-label fs-6 fw-semibold">Status:</label>
                            <select name="business_type" formcontrolname="natureOfBussiness" data-control="select2"
                                data-placeholder="Select..." data-allow-clear="true" data-hide-search="true"
                                class="form-select form-select-lg form-select-solid ng-untouched ng-pristine ng-valid">
                                <option></option>

                                <option value="Active">Active</option>
                                <option value="Expiring">Expiring</option>
                                <option value="Suspended">Suspended</option>
                            </select>

                        </div>

                        <div class="mb-10">
                            <label class="form-label fs-6 fw-semibold">Billing Method:</label>
                            <select name="business_type" formcontrolname="natureOfBussiness" data-control="select2"
                                data-placeholder="Select..." data-allow-clear="true" data-hide-search="true"
                                class="form-select form-select-lg form-select-solid ng-untouched ng-pristine ng-valid">
                                <option></option>

                                <option value="Active">Texable</option>
                                <option value="Expiring">Non Teaxable</option>

                            </select>

                        </div>

                        <div class="mb-10">
                            <label class="form-label fs-6 fw-semibold">Product:</label>
                            <select name="business_type" formcontrolname="natureOfBussiness" data-control="select2"
                                data-placeholder="Select..." data-allow-clear="true" data-hide-search="true"
                                class="form-select form-select-lg form-select-solid ng-untouched ng-pristine ng-valid">
                                <option></option>

                                <option value="Active">Product 1</option>
                                <option value="Expiring">Product 2</option>
                                <option value="Suspended">Product 3</option>
                            </select>

                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                data-kt-menu-dismiss="true" data-kt-subscription-table-filter="reset">Reset</button>
                            <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true"
                                data-kt-subscription-table-filter="filter">Apply</button>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="card mb-4 mb-xl-2 p-2">
        <div class="card-header ribbon ribbon-end ribbon-clip">
            <div class="ribbon-label">
                Customer
                <span class="ribbon-inner bg-success"></span>
            </div>
            <div class="d-flex justify-content-between align-items-start flex-wrap ribbon ribbon-start">
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-end"><a href="#"
                                class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">Duens
                                Factory</a>
                        </div>
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                            data-popper-placement="bottom-end" data-kt-menu="true" style="">
                            <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                style="background-image:url('/metronic8/demo1/assets/media/misc/menu-header-bg.jpg')">
                                <div class="card card-flush h-lg-100 p-3">
                                    <div class="d-flex flex-column me-2">

                                        <div class="d-flex align-items-center">
                                            <div class="fw-semibold">
                                                <h1>Duens Factory</h1>


                                                </a>

                                            </div>
                                            <div class="symbol symbol-30px me-5">
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                            fill="white"></path>
                                                    </svg>
                                                </span>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="card-body">
                                        <!--begin::Files-->
                                        <div class="d-flex flex-column mb-1">

                                            <div class="d-flex align-items-center">

                                                <div class="symbol symbol-30px me-5">
                                                    <span class="svg-icon svg-icon-1 ms-2 me-0">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary"
                                                        href="#">Gen Date:

                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">26 June 2021
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="d-flex flex-column mb-1">
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="svg-icon svg-icon-1 ms-2 me-0">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary"
                                                        href="#">Next Followup:

                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">03-November-2022
                                                            02:54:00 PM
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="d-flex flex-column mb-1">
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div width="24" height="24" class="symbol symbol-30px me-5">
                                                    <span class="svg-icon svg-icon-1 ms-2 me-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                            <path
                                                                d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary"
                                                        href="#">Balance:

                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">00
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="d-flex flex-column mb-1">
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="svg-icon svg-icon-1 ms-2 me-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="currentColor" class="bi bi-percent"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary"
                                                        href="#">GSTIN:

                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">00
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="d-flex flex-column mb-1">
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span width="24" height="24"
                                                        class="svg-icon svg-icon-1 ms-2 me-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="currentColor" class="bi bi-geo-alt-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary"
                                                        href="#">Address:

                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Rani
                                                            Bazar,334001,Bikaner,Rajasthan,India
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="d-flex flex-column mb-1">
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span width="24" height="24"
                                                        class="svg-icon svg-icon-1 ms-2 me-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary"
                                                        href="#">Query For:

                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Whatsap
                                                            Marketing
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="d-flex flex-column mb-1">
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span width="24" height="24"
                                                        class="svg-icon svg-icon-1 ms-2 me-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-hand-index-thumb" viewBox="0 0 16 16">
                                                            <path
                                                                d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z" />
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary"
                                                        href="#">Lead Source:

                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">website
                                                            Enquiry
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="d-flex flex-column mb-1">
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span width="24" height="24"
                                                        class="svg-icon svg-icon-1 ms-2 me-0">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary"
                                                        href="#">Lead Specification:

                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">00
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="d-flex flex-column mb-1">
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span width="24" height="24"
                                                        class="svg-icon svg-icon-1 ms-2 me-0">
                                                        <span class="svg-icon svg-icon-2 svg-icon-md-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                                                    fill="currentColor"></path>
                                                                <path opacity="0.3"
                                                                    d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                                                    fill="currentColor"></path>
                                                                <path opacity="0.3"
                                                                    d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>

                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary"
                                                        href="#">Bussiness Nature:

                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">d
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>


                                        </div>


                                    </div>

                                </div>


                            </div>

                        </div>
                        <span class="badge badge-success me-2" data-bs-placement="top" title="Assign To"
                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse">chand Hissaria</span>
                        <span class="badge badge-sm badge-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Bookmark" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse">
                            Bookmark
                            </a></span>


                        <span class="badge badge-sm badge-warning me-2 " data-bs-placement="top" title="Cold"
                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse">
                            <!-- <i class="bi bi-thermometer-snow text-white "></i>--> Cold
                            </a>
                        </span>
                        <span class="badge badge-sm badge-success me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Junk" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse">
                            <!-- <i class="bi bi-person-x-fill text-white"></i>--> Junk
                            </a>
                        </span>
                        <span class="badge badge-sm badge-info me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Vip" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse">
                            <!--     <i class="bi bi-layers-fill text-white"></i> --> Vip
                            </a>
                        </span>
                        <span class="badge badge-sm badge-danger me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Block" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse">
                            <!--   <i class="bi-door-closed text-white"></i> --> Block
                            </a>
                        </span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-wrap fw-semibold fs-6 mt-3">

                            <a href="#"
                                class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">

                                <span class="svg-icon svg-icon-4 me-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                SF, Bay Area
                            </a>
                            <a href="#"
                                class="d-flex align-items-center text-gray-400 text-hover-primary mb-2 me-2">

                                <span class="svg-icon svg-icon-4 me-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                max@kt.com
                            </a>
                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">



                                <span class="badge badge-pill badge-primary">In Progress</span>


                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="card-body pt-3 pb-0">
            <div class="ribbon ribbon-triangle ribbon-bottom-start border-danger"data-kt-initialized="1"  >

                <a data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Edit Lead"  href="{{url('lead/edit')}}" class="ribbon-icon mt-0 ms-n6">
                    <i class="las la-highlighter fs-2 text-white"></i>
                </a>

            </div>
            <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                <li class="nav-item mb-3 " role="presentation">
                    <span class="menu-link flex-stack" class="d-flex align-items-center  me-5 mb-2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('order/list') }}" class="btn btn-light-success btn-sm "><i
                                    class="	fas fa-shopping-basket"></i>Orders</a>
                            <a href="{{ url('order/add') }}" class="btn btn-light-success btn-sm">+</a>
                        </div>
                    </span>
                </li>
                <li class="nav-item mb-3 " role="presentation">
                    <span class="menu-link flex-stack" class="d-flex align-items-center  me-5 mb-2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('transaction/list') }}" class="btn btn-light-primary btn-sm "><i
                                    class="fas fa-money-check"></i>transaction</a>
                            <a href="{{ url('transaction/add') }}" class="btn btn-light-primary btn-sm">+
                            </a>
                        </div>
                    </span>
                </li>

                <li class="nav-item mb-3 " role="presentation">
                    <span class="menu-link flex-stack" class="d-flex align-items-center  me-5 mb-2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('invoice/list') }}" class="btn btn-light-info btn-sm "><i
                                    class="fas fa-file-invoice"></i>Invoice</a>
                            <a href="{{ url('invoice/create') }}" class="btn btn-light-info btn-sm">+</a>
                        </div>
                    </span>
                </li>

                <li class="nav-item mb-3 " role="presentation">
                    <span class="menu-link flex-stack" class="d-flex align-items-center  me-5 mb-2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('document/list') }}" class="btn btn-light-warning btn-sm"><i
                                    class="	fa fa-file-text"></i>Documents</a>
                            <a href="{{ url('document/add') }}" class="btn btn-light-warning btn-sm">+</a>
                        </div>
                    </span>
                </li>

                <li class="nav-item mb-3 " role="presentation">
                    <span href="#" class="align-self-end" class="menu-link justify-content-end"
                        class="d-flex   me-5 mb-2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('contact/list') }}" class="btn btn-light-danger btn-sm"><i
                                    class="fa fa-user"></i>contacts</a>
                            <a href="{{ url('contact/add') }}" class="btn btn-light-danger btn-sm"> +
                            </a>
                        </div>
                    </span>
                </li>
                <li class="nav-item mb-3 " role="presentation">
                    <a href="{{ url('calls') }}" class="align-self-end" class="menu-link justify-content-end"
                        class="d-flex   me-5 mb-2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-light-primary btn-sm "><i
                                    class="fas fa-user"></i>Task</button>
                            <button type="button" class="btn btn-light-primary btn-sm ">+</button>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-3 " role="presentation">
                    <span class="badge badge-sm badge-light-secondary p-2" data-bs-toggle="tooltip"
                        id="kt_activities_toggle" data-bs-custom-class="tooltip-inverse" data-bs-placement="top"
                        title="Lead_Timeline">
                        <span class="svg-icon svg-icon-1 fs-1">
                            <i class="bi bi-alarm-fill  fs-1"></i>
                        </span>
                    </span>
                </li>
            </ul>
            <div class="flex-wrap flex-sm-nowrap">
                <div class="d-flex justify-content-end align-items-start flex-wrap m-4">


                    <div class="d-flex flex-row-reverse">
                        <a href="#" class=" btn btn-primary btn-sm  me-4" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_offer_a_deal" id="kt_activities_toggle"><i
                                class="bi bi-telephone"></i>Call</a>
                        <a href="#" class="btn btn-success btn-sm  me-4" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_offer_a_deal" id="kt_activities_toggle"><i
                                class="bi bi-whatsapp"></i>WhatsAap</a>
                        <a href="#" class="btn btn-warning btn-sm  me-4" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_offer_a_deal" id="kt_activities_toggle"><i
                                class="fas fa-sms"></i>Sms</a>
                        <a href="#" class="btn btn-danger btn-sm  me-4" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_offer_a_deal" id="kt_activities_toggle"><i
                                class="fa fa-envelope"></i>Email</a>

                    </div>


                </div>
                <div class="d-flex justify-content-end align-items-start flex-wrap mb-5">
                    <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400 d-flex mt-5 ">
                        <p> No of Interaction:6 &emsp; Last Interaction:21-10-2022</p>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
