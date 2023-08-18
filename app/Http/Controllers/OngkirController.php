<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\City;
use App\Models\Couriers;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use GuzzleHttp\Client;

class OngkirController extends Controller
{
    public function index(Request $request)
    {
        if($request->origin && $request->destination && $request->weight && $request->courier){
            $origin = $request->origin;
            $destination = $request->destination;
            $weight = $request->weight;
            $courier = $request->courier;

            $client = new Client();
         try{
             $response = $client->request('POST','https://api.rajaongkir.com/starter/cost',
            [
             'body' => 'origin='.$request.
                        '&destination='.$request.
                        '&weight=1000'.
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

        }else{

            $origin = '';
            $destination = '';
            $weight ='';
            $courier = '';
            $array_result = null;

        }
     

         
 
        //  print_r($array_result);
        //  echo $array_result["rajaongkir"]["results"][0]["costs"][1]["cost"][0]["value"];
 
        //  $province = Province::all();
        // $cekongkir = $response["rajaongkir"]["results"][0]["cost"];
        //  return view('user.ongkir.prosesongkir', compact('title','origin','destination','array_result','province'));
        $couriers = Couriers::pluck('title','code');
        $provinces = Province::pluck('name');
        $cities = City::get();

        return view('user.ongkir.index', compact('couriers','provinces','cities','title','origin','destination','array_result'));
    }

    public function getprovince()
    {
        $client = new Client();

        try{
            $response = $client->get('https://api.rajaongkir.com/starter/province',
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
        // echo $array_result["rajaongkir"]["results"][1]["province"];
        for($i = 0; $i < count($array_result["rajaongkir"]["results"]); $i++)
        {
            $province = new Province();
            $province->id = $array_result["rajaongkir"]["results"][$i]["province_id"];
            $province->name = $array_result["rajaongkir"]["results"][$i]["province"];
            $province->save(); 
        }
    }

    public function getCities()
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
            $cities = new City();
            $cities->id = $array_result["rajaongkir"]["results"][$i]["city_id"];
            $cities->city_name = $array_result["rajaongkir"]["results"][$i]["city_name"];
            $cities->province_id = $array_result["rajaongkir"]["results"][$i]["province_id"];
            $cities->type = $array_result["rajaongkir"]["results"][$i]["type"];
            $cities->postal_code = $array_result["rajaongkir"]["results"][$i]["postal_code"];
            $cities->save(); 
        }
    }

    public function submit(Request $request)
    {
       $origin = $request->origin;
       $destination = $request->destination;
       $weight = $request->weight;
       $courier = $request->courier;

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
 
        //  print_r($array_result);
        //  echo $array_result["rajaongkir"]["results"][0]["costs"][1]["cost"][0]["value"];
 
        //  $province = Province::all();
 
         return view('user.ongkir.prosesongkir', compact('title','origin','destination','array_result','province'));
    }

}
