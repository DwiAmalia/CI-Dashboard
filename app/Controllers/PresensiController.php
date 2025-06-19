<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PresensiController extends BaseController
{
    public function presensiData()
    

       {
        $data = [
            'title' => 'Basic Table',
            'subTitle' => 'Basic Table',
        ];
        return view('table/tableData', $data);
    
}
}
