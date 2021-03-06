<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Session;

class JobController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //customer Id = 468
    //    $assets = $this->get_data();
    //    return View('frontend.assets.index')->with('assets', $assets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
        $url = 'https://api.fieldaware.net/job/'.$id.'?api_key=dadd0475434941d1b1a6b5400d5fa870';
        $content = file_get_contents($url);
        $job = json_decode($content, true);

      //  $customerId = $asset['customer']['uuid'];
      //  $customerUrl = 'https://api.fieldaware.net/customer/'.$customerId.'?api_key=dadd0475434941d1b1a6b5400d5fa870';
      //  $customerContent = file_get_contents($customerUrl);
      //  $customer = json_decode($customerContent, true);
        return View('frontend.job.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function get_data() {

        $file_n = storage_path('data/assets_1.csv');
        $file = fopen($file_n, "r");
        $all_data = array();
        while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
            $all_data[] = $data;
        }
        fclose($file);

        array_splice($all_data, 0, 1);
        return $all_data;
    }

}
