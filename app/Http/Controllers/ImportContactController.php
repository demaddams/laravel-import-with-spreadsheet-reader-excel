<?php

namespace App\Http\Controllers;

use App\Imports\ContactImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Utils\Excel\SpreadsheetReader;
use App\Utils\Excel\SpreadsheetReader_XLSX;

class ImportContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('import');
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
        //
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

    public function import(Request $request)
    {
        request()->validate([
            'file' => 'required|mimes:xlsx'
        ]);

        $path = request()->file('file')->getRealPath();
        echo "------".date("H:i:s" ).PHP_EOL;
        $Reader = new SpreadsheetReader_XLSX($path);
        $arr = array();
        foreach ($Reader as $Row)
	    {
            print_r($Row);
		    $arr[] = $Row;
        }
        echo "------".date("H:i:s" ).PHP_EOL;
        dd($arr[1]);
        
        

        //Excel::queueImport(new ContactImport, $path);

    }
}
