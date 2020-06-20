<?php

namespace App\Http\Controllers;
use Ixudra\Curl\Facades\Curl;

class HomeController extends Controller
{
    protected $mainLink, $yesterdayQS, $twoDaysAgoQS, $lastDays;
    
    public function __construct()
    {
        $this->mainLink = 'https://disease.sh/v2';
    }

    public function index()
    {
        return view('welcome');
    }

    public function show($sort, $firstParam, $secondParam, $thirdParam = null)
    {
        return $this->prepareLink($sort, $firstParam, $secondParam, $thirdParam);
    }
   
    private function prepareLink($link, $firstParam, $secondParam, $thirdParam = null)
    {

        if($thirdParam){

            if($firstParam) { $apiLink = $this->mainLink.'/'.$link.'/'.$thirdParam.$this->yesterday(); }

            elseif($secondParam) { if($link == 'historical') { $apiLink = $this->mainLink.'/'.$link.'/'.$thirdParam.$this->lastDays($secondParam); } else { $apiLink = $this->mainLink.'/'.$link.'/'.$thirdParam.$this->twoDaysAgo(); }}

            else { $apiLink = $this->mainLink.'/'.$link.'/'.$thirdParam; }

        }else{

            if($firstParam) { $apiLink = $this->mainLink.'/'.$link.$this->yesterday(); }

            elseif($secondParam) { if($link == 'historical') { $apiLink = $this->mainLink.'/'.$link.$this->lastDays($secondParam); } else { $apiLink = $this->mainLink.'/'.$link.$this->twoDaysAgo(); }}

            else { $apiLink = $this->mainLink.'/'.$link; }

        }
    
        return Curl::to($apiLink)->get();
    }

    private function yesterday() { return $this->yesterdayQS = '?yesterday=true'; }

    private function twoDaysAgo(){ return $this->twoDaysAgoQS = '?allowNull=true'; }

    private function lastDays($days){ return $this->lastDays = '?lastdays='.$days; }
}