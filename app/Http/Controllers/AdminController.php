<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kitchen;
use App\Models\User;
use App\Models\Provider;
use App\Models\Type;

class AdminController extends Controller
{

    public function createObjView() {
        $this->authorize('object_create');
        $providers = Provider::get();
        $kitchens = Kitchen::get();
        $types = Type::get();
        return view('createObj', ['providers' => $providers, 'kitchens' => $kitchens, 'types' => $types]);
    }

    public function createObjPost(Request $request) {
        $this->authorize('create', Kitchen::class);
        $res = Kitchen::create([
            'name' => $request->input('name'),
            'type_id' => $request->input('type'),
            'text' => $request->input('text'),
            'clicks' => 0,
            'provider_id' => $request->input('provider'),
        ]);
        return redirect()->route('main-page');
    }
}
