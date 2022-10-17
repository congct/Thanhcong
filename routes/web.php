<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\CategoryController; 

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',function(){
    //những gì hiển thị trên đường dẫn
    echo 'abc'; 
});

Route::group(['prefix' =>'product'], function() 
{
    Route::get('/add', function()
    {
        return view('t');
    });
    Route::get('/edit', function()
    {
        return view('editproduct');
    });
    Route::get('/view', function()
    {
        return view('viewproduct');
    });
});

Route ::get('/test',[MyController::class,'index']);

Route::get('/age/{age}', function ($age)
{
    return $age;
})-> middleware(CheckAge::class);

Route::get('/thanhcongg/{yearofbirth}', function ($yearofbirth)
{
    return $yearofbirth;
})-> middleware(CheckYearofBirth::class);

Route::get('/testData',[MyController::class,'getData']);


// Route::get('/websites', function () {
//     return view('layout/index');
// });

Route::get('/thanhcong', function () 
{
    return view('admin.postForm');
});
Route::get('/Helloworld', function()
{
    return view('Hello-world');
});
Route::get('/123/{year}/{yourname?}',function($year,$yourname=null){
    if($yourname==null)
    {
        echo('Hello world,'.$year);
    }
    else
    {
        echo('Hello world,'.$year.'.My name is'.$yourname);
    }
});
Route::get('/Baitap', function()    
{
    return view('index');
});
Route::group(['prefix' =>'category'], function(){

    Route::get('/',[CategoryController::class,'index'])->name('category.index');
    Route::get('create/',[CategoryController::class,'getCreate'])->name('admin.category.create');
    Route::post('create/',[CategoryController::class,'postCreate']);
    Route::get('edit/{id}',[CategoryController::class,'getEditCate']);
    Route::post('edit/{id}',[CategoryController::class,'postEditCate']);
    Route::get('delete/{id}',[CategoryController::class,'delete']);
    }); 

