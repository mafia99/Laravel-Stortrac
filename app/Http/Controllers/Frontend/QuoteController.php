<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //customer Id = 468
        $url = 'https://api.fieldaware.net/task/?api_key=dadd0475434941d1b1a6b5400d5fa870';
        $content = file_get_contents($url);
        $tasks = json_decode($content, true);
        $taskList = array(0=>'Please Select Task');
        foreach ($tasks['items'] as $task){
            
            $taskList[] = $task['name'];
        }
        //return View('frontend.assets.show')->with('asset', $asset);
        return View('frontend.quote.index')->with('tasklist', $taskList);
        
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
        $this->validate($request, [
            'location' => 'required',
            'po_number' => 'required',
            'po_number' => 'required',
        ]);
        Session::flash('flash_message', 'Quote request successfully added!');
        return redirect('quote');
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
}
