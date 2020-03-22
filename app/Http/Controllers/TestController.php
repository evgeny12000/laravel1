<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct()
    {
    }


    public function index(Request $request)
    {

        echo 'eeeeeeeeee';
//        return view('tasks.index', [
//            'tasks' => $this->tasks->forUser($request->user()),
//        ]);
    }

    public function getJora(Request $request)
    {

        echo 'jora';

        echo "<pre>";
        print_r($request->toArray());
        return view('test.jora', [
            'data' => $request->toArray(),
        ]);
    }

    public function getFromDB(Request $request)
    {

        echo 'eeeeeeeeee';
        $results = DB::select('select * from users where id = :id', ['id' => 1]);

        echo "<pre>";
        print_r($results);

    }

}
