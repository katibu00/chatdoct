<?php

use App\Events\TestEvent;
use App\Http\Controllers\PagesController;
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

Route::get('/', function () {
    return view('front.index');
});


Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/featured-doctors', [PagesController::class, 'doctors'])->name('doctors');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');


Route::get('/chats', function () {
    return view('test');
})->name('chats');


Auth::routes();




Route::group(['prefix' => '', 'middleware' => ['auth']], function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/userList', [App\Http\Controllers\MessageController::class, 'userlist'])->name('userList');
    Route::get('/usermessage/{id}', [App\Http\Controllers\MessageController::class, 'user_message'])->name('usermessage');
    Route::post('sendmessage', [App\Http\Controllers\MessageController::class, 'send_message'])->name('user.message.send');

    Route::get('/profile/{id}', [App\Http\Controllers\PatientProfileController::class, 'index'])->name('profile');
    Route::get('/profile/settings/{id}', [App\Http\Controllers\PatientProfileController::class, 'settings'])->name('profile.settings');

    Route::post('/profile/{id}', [App\Http\Controllers\PatientProfileController::class, 'update'])->name('profile');

    Route::get('/doctor/application', [App\Http\Controllers\DoctorApplicationController::class, 'index'])->name('doctor.apply');
Route::post('/doctor/application', [App\Http\Controllers\DoctorApplicationController::class, 'save']);

});


Route::group(['prefix' => 'users', 'middleware' => ['auth','admin']], function(){

    Route::get('/applications', [App\Http\Controllers\UsersController::class, 'applicationsIndex'])->name('doctors.applications');
    Route::get('/doctors/applications/submit/{id}', [App\Http\Controllers\UsersController::class, 'ApproveRequest'])->name('doctors.applications.submit');

});

//Routes copied 
Route::get('/showDoctor', function () {
    return view('doctor_profile');
})->name('showDoctor');

Route::get('/doctorsList', function () {
    return view('doctors_list');
})->name('doctorsList');

Route::get('/medicalDevices', function () {
    return view('medical_devices');
})->name('medicalDevices');
Route::get('/index', function () {
    return view('home');
})->name('index');

//patient routes
Route::group(['prefix' => 'patient', 'middleware' => ['auth']], function(){

    Route::get('/doctors', [App\Http\Controllers\PatientController::class, 'DoctorsIndex'])->name('doctors.index');
    Route::get('/doctors/details/{number}', [App\Http\Controllers\PatientController::class, 'DoctorsDetails'])->name('doctors.details');

    Route::post('/book', [App\Http\Controllers\PatientController::class, 'BookDoctor'])->name('book');
    Route::get('/reservations', [App\Http\Controllers\PatientController::class, 'MyReservations'])->name('reservations');
    Route::post('/reservations', [App\Http\Controllers\PatientController::class, 'PreFormSave'])->name('reservations');
    Route::get('/wallet', [App\Http\Controllers\WalletController::class, 'index'])->name('wallet');

});

Route::post('/pay', [App\Http\Controllers\WalletController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', 'WalletController@handleGatewayCallback');

//doctor routes
Route::group(['prefix' => 'doctor', 'middleware' => ['auth']], function(){

    Route::get('/schedules', [App\Http\Controllers\DoctorController::class, 'SchedulesIndex'])->name('doctors.schedules');
    Route::post('/schedules', [App\Http\Controllers\DoctorController::class, 'SchedulesStore'])->name('doctors.schedules');
    Route::get('/profile', [App\Http\Controllers\DoctorController::class, 'ProfileIndex'])->name('doctors.profile');
    Route::get('/profile/settings', [App\Http\Controllers\DoctorController::class, 'SettingsIndex'])->name('doctors.profile.settings');

    Route::post('/profile/{id}', [App\Http\Controllers\DoctorController::class, 'update'])->name('doctors.profile');

    Route::get('/patients', [App\Http\Controllers\DoctorController::class, 'MyPatients'])->name('doctor.patients');
    Route::get('/chat/patients', [App\Http\Controllers\DoctorController::class, 'Chat'])->name('doctor.chat');

});


//get routes
Route::get('/get-data', [App\Http\Controllers\PatientController::class, 'GetData'])->name('get-data');
