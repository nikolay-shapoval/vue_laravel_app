<?php
/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 12.09.2018
 * Time: 13:17
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BloggersController extends Controller
{
    public function index(){
        return view('welcome');

    }

}