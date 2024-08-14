<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class NewAddresController
{
  public function newAddresView()
  {
    return view('newAddresView');
  }

  public function newAddres(Request $request)
  {
    $addres = $request->input('addres');

    if (!empty($addres)) {
      var_dump($addres);
    } else {
      echo "no addres";
    }

    // return view('newAddresView');
  }
}