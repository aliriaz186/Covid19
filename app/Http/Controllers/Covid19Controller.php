<?php

namespace App\Http\Controllers;

use App\Visitor;

class Covid19Controller extends Controller
{
    public function getView(){
        $ip = $this->saveUserInfo();
        $totalUsers = $this->getUsersCount();
        $countries = config('countries');
        $totals = file_get_contents("https://covidapi.info/api/v1/global");
        $response = json_decode($totals, true);
        $active = (int) $response["result"]["confirmed"] - (int)$response["result"]["deaths"] - (int)$response["result"]["recovered"];
        return view("coronavirus")->with(["ip" => $ip,"users" => $totalUsers, "countries" => $countries, "date" =>  $response["date"],'confirmed' => $response["result"]["confirmed"], 'deaths' => $response["result"]["deaths"], 'recovered' => $response["result"]["recovered"], 'active' => $active]);
    }

    public function getCountryData($code){
        $date = strtotime("-1 day", strtotime(date('Y-m-d')));
        $countryHistory = [];
        $countryData = file_get_contents("https://covidapi.info/api/v1/country/" . $code);
        $response = json_decode($countryData, true);
        for ($i=0;$i<30;$i++){
            $data = $response['result'][date("Y-m-d", $date)];
            array_push($countryHistory, ['date' => (date("Y-m-d", $date)), 'confirmed' => $data['confirmed'], 'deaths' => $data['deaths'], 'recovered' => $data['recovered']]);
            $date = strtotime("-1 day", strtotime(date("Y-m-d", $date)));
        }
        $totals = file_get_contents("https://covidapi.info/api/v1/global");
        $response = json_decode($totals, true);
        $active = (int) $response["result"]["confirmed"] - (int)$response["result"]["deaths"] - (int)$response["result"]["recovered"];
        return view('country-data')->with(['country' => $code, 'data' => $countryHistory, "date" =>  $response["date"],'confirmed' => $response["result"]["confirmed"], 'deaths' => $response["result"]["deaths"], 'recovered' => $response["result"]["recovered"], 'active' => $active]);
    }

    private function saveUserInfo(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        if(!Visitor::where('ip', $ip)->exists()){
            $visitor = new Visitor();
            $visitor->ip = $ip;
            $visitor->save();
        }
        return $ip;
    }

    private function getUsersCount(){
        return Visitor::all()->count();
    }
}
