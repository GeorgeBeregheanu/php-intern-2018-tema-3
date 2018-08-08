<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return all companies
     */
    public function showAllCompanies(){

        $companies = Company::all();
        
        return json_encode($companies);
    }

    public function getCompanyById($id){

        $company = Company::find($id);

    }

    public function getCompanyByType($type){

        $companies = Company::where('type',$type)->get();

        return json_encode($companies);
    }

    public function createCompany(Request $request)
    {
        $company = Company::create($request->all());

        return json_encode($company);
    }

    public function deleteCompany($id)
    {
        $company = Company::destroy($id);
        return response('Company deleted Successfully', 200);
    }

    public function patchCompany(Request $request, $id)
    {
        $company = Company::find($id);
        $company->update($request->all());
        return json_encode($company);
    }
}
