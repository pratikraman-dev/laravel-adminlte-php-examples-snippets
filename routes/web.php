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


/* for main menu connect with Hello controller */
route::get('widgets', 'Hello@widgets');
route::get('dashboard', 'Hello@dashboard');
route::get('dashboard1', 'Hello@dashboard1');
route::get('dashboard2', 'Hello@dashboard2');
route::get('gallery', 'Hello@gallery');
route::get('calendar', 'Hello@calendar');


/*for layout pages connect with Layout controller*/
route::get('home', 'Layout@home');
route::get('topnav', 'Layout@topnav');
route::get('boxed', 'Layout@boxed');
route::get('fixfoo', 'Layout@fixfoo');
route::get('fixsid', 'Layout@fixsid');
route::get('fixtop', 'Layout@fixtop');
route::get('colsid', 'Layout@colsid');


/*for chart pages connect with Charts controller*/
route::get('chartjs', 'Charts@chartjs');
route::get('flot', 'Charts@flot');
route::get('inline', 'Charts@inline');


/*for UI Elements pages connect with Ui controller*/
route::get('general', 'Ui@general');
route::get('icons', 'Ui@icons');
route::get('button', 'Ui@button');
route::get('modals', 'Ui@modals');
route::get('navbar', 'Ui@navbar');
route::get('ribbons', 'Ui@ribbons');
route::get('sliders', 'Ui@sliders');
route::get('timeline', 'Ui@timeline');


/*for form pages connect with Form controller*/
route::get('fileuplode', 'Form@fileuplode');
route::get('advanced', 'Form@advanced');
route::get('editors', 'Form@editors');
route::get('generalf', 'Form@generalf');
route::get('validation', 'Form@validation');


/*for table pages connect with Table controller*/
route::get('data', 'Table@data');
route::get('jsgrid', 'Table@jsgrid');
route::get('simple', 'Table@simple');


/*for mail pages connect with Mailbox controller*/
route::get('inbox', 'Mailbox@inbox');
route::get('compose', 'Mailbox@compose');
route::get('read', 'Mailbox@read');


/*for pages connect with Pages controller*/
route::get('invoice', 'Pages@invoice');
route::get('profile', 'Pages@profile');
route::get('ecommerce', 'Pages@ecommerce');
route::get('projects', 'Pages@projects');
route::get('projectadd', 'Pages@projectadd');
route::get('projectedit', 'Pages@projectedit');
route::get('projectdetail', 'Pages@projectdetail');
route::get('contacts', 'Pages@contacts');


/*for extra pages connect with Extras controller*/
route::get('login', 'Extras@login');
route::get('register', 'Extras@register');
route::get('forgotpassword', 'Extras@forgotpassword');
route::get('recoverpassword', 'Extras@recoverpassword');
route::get('lockscreen', 'Extras@lockscreen');
route::get('legacyusermenu', 'Extras@legacyusermenu');
route::get('languagemenu', 'Extras@languagemenu');
route::get('error404', 'Extras@error404');
route::get('error500', 'Extras@error500');
route::get('pace', 'Extras@pace');
route::get('blankpage', 'Extras@blankpage');
route::get('starterpage', 'Extras@starterpage');


Route::get('/', function () {
    return view('home');
});
Route::get('/indt', function () {
    return view('insertdata');
});
Route::get('/master', function () {
    return view('page.master');
});
Route::post('insert', 'insert@insert');
Route::get('sayhello', 'Hello@callhello');
Auth::routes();
Auth::routes();
Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
