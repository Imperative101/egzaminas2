<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('company.index',['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company;
        $company->name = $request->name;
        $company->adress = $request->adress;

        $company->save();
        return redirect()->route('company.index');

return redirect()->route('company.index')->with('success_message', 'Sekmingai įrašytas.');
return redirect()->route('company.index')->with('success_message', 'Sėkmingai pakeistas.');
return redirect()->route('company.index')->with('success_message', 'Sekmingai ištrintas.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('company.show',['company'=>$company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->name = $request->name;
        $company->adress = $request->adress;
        $company->save();
       return redirect()->route('company.index');


return redirect()->route('company.index')->with('success_message', 'Sekmingai įrašytas.');
return redirect()->route('company.index')->with('success_message', 'Sėkmingai pakeistas.');
return redirect()->route('company.index')->with('success_message', 'Sekmingai ištrintas.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('company.index');


return redirect()->route('company.index')->with('success_message', 'Sekmingai įrašytas.');
return redirect()->route('company.index')->with('success_message', 'Sėkmingai pakeistas.');
return redirect()->route('company.index')->with('success_message', 'Sekmingai ištrintas.');
    }
}