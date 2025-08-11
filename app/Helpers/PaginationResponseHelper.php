<?php
namespace App\Helpers;

trait PaginationResponseHelper {
    /**
     * Get ajax setup
     *
     * @param Builder $query
     * @param App\Http\Requests\Request $request
     *
     * @return array
     */
    public function getAjaxSetup($query, $request)
    {
        return [
            $query->count(),
            $request->all(),
            $request['draw'],
            $request['start'],
            $request['length'],
            !$request['columns'][$request['order'][0]['column']]['name'] ? $request['columns'][$request['order'][0]['column']]['data'] : $request['columns'][$request['order'][0]['column']]['name'],
            $request['order'][0]['dir'],
            $request['search']['value']
        ];
    }

    /**
     * Get ajax response
     *
     * @param string $draw
     * @param string $totalRecords
     * @param string $totalRecordWithFilter
     * @param string $data
     *
     * @return array
     */
    public function getAjaxResponse($draw, $totalRecords, $totalRecordWithFilter, $data)
    {
        return array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordWithFilter,
            "aaData" => $data
        );
    }
}
