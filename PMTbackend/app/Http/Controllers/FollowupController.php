<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Followup;

class FolowupController extends Controller
{
    public function index(){
        return Folowup::all();
    }
}
