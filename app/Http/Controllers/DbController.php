<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbController extends Controller
{
    public function index()
    {
        /*$sql = "
            CREATE TABLE test (
                id INT PRIMARY KEY AUTO_INCREMENT,
                content varchar(50)
            )
        ";
        dd(\DB::unprepared($sql));*/

        /*$sql = "
           INSERT INTO test(content) VALUES (:content)
        ";

        $result = \DB::insert($sql, [':content' => 'test']);
        dd($result);*/
        /*
        $sql = "
            SELECT * From test

        ";

        //$result = \DB::select($sql);
        dd($result);
        */

        /*$result = \DB::table('test')
            ->get();

        //dd($result);

        foreach ($result as $item){
            dump($item);
        }

        dd($result->toArray());

        */

        $sql = "
        SELECT * From test WHERE id = :id

    ";
        $result = \DB::select($sql, [':id'=> 2]);

        dd($result);
    }


}
