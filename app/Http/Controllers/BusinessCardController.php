<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessCard;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;




class BusinessCardController extends Controller
{
    //

    public function index(){
        $businessCard=businessCard::all();

        return view('business-card.preview_2',compact('businessCard'));
    }

    public function create(){
        return view('business-card.create');

    }

    public function store(Request $request)
    {
        $businessCard = new BusinessCard();
        $businessCard->name=$request->name;
        $businessCard->role=$request->role;
        $businessCard->company_name=$request->company_name;

        $imageName = time().'.'.$request->design->getClientOriginalExtension();
        $request->design->move(public_path('design'), $imageName);
        $businessCard->design = 'design/'.$imageName;



        $businessCard->created_at=Carbon::now();
        $businessCard->updated_at=Carbon::now();

        $businessCard->save();

        return view('business-card.preview', compact('businessCard'));
    }

      public function display(){
        $Cards=BusinessCard::all();
        return view('business-card.display',compact('Cards'));
      }

      public function destroy($id){
        $BusinessCard = BusinessCard::find($id);
        if (!$BusinessCard) {
          return redirect('/show-card');
        }

         $image_path = public_path("design/") . $BusinessCard->design;

        if (Storage::disk('public')->exists($image_path)) {
            Storage::disk('public')->delete($image_path);
        }

         $BusinessCard->delete();
         return redirect('/show-card');
      }



}
