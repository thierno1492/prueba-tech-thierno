<?php

namespace App\Http\Controllers;

use App\Models\CatTask;
use App\Models\TareaReport;
use Illuminate\Http\Request;

class CatTaskController extends Controller
{
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
    public function create(TareaReport $tareaReport)
    {
        return view('category.create', [
            'cat' => $tareaReport
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request ,TareaReport $tareaReport)
    {
        $valiData = $request->validate([
            'category'=> 'required|min:3'

        ]);
        $tarea = new CatTask();
        $tarea->category = $request->get('category');
        $tarea->tarea_report_id = $tareaReport->id;
        $tarea->save();
        return redirect('/tarea_reports/' . $tareaReport->id);
    }
    /* public function store(Request $request, TareaReport $tareaReport)
    {
        $tarea = new CatTask();
        $tarea->description = $request->get('description');
        $tarea->tarea_report_id = $tareaReport->id;
        $tarea->save();

        return redirect('/tarea_reports/' . $tareaReport->id);
    } */
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
