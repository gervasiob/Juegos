<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dato;
class WebhookController extends Controller
{
    //
     public function handle(Request $request)
    {
     Dato::create([
            /* pasar todos los campos a actualizar*/
            'data'=>$request->input('data'),
        ]);
        return redirect(route('welcome'));
        
                   
    }
      public function show()
 {
          $datos = Dato::all();
        return view('datos', ['datos' => $datos]);
 }
}
