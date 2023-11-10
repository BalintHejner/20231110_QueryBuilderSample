<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;


class ActorController extends Controller
{
    function actors()
    {
        $actors = DB::table('actor')->get();
        return $actors;
    }

    function actorsbyFirstname($firstname)
    {

      $actors = DB::table('actor')->where('first_name', '=', $firstname)->get();
      return $actors;
    }

    function actorsbyName($firstname, $lastname) {
        $actors = DB::table('actor')->where('first_name', '=', $firstname)->where('last_name', $lastname)->get();
        return $actors;
    }

    function actorsCount() {
        return  DB::table('actor')->count();
    }

    function actorsCountbyFirstname($firstname) {
        return  DB::table('actor')->where('first_name', '=', $firstname)->count();
    }

    function actorsCountbyName() {
        return  DB::table('actor')->select('first_name', DB::raw('COUNT(*) AS countActors'))->groupBy('first_name')->orderBy('countActors', 'desc')->get();
    }
}
