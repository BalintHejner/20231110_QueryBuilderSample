<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    function filmCosts($min, $max) {
       return DB::table("film")->select("film_id", "title", "replacement_cost")->whereBetween("replacement_cost", [$min, $max])->orderBy("title")->get();
    }
}
