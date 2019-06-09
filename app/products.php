<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class products extends Model
{
    public static function getList ()
    {
        return DB::table ( 'products' )->paginate ( '20' );
    }

    public static function create ( $requset )
    {

        function uuid ()
        {
            return sprintf ( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x' ,
                // 32 bits for "time_low"
                mt_rand ( 0 , 0xffff ) , mt_rand ( 0 , 0xffff ) ,

                // 16 bits for "time_mid"
                mt_rand ( 0 , 0xffff ) ,

                // 16 bits for "time_hi_and_version",
                // four most significant bits holds version number 4
                mt_rand ( 0 , 0x0fff ) | 0x4000 ,

                // 16 bits, 8 bits for "clk_seq_hi_res",
                // 8 bits for "clk_seq_low",
                // two most significant bits holds zero and one for variant DCE1.1
                mt_rand ( 0 , 0x3fff ) | 0x8000 ,

                // 48 bits for "node"
                mt_rand ( 0 , 0xffff ) , mt_rand ( 0 , 0xffff ) , mt_rand ( 0 , 0xffff )
            );
        }

        $fileName = uuid ();
        if ( Input::hasFile ( 'file' ) ) {
            $file = Input::file ( 'file' );
            $randomName = $fileName . $file->getClientOriginalName ();
            $file->move ( 'uploads' , $randomName );
        }

        $externalId = uuid ();
        $data = [
            'externalId' => uuid () ,
            'name' => $requset->name ,
            'status' => $requset->status ,
            'quantity' => $requset->quantity ,
            'price' => $requset->price,
            'imageName' => $randomName
        ];
        DB::table ( 'products' )->insert ( $data );
    }

    public static function remove ( $id )
    {
        return DB::table ( 'products' )->where ( 'id' , $id )->delete ();
    }

}
