<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WorkspaceController;
use Illuminate\Support\Facades\Auth;
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
// Route::get('/hari', function () {
//     return view('skipthings/demo12', ['articleName' => 'Article 1']);
// });
Route::get('/', [LoginController::class, 'noheader']);
Route::get('/chooseworkspace', [WorkspaceController::class, 'nh_chooseworkspace']);
Route::get('/workspace/add', [WorkspaceController::class, 'nh_add_workspace']);
Route::get('/workspace/bussinessdeatil/add', [WorkspaceController::class, 'nh_add_buss_dtl']);

Route::view('/dashboard', 'crm/content');

Route::view('/calls', 'crm/task/call');

Route::view('order/add', 'crm/order/add');
Route::view('order/list', 'crm/order/list');
Route::view('order/view', 'crm/order/view');
Route::view('order/edit', 'crm/order/edit');
Route::view('/order/history', 'crm/order/history');
//end order

//transaction
Route::view('transaction/add', 'crm/transaction/add');
Route::view('transaction/view', 'crm/transaction/view');
Route::view('transaction/edit', 'crm/transaction/edit');
Route::view('transaction/list', 'crm/transaction/list');
//end transaction

//invoice
Route::view('invoice/create', 'crm/invoice/add');
Route::view('invoice/edit', 'crm/invoice/edit');
Route::view('invoice/view', 'crm/invoice/view');
Route::view('invoice/list', 'crm/invoice/list');
//end

//contact
Route::view('contact/add', 'crm/contact/add');
Route::view('contact/edit', 'crm/contact/edit');
Route::view('contact/list', 'crm/contact/list');
//end contact

//document
Route::view('document/list', 'crm/document/list');
Route::view('document/add', 'crm/document/add');
Route::view('document/edit', 'crm/document/edit');
//end document

//lead

Route::view('/leads_and_customers', 'crm/lead/leads_and_customer');
Route::view('lead/list', 'crm/lead/list');
Route::view('lead/add', 'crm/lead/add');
Route::view('lead/edit', 'crm/lead/edit');

//end Lead

//Email Add
Route::view('/email/add', 'crm/templates/email/add');
Route::view('/email/list', 'crm/templates/email/list');
Route::view('/email/edit', 'crm/templates/email/edit');
Route::view('/email/view', 'crm/templates/email/view');
//End Email

//Sms Add
Route::view('/sms/add', 'crm/templates/sms/add');
Route::view('/sms/list', 'crm/templates/sms/list');
Route::view('/sms/edit', 'crm/templates/sms/edit');
Route::view('/sms/view', 'crm/templates/sms/view');
//End
//Start
Route::view('/product/list', 'crm/product/list');
Route::view('/product/add', 'crm/product/add');
Route::view('/product/view', 'crm/product/view');
Route::view('/product/edit', 'crm/product/edit');
//End

Route::view('/supportticket/add', 'crm/supportticket/add');
Route::view('/supportticket/view', 'crm/supportticket/view');

Route::view('/supportticket/edit', 'crm/supportticket/edit');
Route::view('/supportticket/list', 'crm/supportticket/list');

// Route::view('/addnewworkspace', 'crm/addnewworkspace/addworkspace');

Route::view('addbussiness', 'crm/bussinessdetail/addbussiness');
Route::view('addbussinessdashboard', 'crm/bussinessdetail/addbussinessdashboard');

Route::view('serviceticket', 'crm/serviceticket');

Route::view('chat', 'crm/chat');

Route::view('followup', 'crm/followup');

Route::view('onlinemeeting', 'crm/onlinemeeting');

Route::view('callfeedback', 'crm/callfeedback');

Route::view('servicesupport', 'crm/servicesupport');

Route::view('performance', 'crm/performance');

Route::view('treasurebox', 'crm/treasurebox');
Route::view('setting', 'crm/setting');
Route::view('unassigned', 'crm/unassigned');
Route::view('reporting', 'crm/reporting');

Auth::routes();

Route::view('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('/product', ProductController::class);
Route::view('/CategoryShow{id}', [ProductController::class, 'show']);
Route::view('theme', 'theme.theme');
