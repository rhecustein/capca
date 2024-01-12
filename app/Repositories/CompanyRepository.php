<?php

namespace App\Repositories;

use App\Models\Company;
class CompanyRepository
{
    protected $model;
    public function __construct(Company $model)
    {
        $this->model = $model;
    }
    public function index()
    {
        $principals = $this->model
            ->when(request()->status, function ($query) {
                if (request()->status == 'active') {
                    $query->whereNull('deleted_at');
                } else {
                    $query->onlyTrashed();
                }
            });
        return $principals;
    }
    public function datatable($principals)
    {
        return DataTables::of($principals)
            ->addIndexColumn()
            ->addColumn('updated_at', function ($row) {
                return $row->updated_at->format('d M Y');
            })
            ->addColumn('total_project', function ($row) {
                return $row->projects->count();
            })
            ->addColumn('status', function ($row) {
                return !$row->deleted_at ? '<span class="badge badge-light-success">Active</span' : '<span class="badge badge-light-danger">Suspended</span';
            })
            ->addColumn('action', function ($row) {
                if ($row->deleted_at) {
                    $buttons = '<a href="javascript:void(0)"
                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    Actions
                                    <i class="ki-outline ki-down fs-5 ms-1"></i>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="' . route('principal.detail', $row->id) . '" class="menu-link px-3">View</a>
                                    </div>
                                </div>';
                } else {
                    $buttons = '<a href="javascript:void(0)"
                        class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>
                    </a>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                        data-kt-menu="true">
                        <div class="menu-item px-3">
                            <a href="' . route('principal.detail', $row->id) . '" class="menu-link px-3">View</a>
                        </div>
                        <div class="menu-item px-3">
                        <a href="' . route('principal.edit', $row->id) . '" class="menu-link px-3">Edit</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="javascript:void(0)" class="menu-link px-3 delete" data-id="' . $row->id . '">Delete</a>
                        </div>
                    </div>';
                }
                return $buttons;
            })


            ->rawColumns(['action'])
            ->make(true);
    }
}
