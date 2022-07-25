<?php

namespace Lewin\Activ\Controllers;

use Illuminate\Http\Request;
use Lewin\Activ\Activ;
use App\Http\Controllers\Controller;

class ActivController extends Controller
{
    public function __invoke(Activ $activ, Request $request, $page_number=1) {

        if (empty($_POST)){

            $data = $activ->getUsers($page_number);
            $users = $data['data'];
            $page = $data['page'];
            $pages = $data['total_pages'];
            return view('activ::index', compact('users', 'page','pages'));

        }else{
            $id = $request->user_id;
            $user = $activ->getUser($id);

            return view('activ::user', compact('user'));
        }
            
        

    }

}
