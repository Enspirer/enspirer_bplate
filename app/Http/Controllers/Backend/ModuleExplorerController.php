<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Module;

class ModuleExplorerController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        $outArray = [];
        foreach ($modules as $mod){
            try{
                $moduleJson =  file_get_contents($mod->getPath().'/'.'module.json');
            }catch (\Exception $exception){
                $moduleJson = null;
            }
            if($moduleJson){
                $moduleMetaArray = json_decode($moduleJson);
            }else{
                $moduleMetaArray = null;
            }
            $outModule = [
                'module_name' => $mod->getName(),
                'path' => $mod->getPath(),
                'meta_details' => $moduleMetaArray
            ];
            array_push($outArray,$outModule);
        }
        return view('backend.module_explorer.index',[
            'modules' => $outArray
        ]);
    }

    public function install(Request $request)
    {

    }

}
