<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\TareaReport;
use Illuminate\Http\Request;

class TareaReportController extends Controller

{

    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tareaReport.index',[
            'tareaReports' => TareaReport::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tareaReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $valiDate = $request->validate(['title'=>'required|min:3']);


                $cat = new TareaReport();
                $cat->title =   $valiDate['title'];

                $cat->save();
                return redirect('/tarea_reports');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TareaReport $tareaReport)
    {

      return view('tareaReport.show',[
        'report' => $tareaReport
      ]);
         }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $cat = TareaReport::findOrFail($id);
        return view('tareaReport.edit',[
        'cat' => $cat
    ]);
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
        $cat = TareaReport::findOrFail($id);
        $cat->title = $request->get('title');
        $cat->save();
        return redirect('/tarea_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = TareaReport::findOrFail($id);
        $cat->delete();
        return redirect('/expense_reports');

    }
    public function confirmDelete($id){
        $cat = TareaReport::findOrFail($id);
        return view('TareaReport.confirmDelete',[
            'cat' => $cat
        ]

    );
    }



}
