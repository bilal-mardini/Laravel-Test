@extends('admin.layouts.master')
@section('title', 'الأفرع')
@push('styles')
    <link rel="stylesheet" href="{{ asset('build/assets/datatable/custom.datatable.css') }}">
@endpush
@section('content')
    <div class="content">
        <div class="main-content">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        الأفرع
                    </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="{{ route('admin.home.index') }}">
                            الصفحة الرئيسية
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        الأفرع
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->
        </div>
        <div class="container">
            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between align-center">
                            <div class="title">
                                <h5 class="box-title">جدول الأفرع</h5>
                            </div>
                            <div class="actions flex items-center gap-4">
                                <a href="javascript:void(0);" data-hs-overlay="#add-section"
                                    class="flex items-center gap-2 px-4 py-3 bg-primary text-white rounded-lg shadow hover:bg-primary-dark">
                                    <i class="las la-plus text-lg"></i>
                                    إضافة فرع
                                </a>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="overflow-auto">
                                <table id="basic-table">
                                    <thead>
                                        <tr>
                                            <th class="!p-4">#</th>
                                            <th class="!p-4">الاسم</th>
                                            <th class="!p-4">عدد الطلاب</th>
                                            <th class="!p-4">عدد المواد</th>
                                            <th class="!p-4">الحالة</th>
                                            <th class="!p-4">تاريخ الانشاء</th>
                                            <th class="!p-4">العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->
        </div>

    </div>
    <div id="add-section" class="hs-overlay hidden ti-modal">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
            <div class="ti-modal-content">
                <div class="ti-modal-header">
                    <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">إضافة فرع</h6>
                    <button type="button" class="hs-dropdown-toggle !text-[1rem] !font-semibold !text-defaulttextcolor"
                        data-hs-overlay="#add-section">
                        <span class="sr-only">الغاء</span>
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="ti-modal-body px-4">
                    <form action="{{ route('admin.sections.store') }}" method="POST">
                        @csrf
                        <div class="col-span-12">
                            <label for="name" class="block text-sm font-medium text-gray-700">الاسم</label>
                            <input type="text" name="name" id="name"
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary focus:border-primary">

                        </div>

                </div>
                <div class="ti-modal-footer">
                    <button type="button" class="hs-dropdown-toggle ti-btn  btn-wave  ti-btn-secondary-full align-middle"
                        data-hs-overlay="#add-section">
                        الغاء
                    </button>
                    <button type="submit" class="ti-btn  btn-wave bg-primary text-white !font-medium">حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\SectionRequest') !!}

    <script src="{{ asset('build/assets/datatable/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            let dataTable = $('#basic-table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('admin.sections.index') !!}',
                    data: function(d) {}
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'users_count',
                        name: 'users_count'
                    },
                    {
                        data: 'subjects_count',
                        name: 'subjects_count'
                    },
                    {
                        data: 'is_active',
                        name: 'is_active'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
            $('#filter').on('change', function() {
                dataTable.ajax.reload();
            });
        });
    </script>
@endpush
