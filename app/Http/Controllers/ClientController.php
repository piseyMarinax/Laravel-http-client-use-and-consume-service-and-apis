<?php

namespace HttpClient\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use HttpClient\Http\Requests;

class ClientController extends Controller
{
    protected function performRequest($method,$url,$parameter=[])
    {
        // $client = new Client(['curl' => [CURLOPT_CAINFO => base_path('resources/certs/cacert/pem')]]);
        $client = new Client();
        $response = $client->request($method, $url, $parameter);

        return $response->getBody()->getContents();
    }

    protected function performGetRequest($url,$parameter=[])
    {
        $content = $this->performRequest('GET',$url);
        $decodedContends = json_decode($content);
        return $decodedContends->data;
    }

    protected function obtainOneStudent($studentID)
    {
        return $this->performGetRequest("https://lumenapi.juandmegon.com/students/{$studentID}");
    }
    protected function obtainAllStudents()
    {
        return $this->performGetRequest("https://lumenapi.juandmegon.com/students");
    }
}
