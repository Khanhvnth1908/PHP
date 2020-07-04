<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Tasks;
use Illuminate\Http\Request;

Route::get('/', function () {
    $tasks = Tasks::orderBy('created_at','desc')->get();

    return view('tasks',[
        'tasks' => $tasks
    ]);

});

Route::post('/task',function (Request $request){
    //Validate Information
    $validator = Validator::make($request->all(),[
        'name' =>'required|max:255',
    ]);

      if ($validator->fails()){
        return redirect('/')
                ->withInput()
            ->withErrors($validator);
    }

    $task = new Tasks;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});


Route::delete('/task/{task}',function ($id){
    Tasks::findOrFail($id)
        ->delete();
    return redirect('/');
});
