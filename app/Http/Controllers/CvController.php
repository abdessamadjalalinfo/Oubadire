<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CV;

class CvController extends Controller
{
    public function index(Request $request)
    {
        
        $cvs=CV::Where("approuve","oui");
        if($request->formation != "") {
            $cvs = $cvs->where('formation', $request->formation);
        }
        if($request->ecole != "") {
            $cvs = $cvs->where('ecole', $request->ecole);
        }
        
        return view("cv",["cvs"=> $cvs->paginate(15)]);
    }
    public function ajouter_cv()
    {
        return view("ajouter-cv");
    }
    public function ajouter(Request $request)
    {
        //dd($request);
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();


        $cvName = time().'.'.$request->file->extension();
        // Public Folder
        $request->image->move(public_path('images'), $imageName);
        $request->file->move(public_path('images'), $cvName);


        $cv=new CV();
        $cv->nom=$request->nom;
        $cv->ecole=$request->ecole;
        $cv->formation=$request->formation;

        $cv->experienceas=$request->experienceas;
        $cv->descriptionas=$request->descriptionas;

        $cv->file=$cvName;
        $cv->photo=$imageName;
        $cv->approuve="non";
        //dd($cv);
       

        try{
            $cv->save();
         }
         catch(\Exception $e){
            // do task when error
            echo $e->getMessage();   // insert query
         }
       


        // //Store in Storage Folder
        // $request->image->storeAs('images', $imageName);

        // // Store in S3
        // $request->image->storeAs('images', $imageName, 's3');

        //Store IMage in DB 


        return back()->with('success', "votre CV a été envoyé à l'administrateur!");
    }
}
