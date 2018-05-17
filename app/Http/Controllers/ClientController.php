<?php

namespace HttpClient\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use HttpClient\Http\Requests;

class ClientController extends Controller
{
    protected function performRequest($method,$url,$parameter=[])
    {
        // dd($parameter);
        // $client = new Client(['curl' => [CURLOPT_CAINFO => base_path('resources/certs/cacert/pem')]]);
        // $client = new \GuzzleHttp\Client(['defaults' => ['verify' => true]]);
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

    protected function obtainAccessTokent()
    {
        $grantType = config('api.grant_type');
        $clientId = config('api.client_id');
        $clientSecret = config('api.client_secret');

        // dd($clientSecret);
        $content = $this->performRequest("POST","https://lumenapi.juandmegon.com/oauth/access_token", [
                'form_params' => [
                    'grant_type'    => $grantType,
                    'client_id'     => $clientId,
                    'client_secret' => $clientSecret]]);
        
        $decodedContends = json_decode($content);
        $accessToken = $decodedContends->access_token;
        return $accessToken;
    }

    protected function performPostRequest($url,$parameter=[])
    {
        $content = $this->performAuthorizeRequest('POST',$url,$parameter);

        $decodedContends = json_decode($content);
        
        return $decodedContends->data;

    }

    protected function performAuthorizeRequest($method, $url, $formParameters)
    {
        $requestParameter['form_params'] = $formParameters;

        $accessToken ="Bearer ". $this->obtainAccessTokent();

        $requestParameter['headers']['Authorization'] = $accessToken;

        return $this->performRequest($method, $url, $requestParameter);

    }

    protected function obtainOneStudent($studentID)
    {
        return $this->performGetRequest("https://lumenapi.juandmegon.com/students/{$studentID}");
    }
    protected function CreateOneStudent($parameters)
    {
        return $this->performPostRequest("https://lumenapi.juandmegon.com/students",$parameters);
    }
    protected function obtainAllStudents()
    {
        return $this->performGetRequest("https://lumenapi.juandmegon.com/students");
    }

    protected function obtainOneTeacher($teacherID)
    {
        return $this->performGetRequest("https://lumenapi.juandmegon.com/teachers/{$teacherID}");
    }

    protected function obtainAllTeachers()
    {
        return $this->performGetRequest("https://lumenapi.juandmegon.com/teachers");
    }

     protected function obtainAllCourses()
    {
        return $this->performGetRequest("https://lumenapi.juandmegon.com/courses");
    }

    


}
