<?php

namespace App\Http\Controllers;

use Bschmitt\Amqp\Amqp;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {

        for($idx = 0; $idx < 25; $idx++ ) {

            $rand = str_random(4);
            $amqp = new Amqp();
            $amqp->publish('hello', $rand);

            echo "Send message = ".$rand."<br/>";
        }

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
