<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudents = Estudent::all();
        return response()->json($estudents, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'message' => "Información incompleta o inválida -> ".$validator->messages()->first()
            ], 400);
        }
        $estudents = Estudent::create($request->all());
        return response()->json([
            'message' => "Marcaje saved successfully!",
            'marcaje' => $marcaje
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudent  $marcaje
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudent = Estudent::find($id);
        return response()->json($estudent, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudent  $estudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudent $student)
    {
        $estudent->update($request->all());

        return response()->json([
            'message' => "Marcaje updated successfully!",
            'marcaje' => $estudent
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudent  $estudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudent $estudent)
    {
        $estudent->delete();

        return response()->json([
            'message' => "Marcaje deleted successfully!",
        ], 200);
    }
}
