<?php

use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckStatus;

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


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome']);
Auth::routes();

Route::get('/home', [
    App\Http\Controllers\HomeController::class,
    'index',
])->name('home');
Route::group(['prefix' => 'seller'], function () {
    Route::get('profile', [
        App\Http\Controllers\ProfileController::class,
        'index',
    ])->name('personalProfile');
    Route::get('item', [
        App\Http\Controllers\ProfileController::class,
        'MyItem',
    ])->name('myitem');
    Route::get('seller-registraton', [
        App\Http\Controllers\SellerController::class,
        'registration',
    ])->name('seller-registration');
    Route::get('details/{id}', [
        App\Http\Controllers\SellerController::class,
        'MyItemDetails',
    ])->name('myItemDetails');
    // Route::get('sell-item', [App\Http\Controllers\SellerController::class, 'create'])->name('sell-item');
    // Route::post('sell-item', [App\Http\Controllers\SellerController::class, 'index'])->name('sell-item');
});

Route::group(['prefix' => 'notification'], function () {
    Route::get('seller', [
        App\Http\Controllers\NotificationContoller::class,
        'SellerShowNotificaton',
    ])->name('SellerNotify');

    // Route::get('sell-item', [App\Http\Controllers\SellerController::class, 'create'])->name('sell-item');
    // Route::post('sell-item', [App\Http\Controllers\SellerController::class, 'index'])->name('sell-item');
});

Route::group(['prefix' => 'product'], function () {
    Route::get('upload', [
        App\Http\Controllers\ProductController::class,
        'create',
    ])->name('upload');
    Route::post('upload', [
        App\Http\Controllers\ProductController::class,
        'store',
    ])->name('upload');
    Route::get('all', [
        App\Http\Controllers\ProductController::class,
        'AllProduct',
    ])->name('all');
    Route::get('bid/{id}', [
        App\Http\Controllers\ProductController::class,
        'SubmitBidPage',
    ])->name('SubmitBidPage');
    Route::get('sold', [
        App\Http\Controllers\ProductController::class,
        'SoldItem',
    ])->name('SoldItem');
    Route::get('search', [
        App\Http\Controllers\ProductController::class,
        'search',
    ])->name('search');

    // Route::get('sell-item', [App\Http\Controllers\SellerController::class, 'create'])->name('sell-item');
    // Route::post('sell-item', [App\Http\Controllers\SellerController::class, 'index'])->name('sell-item');
});

Route::group(['prefix' => 'Buyer'], function () {
    Route::post('bid', [
        App\Http\Controllers\BuyerController::class,
        'SubmitBidFinally',
    ])->name('SubmitBidPage');
    Route::get('mybid', [
        App\Http\Controllers\BuyerController::class,
        'MyBidItem',
    ])->name('MyBidItem');
    Route::get('profile', [
        App\Http\Controllers\ProfileController::class,
        'buyer',
    ])->name('BuyerpersonalProfile');
    Route::get('paid', [
        App\Http\Controllers\BuyerController::class,
        'showUserThatHavePaid',
    ])->name('showUserThatHavePaid');
});

Route::group(['prefix' => 'winning'], function () {
    Route::get('bid', [
        App\Http\Controllers\WinningController::class,
        'Index',
    ])->name('Index');
});

// ['middleware' => ['auth']

Route::group(['prefix' => 'category', "middleware" => "auth"], function () {
    Route::get('item/{id}', [
        App\Http\Controllers\CategoryController::class,
        'Category',
    ])->name('categoryItem');
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('seller', [
        App\Http\Controllers\DashboardController::class,
        'SellerDashboard',
    ])->name('SellerDashboard');
    Route::get('buyer', [
        App\Http\Controllers\DashboardController::class,
        'BuyerDashboard',
    ])->name('BuyerDashboard');
});

Route::group(['prefix' => 'profile'], function () {
    Route::get('edit', [
        App\Http\Controllers\ProfileController::class,
        'EditPicture',
    ])->name('updatePicture');
    Route::post('update', [
        App\Http\Controllers\ProfileController::class,
        'UpdateProfile',
    ])->name('updatePicture');
});

Route::group(['prefix' => 'admin', "middleware" => CheckStatus::class], function () {
    Route::get('user', [
        App\Http\Controllers\AdminController::class,
        'ManageUser',
    ])->name('AdminUserDashboard');




    Route::get('user/{id}', [
        App\Http\Controllers\AdminController::class,
        'ViewUserAdmin',
    ])->name('ViewUserAdmin');


    Route::post('users/{id}', [
        App\Http\Controllers\AdminController::class,
        'BlockUserAdmin',
    ])->name('BlockUserAdmin');

    Route::post('users/block/{id}', [
        App\Http\Controllers\AdminController::class,
        'UnBlockUserAdmin',
    ])->name('UnBlockUserAdmin');

    Route::get('product', [
        App\Http\Controllers\AdminController::class,
        'AdminProduct',
    ])->name('AdminProduct');


    Route::post('product/delete/{id}', [
        App\Http\Controllers\AdminController::class,
        'AdminProductDelete',
    ])->name('AdminProductDelete');
    Route::get('category', [
        App\Http\Controllers\AdminController::class,
        'AdminCategory',
    ])->name('AdminCategory');
    Route::post('category/delete/{id}', [
        App\Http\Controllers\AdminController::class,
        'AdminCategoryDelete',
    ])->name('AdminCategoryDelete');
    Route::get('add/category', [
        App\Http\Controllers\AdminController::class,
        'addAdminCategory',
    ])->name('addAdminCategory');
    Route::get('category/{id}', [
        App\Http\Controllers\AdminController::class,
        'adminViewCategory',
    ])->name('adminViewCategory');
    Route::post('add/category', [
        App\Http\Controllers\AdminController::class,
        'CreateAdminCategory',
    ])->name('CreateAdminCategory');
    Route::get('edit/category/{id}', [
        App\Http\Controllers\AdminController::class,
        'EditAdminCategory',
    ])->name('EditAdminCategory');
    Route::post('update/category/{id}', [
        App\Http\Controllers\AdminController::class,
        'UpdateAdminCategory',
    ])->name('UpdateAdminCategory');
    Route::get('messages', [
        App\Http\Controllers\AdminController::class,
        'Messages',
    ])->name('Messages');
    Route::get('bids', [
        App\Http\Controllers\AdminController::class,
        'AdminViewBid',
    ])->name('AdminViewBid');
    Route::get('lang', [
        App\Http\Controllers\UpdateLanguage::class,
        'language',
    ])->name('language');
    Route::get('lang/add', [
        App\Http\Controllers\UpdateLanguage::class,
        'addlanguage',
    ])->name('addlanguage');
    Route::post('lang/add', [
        App\Http\Controllers\UpdateLanguage::class,
        'postaddlanguage',
    ])->name('addlanguage');
    Route::post('lang/delete/{id}', [
        App\Http\Controllers\UpdateLanguage::class,
        'LanguageDelete',
    ])->name('detelelanguage');
    Route::get('lang/edit/{id}', [
        App\Http\Controllers\UpdateLanguage::class,
        'LanguageEdit',
    ])->name('LanguageEdit');

    Route::post('lang/update/{id}', [
        App\Http\Controllers\UpdateLanguage::class,
        'LanguageUpdate',
    ])->name('LanguageUpdate');
    Route::post('logout', [
        App\Http\Controllers\AdminController::class,
        'AdminLogout',
    ])->name('AdminLogout');



    Route::get('login', [App\Http\Controllers\AdminController::class, 'LoginPage'])->name('LoginPage')->withoutMiddleware([CheckStatus::class]);;
    Route::post('login', [App\Http\Controllers\AdminController::class, 'SubmitLogin'])->name('admin.login.submit')->withoutMiddleware([CheckStatus::class]);
});




Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [
        App\Http\Controllers\ContactController::class,
        'index',
    ])->name('Contact');
    Route::post('/', [
        App\Http\Controllers\ContactController::class,
        'store',
    ])->name('ContactUs');

    // UnBlockUserAdmin
    // ViewUserAdmin
});

Route::get('lang/home', [LangController::class, 'index']);

Route::get('lang/change', [LangController::class, 'change'])->name(
    'changeLang'
);

// RaveController@callback

// The route that the button calls to initialize payment
Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name(
    'callback'
);

// Route::get('/category',function(){
//     \App\Models\Category::create([

//         "category"=>"Clothes",

//     ]);

//     \App\Models\Category::create([

//         "category"=>"Watch",

//     ]);

//     \App\Models\Category::create([

//         "category"=>"Book",

//     ]);

//     \App\Models\Category::create([

//         "category"=>"Bag",

//     ]);

//     \App\Models\Category::create([

//         "category"=>"Shoes",

//     ]);

//     \App\Models\Category::create([

//         "category"=>"Jewelry",

//     ]);

//     \App\Models\Category::create([

//         "category"=>"Accessories",

//     ]);

// });

Auth::routes();

Route::get('/home', [
    App\Http\Controllers\HomeController::class,
    'index',
])->name('home');
