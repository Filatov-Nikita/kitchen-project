<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kitchen;
use App\Models\Provider;
Use App\Models\Type;

class MainController extends Controller
{
    public function viewKitchen() {
        $kitchens = Kitchen::orderBy('clicks', 'DESC')->get();
        $providers = Provider::get();
        return view('kitchen', [
            'kitchens' => $kitchens,
            'providers' => $providers
        ]);
    }
    
    public function getKitchenById($id) {
       $kitchen = Kitchen::find($id);
       $kitchen->clicks += 1;
       $kitchen->save();

       return view('kitchenOne', ['kitchen' => $kitchen]);
    } 

    public function sort($id_provider) {
        $providers = Provider::get();
        $sortKitchens = Kitchen::Where('provider_id', $id_provider)->get();
        //dump($kitchenSort);
        return view('sortByBrand', ['sortKitchens' => $sortKitchens, 'providers' => $providers]);
    }
    public function mainMenu($id) {
        $kitchens = Type::findOrFail($id)->kitchens;
        return view('listFromTypes', ['kitchens' => $kitchens]);
    }
}
