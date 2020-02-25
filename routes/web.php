<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/customer' ,'PagesController@customer') -> name('customer');
Route::get('/showStudent' ,'StudentController@showStudent');
Route::get('/subject' ,'SubjectController@subject') -> name('subject');
Route::get('/action', 'PagesController@action') -> name ('action');
Route::get('/about' , 'PagesController@about') -> name('about');
Route::get('/join' , 'PagesController@join')-> name('join');
Route::get('/news' , 'PagesController@news')-> name('news');
Route::get('/contact' , 'PagesController@contact') -> name('contact');



Route::get('/student' ,'StudentController@getStudent');
Route::post('/addStudent' ,'StudentController@addStudent');
Route::get('/showstudentform' ,'StudentController@showFormStudent');
Route::get('/showeditform/{id}','StudentController@showUpdateStudent') -> name("showeditform");
Route::put('/updatestudent/{id}','StudentController@updateStudent') -> name('update');
Route::get('/delete/{id}','StudentController@delete') -> name('delete');

Route::resource('students','StudentsController');
Route::resource('comments','CommentController');




Route::get('/teacher/{index}', function ($index) {
    // create new array
    $teachers = array("Channak", "Ronan", "Shieha", "Rady", "Rith");
    if ($index < sizeof($teachers)) {
        echo "This teacher is : " . $teachers[$index];
    } else {
        echo "This array is :";
        for ($i = 0; $i < sizeof($teachers); $i++) {
            $countIndex = sizeof($teachers) - 1;
            $result = "";
            if ($i < $countIndex) {
                $result.= "[$i] " . $teachers[$i] . ", ";
            } else {
                $result.= "[$i] " . $teachers[$i];
            }
            // return $result;
        }
        $message = $result. "<br> No Teacher with this index :" .$index ."<br> The largest index id :" . $countIndex;
    }
    return $message;

    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@getUser')->name('home');
Route::get('/addProfile', 'UserController@addProfile');
Route::get('/showProfile', 'UserController@showProfile');
Route::get('/showname', 'ProfileController@showUserName');
Route::get('/editProfile', 'UserController@Update');
Route::get('/deleteProfile', 'UserController@delete')->name('delete');
Route::get('/showform', 'UserController@showFormPost')->name('showform');
Route::post('/addPost', 'UserController@addPosts')->name('addPosts');
Route::get('/showPost', 'UserController@showPost')->name('showPost');
