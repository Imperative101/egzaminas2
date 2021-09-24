<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Company;
use Illuminate\Http\Request;
use Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        $companies = Company::all();
        // dd($customers);
        // $companies = Company::orderBy('name');
        return view('customer.index', ['customers' => $customers, 'companies' => $companies]);

    }
    //this
    public function indexSpecifics(Request $request) 
    {
       
     //   $customers = Customer::all();
     //   if ($request->order) {
     //       $customers = $customers->sortBy($request->order);
     //   }
    //    if($request->filter) {
     //       $customers = $customers->where('company_id','=', $request->$filter);
     //   }
     //   return view('customer.index', ['customers' => $customers]);
   }
//this
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $customers = Customer::all();
    $companies = Company::all();
       return view('customer.create', ['customers' => $customers, 'companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//this
    //     $validator = Validator::make($request->all(),
    //     [
    //         'name' => ['required', 'min:3', 'max:64'],
    //         'surname' => ['required', 'min:3', 'max:64'],
    //     ],
    //     [
    //         'name.required' => 'kompanijos vardas privalomas',
    //         'surname.required' => 'kompanijos adresas privalomas',
    //         'name.min' => 'per trumpas kompanijos vardas',
    //         'name.max' => 'per ilgas kompanijos vardas',
    //         'surname.min' => 'per trumpas komanpijos adresas',
    //         'surnames.max' => 'per ilgas kompanijos adresas',

    //     ]
    // );
    // if ($validator->fails()) {
    //     $request->flash();
    //     return redirect()->back()->withErrors($validator);
    // }
//this

$validator = Validator::make($request->all(),
        [
            'customer_name' => ['required', 'min:3','max:32'],
            'customer_surname' => ['required', 'min:3', 'max:32'],
            'customer_phone' => ['required', 'min:5', 'max:24'],

            'customer_email' => ['required', 'min:5', 'max:64'],
            'customer_comment' => ['required','min:1'],
            // 'company_id' => ['required']
        ]
 
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
//  
 
        $customer = new Customer;
        $customer->name = $request->customer_name;
        $customer->surname = $request->customer_surname;
        $customer->phone = $request->customer_phone;

        $customer->email = $request->customer_email;
        $customer->comment = $request->customer_comment;
        $customer->company_id = $request->company_id;

        $customer->save();
        // return redirect()->route('customer.index');

        return redirect()->route('customer.index')
        ->with('success_message', 'Added successfully');



        // $customer = new Customer;
        // $customer->name = $request->customer_name;
        // $customer->surname = $request->customer_surname;
        // $customer->phone = $request->customer_phone;
        // $customer->email = $request->customer_email;
        // $customer->comment = $request->customer_comment;
        // $customer->company_id = $request->company_id;
        // $customer->save();

        // return redirect()->route('customer.index');



return redirect()->route('customer.index')->with('success_message', 'Sekmingai įrašytas.');
return redirect()->route('customer.index')->with('success_message', 'Sėkmingai pakeistas.');
return redirect()->route('customer.index')->with('success_message', 'Sekmingai ištrintas.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.show',['customer'=>$customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->name = $request->customer_name;
        $customer->surname = $request->customer_surname;
        $customer->phone = $request->customer_phone;
        $customer->email = $request->customer_email;
        $customer->comment = $request->customer_comment;
        $customer->company_id = $request->company_id;
        $customer->save();
        return redirect()->route('customer.index');



return redirect()->route('customer.index')->with('success_message', 'Sekmingai įrašytas.');
return redirect()->route('customer.index')->with('success_message', 'Sėkmingai pakeistas.');
return redirect()->route('customer.index')->with('success_message', 'Sekmingai ištrintas.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        if($customer->customerCompanies->count()){
            return 'Trinti negalima, nes turi companies';
        }
 

        $customer->delete();
       return redirect()->route('customer.index');

       return redirect()->route('customer.index')->with('success_message', 'Sekmingai įrašytas.');
       return redirect()->route('customer.index')->with('success_message', 'Sėkmingai pakeistas.');
       return redirect()->route('customer.index')->with('success_message', 'Sekmingai ištrintas.');


    }
}
