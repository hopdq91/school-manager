@extends('admin.layouts.index')
@section('content')
     <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="row">
            <div class="col-xl-12">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon kt-hide">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="kt-portlet__head-title">
                                State Colors
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-section">
                            <div class="kt-section__info">
                                You can apply Bootstrap and Metronic state color helper classes to the most of the Keen's components:
                            </div>
                            <div class="kt-section__content">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-head-solid">
                                        <thead>
                                            <tr>
                                                <th style="width: 150px">State</th>
                                                <th style="width: 200px">Class postfix</th>
                                                <th>Usage example</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="4"><span class="kt-font-bold">Bootstrap States</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--success">Success</span></td>
                                                <td><code>*-success</code></td>
                                                <td><code>btn-success</code> <code>kt-font-success</code></td>
                                            </tr>
                                            <tr>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--warning">Warning</span></td>
                                                <td><code>*-warning</code></td>
                                                <td><code>btn-warning</code> <code>kt-font-warning</code></td>
                                            </tr>
                                            <tr>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--danger">Danger</span></td>
                                                <td><code>*-danger</code></td>
                                                <td><code>btn-danger</code> <code>kt-font-danger</code></td>
                                            </tr>
                                            <tr>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--info">Info</span></td>
                                                <td><code>*-info</code></td>
                                                <td><code>btn-info</code> <code>kt-font-info</code></td>
                                            </tr>
                                            <tr>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--primary">Primary</span></td>
                                                <td><code>*-primary</code></td>
                                                <td><code>btn-primary</code> <code>kt-font-primary</code></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"><span class="kt-font-bold">Metronic Custom States</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--brand">Brand</span></td>
                                                <td><code>*-brand</code></td>
                                                <td><code>btn-success</code> <code>kt-font-brand</code></td>
                                            </tr>
                                            <tr>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--dark">Dark</span></td>
                                                <td><code>*-dark</code></td>
                                                <td><code>btn-dark</code> <code>kt-font-dark</code></td>
                                            </tr>
                                            <tr class="active">
                                                <td><span class="kt-badge kt-badge--inline kt-badge--light">Light</span></td>
                                                <td><code>*-light</code></td>
                                                <td><code>btn-light</code> <code>kt-font-light</code></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end::Portlet-->
            </div>
         
        </div>
    </div>

    <!-- end:: Content -->    
@stop