<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\RegisterForm;
use App\User;

class RegistrationController extends Controller
{
    use FormBuilderTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $form = $this->form('App\Forms\RegisterForm', [
            'method' => 'POST',
            'url' => url('\register')
        ]);

        return view('register', ['form' => $form] );
    }


    public function store(Request $request)
    {
        $form = $this->form(\App\Forms\RegisterForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        return \Redirect::to('/success');
        // Do saving and other things...
    }

    public function success(){
        return view('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
