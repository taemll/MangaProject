<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function show(){
        $publisher=Publisher::get();
        return $genre;
    }

    public function create(Request $request){
        $publisher=Publisher::updateOrCreate(['name'=>$request->name]);
        return $genre;
    }

    public function update(Request $request, $id){
        try{
            $publisher=Publisher::findOrFail($id);
        }
        catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $publisher->update(['name'=>$request->name]);
        return response()->json('Successfully updated', 201);
    }

    public function delete($id){
        try{
            $publisher = Publisher::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $publisher->delete();
        return response()->json('Successfully deleted', 204);
    }
}