@extends('admin.layouts.index') 
@section('css')
<link href="{{ asset('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection
 
@section('content')
<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-xl-12">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                                    <i class="kt-font-brand flaticon2-line-chart"></i>
                                </span>
                        <h3 class="kt-portlet__head-title">
                            Danh sách môn học
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">Choose an option</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-print"></i>
                                                        <span class="kt-nav__link-text">Print</span>
                                                    </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                        <span class="kt-nav__link-text">Copy</span>
                                                    </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                        <span class="kt-nav__link-text">Excel</span>
                                                    </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                        <span class="kt-nav__link-text">CSV</span>
                                                    </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                        <span class="kt-nav__link-text">PDF</span>
                                                    </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                &nbsp;
                                <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                                        <i class="la la-plus"></i>
                                        Thêm mới môn học
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-section">

                        <div class="kt-section__content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-head-solid data-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Group</th>
                                            <th>Term</th>
                                            <th>Credit(s)</th>
                                            <th>Description</th>
                                            <th>Document</th>
                                            <th>Reference</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>

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
@endsection
 
@section('javascript')
<script src="{{ asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

<script>
    $(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        language: {
            "sProcessing": "Đang xử lý...",
            "sLengthMenu": "Xem _MENU_ mục",
            "sZeroRecords": "Không tìm thấy dòng nào phù hợp",
            "sInfo": "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
            "sInfoEmpty": "Đang xem 0 đến 0 trong tổng số 0 mục",
            "sInfoFiltered": "(được lọc từ _MAX_ mục)",
            "sInfoPostFix": "",
            "sSearch": "Tìm kiếm:",
            "sUrl": "",
           
        },
        ajax: "{{ route('subjects.index') }}",
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'group',
                name: 'group'
            },
            {
                data: 'term',
                name: 'term'
            },
            {
                data: 'credits',
                name: 'credits'
            },
            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'document',
                name: 'document'
            },
            {
                data: 'reference',
                name: 'reference',
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ],
        drawCallback: function(settings) {
            KTApp.initComponents();
            },
    });
});

</script>
@endsection