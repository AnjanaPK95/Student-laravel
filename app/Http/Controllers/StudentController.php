<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class StudentController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->get('http://127.0.0.1:8000/api/students/');
        $students = json_decode($response->getBody()->getContents());

        return view('students.index', compact('students'));
    }
}
