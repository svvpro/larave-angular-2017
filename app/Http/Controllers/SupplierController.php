<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index($id = null)
    {
        if($id == null){
            return Supplier::orderBy('name', 'asc')->get();
        }else{
            return $this->show($id);
        }
    }

    public function create()
    {

    }

    public function show($id)
    {
        return Supplier::find($id);
    }

    public function store(Request $request)
    {
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->surname = $request->surname;
        $supplier->email = $request->email;
        $supplier->save();

        return 'Позватель успешно создан id: '.$supplier->id;
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->name = $request->name;
        $supplier->surname = $request->surname;
        $supplier->email = $request->email;
        $supplier->update();

        return 'Позватель успешно обновлен id: '.$supplier->id;
    }

    public function destroy($id)
    {
        Supplier::find($id)->delete();
        return 'Пользователь успешно удален';
    }
}
