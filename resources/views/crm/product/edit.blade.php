@extends('layout/theme')
@section('content')
    <form id="kt_ecommerce_add_product_form"
        class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
        data-kt-redirect="/metronic8/demo1/../demo1/apps/ecommerce/catalog/products.html">
        <!--begin::Aside column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Thumbnail</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                        data-kt-image-input="true">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px"
                            style="background-image: url(/metronic8/demo1/assets/media//stock/ecommerce/78.gif)"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
                            data-bs-original-title="Change avatar" data-kt-initialized="1">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                            <input type="hidden" name="avatar_remove">
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
                            data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
                            data-bs-original-title="Remove avatar" data-kt-initialized="1">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files
                        are accepted</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Thumbnail settings-->
            <!--begin::Status-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Status</h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                    </div>
                    <!--begin::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Select2-->
                    <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                        data-hide-search="true" data-placeholder="Select an option"
                        id="kt_ecommerce_add_product_status_select"
                        data-select2-id="select2-data-kt_ecommerce_add_product_status_select" tabindex="-1"
                        aria-hidden="true" data-kt-initialized="1">
                        <option></option>
                        <option value="published" selected="selected" data-select2-id="select2-data-11-zhbt">Published
                        </option>
                        <option value="draft">Draft</option>
                        <option value="scheduled">Scheduled</option>
                        <option value="inactive">Inactive</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                        data-select2-id="select2-data-10-46y6" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single form-select mb-2" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                aria-labelledby="select2-kt_ecommerce_add_product_status_select-container"
                                aria-controls="select2-kt_ecommerce_add_product_status_select-container"><span
                                    class="select2-selection__rendered"
                                    id="select2-kt_ecommerce_add_product_status_select-container" role="textbox"
                                    aria-readonly="true" title="Published">Published</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set the product status.</div>
                    <!--end::Description-->
                    <!--begin::Datepicker-->
                    <div class="d-none mt-10">
                        <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date
                            and time</label>
                        <input class="form-control flatpickr-input" id="kt_ecommerce_add_product_status_datepicker"
                            placeholder="Pick date &amp; time" type="text" readonly="readonly">
                    </div>
                    <!--end::Datepicker-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Status-->
            <!--begin::Category & tags-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Product Details</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <!--begin::Label-->
                    <label class="form-label">Categories</label>
                    <!--end::Label-->
                    <!--begin::Select2-->
                    <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                        data-placeholder="Select an option" data-allow-clear="true" multiple=""
                        data-select2-id="select2-data-12-y6u0" tabindex="-1" aria-hidden="true"
                        data-kt-initialized="1">
                        <option></option>
                        <option value="Computers">Computers</option>
                        <option value="Watches">Watches</option>
                        <option value="Headphones">Headphones</option>
                        <option value="Footwear">Footwear</option>
                        <option value="Cameras">Cameras</option>
                        <option value="Shirts">Shirts</option>
                        <option value="Household">Household</option>
                        <option value="Handbags">Handbags</option>
                        <option value="Wines">Wines</option>
                        <option value="Sandals">Sandals</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                        data-select2-id="select2-data-13-19ey" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--multiple form-select mb-2" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                <ul class="select2-selection__rendered" id="select2-nza6-container"></ul><span
                                    class="select2-search select2-search--inline">
                                    <textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
                                        spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
                                        aria-describedby="select2-nza6-container" placeholder="Select an option" style="width: 100%;"></textarea>
                                </span>
                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7 mb-7">Add product to a category.</div>
                    <!--end::Description-->
                    <!--end::Input group-->
                    <!--begin::Button-->
                    <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/add-category.html"
                        class="btn btn-light-primary btn-sm mb-10">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="11" y="18" width="12" height="2"
                                    rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                <rect x="6" y="11" width="12" height="2" rx="1"
                                    fill="currentColor"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Create new category
                    </a>
                    <!--end::Button-->
                    <!--begin::Input group-->
                    <!--begin::Label-->
                    <label class="form-label d-block">Tags</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <tags class="tagify  form-control mb-2" tabindex="-1">
                        <tag title="new" contenteditable="false" spellcheck="false" tabindex="-1"
                            class="tagify__tag tagify--noAnim" value="new">
                            <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
                            <div><span class="tagify__tag-text">new</span></div>
                        </tag>
                        <tag title="trending" contenteditable="false" spellcheck="false" tabindex="-1"
                            class="tagify__tag tagify--noAnim" value="trending">
                            <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
                            <div><span class="tagify__tag-text">trending</span></div>
                        </tag>
                        <tag title="sale" contenteditable="false" spellcheck="false" tabindex="-1"
                            class="tagify__tag tagify--noAnim" value="sale">
                            <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
                            <div><span class="tagify__tag-text">sale</span></div>
                        </tag><span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder=""
                            class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                        ​
                    </tags><input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags"
                        class="form-control mb-2" value="new, trending, sale" tabindex="-1">
                    <!--end::Input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Add tags to a product.</div>
                    <!--end::Description-->
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category & tags-->
            <!--begin::Card widget 6-->
            <div class="card card-flush">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Currency-->
                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                            <!--end::Currency-->
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">2,420</span>
                            <!--end::Amount-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
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
                                <!--end::Svg Icon-->2.6%
                            </span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Average Daily Sales</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end px-0 pb-0">
                    <!--begin::Chart-->
                    <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px; min-height: 80px;">
                        <div id="apexchartsymmir2cr" class="apexcharts-canvas apexchartsymmir2cr apexcharts-theme-light"
                            style="width: 582px; height: 80px;"><svg id="SvgjsSvg1056" width="582" height="80"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG1058" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(53.34444444444444, 0)">
                                    <defs id="SvgjsDefs1057">
                                        <clipPath id="gridRectMaskymmir2cr">
                                            <rect id="SvgjsRect1061" width="575" height="89"
                                                x="-45.84444444444444" y="-4.5" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskymmir2cr"></clipPath>
                                        <clipPath id="nonForecastMaskymmir2cr"></clipPath>
                                        <clipPath id="gridRectMarkerMaskymmir2cr">
                                            <rect id="SvgjsRect1062" width="487.31111111111113" height="84"
                                                x="-2" y="-2" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG1092" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1093" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                        </g>
                                    </g>
                                    <g id="SvgjsG1081" class="apexcharts-grid">
                                        <g id="SvgjsG1082" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine1086" x1="-39.34444444444444" y1="20"
                                                x2="522.6555555555556" y2="20" stroke="#e1e3ea"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1087" x1="-39.34444444444444" y1="40"
                                                x2="522.6555555555556" y2="40" stroke="#e1e3ea"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1088" x1="-39.34444444444444" y1="60"
                                                x2="522.6555555555556" y2="60" stroke="#e1e3ea"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                        </g>
                                        <g id="SvgjsG1083" class="apexcharts-gridlines-vertical" style="display: none;">
                                        </g>
                                        <line id="SvgjsLine1091" x1="0" y1="80" x2="483.31111111111113"
                                            y2="80" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1090" x1="0" y1="1" x2="0"
                                            y2="80" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1063" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1064" class="apexcharts-series" rel="1" seriesName="Sales"
                                            data:realIndex="0">
                                            <path id="SvgjsPath1068"
                                                d="M -22.15175925925926 74.001 L -22.15175925925926 56.001 C -22.15175925925926 53.001 -19.15175925925926 50.001 -16.15175925925926 50.001 L 7.151759259259261 50.001 C 10.151759259259261 50.001 13.151759259259261 53.001 13.151759259259261 56.001 L 13.151759259259261 74.001 C 13.151759259259261 77.001 10.151759259259261 80.001 7.151759259259261 80.001 L -16.15175925925926 80.001 C -19.15175925925926 80.001 -22.15175925925926 77.001 -22.15175925925926 74.001 Z "
                                                fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskymmir2cr)"
                                                pathTo="M -22.15175925925926 74.001 L -22.15175925925926 56.001 C -22.15175925925926 53.001 -19.15175925925926 50.001 -16.15175925925926 50.001 L 7.151759259259261 50.001 C 10.151759259259261 50.001 13.151759259259261 53.001 13.151759259259261 56.001 L 13.151759259259261 74.001 C 13.151759259259261 77.001 10.151759259259261 80.001 7.151759259259261 80.001 L -16.15175925925926 80.001 C -19.15175925925926 80.001 -22.15175925925926 77.001 -22.15175925925926 74.001 Z "
                                                pathFrom="M -22.15175925925926 80.001 L -22.15175925925926 80.001 L 13.151759259259261 80.001 L 13.151759259259261 80.001 L 13.151759259259261 80.001 L 13.151759259259261 80.001 L 13.151759259259261 80.001 L -22.15175925925926 80.001 Z"
                                                cy="50" cx="17.65175925925926" j="0" val="30"
                                                barHeight="30" barWidth="44.30351851851852"></path>
                                            <path id="SvgjsPath1070"
                                                d="M 58.4000925925926 74.001 L 58.4000925925926 26.001 C 58.4000925925926 23.001 61.4000925925926 20.001 64.4000925925926 20.001 L 87.70361111111112 20.001 C 90.70361111111112 20.001 93.70361111111112 23.001 93.70361111111112 26.001 L 93.70361111111112 74.001 C 93.70361111111112 77.001 90.70361111111112 80.001 87.70361111111112 80.001 L 64.4000925925926 80.001 C 61.4000925925926 80.001 58.4000925925926 77.001 58.4000925925926 74.001 Z "
                                                fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskymmir2cr)"
                                                pathTo="M 58.4000925925926 74.001 L 58.4000925925926 26.001 C 58.4000925925926 23.001 61.4000925925926 20.001 64.4000925925926 20.001 L 87.70361111111112 20.001 C 90.70361111111112 20.001 93.70361111111112 23.001 93.70361111111112 26.001 L 93.70361111111112 74.001 C 93.70361111111112 77.001 90.70361111111112 80.001 87.70361111111112 80.001 L 64.4000925925926 80.001 C 61.4000925925926 80.001 58.4000925925926 77.001 58.4000925925926 74.001 Z "
                                                pathFrom="M 58.4000925925926 80.001 L 58.4000925925926 80.001 L 93.70361111111112 80.001 L 93.70361111111112 80.001 L 93.70361111111112 80.001 L 93.70361111111112 80.001 L 93.70361111111112 80.001 L 58.4000925925926 80.001 Z"
                                                cy="20" cx="98.20361111111112" j="1" val="60"
                                                barHeight="60" barWidth="44.30351851851852"></path>
                                            <path id="SvgjsPath1072"
                                                d="M 138.95194444444448 74.001 L 138.95194444444448 33.001000000000005 C 138.95194444444448 30.001000000000005 141.95194444444448 27.001 144.95194444444448 27.001 L 168.255462962963 27.001 C 171.255462962963 27.001 174.255462962963 30.001000000000005 174.255462962963 33.001000000000005 L 174.255462962963 74.001 C 174.255462962963 77.001 171.255462962963 80.001 168.255462962963 80.001 L 144.95194444444448 80.001 C 141.95194444444448 80.001 138.95194444444448 77.001 138.95194444444448 74.001 Z "
                                                fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskymmir2cr)"
                                                pathTo="M 138.95194444444448 74.001 L 138.95194444444448 33.001000000000005 C 138.95194444444448 30.001000000000005 141.95194444444448 27.001 144.95194444444448 27.001 L 168.255462962963 27.001 C 171.255462962963 27.001 174.255462962963 30.001000000000005 174.255462962963 33.001000000000005 L 174.255462962963 74.001 C 174.255462962963 77.001 171.255462962963 80.001 168.255462962963 80.001 L 144.95194444444448 80.001 C 141.95194444444448 80.001 138.95194444444448 77.001 138.95194444444448 74.001 Z "
                                                pathFrom="M 138.95194444444448 80.001 L 138.95194444444448 80.001 L 174.255462962963 80.001 L 174.255462962963 80.001 L 174.255462962963 80.001 L 174.255462962963 80.001 L 174.255462962963 80.001 L 138.95194444444448 80.001 Z"
                                                cy="27" cx="178.755462962963" j="2" val="53"
                                                barHeight="53" barWidth="44.30351851851852"></path>
                                            <path id="SvgjsPath1074"
                                                d="M 219.50379629629631 74.001 L 219.50379629629631 41.001 C 219.50379629629631 38.001 222.50379629629631 35.001 225.50379629629631 35.001 L 248.80731481481484 35.001 C 251.80731481481484 35.001 254.80731481481484 38.001 254.80731481481484 41.001 L 254.80731481481484 74.001 C 254.80731481481484 77.001 251.80731481481484 80.001 248.80731481481484 80.001 L 225.50379629629631 80.001 C 222.50379629629631 80.001 219.50379629629631 77.001 219.50379629629631 74.001 Z "
                                                fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskymmir2cr)"
                                                pathTo="M 219.50379629629631 74.001 L 219.50379629629631 41.001 C 219.50379629629631 38.001 222.50379629629631 35.001 225.50379629629631 35.001 L 248.80731481481484 35.001 C 251.80731481481484 35.001 254.80731481481484 38.001 254.80731481481484 41.001 L 254.80731481481484 74.001 C 254.80731481481484 77.001 251.80731481481484 80.001 248.80731481481484 80.001 L 225.50379629629631 80.001 C 222.50379629629631 80.001 219.50379629629631 77.001 219.50379629629631 74.001 Z "
                                                pathFrom="M 219.50379629629631 80.001 L 219.50379629629631 80.001 L 254.80731481481484 80.001 L 254.80731481481484 80.001 L 254.80731481481484 80.001 L 254.80731481481484 80.001 L 254.80731481481484 80.001 L 219.50379629629631 80.001 Z"
                                                cy="35" cx="259.30731481481484" j="3" val="45"
                                                barHeight="45" barWidth="44.30351851851852"></path>
                                            <path id="SvgjsPath1076"
                                                d="M 300.0556481481482 74.001 L 300.0556481481482 26.001 C 300.0556481481482 23.001 303.0556481481482 20.001 306.0556481481482 20.001 L 329.3591666666667 20.001 C 332.3591666666667 20.001 335.3591666666667 23.001 335.3591666666667 26.001 L 335.3591666666667 74.001 C 335.3591666666667 77.001 332.3591666666667 80.001 329.3591666666667 80.001 L 306.0556481481482 80.001 C 303.0556481481482 80.001 300.0556481481482 77.001 300.0556481481482 74.001 Z "
                                                fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskymmir2cr)"
                                                pathTo="M 300.0556481481482 74.001 L 300.0556481481482 26.001 C 300.0556481481482 23.001 303.0556481481482 20.001 306.0556481481482 20.001 L 329.3591666666667 20.001 C 332.3591666666667 20.001 335.3591666666667 23.001 335.3591666666667 26.001 L 335.3591666666667 74.001 C 335.3591666666667 77.001 332.3591666666667 80.001 329.3591666666667 80.001 L 306.0556481481482 80.001 C 303.0556481481482 80.001 300.0556481481482 77.001 300.0556481481482 74.001 Z "
                                                pathFrom="M 300.0556481481482 80.001 L 300.0556481481482 80.001 L 335.3591666666667 80.001 L 335.3591666666667 80.001 L 335.3591666666667 80.001 L 335.3591666666667 80.001 L 335.3591666666667 80.001 L 300.0556481481482 80.001 Z"
                                                cy="20" cx="339.8591666666667" j="4" val="60"
                                                barHeight="60" barWidth="44.30351851851852"></path>
                                            <path id="SvgjsPath1078"
                                                d="M 380.6075 74.001 L 380.6075 11.001000000000001 C 380.6075 8.001000000000001 383.6075 5.001 386.6075 5.001 L 409.9110185185185 5.001 C 412.9110185185185 5.001 415.9110185185185 8.001000000000001 415.9110185185185 11.001000000000001 L 415.9110185185185 74.001 C 415.9110185185185 77.001 412.9110185185185 80.001 409.9110185185185 80.001 L 386.6075 80.001 C 383.6075 80.001 380.6075 77.001 380.6075 74.001 Z "
                                                fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskymmir2cr)"
                                                pathTo="M 380.6075 74.001 L 380.6075 11.001000000000001 C 380.6075 8.001000000000001 383.6075 5.001 386.6075 5.001 L 409.9110185185185 5.001 C 412.9110185185185 5.001 415.9110185185185 8.001000000000001 415.9110185185185 11.001000000000001 L 415.9110185185185 74.001 C 415.9110185185185 77.001 412.9110185185185 80.001 409.9110185185185 80.001 L 386.6075 80.001 C 383.6075 80.001 380.6075 77.001 380.6075 74.001 Z "
                                                pathFrom="M 380.6075 80.001 L 380.6075 80.001 L 415.9110185185185 80.001 L 415.9110185185185 80.001 L 415.9110185185185 80.001 L 415.9110185185185 80.001 L 415.9110185185185 80.001 L 380.6075 80.001 Z"
                                                cy="5" cx="420.4110185185185" j="5" val="75"
                                                barHeight="75" barWidth="44.30351851851852"></path>
                                            <path id="SvgjsPath1080"
                                                d="M 461.15935185185185 74.001 L 461.15935185185185 33.001000000000005 C 461.15935185185185 30.001000000000005 464.15935185185185 27.001 467.15935185185185 27.001 L 490.46287037037035 27.001 C 493.46287037037035 27.001 496.46287037037035 30.001000000000005 496.46287037037035 33.001000000000005 L 496.46287037037035 74.001 C 496.46287037037035 77.001 493.46287037037035 80.001 490.46287037037035 80.001 L 467.15935185185185 80.001 C 464.15935185185185 80.001 461.15935185185185 77.001 461.15935185185185 74.001 Z "
                                                fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskymmir2cr)"
                                                pathTo="M 461.15935185185185 74.001 L 461.15935185185185 33.001000000000005 C 461.15935185185185 30.001000000000005 464.15935185185185 27.001 467.15935185185185 27.001 L 490.46287037037035 27.001 C 493.46287037037035 27.001 496.46287037037035 30.001000000000005 496.46287037037035 33.001000000000005 L 496.46287037037035 74.001 C 496.46287037037035 77.001 493.46287037037035 80.001 490.46287037037035 80.001 L 467.15935185185185 80.001 C 464.15935185185185 80.001 461.15935185185185 77.001 461.15935185185185 74.001 Z "
                                                pathFrom="M 461.15935185185185 80.001 L 461.15935185185185 80.001 L 496.46287037037035 80.001 L 496.46287037037035 80.001 L 496.46287037037035 80.001 L 496.46287037037035 80.001 L 496.46287037037035 80.001 L 461.15935185185185 80.001 Z"
                                                cy="27" cx="500.96287037037035" j="6" val="53"
                                                barHeight="53" barWidth="44.30351851851852"></path>
                                            <g id="SvgjsG1066" class="apexcharts-bar-goals-markers"
                                                style="pointer-events: none">
                                                <g id="SvgjsG1067" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1069" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1071" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1073" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1075" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1077" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1079" className="apexcharts-bar-goals-groups"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1065" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <g id="SvgjsG1084" class="apexcharts-grid-borders" style="display: none;">
                                        <line id="SvgjsLine1085" x1="-39.34444444444444" y1="0"
                                            x2="522.6555555555556" y2="0" stroke="#e1e3ea" stroke-dasharray="4"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1089" x1="-39.34444444444444" y1="80"
                                            x2="522.6555555555556" y2="80" stroke="#e1e3ea" stroke-dasharray="4"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <line id="SvgjsLine1101" x1="-39.34444444444444" y1="0"
                                        x2="522.6555555555556" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                        stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1102" x1="-39.34444444444444" y1="0"
                                        x2="522.6555555555556" y2="0" stroke-dasharray="0" stroke-width="0"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1103" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1104" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1105" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG1100" class="apexcharts-yaxis" rel="0"
                                    transform="translate(-18, 0)"></g>
                                <g id="SvgjsG1059" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(0, 158, 247);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 6-->
            <!--begin::Template settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Product Template</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Select store template-->
                    <label for="kt_ecommerce_add_product_store_template" class="form-label">Select a product
                        template</label>
                    <!--end::Select store template-->
                    <!--begin::Select2-->
                    <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                        data-hide-search="true" data-placeholder="Select an option"
                        id="kt_ecommerce_add_product_store_template"
                        data-select2-id="select2-data-kt_ecommerce_add_product_store_template" tabindex="-1"
                        aria-hidden="true" data-kt-initialized="1">
                        <option></option>
                        <option value="default" selected="selected" data-select2-id="select2-data-15-az09">Default
                            template</option>
                        <option value="electronics">Electronics</option>
                        <option value="office">Office stationary</option>
                        <option value="fashion">Fashion</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                        data-select2-id="select2-data-14-3db7" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single form-select mb-2" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                aria-labelledby="select2-kt_ecommerce_add_product_store_template-container"
                                aria-controls="select2-kt_ecommerce_add_product_store_template-container"><span
                                    class="select2-selection__rendered"
                                    id="select2-kt_ecommerce_add_product_store_template-container" role="textbox"
                                    aria-readonly="true" title="Default template">Default template</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Assign a template from your current theme to define how a single product
                        is displayed.</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Template settings-->
        </div>
        <!--end::Aside column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10" data-select2-id="select2-data-140-w9po">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2"
                role="tablist">
                <!--begin:::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                        href="#kt_ecommerce_add_product_general" aria-selected="true" role="tab">General</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                        href="#kt_ecommerce_add_product_advanced" aria-selected="false" role="tab"
                        tabindex="-1">Advanced</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                        href="#kt_ecommerce_add_product_reviews" aria-selected="false" role="tab"
                        tabindex="-1">Reviews</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin::Tab content-->
            <div class="tab-content" data-select2-id="select2-data-139-46cv">
                <!--begin::Tab pane-->
                <div class="tab-pane fade active show" id="kt_ecommerce_add_product_general" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="required form-label">Product Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="product_name" class="form-control mb-2"
                                        placeholder="Product name" value="Sample product">
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">A product name is required and recommended to be unique.
                                    </div>
                                    <!--end::Description-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Label-->
                                    <label class="form-label">Description</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <div class="ql-toolbar ql-snow"><span class="ql-formats"><span
                                                class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0"
                                                    role="button" aria-expanded="false"
                                                    aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18">
                                                        <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11">
                                                        </polygon>
                                                        <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                                    </svg></span><span class="ql-picker-options" aria-hidden="true"
                                                    tabindex="-1" id="ql-picker-options-0"><span tabindex="0"
                                                        role="button" class="ql-picker-item" data-value="1"></span><span
                                                        tabindex="0" role="button" class="ql-picker-item"
                                                        data-value="2"></span><span tabindex="0" role="button"
                                                        class="ql-picker-item ql-selected"></span></span></span><select
                                                class="ql-header" style="display: none;">
                                                <option value="1"></option>
                                                <option value="2"></option>
                                                <option selected="selected"></option>
                                            </select></span><span class="ql-formats"><button type="button"
                                                class="ql-bold"><svg viewBox="0 0 18 18">
                                                    <path class="ql-stroke"
                                                        d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                    </path>
                                                    <path class="ql-stroke"
                                                        d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                    </path>
                                                </svg></button><button type="button" class="ql-italic"><svg
                                                    viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="7" x2="13" y1="4"
                                                        y2="4"></line>
                                                    <line class="ql-stroke" x1="5" x2="11" y1="14"
                                                        y2="14"></line>
                                                    <line class="ql-stroke" x1="8" x2="10" y1="14"
                                                        y2="4"></line>
                                                </svg></button><button type="button" class="ql-underline"><svg
                                                    viewBox="0 0 18 18">
                                                    <path class="ql-stroke"
                                                        d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                                    <rect class="ql-fill" height="1" rx="0.5" ry="0.5"
                                                        width="12" x="3" y="15"></rect>
                                                </svg></button></span><span class="ql-formats"><button type="button"
                                                class="ql-image"><svg viewBox="0 0 18 18">
                                                    <rect class="ql-stroke" height="10" width="12" x="3"
                                                        y="4"></rect>
                                                    <circle class="ql-fill" cx="6" cy="7"
                                                        r="1"></circle>
                                                    <polyline class="ql-even ql-fill"
                                                        points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                                </svg></button><button type="button" class="ql-code-block"><svg
                                                    viewBox="0 0 18 18">
                                                    <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline>
                                                    <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11">
                                                    </polyline>
                                                    <line class="ql-stroke" x1="10" x2="8" y1="5"
                                                        y2="13"></line>
                                                </svg></button></span></div>
                                    <div id="kt_ecommerce_add_product_description"
                                        name="kt_ecommerce_add_product_description"
                                        class="min-h-200px mb-2 ql-container ql-snow">
                                        <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true"
                                            data-placeholder="Type your text here...">
                                            <p><br></p>
                                        </div>
                                        <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                        <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer"
                                                target="_blank" href="about:blank"></a><input type="text"
                                                data-formula="e=mc^2" data-link="https://quilljs.com"
                                                data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a>
                                        </div>
                                    </div>
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a description to the product for better visibility.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <!--begin::Media-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Media</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="fv-row mb-2">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone dz-clickable" id="kt_ecommerce_add_product_media">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <!--begin::Icon-->
                                            <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to
                                                    upload.</h3>
                                                <span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the product media gallery.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Media-->
                        <!--begin::Pricing-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Pricing</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="required form-label">Base Price</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="price" class="form-control mb-2"
                                        placeholder="Product price" value="199.99">
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the product price.</div>
                                    <!--end::Description-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Discount Type
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Select a discount type that will be applied to this product"
                                            data-bs-original-title="Select a discount type that will be applied to this product"
                                            data-kt-initialized="1"></i></label>
                                    <!--End::Label-->
                                    <!--begin::Row-->
                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                        data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']"
                                        data-kt-initialized="1">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="discount_option"
                                                        value="1">
                                                </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bold text-gray-800 d-block">No Discount</span>
                                                </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="discount_option"
                                                        value="2" checked="checked">
                                                </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Percentage %</span>
                                                </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="discount_option"
                                                        value="3">
                                                </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Fixed Price</span>
                                                </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                    <!--begin::Label-->
                                    <label class="form-label">Set Discount Percentage</label>
                                    <!--end::Label-->
                                    <!--begin::Slider-->
                                    <div class="d-flex flex-column text-center mb-5">
                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                            <span class="fw-bold fs-3x"
                                                id="kt_ecommerce_add_product_discount_label">10</span>
                                            <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                        </div>
                                        <div id="kt_ecommerce_add_product_discount_slider"
                                            class="noUi-sm noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                            <div class="noUi-base">
                                                <div class="noUi-connects"></div>
                                                <div class="noUi-origin"
                                                    style="transform: translate(-90.9091%, 0px); z-index: 4;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0"
                                                        tabindex="0" role="slider" aria-orientation="horizontal"
                                                        aria-valuemin="1.0" aria-valuemax="100.0" aria-valuenow="10.0"
                                                        aria-valuetext="10.00">
                                                        <div class="noUi-touch-area"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Slider-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a percentage discount to be applied on this product.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                    <!--begin::Label-->
                                    <label class="form-label">Fixed Discounted Price</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="dicsounted_price" class="form-control mb-2"
                                        placeholder="Discounted price">
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the discounted product price. The product will be
                                        reduced at the determined fixed price</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Tax-->
                                <div class="d-flex flex-wrap gap-5">
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">Tax Class</label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <select class="form-select mb-2 select2-hidden-accessible" name="tax"
                                            data-control="select2" data-hide-search="true"
                                            data-placeholder="Select an option" data-select2-id="select2-data-16-woi6"
                                            tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option></option>
                                            <option value="0">Tax Free</option>
                                            <option value="1" selected="selected"
                                                data-select2-id="select2-data-18-h4t5">Taxable Goods</option>
                                            <option value="2">Downloadable Product</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-17-koo4"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select mb-2"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-tax-cz-container"
                                                    aria-controls="select2-tax-cz-container"><span
                                                        class="select2-selection__rendered" id="select2-tax-cz-container"
                                                        role="textbox" aria-readonly="true" title="Taxable Goods">Taxable
                                                        Goods</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select2-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the product tax class.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">VAT Amount (%)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control mb-2" value="35">
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end:Tax-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Pricing-->
                    </div>
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel"
                    data-select2-id="select2-data-kt_ecommerce_add_product_advanced">
                    <div class="d-flex flex-column gap-7 gap-lg-10" data-select2-id="select2-data-138-zid9">
                        <!--begin::Inventory-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Inventory</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="required form-label">SKU</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sku" class="form-control mb-2"
                                        placeholder="SKU Number" value="011985001">
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Enter the product SKU.</div>
                                    <!--end::Description-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="required form-label">Barcode</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sku" class="form-control mb-2"
                                        placeholder="Barcode Number" value="45874521458">
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Enter the product barcode number.</div>
                                    <!--end::Description-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="required form-label">Quantity</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="d-flex gap-3">
                                        <input type="number" name="shelf" class="form-control mb-2"
                                            placeholder="On shelf" value="24">
                                        <input type="number" name="warehouse" class="form-control mb-2"
                                            placeholder="In warehouse">
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Enter the product quantity.</div>
                                    <!--end::Description-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">Allow Backorders</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="form-check form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Allow customers to purchase products that are out of
                                        stock.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Inventory-->
                        <!--begin::Variations-->
                        <div class="card card-flush py-4" data-select2-id="select2-data-137-osrp">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Variations</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" data-select2-id="select2-data-136-4jr4">
                                <!--begin::Input group-->
                                <div class="" data-kt-ecommerce-catalog-add-product="auto-options"
                                    data-select2-id="select2-data-135-vnbe">
                                    <!--begin::Label-->
                                    <label class="form-label">Add Product Variations</label>
                                    <!--end::Label-->
                                    <!--begin::Repeater-->
                                    <div id="kt_ecommerce_add_product_options"
                                        data-select2-id="select2-data-kt_ecommerce_add_product_options">
                                        <!--begin::Form group-->
                                        <div class="form-group" data-select2-id="select2-data-134-z042">
                                            <div data-repeater-list="kt_ecommerce_add_product_options"
                                                class="d-flex flex-column gap-3"
                                                data-select2-id="select2-data-133-jl03">
                                                <div data-repeater-item=""
                                                    class="form-group d-flex flex-wrap align-items-center gap-5"
                                                    data-select2-id="select2-data-132-lzyt">
                                                    <!--begin::Select2-->
                                                    <div class="w-100 w-md-200px"
                                                        data-select2-id="select2-data-131-sodl">
                                                        <select class="form-select select2-hidden-accessible"
                                                            name="kt_ecommerce_add_product_options[0][product_option]"
                                                            data-placeholder="Select a variation"
                                                            data-kt-ecommerce-catalog-add-product="product_option"
                                                            data-select2-id="select2-data-127-w4fb" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option data-select2-id="select2-data-129-atv0"></option>
                                                            <option value="color"
                                                                data-select2-id="select2-data-143-9hd2">Color</option>
                                                            <option value="size"
                                                                data-select2-id="select2-data-144-hrrh">Size</option>
                                                            <option value="material"
                                                                data-select2-id="select2-data-145-lupq">Material</option>
                                                            <option value="style"
                                                                data-select2-id="select2-data-146-mstk">Style</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--bootstrap5 select2-container--below"
                                                            dir="ltr" data-select2-id="select2-data-128-u4kw"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-kt_ecommerce_add_product_options0product_option-hu-container"
                                                                    aria-controls="select2-kt_ecommerce_add_product_options0product_option-hu-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-kt_ecommerce_add_product_options0product_option-hu-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Select a variation"><span
                                                                            class="select2-selection__placeholder">Select
                                                                            a variation</span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>
                                                    <!--end::Select2-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mw-100 w-200px"
                                                        name="kt_ecommerce_add_product_options[0][product_option_value]"
                                                        placeholder="Variation">
                                                    <!--end::Input-->
                                                    <button type="button" data-repeater-delete=""
                                                        class="btn btn-sm btn-icon btn-light-danger">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="7.05025" y="15.5356"
                                                                    width="12" height="2" rx="1"
                                                                    transform="rotate(-45 7.05025 15.5356)"
                                                                    fill="currentColor"></rect>
                                                                <rect x="8.46447" y="7.05029" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 8.46447 7.05029)"
                                                                    fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group mt-5">
                                            <button type="button" data-repeater-create=""
                                                class="btn btn-sm btn-light-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11" y="18"
                                                            width="12" height="2" rx="1"
                                                            transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                                        <rect x="6" y="11" width="12"
                                                            height="2" rx="1" fill="currentColor"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Add another variation
                                            </button>
                                        </div>
                                        <!--end::Form group-->
                                    </div>
                                    <!--end::Repeater-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Variations-->
                        <!--begin::Shipping-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Shipping</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Input-->
                                    <div class="form-check form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox"
                                            id="kt_ecommerce_add_product_shipping_checkbox" value="1"
                                            checked="checked">
                                        <label class="form-check-label">This is a physical product</label>
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set if the product is a physical or digital item.
                                        Physical products may require shipping.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Shipping form-->
                                <div id="kt_ecommerce_add_product_shipping" class="mt-10">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Weight</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <input type="text" name="weight" class="form-control mb-2"
                                            placeholder="Product weight" value="4.3">
                                        <!--end::Editor-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set a product weight in kilograms (kg).</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Dimension</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                                            <input type="number" name="width" class="form-control mb-2"
                                                placeholder="Width (w)" value="12">
                                            <input type="number" name="height" class="form-control mb-2"
                                                placeholder="Height (h)" value="4">
                                            <input type="number" name="length" class="form-control mb-2"
                                                placeholder="Lengtn (l)" value="8.5">
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Enter the product dimensions in centimeters (cm).
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Shipping form-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Shipping-->
                        <!--begin::Meta options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Meta Options</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Meta Tag Title</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" name="meta_title"
                                        placeholder="Meta tag name">
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and
                                        precise keywords.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Meta Tag Description</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <div class="ql-toolbar ql-snow"><span class="ql-formats"><span
                                                class="ql-header ql-picker"><span class="ql-picker-label"
                                                    tabindex="0" role="button" aria-expanded="false"
                                                    aria-controls="ql-picker-options-1"><svg viewBox="0 0 18 18">
                                                        <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11">
                                                        </polygon>
                                                        <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                                    </svg></span><span class="ql-picker-options" aria-hidden="true"
                                                    tabindex="-1" id="ql-picker-options-1"><span tabindex="0"
                                                        role="button" class="ql-picker-item"
                                                        data-value="1"></span><span tabindex="0" role="button"
                                                        class="ql-picker-item" data-value="2"></span><span
                                                        tabindex="0" role="button"
                                                        class="ql-picker-item ql-selected"></span></span></span><select
                                                class="ql-header" style="display: none;">
                                                <option value="1"></option>
                                                <option value="2"></option>
                                                <option selected="selected"></option>
                                            </select></span><span class="ql-formats"><button type="button"
                                                class="ql-bold"><svg viewBox="0 0 18 18">
                                                    <path class="ql-stroke"
                                                        d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                    </path>
                                                    <path class="ql-stroke"
                                                        d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                    </path>
                                                </svg></button><button type="button" class="ql-italic"><svg
                                                    viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="7" x2="13"
                                                        y1="4" y2="4"></line>
                                                    <line class="ql-stroke" x1="5" x2="11"
                                                        y1="14" y2="14"></line>
                                                    <line class="ql-stroke" x1="8" x2="10"
                                                        y1="14" y2="4"></line>
                                                </svg></button><button type="button" class="ql-underline"><svg
                                                    viewBox="0 0 18 18">
                                                    <path class="ql-stroke"
                                                        d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                                    <rect class="ql-fill" height="1" rx="0.5"
                                                        ry="0.5" width="12" x="3" y="15">
                                                    </rect>
                                                </svg></button></span><span class="ql-formats"><button type="button"
                                                class="ql-image"><svg viewBox="0 0 18 18">
                                                    <rect class="ql-stroke" height="10" width="12"
                                                        x="3" y="4"></rect>
                                                    <circle class="ql-fill" cx="6" cy="7"
                                                        r="1"></circle>
                                                    <polyline class="ql-even ql-fill"
                                                        points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                                </svg></button><button type="button" class="ql-code-block"><svg
                                                    viewBox="0 0 18 18">
                                                    <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11">
                                                    </polyline>
                                                    <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11">
                                                    </polyline>
                                                    <line class="ql-stroke" x1="10" x2="8"
                                                        y1="5" y2="13"></line>
                                                </svg></button></span></div>
                                    <div id="kt_ecommerce_add_product_meta_description"
                                        name="kt_ecommerce_add_product_meta_description"
                                        class="min-h-100px mb-2 ql-container ql-snow">
                                        <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true"
                                            data-placeholder="Type your text here...">
                                            <p><br></p>
                                        </div>
                                        <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                        <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                rel="noopener noreferrer" target="_blank"
                                                href="about:blank"></a><input type="text" data-formula="e=mc^2"
                                                data-link="https://quilljs.com" data-video="Embed URL"><a
                                                class="ql-action"></a><a class="ql-remove"></a></div>
                                    </div>
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a meta tag description to the product for increased
                                        SEO ranking.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Label-->
                                    <label class="form-label">Meta Tag Keywords</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <input id="kt_ecommerce_add_product_meta_keywords"
                                        name="kt_ecommerce_add_product_meta_keywords" class="form-control mb-2">
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a list of keywords that the product is related to.
                                        Separate the keywords by adding a comma
                                        <code>,</code>between each keyword.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Meta options-->
                    </div>
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_ecommerce_add_product_reviews" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::Reviews-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Customer Reviews</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Rating label-->
                                    <span class="fw-bold me-5">Overall Rating:</span>
                                    <!--end::Rating label-->
                                    <!--begin::Overall rating-->
                                    <div class="rating">
                                        <div class="rating-label checked">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label checked">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label checked">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label checked">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Overall rating-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <table class="table table-row-dashed fs-6 gy-5 my-0"
                                    id="kt_ecommerce_add_product_reviews">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox"
                                                        data-kt-check="true"
                                                        data-kt-check-target="#kt_ecommerce_add_product_reviews .form-check-input"
                                                        value="1">
                                                </div>
                                            </th>
                                            <th class="min-w-125px">Rating</th>
                                            <th class="min-w-175px">Customer</th>
                                            <th class="min-w-175px">Comment</th>
                                            <th class="min-w-100px text-end fs-7">Date</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-danger">
                                                            <span class="text-danger">M</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Melody Macy</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">I like this design</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">Today</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/metronic8/demo1/assets/media/avatars/300-1.jpg)"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Max Smith</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Good product for outdoors or indoors</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">day ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-4">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/metronic8/demo1/assets/media/avatars/300-5.jpg)"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Sean Bean</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Awesome quality with great materials used,
                                                but could be more comfortable</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">11:20 PM</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/metronic8/demo1/assets/media/avatars/300-25.jpg)"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Brian Cox</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">This is the best product I've ever used.
                                            </td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">2 days ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-3">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-warning">
                                                            <span class="text-warning">C</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Mikaela Collins</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">I thought it was just average, I prefer
                                                other brands</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">July 25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/metronic8/demo1/assets/media/avatars/300-9.jpg)"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Francis Mitcham</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Beautifully crafted. Worth every penny.</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">July 24</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-4">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-danger">
                                                            <span class="text-danger">O</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Olivia Wild</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Awesome value for money. Shipping could be
                                                faster tho.</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">July 13</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-primary">
                                                            <span class="text-primary">N</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Neil Owen</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Excellent quality, I got it for my son's
                                                birthday and he loved it!</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">May 25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/metronic8/demo1/assets/media/avatars/300-23.jpg)"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Dan Wilson</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">I got this for Christmas last year, and it's
                                                still the best product I've ever used!</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">April 15</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-danger">
                                                            <span class="text-danger">E</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Emma Bold</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Was skeptical at first, but after using it
                                                for 3 months, I'm hooked! Will definately buy another!</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">April 3</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-4">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/metronic8/demo1/assets/media/avatars/300-12.jpg)"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Ana Crown</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Great product, too bad I missed out on the
                                                sale.</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">March 17</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-info">
                                                            <span class="text-info">A</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Robert Doe</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Got this on sale! Best decision ever!</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">March 12</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="/metronic8/demo1/../demo1/apps/inbox/reply.html"
                                                    class="d-flex text-dark text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/metronic8/demo1/assets/media/avatars/300-13.jpg)"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">John Miller</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Firesale is on! Buy now! Totally worth it!
                                            </td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">March 11</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Reviews-->
                    </div>
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/products.html"
                    id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                    <span class="indicator-label">Save Changes</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </form>
@endsection
@section('toolbar')
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Edit Product
            </h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="/metronic8/demo1/../demo1/index.html" class="text-muted text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">eCommerce</li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Catalog</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Filter menu-->
            <div class="m-0">
                <!--begin::Menu toggle-->
                <a href="#"
                    class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Filter
                </a>
                <!--end::Menu toggle-->
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                    id="kt_menu_63a6dc128243d">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Menu separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Menu separator-->
                    <!--begin::Form-->
                    <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Status:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid select2-hidden-accessible"
                                    data-kt-select2="true" data-placeholder="Select option"
                                    data-dropdown-parent="#kt_menu_63a6dc128243d" data-allow-clear="true"
                                    data-select2-id="select2-data-7-e8it" tabindex="-1" aria-hidden="true"
                                    data-kt-initialized="1">
                                    <option data-select2-id="select2-data-9-xmdw"></option>
                                    <option value="1">Approved</option>
                                    <option value="2">Pending</option>
                                    <option value="2">In Process</option>
                                    <option value="2">Rejected</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5"
                                    dir="ltr" data-select2-id="select2-data-8-e0yl" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                            tabindex="0" aria-disabled="false"
                                            aria-labelledby="select2-21i9-container"
                                            aria-controls="select2-21i9-container"><span
                                                class="select2-selection__rendered" id="select2-21i9-container"
                                                role="textbox" aria-readonly="true" title="Select option"><span
                                                    class="select2-selection__placeholder">Select
                                                    option</span></span><span class="select2-selection__arrow"
                                                role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Member Type:</label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="d-flex">
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                    <input class="form-check-input" type="checkbox" value="1">
                                    <span class="form-check-label">Author</span>
                                </label>
                                <!--end::Options-->
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="2"
                                        checked="checked">
                                    <span class="form-check-label">Customer</span>
                                </label>
                                <!--end::Options-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Notifications:</label>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" name="notifications"
                                    checked="checked">
                                <label class="form-check-label">Enabled</label>
                            </div>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                data-kt-menu-dismiss="true">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary"
                                data-kt-menu-dismiss="true">Apply</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Menu 1-->
            </div>
            <!--end::Filter menu-->
            <!--begin::Secondary button-->
            <!--end::Secondary button-->
            <!--begin::Primary button-->
            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                data-bs-target="#kt_modal_create_app">Create</a>
            <!--end::Primary button-->
        </div>
        <!--end::Actions-->
    </div>
@endsection
