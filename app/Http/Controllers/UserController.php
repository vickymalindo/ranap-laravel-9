<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

clASs UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function raw()
    {
        // $data = DB::select("SELECT * FROM users LEFT JOIN posts ON sales.idcustomers = posts.user_id WHERE users.id = ?", [$id]);
        $data = DB::select("SELECT TOP 10 treat_date AS indate, claim_no, member_no, member_name, nm_cus AS corporate, provider_name, vip_member, no_sj AS gl_no, nm_cabang AS member_branch, nm_cabang_transaksi AS host_branch, kdicd AS icd10, nm_holding AS customer_group, nm_plan_dtl AS covarage, ipstatus, no_kartu FROM VW_CLAIM_IP_MONITORING WHERE treat_date LIKE '%2019%' AND nm_holding ='BPJS KETENAGAKERJAAN' AND ipstatus ='RWT'");

        return response()->json([
            'message' => 'Get successfully',
            'data' => $data,
            'status' => 200,
        ]);
    }

    public function index()
    {
        //
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