<?php

namespace App\Http\Controllers;
use App\Http\Requests;
//delete this
//use App\Http\Controllers;
//use App\Http\Controllers\Controller;
//use App\Http\Requests\CreateAccountRequest;
//use Illuminate\HttpResponse;
//use Request;
//ok
use Illuminate\Http\Request;
use App\Account;

class AccountsController extends Controller
{
    public function index() {  //for view data

        $accounts=Account::all();
        return $accounts;
}
    public function store(Request $request) {  //insert and store data
        $accounts=new Account;
        $accounts->Year=$request->Year;
        $accounts->COA=$request->COA;
        $accounts->Description=$request->Description;
        $accounts->Debit_Credit=$request->Debit_Credit;
        $accounts->Amount=$request->Amount;
        $accounts->save();
        return $accounts;

    }

    public function destroy() {
        $accounts=new Account;
        $accounts=Account::destroy(1);  //delete based on id
        return $accounts;
    }

    public function update() {
        $accounts=new Account;
        $accounts=Account::updateOrCreate(array('Year'=>'Year','COA'=>'COA','Description'=>'Description','Debit_Credit'=>'Debit_Credit',
            'Amount'=>'Amount'),array('Year'=>'Year','COA'=>'COA','Description'=>'Description','Debit_Credit'=>'Debit_Credit',
            'Amount'=>'Amount'));

    }

/*
elds: [
                { name: "Year", type: "text", width: 100, validate: "required" },
                { name: "COA", type: "text", width: 100 },
                { name: "Description", type: "text", width: 200 },
                { name: "Debit_Credit", type: "text", width:100 },
                { name: "Amount", type: "text", width:100 },
*/
}
