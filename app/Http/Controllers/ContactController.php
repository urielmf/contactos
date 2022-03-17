<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        return view('contacts.index')->with(['contacts'=>$contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'nombre' => ['required', 'max:255'],
            'apellido_p' => ['required'],
            'apellido_m' => ['required'],
            'fecha_nacimiento' => ['required'],
            'direccion' => ['required'],
            'telefono' => ['required'],
            'celular' => ['required'],
        ]);
        // $formato_fecha = $request->fecha_nacimiento;
        // $formato_fecha = $formato_fecha->format('d-m-Y');
        $contact->nombre = $request->nombre;
        $contact->apellido_p = $request->apellido_p;
        $contact->apellido_m = $request->apellido_m;
        $contact->fecha_nacimiento = $request->fecha_nacimiento;
        $contact->direccion = $request->direccion;
        $contact->telefono = $request->telefono;
        $contact->celular = $request->celular;

        $contact->save();
        return redirect()->route('contacts.index');
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
        // $formato = $contact->fecha_nacimiento;
        // $formato = $formato->format('d-m-Y');

        // $fechaformato = $contact->fecha_nacimiento->format('d-m-Y');
        return view('contacts.edit')->with(['contact'=>$contact]);
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
        $validatedData = $request->validate([
            'nombre' => ['required', 'max:255'],
            'apellido_p' => ['required'],
            'apellido_m' => ['required'],
            'fecha_nacimiento' => ['required'],
            'direccion' => ['required'],
            'telefono' => ['required'],
            'celular' => ['required'],
        ]);
        $contact->update($request->all());
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contacto = $request->input('mi_contacto');
        $contact = Contact::findOrFail($contacto);
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
