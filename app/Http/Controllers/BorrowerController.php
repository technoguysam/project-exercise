<?php

namespace App\Http\Controllers;

use App\Borrower;
use App\Http\Requests\BorrowerRequest;
use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use Validator;

class BorrowerController extends Controller
{
    public function index()
    {
        $borrowershow= Borrower::all();
        return view('borrower.index',compact('borrowershow'));
    }

    public function create()
    {
        return view('borrower.create');
    }

    public function randomNumber()
    {
        return rand ( 0 , 9 );
    }

    public function store(BorrowerRequest $request)
    {
        $values = $request->all();

        $steps = [$this->randomNumber(),$this->randomNumber(),$this->randomNumber(),$this->randomNumber(),$this->randomNumber()];
        $values['steps'] = json_encode($steps);
        $borrower = new Borrower($values);
        $borrower->save();

        $details['email'] = $borrower->email;
        dispatch(new SendEmailJob($details));

        return redirect()->route('borrowerlist')->with('message','Borrower Created Successfully');
    }

    public function show(Borrower $borrower)
    {
        // $borrowershow= Borrower::all();

        // return view('borrower.index',compact('borrowershow'));
    }

    public function edit(Borrower $borrower, $id)
    {
        $borroweredit = Borrower::find($id);
        return view('borrower.edit',compact('borroweredit'));
    }

    public function update(Request $request, Borrower $borrower, $id)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);


        $borrower = Borrower::find($id);
        $borrower->name = $request->name;
        $borrower->save();

        return redirect()->route('borrowerlist')->with('message','Borrower Updated Successfully');
    }

    public function destroy(Borrower $borrower, $id)
    {
        $borrower = Borrower::find($id);

        $borrower->delete();

        return redirect()->back()->with('error','Data Deleted');
    }
}
