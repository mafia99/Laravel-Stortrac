<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Session;

class AssetsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //customer Id = 468
        $assets = $this->get_data();
        return View('frontend.assets.index')->with('assets', $assets);
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

        $url = 'https://api.fieldaware.net/asset/' . $id . '?api_key=dadd0475434941d1b1a6b5400d5fa870';
        $content = file_get_contents($url);
        $asset = json_decode($content, true);

        $attachedImage = '';
        if (count($asset['attachments']) > 0) {
            if(!file_exists(public_path().'uploads/assets/'.$asset['attachments'][0]['name'])){
                $attachedImage = $this->getImageAndFixOriantation($asset['attachments']);
            }

            //file_put_contents($img, $imagecontent);
        }



        return View('frontend.assets.show')->with('asset', $asset)->with('attachedImage',$attachedImage);
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

    public function getImageAndFixOriantation($attachments) {

        $img = 'uploads/assets/' . $attachments[0]['name'];

        //$imagecontent = file_get_contents('https://fieldaware.s3.amazonaws.com/' . $attachments[0]['uuid'] . '/' . $attachments[0]['name']);
        //Storage::disk('uploads')->put($img, $imagecontent);
        $exif = exif_read_data('https://fieldaware.s3.amazonaws.com/' . $attachments[0]['uuid'] . '/' . $attachments[0]['name']);

//fix the Orientation if EXIF data exist
        if (!empty($exif['Orientation'])) {
            $imageResource = imagecreatefromjpeg('https://fieldaware.s3.amazonaws.com/' . $attachments[0]['uuid'] . '/' . $attachments[0]['name']); 
            switch ($exif['Orientation']) {
                case 8:
                    $createdImage = imagerotate($imageResource, 90, 0);
                    break;
                case 3:
                    $createdImage = imagerotate($imageResource, 180, 0);
                    break;
                case 6:
                    $createdImage = imagerotate($imageResource, -90, 0);
                    break;
            }
        }
        //Storage::disk('uploads')->put($img, $createdImage);
        if(imagejpeg($createdImage, $img, 90)){
            imagedestroy($createdImage);
            imagedestroy($imageResource);
            return $attachments[0]['name'];
        }
        
    }

}
