<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabungan;

class TabunganController extends Controller
{
    public function index() {
        
        $data = Tabungan::get();

        return view('index')
        ->with('data', $data);
    }

    public function create() {
        return view('input');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nis' => 'required',
            'Nama' => 'required',
            'Rayon' => 'required',
        ]);

        Tabungan::create($request->all());

        return redirect()->route('index')
                    ->with('success', 'Create Successfully!');
    }

    public function delete($id) {
        Tabungan::where('id',$id)->delete();
        return redirect(route('index'))
        ->with('failed', 'Delete Successfully!');
    }

    public function indexEdit($id){

        //$data = Tabungan::get();
        //dd($data);
        $data = Tabungan::where('id',$id)->first();
        return view('edit-data')
        ->with('data', $data);
    }

    public function update(Request $request, $id){

        $data = Tabungan::where('id', $id)->first();
        if($request->action == 'add'){
            $total_money = $data['Uang'] + $request->Uang;
           } elseif($request->action == 'take'){
               if($request->Uang > $data['Uang']){
                   return redirect(route('index'))->with('failed', 'Your balance is not enough!');
               }else{
                   $total_money = $data['Uang'] - $request->Uang;
                    // return redirect(route('index'))->with('success','The balance has been taken!');
               }
            }
           Tabungan::where('id',$id)->update([
               'Uang' => $total_money,
           ]);
           return redirect(route('index'))->with('edited', 'The balance has been taken!');
 
       return redirect()->route('index')
       ->with('edited','Update Successfully!');
    }
    
}
