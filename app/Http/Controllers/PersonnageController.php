<?php

namespace App\Http\Controllers;

use App\Models\Personnage;
use Database\Seeders\Personnages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonnageController extends Controller
{
 
   
  

    public function index() {
        $personnage = Personnage::all();
        return view('personnage.create');
      
        
        
    }
     public function create() {
        
       
        $magie = mt_Rand(0,14);
        $force = mt_Rand(0,14);
        $agilite = mt_Rand(0,14);
        $intelligence = mt_Rand(0,14);
        $pv = mt_Rand(20,50);

        return view('personnage.create',['mag'=>$magie,'for'=>$force,'agi'=>$agilite,'int'=>$intelligence,'pv'=>$pv]);
       
    }
    public function store(Request $request ) {
          $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'specialite' => 'required|string',
            "magie"=>"required|numeric",
                "force"=>'required|numeric',
                "agilite"=>'required|numeric',
                "intelligence"=>'required|numeric',
                'pv'=>'required|numeric'
        ]);
            $personnage =  new Personnage ([
                "user_id"=>auth()->user()->id,
                "name"=>$request->get('name'),
                "description"=>$request->get('description'),
                "specialite"=>$request->get("specialite"),
                "magie"=>$request->get('magie'),
                "force"=>$request->get('force'),
                "agilite"=>$request->get('agilite'),
                "intelligence"=>$request->get('intelligence'),
                'pv'=>$request->get('pv')
            ]);
          
            $personnage->save();
            return redirect('personnages/show')->with('success', 'Personnage ajouté avec succès');
    }

    public function show($personnageUser) {
        $personnageUser = Personnage::where('user_id',Auth::user()->id)->get();
        return view('personnage.show', ['personnagerUser' => $personnageUser]);
        
    }

    public function edit($id) {
        $personnage = Personnage::findOrFail($id);

        return view('personnage.edit', ['personnage'=>$personnage]);
    }

    public function update(Request $request, $id) {
        $request->validate([

            'name'=>'required|string|unique',
            'description'=>'required|string',
            'specialite'=>'required|string',
        ]);

        $personnage = Personnage::findOrFail($id);
        $personnage->personnage_name = $request->get('name');
        $personnage->personnage_description = $request->get('description');
        $personnage->speciality = $request->get('specialite');
        
        $personnage->save();

        return redirect('perosnnage/show');
    }

   

    public function save() {
        // sauvegarde de l'annonce
    }

    public function delete($id) {
        $personnage = Personnage::findOrFail($id);
        $personnage->delete();

        return redirect('personnage/show');
    }
}

