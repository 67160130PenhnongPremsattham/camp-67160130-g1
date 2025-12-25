<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvalue;
    protected $myvalue2;
    public $myval = "";

    function __construct(){

    }

    function index(){
        return view('myview.index');
    }

    function info(){
        return view('myview.info');
    }

    public function calculate(Request $req) {
        $data['num'] = $req->input('mynumber', 2);
        return view('MyView.calculate', $data);
    }

    function html101(Request $req) {
        return view('template.html101');
    }

    public function result(Request $req) {
        $data = [
            'FirstName'     => $req->input('FirstName'),
            'LastName'      => $req->input('LastName'),
            'BirthDay'      => $req->input('BirthDay'),
            'Gender'        => $req->input('Gender'),
            'Myfile'        => $req->input('Myfile'), // โจทย์บอกยังไม่ต้อง upload ไฟล์จริง
            'Address'       => $req->input('Address'),
            'Favoritecolor' => $req->input('Favoritecolor'),
            'Genre'         => $req->input('Genre'),
        ];

        // แก้ไขการเรียกชื่อไฟล์ให้ถูกต้องตามโครงสร้างที่คุณมี
        return view('template.html101_view', $data);
    }
}
