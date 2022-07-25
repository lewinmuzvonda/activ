<?php

namespace Lewin\Activ;

use Illuminate\Support\Facades\Http;

class Activ {
    public function getUsers($page_number) {

            $data = Http::get('https://reqres.in/api/users?page='.$page_number);
        
        return $data ;
    }

    public function getUser($user_id){

        $data = Http::get('https://reqres.in/api/users/'.$user_id);
        
        return $data['data'];
    }
}
