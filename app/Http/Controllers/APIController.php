<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Panoscape\Vuforia\Target as Target;
use \Panoscape\Vuforia\Facades\VuforiaWebService as VWS;

use App\ImageTargets;

class APIController extends Controller
{
    private $config;

    function __construct()
    {
        // $result = $vws->getTargets();
        // $this->middleware('auth');
        $this->config =  [
            "url" => [
                "targets" => "https://vws.vuforia.com/targets",
                "duplicates" => "https://vws.vuforia.com/duplicates",
                "summary" => "https://vws.vuforia.com/summary",
            ],
            "credentials" => [
                "access_key" => "7173cc7ef971f4b513b04ce29070b8be3bc9dfdb",
                "secret_key" => "7c25ac4c02fa5ac138eb18b1b5a6aca1ed3a9e12",
            ],
            "max_image_size" => 2097152,
            "max_meta_size" => 2097152,
            "naming_rule" => "/^[\w\-]+$/",
        ];
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $imageTargets = ImageTargets::latest()->get();

        return response()->json($imageTargets);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function imageTarget($id)
    {
        $imageTargets = ImageTargets::where('generated_id', $id)->get();

        return response()->json($imageTargets);
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
