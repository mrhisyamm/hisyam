<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\Models\Province;
use App\Models\City;

class OngkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://api.rajaongkir.com/starter/province');
       
        return $response->body();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getprovince()
    {
        $client = new \GuzzleHttp\Client();
            $response = $client->get('https://api.rajaongkir.com/starter/province');
           
       return $response->body();
    }

    public function getcity()
    {
        $client = new Client();

        try{
            $response = $client->get('https://api.rajaongkir.com/starter/city',
            array(
                'headers' => array(
                    'key' => '899db52596b55d459f6382a323a1695a',
                )
            )
        );
        } catch (RequestException $e){
            var_dump($e->getResponse()->getBody()->getContents());
        }

        $json = $response->getBody()->getContents();

        $array_result = json_decode($json, true);

        // print_r($array_result);
        // echo $array_result["rajaongkir"]["results"][0]["city_name"];

        for($i = 0; $i < count($array_result["rajaongkir"]["results"]); $i++)
        {
            $city = new City();
            $city->id = $array_result["rajaongkir"]["results"][$i]["city_id"];
            $city->name = $array_result["rajaongkir"]["results"][$i]["city_name"];
            $city->id_province = $array_result["rajaongkir"]["results"][$i]["province_id"];
            $city->save(); 
        }
    }

    public function checkongkir()
    {
        $title = "check Ongkir";
        $city = City::get();

        return view('user.ongkir.checkongkir', compact('title','city'));

    }

    public function prosesongkir(Request $request)
    {
        $title = "Check Ongkir Result";
        $client = new Client();

        try{
            $response = $client->request('POST','https://api.rajaongkir.com/starter/cost',
           [
            'body' => 'origin='.$request->origin.
                      '&destination='.$request->destination.
                      '&weight='.$request->weight.
                      '&courier=jne',
                      
            'headers' => [
                'key' => '899db52596b55d459f6382a323a1695a',
                'content-type' => 'application/x-www-form-urlencoded',
            ]
           ]
        );
        } catch (RequestException $e){
            var_dump($e->getResponse()->getBody()->getContents());
        }

        $json = $response->getBody()->getContents();

        $array_result = json_decode($json, true);

        $origin = $array_result["rajaongkir"]["origin_details"]["city_name"];
        $destination = $array_result["rajaongkir"]["destination_details"]["city_name"];

        // print_r($array_result);
        // echo $array_result["rajaongkir"]["results"][0]["costs"][1]["cost"][0]["value"];

        return view('user.ongkir.prosesongkir', compact('title','origin','destination','array_result'));
    }

}


