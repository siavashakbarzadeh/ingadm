<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\LanguageController;
use App\Http\Controllers\admin\NftController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ShippingController;
use App\Http\Controllers\admin\TicketsController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;

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

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::middleware('loggedin')->group(function() {
    Route::get('login', [AuthController::class, 'loginView'])->name('login.index');
    Route::post('login', [AuthController::class, 'login'])->name('login.check');
    Route::get('register', [AuthController::class, 'registerView'])->name('register.index');
    Route::post('register', [AuthController::class, 'register'])->name('register.store');
});

Route::middleware('auth')->group(function() {
    //category
    Route::get('categories-show', [CategoryController::class, 'show'])->name('categories-show');
    Route::get('categories-create', [CategoryController::class, 'create'])->name('categories-create');
    Route::post('categories-store', [CategoryController::class, 'store'])->name('categories-store');
    Route::get('categories-edit/{id}', [CategoryController::class, 'edit'])->name('categories-edit');
    Route::post('categories-update/{id}', [CategoryController::class, 'update'])->name('categories-update');
    Route::get('categories-destroy/{id}', [CategoryController::class, 'destroy'])->name('categories-destroy');

    //end category
    //user
    Route::get('users-show', [UserController::class, 'show'])->name('users-show');
    Route::get('users-create', [UserController::class, 'create'])->name('users-create');
    Route::post('users-store', [UserController::class, 'store'])->name('users-store');
    Route::get('users-edit/{id}', [UserController::class, 'edit'])->name('users-edit');
    Route::get('users-update/{id}', [UserController::class, 'update'])->name('users-update');
    Route::get('users-destroy/{id}', [UserController::class, 'destroy'])->name('users-destroy');
    //enduser

    //nft
    Route::get('nfts-show', [NftController::class, 'show'])->name('nfts-show');
    Route::get('nfts-create', [NftController::class, 'create'])->name('nfts-create');
    Route::post('nfts-store', [NftController::class, 'store'])->name('nfts-store');
    Route::get('nfts-edit/{id}', [NftController::class, 'edit'])->name('nfts-edit');
    Route::get('nfts-update/{id}', [NftController::class, 'update'])->name('nfts-update');
    Route::get('nfts-destroy/{id}', [NftController::class, 'destroy'])->name('nfts-destroy');
    //endnft

    //order
    Route::get('orders-show', [OrderController::class, 'show'])->name('orders-show');
    Route::get('orders-create', [OrderController::class, 'create'])->name('orders-create');
    Route::post('orders-store', [OrderController::class, 'store'])->name('orders-store');
    Route::get('orders-edit/{id}', [OrderController::class, 'edit'])->name('orders-edit');
    Route::get('orders-update/{id}', [OrderController::class, 'update'])->name('orders-update');
    Route::get('orders-destroy/{id}', [OrderController::class, 'destroy'])->name('orders-destroy');
    //endorder

    //shipping
    Route::get('shippings-show', [ShippingController::class, 'show'])->name('shippings-show');
    Route::get('shippings-create', [ShippingController::class, 'create'])->name('shippings-create');
    Route::post('shippings-store', [ShippingController::class, 'store'])->name('shippings-store');
    Route::get('shippings-edit/{id}', [ShippingController::class, 'edit'])->name('shippings-edit');
    Route::get('shippings-update/{id}', [ShippingController::class, 'update'])->name('shippings-update');
    Route::get('shippings-destroy/{id}', [ShippingController::class, 'destroy'])->name('shippings-destroy');
    //endshipping
    //
    Route::get('tickets-show', [TicketsController::class, 'show'])->name('tickets-show');
    //

    //lang
    Route::get('change-language/{lang}',[LanguageController::class, 'switchLang'])->name("lang.switch");
    //endlang


//    Route::get('orders-show', [OrderController::class, 'show'])->name('orders-show');
//    Route::get('nfts-show', [NftController::class, 'show'])->name('nfts-show');


    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [PageController::class, 'dashboardOverview1'])->name('dashboard-overview-1');
    Route::get('dashboard-overview-2-page', [PageController::class, 'dashboardOverview2'])->name('dashboard-overview-2');
    Route::get('dashboard-overview-3-page', [PageController::class, 'dashboardOverview3'])->name('dashboard-overview-3');
    Route::get('inbox-page', [PageController::class, 'inbox'])->name('inbox');
    Route::get('file-manager-page', [PageController::class, 'fileManager'])->name('file-manager');
    Route::get('point-of-sale-page', [PageController::class, 'pointOfSale'])->name('point-of-sale');
    Route::get('chat-page', [PageController::class, 'chat'])->name('chat');
    Route::get('post-page', [PageController::class, 'post'])->name('post');
    Route::get('calendar-page', [PageController::class, 'calendar'])->name('calendar');
    Route::get('crud-data-list-page', [PageController::class, 'crudDataList'])->name('crud-data-list');
    Route::get('crud-form-page', [PageController::class, 'crudForm'])->name('crud-form');
    Route::get('users-layout-1-page', [PageController::class, 'usersLayout1'])->name('users-layout-1');
    Route::get('users-layout-2-page', [PageController::class, 'usersLayout2'])->name('users-layout-2');
    Route::get('users-layout-3-page', [PageController::class, 'usersLayout3'])->name('users-layout-3');
    Route::get('profile-overview-1-page', [PageController::class, 'profileOverview1'])->name('profile-overview-1');
    Route::get('profile-overview-2-page', [PageController::class, 'profileOverview2'])->name('profile-overview-2');
    Route::get('profile-overview-3-page', [PageController::class, 'profileOverview3'])->name('profile-overview-3');
    Route::get('wizard-layout-1-page', [PageController::class, 'wizardLayout1'])->name('wizard-layout-1');
    Route::get('wizard-layout-2-page', [PageController::class, 'wizardLayout2'])->name('wizard-layout-2');
    Route::get('wizard-layout-3-page', [PageController::class, 'wizardLayout3'])->name('wizard-layout-3');
    Route::get('blog-layout-1-page', [PageController::class, 'blogLayout1'])->name('blog-layout-1');
    Route::get('blog-layout-2-page', [PageController::class, 'blogLayout2'])->name('blog-layout-2');
    Route::get('blog-layout-3-page', [PageController::class, 'blogLayout3'])->name('blog-layout-3');
    Route::get('pricing-layout-1-page', [PageController::class, 'pricingLayout1'])->name('pricing-layout-1');
    Route::get('pricing-layout-2-page', [PageController::class, 'pricingLayout2'])->name('pricing-layout-2');
    Route::get('invoice-layout-1-page', [PageController::class, 'invoiceLayout1'])->name('invoice-layout-1');
    Route::get('invoice-layout-2-page', [PageController::class, 'invoiceLayout2'])->name('invoice-layout-2');
    Route::get('faq-layout-1-page', [PageController::class, 'faqLayout1'])->name('faq-layout-1');
    Route::get('faq-layout-2-page', [PageController::class, 'faqLayout2'])->name('faq-layout-2');
    Route::get('faq-layout-3-page', [PageController::class, 'faqLayout3'])->name('faq-layout-3');
    Route::get('login-page', [PageController::class, 'login'])->name('login');
    Route::get('register-page', [PageController::class, 'register'])->name('register');
    Route::get('error-page-page', [PageController::class, 'errorPage'])->name('error-page');
    Route::get('update-profile-page', [PageController::class, 'updateProfile'])->name('update-profile');
    Route::get('change-password-page', [PageController::class, 'changePassword'])->name('change-password');
    Route::get('regular-table-page', [PageController::class, 'regularTable'])->name('regular-table');
    Route::get('tabulator-page', [PageController::class, 'tabulator'])->name('tabulator');
    Route::get('modal-page', [PageController::class, 'modal'])->name('modal');
    Route::get('slide-over-page', [PageController::class, 'slideOver'])->name('slide-over');
    Route::get('notification-page', [PageController::class, 'notification'])->name('notification');
    Route::get('accordion-page', [PageController::class, 'accordion'])->name('accordion');
    Route::get('button-page', [PageController::class, 'button'])->name('button');
    Route::get('alert-page', [PageController::class, 'alert'])->name('alert');
    Route::get('progress-bar-page', [PageController::class, 'progressBar'])->name('progress-bar');
    Route::get('tooltip-page', [PageController::class, 'tooltip'])->name('tooltip');
    Route::get('dropdown-page', [PageController::class, 'dropdown'])->name('dropdown');
    Route::get('typography-page', [PageController::class, 'typography'])->name('typography');
    Route::get('icon-page', [PageController::class, 'icon'])->name('icon');
    Route::get('loading-icon-page', [PageController::class, 'loadingIcon'])->name('loading-icon');
    Route::get('regular-form-page', [PageController::class, 'regularForm'])->name('regular-form');
    Route::get('datepicker-page', [PageController::class, 'datepicker'])->name('datepicker');
    Route::get('tom-select-page', [PageController::class, 'tomSelect'])->name('tom-select');
    Route::get('file-upload-page', [PageController::class, 'fileUpload'])->name('file-upload');
    Route::get('wysiwyg-editor-classic', [PageController::class, 'wysiwygEditorClassic'])->name('wysiwyg-editor-classic');
    Route::get('wysiwyg-editor-inline', [PageController::class, 'wysiwygEditorInline'])->name('wysiwyg-editor-inline');
    Route::get('wysiwyg-editor-balloon', [PageController::class, 'wysiwygEditorBalloon'])->name('wysiwyg-editor-balloon');
    Route::get('wysiwyg-editor-balloon-block', [PageController::class, 'wysiwygEditorBalloonBlock'])->name('wysiwyg-editor-balloon-block');
    Route::get('wysiwyg-editor-document', [PageController::class, 'wysiwygEditorDocument'])->name('wysiwyg-editor-document');
    Route::get('validation-page', [PageController::class, 'validation'])->name('validation');
    Route::get('chart-page', [PageController::class, 'chart'])->name('chart');
    Route::get('slider-page', [PageController::class, 'slider'])->name('slider');
    Route::get('image-zoom-page', [PageController::class, 'imageZoom'])->name('image-zoom');
});
