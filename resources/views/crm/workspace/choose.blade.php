@extends('layout/theme')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body"><span><img alt="" class="mw-50px img-fluid"
                            src="{{ url('assets/hand.png') }}"></span>
                    <span class="fw-bold fs-1 me-5">Welcome</span>

                    <div class="row">
                        <div class="col-xxl-6 pt-3">
                            <div class="flex-fill">
                                <!---->
                                <div class="d-flex flex-column">

                                    <div class="d-flex flex-wrap">
                                        <div><img alt="" class="img-fluid mw-40px"
                                                src="{{ url('assets/smilemen.jpg') }}">
                                        </div>
                                        <div><span class="fw-bold fs-1 mx-2">Want to add new workspace?</span>

                                        </div>
                                        <div class="d-flex justify-content-start ms-auto"><span><a
                                                    class="btn btn-sm fw-bold btn-primary me-2"
                                                    href="{{ url('workspace/add') }}">Create New</a></span>
                                            <span class="fw-bold "> <button type="button" class="btn btn-primary btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_order">
                                                    Join Existing
                                                </button></span>
                                        </div>
                                    </div>
                                    <div class="p-2 btn-light fw-bold">Workspace for anju@gmail.com
                                    </div>

                                    <div class="d-flex flex-wrap my-5 border-bottom ng-star-inserted">
                                        <div><img alt="" class="img-fluid my mw-100px" src="./assets/smilemen.jpg">
                                        </div>
                                        <div><span class="fw-bold fs-1 mx-2">Sd</span>
                                            <p class="mx-4 text-muted">anju@gmail.com</p>
                                            <div class="symbol-group symbol-hover flex-nowrap">
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><span
                                                        class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                </div>
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><img alt="Pic"
                                                        src="assets/media/avatars/300-11.jpg"></div>
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><span
                                                        class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                </div>
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><img alt="Pic"
                                                        src="assets/media/avatars/300-2.jpg"></div>
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><span
                                                        class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                                </div>
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><img alt="Pic"
                                                        src="assets/media/avatars/300-12.jpg"></div>
                                                <p class="text-decoration-underline my-0">+42
                                                    Members</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start ms-auto"><span><a
                                                    class="btn btn-sm fw-bold btn-light-primary"
                                                    href="{{ url('dashboard') }}">Launch Clatos</a></span></div>
                                    </div>
                                    <!---->
                                    <div class="d-flex flex-wrap my-5 border-bottom ng-star-inserted">
                                        <div><img alt="" class="img-fluid my mw-100px" src="./assets/smilemen.jpg">
                                        </div>
                                        <div><span class="fw-bold fs-1 mx-2">Dunesfactory</span>
                                            <p class="mx-4 text-muted">anju@gmail.com</p>
                                            <div class="symbol-group symbol-hover flex-nowrap">
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><span
                                                        class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                </div>
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><img alt="Pic"
                                                        src="assets/media/avatars/300-11.jpg"></div>
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><span
                                                        class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                </div>
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><img alt="Pic"
                                                        src="assets/media/avatars/300-2.jpg"></div>
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><span
                                                        class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                                </div>
                                                <div data-bs-toggle="tooltip" data-kt-initialized="1"
                                                    class="symbol symbol-35px symbol-circle"><img alt="Pic"
                                                        src="assets/media/avatars/300-12.jpg"></div>
                                                <p class="text-decoration-underline my-0">+42
                                                    Members</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start ms-auto"><span><a
                                                    class="btn btn-sm fw-bold btn-light-primary"
                                                    href="{{ url('dashboard') }}">Launch Clatos</a></span></div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="flex-fill justify-content-end"><img alt="" class="float-xxl-end"
                                    src="{{ url('assets/chairmen.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
