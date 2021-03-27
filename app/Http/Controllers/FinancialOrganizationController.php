<?php

namespace App\Http\Controllers;

use App\FinancialOrganization;
use Illuminate\Http\Request;

class FinancialOrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $organizations = FinancialOrganization::latest()->get();
        return response()->json($organizations, 200);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FinancialOrganization  $financialOrganization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FinancialOrganization $financialOrganization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FinancialOrganization  $financialOrganization
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinancialOrganization $financialOrganization)
    {
        //
    }
}
