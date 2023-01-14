@extends('layout/app')
@section('content')
<div class="card card-flush pt-3 mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2 class="fw-bold">Support Ticket View</h2>
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="btn btn-light-primary">
                  Preview Support Ticket</a>
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-1">
            <!--begin::Section-->
            <div class="mb-2">
                <!--begin::Title-->

                <!--end::Title-->
                <!--begin::Details-->
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="flex-equal me-5">
                        <!--begin::Details-->
                        <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
                            <!--begin::Row-->
                            <tbody>

                                <!--end::Row-->
                                <!--begin::Row-->
                                <tr>
                                    <td class="text-gray-400">Id</td>
                                    <td class="text-gray-800">20</td>
                                </tr>
                                <tr>
                                    <td class="text-gray-400">Subject</td>
                                    <td class="text-gray-800">Subject mention</td>
                                </tr>
                                   <tr>
                                    <td class="text-gray-400">Product</td>
                                    <td class="text-gray-800">Clatos</td>
                                </tr>

  <tr>
                                    <td class="text-gray-400">Attachement </td>
                                    <td class="text-gray-800">File</td>
                                </tr>


                                <!--end::Row-->
                                <!--begin::Row-->


                                <!--end::Row-->
                            </tbody>
                        </table>
                        <!--end::Details-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="flex-equal">
                        <!--begin::Details-->
                        <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
                            <!--begin::Row-->
                            <tbody>
                              <tr>
                                    <td class="text-gray-400">Preferred Mode Of Contact</td>
                                    <td class="text-gray-800">Type1</td>
                                </tr>
                                <tr>
                                    <td class="text-gray-400">Preferred Time</td>
                                    <td class="text-gray-800">Morning</td>
                                </tr>

                                <tr>
                                    <td class="text-gray-400">Message</td>
                                    <td class="text-gray-800">Message is Here</td>
                                </tr>


                            </tbody>
                        </table>


                    </div>

                </div>

            </div>



        </div>

    </div>
@endsection
