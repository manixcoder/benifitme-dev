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

Route::get('clear-cache', function () {

    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');

    // $exitCode = Artisan::call('migrate:refresh --seed');
    Session::flash('success', 'All Clear');
    echo "DONE";
});
Route::get('/', 'HomeController@index')->name('home');

Route::post('/user-registration', 'HomeController@userRegistration');
Route::post('user-verify-otp', 'HomeController@userVerifyOtp');

// Route::get('/', function () {
//     return view('welcome');
// });
/*
|---------------------------------
| Admin Common Routes Here     |
|---------------------------------
*/
Route::get('/admin-login', function () {
    return view('admin_login');
});
Route::get('/merchent-sign-up', function () {
    return view('merchentRegistration.registration');
});

Route::get('/merchent-login', function () {
    return view('merchentRegistration.login');
});
Route::get('/forgot-password', function () {
    return view('forgot_password');
});
Route::any('send-otp', 'HomeController@sendOTPOnEmail');

Route::get('/verification', function () {
    return view('verification');
});
Route::any('verify-otp', 'HomeController@verifyOtp');
Route::get('/create-newpassword', function () {
    return view('create_newpassword');
});
Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/terms-condition', function () {
    return view('terms-condition');
});
Route::get('contact-us', function () {
    return view('contact-us');
});
Route::any('update-password', 'HomeController@updatePassword');




Route::any('/merchent-registration/save-merchent', 'Merchant\MerchantRegistrationController@store');
Route::get('subscription', function () {
    return view('merchentRegistration.subscription');
});
Auth::routes();

use App\User;

Route::get('/validate-user', 'HomeController@checkUserRole');

Route::get('/request/get-sub-category/{id}', 'HomeController@getSubCategory');

Route::any('subscription-plan', 'HomeController@subscriptionPlan');

Route::get('payment-method', function () {
    return view('merchentRegistration.payment-method');
});
/*
|---------------------------------
| Admin Common Routes Here     |
|---------------------------------
*/
/*=====================================ADMIN=====================================*/
Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function () {
    Route::get('/', 'Admin\DashboardController@index');

    /*
    |---------------------------------
    | Category Management Routes Here     |
    |---------------------------------
     */
    Route::group(['prefix' => 'category-management'], function () {
        Route::get('/', 'Admin\CategoryManagementController@index');
        Route::get('create', 'Admin\CategoryManagementController@create');
        Route::post('/save-category', 'Admin\CategoryManagementController@store');
        Route::get('{id}/edit', 'Admin\CategoryManagementController@edit');
        Route::get('{id}/edit-category', 'Admin\CategoryManagementController@editCategory');
        Route::get('{id}/edit-sub-category', 'Admin\CategoryManagementController@editSubCategory');
        Route::get('{id}/edit-user-category', 'Admin\CategoryManagementController@editUserCategory');

        Route::post('{id}/update-categary', 'Admin\CategoryManagementController@updateCategary');

        //Route::post('{id}/update', 'Admin\CategoryManagementController@update');
        Route::get('delete/{id}', 'Admin\CategoryManagementController@destroy');

        Route::get('company-category', 'Admin\CategoryManagementController@companyCategory');
        Route::any('save-comapany-categary', 'Admin\CategoryManagementController@saveComapanyCategary');
        Route::get('add-sub-category', 'Admin\CategoryManagementController@addSubCategory');
        Route::any('save-sub-categary', 'Admin\CategoryManagementController@saveSubCategary');
        Route::get('user-category', 'Admin\CategoryManagementController@addUserCategory');
        Route::any('save-user-categary', 'Admin\CategoryManagementController@saveUserCategary');
    });
    /*
    |--------------------------------------
    | User Management Routes Here     |
    |--------------------------------------
     */
    Route::group(['prefix' => 'user-management'], function () {
        Route::get('/', 'Admin\UserManagementController@index');
        Route::get('user-data', 'Admin\UserManagementController@usersData');
        Route::get('create', 'Admin\UserManagementController@create');
        Route::post('/save-user', 'Admin\UserManagementController@store');
        Route::get('{id}/edit', 'Admin\UserManagementController@edit');
        Route::post('{id}/update', 'Admin\UserManagementController@update');
        Route::get('delete/{id}', 'Admin\UserManagementController@destroy');
    });

    /*
    |-------------------------------------
    | Company Management Routes Here     |
    |-------------------------------------
     */
    Route::group(['prefix' => 'company-management'], function () {
        Route::get('/', 'Admin\CompanyManagementController@index');
        Route::get('create', 'Admin\CompanyManagementController@create');
        Route::post('/save-company', 'Admin\CompanyManagementController@store');
        Route::post('/details', 'Admin\CompanyManagementController@companyDetails');
        Route::post('/short-details', 'Admin\CompanyManagementController@companyShortDetails');
        Route::get('{id}/show', 'Admin\CompanyManagementController@show');
        Route::get('{id}/decline', 'Admin\CompanyManagementController@decline');
        Route::get('{id}/accept', 'Admin\CompanyManagementController@accept');
        Route::get('{id}/edit', 'Admin\CompanyManagementController@edit');
        Route::post('{id}/update', 'Admin\CompanyManagementController@update');
        Route::get('delete/{id}', 'Admin\CompanyManagementController@destroy');
    });

    /*
    |-------------------------------------
    | Advertising Management Routes Here     |
    |-------------------------------------
     */
    Route::group(['prefix' => 'advertising-management'], function () {
        Route::get('/', 'Admin\AdvertisingManagementController@index');
        Route::get('create', 'Admin\AdvertisingManagementController@create');
        Route::post('/save-advertising', 'Admin\AdvertisingManagementController@store');
        Route::get('{id}/show', 'Admin\AdvertisingManagementController@show');
        Route::get('{id}/edit', 'Admin\AdvertisingManagementController@edit');
        Route::post('{id}/update', 'Admin\AdvertisingManagementController@update');
        Route::get('delete/{id}', 'Admin\AdvertisingManagementController@destroy');
    });


    /*
    |------------------------------------------
    | Subscription Management Routes Here     |
    |------------------------------------------
     */
    Route::group(['prefix' => 'subscription-management'], function () {
        Route::get('/', 'Admin\SubscriptionsManagementController@index');
        Route::get('create', 'Admin\SubscriptionsManagementController@create');
        Route::post('/save-advertising', 'Admin\SubscriptionsManagementController@store');
        Route::get('{id}/show', 'Admin\SubscriptionsManagementController@show');
        Route::get('{id}/edit', 'Admin\SubscriptionsManagementController@edit');
        Route::post('{id}/update', 'Admin\SubscriptionsManagementController@update');
        Route::get('delete/{id}', 'Admin\SubscriptionsManagementController@destroy');
    });
    /*
    |------------------------------------------
    | Permissions Management Routes Here     |
    |------------------------------------------
     */
    Route::group(['prefix' => 'permissions-management'], function () {
        Route::get('/', 'Admin\PermissionsManegmentController@index');

        Route::post('/save-permission', 'Admin\PermissionsManegmentController@store');
        Route::post('/change-permission', 'Admin\PermissionsManegmentController@update');


        Route::get('create', 'Admin\PermissionsManegmentController@create');
        Route::post('/save-permissions', 'Admin\PermissionsManegmentController@store');
        Route::get('{id}/show', 'Admin\PermissionsManegmentController@show');
        Route::get('{id}/edit', 'Admin\PermissionsManegmentController@edit');
        Route::post('{id}/update', 'Admin\PermissionsManegmentController@update');
        Route::get('delete/{id}', 'Admin\PermissionsManegmentController@destroy');
    });
    /*
    |-------------------------------------------
    | Payment Management Routes Here           |
    |-------------------------------------------
     */
    Route::group(['prefix' => 'payment-management'], function () {
        Route::get('/', 'Admin\PaymentManagementController@index');
        Route::get('create', 'Admin\PaymentManagementController@create');
        Route::post('/save-advertising', 'Admin\PaymentManagementController@store');
        Route::get('{id}/show', 'Admin\PaymentManagementController@show');
        Route::get('{id}/edit', 'Admin\PaymentManagementController@edit');
        Route::post('{id}/update', 'Admin\PaymentManagementController@update');
        Route::get('delete/{id}', 'Admin\PaymentManagementController@destroy');
    });
    /*
    |------------------------------------
    | Awards Management Routes Here     |
    |------------------------------------
     */
    Route::group(['prefix' => 'awards-management'], function () {
        Route::get('/', 'Admin\AwardsManagementController@index');
        Route::post('{id}/update', 'Admin\AwardsManagementController@update');
    });

    /*
    |-------------------------------------------
    | Payment Management Routes Here           |
    |-------------------------------------------
     */
    Route::group(['prefix' => 'services-category-management'], function () {
        Route::get('/', 'Admin\ServicesCategoryManagementController@index');
        Route::get('create', 'Admin\ServicesCategoryManagementController@create');
        Route::post('/save-services-category', 'Admin\ServicesCategoryManagementController@store');
        Route::get('{id}/show', 'Admin\ServicesCategoryManagementController@show');
        Route::get('{id}/edit', 'Admin\ServicesCategoryManagementController@edit');
        Route::post('{id}/update-services-category', 'Admin\ServicesCategoryManagementController@update');
        Route::get('delete/{id}', 'Admin\ServicesCategoryManagementController@destroy');
    });
});

/*=====================================ADMIN END=====================================*/


/*=====================================Merchant=====================================*/
Route::group(['prefix' => 'merchant', 'middleware' => ['merchant', 'auth']], function () {



    Route::get('/', 'Merchant\DashboardController@index');
    Route::get('profile-view', 'Merchant\MerchantRegistrationController@profileShow');


    /*
    |------------------------------------------
    | Payment Management Routes Here     |
    |-----------------------------------------
     */
    Route::group(['prefix' => 'product-management'], function () {

        Route::get('/', 'Merchant\ProductManagementController@index');
        Route::get('create', 'Merchant\ProductManagementController@create');

        Route::get('create-service', 'Merchant\ProductManagementController@createService');
        Route::post('/save-product', 'Merchant\ProductManagementController@store');
        Route::get('{id}/show', 'Merchant\ProductManagementController@show');
        Route::get('{id}/edit', 'Merchant\ProductManagementController@edit');
        Route::post('{id}/update', 'Merchant\ProductManagementController@update');
        Route::get('delete/{id}', 'Merchant\ProductManagementController@destroy');
    });

    /*
    |--------------------------------------------
    | Room Management Routes Here               |
    |--------------------------------------------
     */
    Route::group(['prefix' => 'room-management'], function () {

        Route::get('/', 'Merchant\RoomManagementController@index');
        Route::get('create', 'Merchant\RoomManagementController@create');

        Route::post('/save-room', 'Merchant\RoomManagementController@store');
        Route::get('{id}/show', 'Merchant\RoomManagementController@show');
        Route::get('{id}/edit', 'Merchant\RoomManagementController@edit');
        Route::post('{id}/update', 'Merchant\RoomManagementController@update');
        Route::get('delete/{id}', 'Merchant\RoomManagementController@destroy');
        Route::get('getRoomData/{id}', 'Merchant\RoomManagementController@getRoomData');
    });

    /*
    |--------------------------------------------
    | Table Management Routes Here              |
    |-------------------------------------------
     */
    Route::group(['prefix' => 'table-management'], function () {

        Route::get('/', 'Merchant\TableManagementController@index');
        Route::get('create', 'Merchant\TableManagementController@create');

        Route::post('/save-table', 'Merchant\TableManagementController@store');
        Route::get('{id}/show', 'Merchant\TableManagementController@show');
        Route::get('{id}/edit', 'Merchant\TableManagementController@edit');
        Route::post('{id}/update-table', 'Merchant\TableManagementController@update');
        Route::get('delete/{id}', 'Merchant\TableManagementController@destroy');
    });

    /*
    |--------------------------------------------
    | Menu Management Routes Here               |
    |--------------------------------------------
     */
    Route::group(['prefix' => 'menu-management'], function () {

        Route::get('/', 'Merchant\MenuManagementController@index');
        Route::get('/menu-list', 'Merchant\MenuManagementController@menuList');
        Route::get('create', 'Merchant\MenuManagementController@create');

        Route::get('create-card', 'Merchant\MenuManagementController@createCard');

        Route::post('/save-menu', 'Merchant\MenuManagementController@store');
        Route::post('/save-menu-card', 'Merchant\MenuManagementController@saveMenuCard');
        Route::get('{id}/show', 'Merchant\MenuManagementController@show');
        Route::get('{id}/edit', 'Merchant\MenuManagementController@edit');
        Route::post('{id}/update-menu', 'Merchant\MenuManagementController@update');
        Route::get('delete/{id}', 'Merchant\MenuManagementController@destroy');
    });


    /*
    |-------------------------------------------
    | Menu Category Management Routes Here     |
    |-------------------------------------------
     */
    Route::group(['prefix' => 'menu-category-management'], function () {

        Route::get('/', 'Merchant\MenuCategoryManagementController@index');
        Route::get('create', 'Merchant\MenuCategoryManagementController@create');

        Route::post('/save-menu-category', 'Merchant\MenuCategoryManagementController@store');
        Route::get('{id}/show', 'Merchant\MenuCategoryManagementController@show');
        Route::get('{id}/edit', 'Merchant\MenuCategoryManagementController@edit');
        Route::post('{id}/update-menu-category', 'Merchant\MenuCategoryManagementController@update');
        Route::get('delete/{id}', 'Merchant\MenuCategoryManagementController@destroy');
        Route::get('getcategoryData/{id}', 'Merchant\MenuCategoryManagementController@getcategoryData');
    });


    /*
    |-------------------------------------------
    | Menu Category Management Routes Here     |
    |-------------------------------------------
    */
    Route::group(['prefix' => 'appointments-management'], function () {

        Route::get('/', 'Merchant\AppointmentManagementController@index');
        Route::get('/availability-appointments', 'Merchant\AppointmentManagementController@availabilityAppointments');

        Route::get('create', 'Merchant\AppointmentManagementController@create');



        Route::get('calendar-event', 'Merchant\AppointmentManagementController@create');
        // Route::post('calendar-crud-ajax', 'Merchant\AppointmentManagementController@calendarEvents');






        Route::post('/save-appointments', 'Merchant\AppointmentManagementController@store');
        Route::get('{id}/show', 'Merchant\AppointmentManagementController@show');
        Route::get('{id}/edit', 'Merchant\AppointmentManagementController@edit');
        Route::post('{id}/update-menu-category', 'Merchant\AppointmentManagementController@update');
        Route::get('delete/{id}', 'Merchant\AppointmentManagementController@destroy');
        Route::get('getcategoryData/{id}', 'Merchant\AppointmentManagementController@getcategoryData');
    });

    /*
    |-------------------------------------------
    | Adverting Management Routes Here         |
    |-------------------------------------------
     */
    Route::group(['prefix' => 'adverting-management'], function () {

        Route::get('/', 'Merchant\AdvertingManagementController@index');
        Route::get('create', 'Merchant\AdvertingManagementController@create');

        Route::post('/save-adverting', 'Merchant\AdvertingManagementController@store');
        Route::get('{id}/show', 'Merchant\AdvertingManagementController@show');
        Route::get('{id}/edit', 'Merchant\AdvertingManagementController@edit');
        Route::post('{id}/update-adverting', 'Merchant\AdvertingManagementController@update');
        Route::get('delete/{id}', 'Merchant\AdvertingManagementController@destroy');
    });

    Route::group(['prefix' => 'check-in-management'], function () {

        Route::get('/', 'Merchant\CheckInManagementController@index');
        Route::get('create', 'Merchant\CheckInManagementController@create');

        Route::post('/save-check-in', 'Merchant\CheckInManagementController@store');
        Route::get('{id}/show', 'Merchant\CheckInManagementController@show');
        Route::get('{id}/edit', 'Merchant\CheckInManagementController@edit');
        Route::post('{id}/update-check-in', 'Merchant\CheckInManagementController@update');
        Route::get('delete/{id}', 'Merchant\CheckInManagementController@destroy');
    });

    Route::group(['prefix' => 'invite-people-management'], function () {

        Route::get('/', 'Merchant\InvitePeopleManagementController@index');
        Route::get('create', 'Merchant\InvitePeopleManagementController@create');

        Route::post('/save-invite-people', 'Merchant\InvitePeopleManagementController@store');
        Route::get('{id}/show', 'Merchant\InvitePeopleManagementController@show');
        Route::get('{id}/edit', 'Merchant\InvitePeopleManagementController@edit');
        Route::post('{id}/update-invite-people', 'Merchant\InvitePeopleManagementController@update');
        Route::get('delete/{id}', 'Merchant\InvitePeopleManagementController@destroy');
    });

    Route::group(['prefix' => 'awards-management'], function () {

        Route::get('/', 'Merchant\AwardsManagementController@index');
        Route::get('create', 'Merchant\AwardsManagementController@create');

        Route::post('/save-awards', 'Merchant\AwardsManagementController@store');
        Route::get('{id}/show', 'Merchant\AwardsManagementController@show');
        Route::get('{id}/edit', 'Merchant\AwardsManagementController@edit');
        Route::post('{id}/update-aawards', 'Merchant\AwardsManagementController@update');
        Route::get('delete/{id}', 'Merchant\AwardsManagementController@destroy');
    });

    Route::group(['prefix' => 'qr-code-management'], function () {

        Route::get('/', 'Merchant\QRCodeManagementController@index');
        Route::get('create', 'Merchant\QRCodeManagementController@create');

        Route::post('/save-qr-code', 'Merchant\QRCodeManagementController@store');
        Route::get('{id}/show', 'Merchant\QRCodeManagementController@show');
        Route::get('{id}/edit', 'Merchant\QRCodeManagementController@edit');
        Route::post('{id}/update-qr-code', 'Merchant\QRCodeManagementController@update');
        Route::get('delete/{id}', 'Merchant\QRCodeManagementController@destroy');
    });

    Route::group(['prefix' => 'customer-jouney-management'], function () {

        Route::get('/', 'Merchant\CustomerJouneryManagementController@index');
        Route::get('create', 'Merchant\CustomerJouneryManagementController@create');

        Route::post('/save-customer-jouney', 'Merchant\CustomerJouneryManagementController@store');
        Route::get('{id}/show', 'Merchant\CustomerJouneryManagementController@show');
        Route::get('{id}/edit', 'Merchant\CustomerJouneryManagementController@edit');
        Route::post('{id}/update-customer-jouney', 'Merchant\CustomerJouneryManagementController@update');
        Route::get('delete/{id}', 'Merchant\CustomerJouneryManagementController@destroy');
    });

    Route::group(['prefix' => 'loyalty-management'], function () {

        Route::get('/', 'Merchant\LoyaltyManagementController@index');
        Route::get('create', 'Merchant\LoyaltyManagementController@create');

        Route::post('/save-customer-jouney', 'Merchant\LoyaltyManagementController@store');
        Route::get('{id}/show', 'Merchant\LoyaltyManagementController@show');
        Route::get('{id}/edit', 'Merchant\LoyaltyManagementController@edit');
        Route::post('{id}/update-customer-jouney', 'Merchant\CustomerJouneryManagementController@update');
        Route::get('delete/{id}', 'Merchant\CustomerJouneryManagementController@destroy');
    });

    Route::group(['prefix' => 'services-category-management'], function () {
        Route::get('/', 'Merchant\ServicesCategoryManagementController@index');
        Route::get('create', 'Merchant\ServicesCategoryManagementController@create');
        Route::post('/save-services-category', 'Merchant\ServicesCategoryManagementController@store');
        Route::get('{id}/show', 'Merchant\ServicesCategoryManagementController@show');
        Route::get('{id}/edit', 'Merchant\ServicesCategoryManagementController@edit');
        Route::post('{id}/update-services-category', 'Merchant\ServicesCategoryManagementController@update');
        Route::get('delete/{id}', 'Merchant\ServicesCategoryManagementController@destroy');
    });
});
/*=====================================Merchant End=====================================*/
Route::group(['prefix' => 'users', 'middleware' => ['users', 'auth']], function () {

    Route::get('/', 'Customer\DashboardController@index');
});
