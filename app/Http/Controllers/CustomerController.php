<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Contact_method;
use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_methods = Contact_method::all()->pluck('contact_method','id');
        $customers = Customer::Select('customer_full_name','contact_number','working_at','favoraited_contact_method')->get();


      //  dd($contact_methods);
        return view('customers.customer' , compact('contact_methods' , 'customers' ));
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
       // dd($request->all());

       $customer = Customer::create($request->all());
      /*  $customer->customer_full_name = $request['customer_full_name'];
        $customer->customer_address = $request['customer_address'];
        $customer->contact_number = $request['contact_number'];
        $customer->working_at = $request['working_at'];
        $customer->date_of_birth = $request['date_of_birth'];
        $customer->customer_gender = $request['customer_gender'];
        $customer->balance = $request['balance'];
        $customer->favoraited_contact_method = $request['favoraited_contact_method'];
        $customer->save();*/

   //   $customer->create($request->all());

      return redirect()->to('/customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
