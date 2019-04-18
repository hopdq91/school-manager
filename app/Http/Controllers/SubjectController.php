<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Yajra\Datatables\Datatables;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Subject::latest()->get();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<div class="btn-toolbar">';
                $btn = $btn . '<button type="button" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Sửa '. $row->name .'" class="btn btn-primary btn-sm btn-icon" data-id="' . $row->id . '"><i class="fa fa-edit editUser"></i></button>';
                $btn = $btn . '<button type="button" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Xóa '. $row->name .'" class="btn btn-danger btn-sm btn-icon" data-id="' . $row->id . '"><i class="fa fa-trash deleteUser"></i></button>';
                $btn = $btn . '</div>';

                return $btn;
            })
            ->addColumn('reference', function ($row) {
                $url = '<a style="cursor: pointer; color: blue; text-decoration: underline;">'. $row->reference .'</a>';
                return $url;
            })
            ->rawColumns(['action', 'reference'])
            ->make(true);
    }




    public function indexview()
    {
        return view('admin.category.subject.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(Subject::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
