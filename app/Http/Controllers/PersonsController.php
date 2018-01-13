<?php

namespace App\Http\Controllers;

use App\Persons;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class PersonsController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */

    public function getPersons()
    {
        $persons = Persons::all();

        return response()->json($persons);
    }

    public function updatePersons(Request $request)
    {
        $person = Persons::find($request->id)
                      ->update($request->all());


        if($person){
            return response()->json(['ok' => 'ok'],200);
        }

        else{
            return response()->json(['ok' => 'something went wrong'],500);
        }
    }

    public function create(Request $request)
    {
        $person = new Persons;

        $person->create($request->all());


        if($person){
            $id = Persons::max('id');
            return response()->json(['id' => $id],200);
        }else{
            return response()->json(['id' => false],500);
        }
    }

    public function delete(Request $request)
    {
        $person = Persons::find($request->id);

        if($person->delete()){
            return response()->json(['ok' => 'ok'],200);
        }else{
            return response()->json(['ok' => 'something went wrong'],500);
        }
    }


}