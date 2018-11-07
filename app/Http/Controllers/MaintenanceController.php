<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Place;

class MaintenanceController extends Controller
{
    public function storeType(Request $request) {
      $type = new Type($request->type);
      $type->save();
      return ['type' => $type];
    }

    public function storePlace(Request $request) {
      $place = new Place($request->place);
      $place->save();
      return ['place' => $place];
    }

    public function storeCategory(Request $request) {
      $category = new Category($request->category);
      $category->save();
      return ['category' => $category];
    }

    public function storeSelection(Request $request) {
      $selection = new Selection($request->selection);
      $selection->save();
      return ['selection' => $selection];
    }
}
