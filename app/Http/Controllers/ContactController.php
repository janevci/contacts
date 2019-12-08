<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Group;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        return view('contacts.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'group_id' => 'required'
        ]);
        
        if ($request->hasFile('avatar')) {
            $name = rand() . $request->file('avatar')->getClientOriginalName();
            $path = $request->file('avatar')->storeAs('avatars', $name);
            $attributes["avatar"] = $name;
        }
        Contact::create($attributes);

        return redirect('/contacts');
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
    public function edit(Contact $contact)
    {
        $groups = Group::all();

        return view('contacts.edit', compact('contact', 'groups'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'group_id' => 'required'
        ]);
        $contact->update($attributes);

        return redirect("/contacts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect('/contacts');
    }
}
