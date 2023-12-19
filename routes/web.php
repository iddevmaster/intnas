<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\pages\AccountSettingsAccount;
use App\Http\Controllers\pages\AccountSettingsNotifications;
use App\Http\Controllers\pages\AccountSettingsConnections;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\pages\MiscUnderMaintenance;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;
use App\Http\Controllers\cards\CardBasic;
use App\Http\Controllers\user_interface\Accordion;
use App\Http\Controllers\user_interface\Alerts;
use App\Http\Controllers\user_interface\Badges;
use App\Http\Controllers\user_interface\Buttons;
use App\Http\Controllers\user_interface\Carousel;
use App\Http\Controllers\user_interface\Collapse;
use App\Http\Controllers\user_interface\Dropdowns;
use App\Http\Controllers\user_interface\Footer;
use App\Http\Controllers\user_interface\ListGroups;
use App\Http\Controllers\user_interface\Modals;
use App\Http\Controllers\user_interface\Navbar;
use App\Http\Controllers\user_interface\Offcanvas;
use App\Http\Controllers\user_interface\PaginationBreadcrumbs;
use App\Http\Controllers\user_interface\Progress;
use App\Http\Controllers\user_interface\Spinners;
use App\Http\Controllers\user_interface\TabsPills;
use App\Http\Controllers\user_interface\Toasts;
use App\Http\Controllers\user_interface\TooltipsPopovers;
use App\Http\Controllers\user_interface\Typography;
use App\Http\Controllers\extended_ui\PerfectScrollbar;
use App\Http\Controllers\extended_ui\TextDivider;
use App\Http\Controllers\icons\Boxicons;
use App\Http\Controllers\form_elements\BasicInput;
use App\Http\Controllers\form_elements\InputGroups;
use App\Http\Controllers\form_layouts\VerticalForm;
use App\Http\Controllers\form_layouts\HorizontalForm;
use App\Http\Controllers\tables\Basic as TablesBasic;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*
|--------------------------------------------------------------------------
| Fontend
|--------------------------------------------------------------------------
*/
// Route::get('/welcome', function () {
//     Auth::logout();
//     return view('welcome');
// });

// Landing page
Route::view('/', 'landing_page');
Route::view('/home', 'landing_page');
Route::view('/activity', 'portfolio');
Route::view('/contacts', 'contacts');
Route::view('/products', 'products');
Route::view('/blogs', 'blogs');
Route::get('/product/{prod_id}/detail', function ($prod_id) {
    return view('product_detail', ['prod_id' => $prod_id]);
});
Route::get('/blog/{blog_id}/detail', function ($prod_id) {
    return view('blog_detail', ['blog_id' => $prod_id]);
});
Route::view('/services', 'services');




/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    Route::view('dashboard', 'dashboard')
        ->middleware('verified') // Specific middleware for this route
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->name('profile');


    Route::get('/info', function () {
        phpinfo();
    });

    // Main Page Route
    Route::get('/admin', [Analytics::class, 'index'])->name('dashboard-analytics');
    Route::get('/admin/main', [Analytics::class, 'index'])->name('dashboard-analytics');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('dashboard-analytics');
    });

    // pages

        // Product
        Route::get('/admin/products', [ProductController::class, 'inde'])->name('admin-products');
        Route::get('/admin/products/add', [ProductController::class, 'addProduct'])->name('add-products');
        Route::get('/admin/products/edit/1', [ProductController::class, 'editProduct'])->name('edit-product');

        // News
        Route::get('/admin/news', [NewsController::class, 'index'])->name('admin-news');
        Route::get('/admin/news/add', [NewsController::class, 'addNews'])->name('add-news');
        Route::get('/admin/news/edit/1', [NewsController::class, 'editNews'])->name('edit-news');

        // News
        Route::get('/admin/activities', [ActivityController::class, 'index'])->name('admin-activities');
        Route::get('/admin/activity/add', [ActivityController::class, 'addActivity'])->name('add-activity');
        Route::get('/admin/activity/edit/1', [ActivityController::class, 'editActivity'])->name('edit-activity');

        // Account
        Route::get('/admin/account-setting', [AccountController::class, 'index'])->name('admin-account-setting');

    // Log out
    Route::get('/admin/logout', function () {
        Auth::logout();
        return redirect('login');
    });

    Route::get('/admin/account-settings-account', [AccountSettingsAccount::class, 'index'])->name('pages-account-settings-account');
    Route::get('/admin/account-settings-notifications', [AccountSettingsNotifications::class, 'index'])->name('pages-account-settings-notifications');
    Route::get('/admin/account-settings-connections', [AccountSettingsConnections::class, 'index'])->name('pages-account-settings-connections');
    Route::get('/admin/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');
    Route::get('/admin/misc-under-maintenance', [MiscUnderMaintenance::class, 'index'])->name('pages-misc-under-maintenance');

    // authentication
    Route::get('/admin/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
    Route::get('/admin/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');
    Route::get('/admin/forgot-password-basic', [ForgotPasswordBasic::class, 'index'])->name('auth-reset-password-basic');

    // cards
    Route::get('/cards/basic', [CardBasic::class, 'index'])->name('cards-basic');

    // User Interface
    Route::get('/ui/accordion', [Accordion::class, 'index'])->name('ui-accordion');
    Route::get('/ui/alerts', [Alerts::class, 'index'])->name('ui-alerts');
    Route::get('/ui/badges', [Badges::class, 'index'])->name('ui-badges');
    Route::get('/ui/buttons', [Buttons::class, 'index'])->name('ui-buttons');
    Route::get('/ui/carousel', [Carousel::class, 'index'])->name('ui-carousel');
    Route::get('/ui/collapse', [Collapse::class, 'index'])->name('ui-collapse');
    Route::get('/ui/dropdowns', [Dropdowns::class, 'index'])->name('ui-dropdowns');
    Route::get('/ui/footer', [Footer::class, 'index'])->name('ui-footer');
    Route::get('/ui/list-groups', [ListGroups::class, 'index'])->name('ui-list-groups');
    Route::get('/ui/modals', [Modals::class, 'index'])->name('ui-modals');
    Route::get('/ui/navbar', [Navbar::class, 'index'])->name('ui-navbar');
    Route::get('/ui/offcanvas', [Offcanvas::class, 'index'])->name('ui-offcanvas');
    Route::get('/ui/pagination-breadcrumbs', [PaginationBreadcrumbs::class, 'index'])->name('ui-pagination-breadcrumbs');
    Route::get('/ui/progress', [Progress::class, 'index'])->name('ui-progress');
    Route::get('/ui/spinners', [Spinners::class, 'index'])->name('ui-spinners');
    Route::get('/ui/tabs-pills', [TabsPills::class, 'index'])->name('ui-tabs-pills');
    Route::get('/ui/toasts', [Toasts::class, 'index'])->name('ui-toasts');
    Route::get('/ui/tooltips-popovers', [TooltipsPopovers::class, 'index'])->name('ui-tooltips-popovers');
    Route::get('/ui/typography', [Typography::class, 'index'])->name('ui-typography');

    // extended ui
    Route::get('/extended/ui-perfect-scrollbar', [PerfectScrollbar::class, 'index'])->name('extended-ui-perfect-scrollbar');
    Route::get('/extended/ui-text-divider', [TextDivider::class, 'index'])->name('extended-ui-text-divider');

    // icons
    Route::get('/icons/boxicons', [Boxicons::class, 'index'])->name('icons-boxicons');

    // form elements
    Route::get('/forms/basic-inputs', [BasicInput::class, 'index'])->name('forms-basic-inputs');
    Route::get('/forms/input-groups', [InputGroups::class, 'index'])->name('forms-input-groups');

    // form layouts
    Route::get('/form/layouts-vertical', [VerticalForm::class, 'index'])->name('form-layouts-vertical');
    Route::get('/form/layouts-horizontal', [HorizontalForm::class, 'index'])->name('form-layouts-horizontal');

    // tables
    Route::get('/tables/basic', [TablesBasic::class, 'index'])->name('tables-basic');

});

require __DIR__.'/auth.php';
