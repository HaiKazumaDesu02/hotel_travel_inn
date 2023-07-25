<?php

use App\Http\Controllers\BillsController;
use App\Http\Controllers\CHangePassword;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GuestBillController;
use App\Http\Controllers\OccupantsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WebsiteController;
use App\Models\Bills;
use App\Models\Expense;
use App\Models\Occupants;
use App\Models\Reservation;
use App\Models\Rooms;
use Illuminate\Support\Facades\Route;
use App\Models\Booking;
use App\Models\CoupleBed;
use App\Models\DeluxeCoupleBed;
use App\Models\Gallery;
use App\Models\LandingPhoto;
use App\Models\Owner;
use App\Models\Rate;
use App\Models\Review;
use App\Models\Statistic;
use App\Models\Youtube;
use App\Models\TripleBed;
use App\Models\TwinBed;

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

Route::get('/', function () {
    $statistics = Statistic::all();
    $rates = Rate::all();
    $landings = LandingPhoto::all();
    $coupleBeds = CoupleBed::all();
    $twinBeds = TwinBed::all();
    $tripleBeds = TripleBed::all();
    $deluxeCoupleBeds = DeluxeCoupleBed::all();
    $reviews = Review::whereNotIn('id', [1, 2])
    ->get();
    $two_reviews = Review::whereIn('id', [1, 2])->get();
    $galleries = Gallery::all();
    $owner = Owner::all();
    $youtube = Youtube::all();
    $booking = Booking::all();


    return view('front.second', compact('landings','coupleBeds', 'tripleBeds', 'deluxeCoupleBeds', 'twinBeds', 'rates', 'statistics', 'reviews', 'two_reviews', 'owner', 'youtube', 'booking', 'galleries'));
});

// Routes for front page 
Route::get('/pokhara-lakeside-street-15', [FrontController::class, 'home'])->name('front-home');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send-email');


Route::get('/dashboard', function () {
    $total_expense = Expense::all()->sum('total');
    $total_income = Bills::all()->sum('total');
    $rooms = Rooms::all();
    $guests = Occupants::all()->count();
    return view('dashboard', compact('rooms', 'total_expense', 'total_income', 'guests'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/entry-form', [EntryController::class, 'entry'])->name('entry-form');
Route::post('/entry-store', [EntryController::class, 'store'])->name('entry-store');

// Routes for storing emails
Route::post('/email-store', [EmailController::class, 'store'])->name('email-store');
//Routes for storing reservations
Route::post('/reservation-store', [ReservationController::class, 'store'])->name('reservation-store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //routes for guests
    Route::resource('occupants', OccupantsController::class);
    Route::get('/search-guest',[SearchController::class,'guestSearch'])->name('search-guest');
    Route::get('/guest-bill/{id}', [GuestBillController::class, 'guestBill'])->name('guest-bill');
    Route::post('/add-items', [GuestBillController::class, 'addItems'])->name('add-items');
    Route::get('/final-bill/{id}', [GuestBillController::class, 'finalBill'])->name('final-bill');
    Route::post('/bill-update', [GuestBillController::class, 'billUpdate'])->name('bill-update');
    Route::post('/item-delete/{id}', [GuestBillController::class, 'itemDelete'])->name('item-delete');
    Route::post('/bill-discount', [GuestBillController::class, 'billDiscount'])->name('bill-discount');



    // routes for rooms
    Route::resource('rooms', RoomsController::class);
    Route::post('/rooms-status', [RoomsController::class, 'roomStatus'])->name('room-status');

    // routes for bills 
    Route::resource('/bills',BillsController::class);
    Route::get('/bill-search', [SearchController::class, 'billSearch'])->name('bill-search');
    
    // routes for bills 
    Route::resource('expenses', ExpenseController::class);

    // routes for sales
    Route::get('/sales-index',[SalesReportController::class, 'index'])->name('sales-index');
    Route::get('/revenue-search',[SearchController::class, 'revenueSearch'])->name('revenue-search');
    // Route::resource('sales', ExpenseController::class);

    // routes for suppliers 
    Route::post('/supplier-store', [SupplierController::class, 'store'])->name('supplier-store');
    Route::post('/supplier-edit', [SupplierController::class, 'edit'])->name('supplier-edit');
    Route::post('/supplier-destroy/{id}', [SupplierController::class, 'destroy'])->name('supplier-destroy');

    // routes for dashboard
    // Route::get('/dashboard',[DashboardController::class, 'home'])->name('dashboard');


    // routes for youtube
    Route::post('/change-youtube', [WebsiteController::class, 'changeYoutube'])->name('change-youtube');

    // Routes for website changes
    Route::get('/website', [WebsiteController::class, 'website'])->name('website');
    Route::get('/change-rate', [WebsiteController::class, 'changeRate'])->name('change-rate');
    Route::get('/change-statistic', [WebsiteController::class, 'changeStatistics'])->name('change-statistic');
    Route::post('/change-landing', [WebsiteController::class, 'changeLanding'])->name('change-landing');
    Route::post('/change-couple-bed', [WebsiteController::class, 'changeCoupleBed'])->name('change-couple-bed');
    Route::post('/change-twin-bed', [WebsiteController::class, 'changeTwinBed'])->name('change-twin-bed');
    Route::post('/change-triple-bed', [WebsiteController::class, 'changeTripleBed'])->name('change-triple-bed');
    Route::post('/change-deluxe-couple-bed', [WebsiteController::class, 'changeDeluxeCoupleBed'])->name('change-deluxe-couple-bed');
    Route::post('/add-review', [WebsiteController::class, 'addReview'])->name('add-review');
    Route::post('/change-review', [WebsiteController::class, 'changeReview'])->name('change-review');
    Route::post('/change-owner', [WebsiteController::class, 'changeOwner'])->name('change-owner');
    Route::post('/change-booking', [WebsiteController::class, 'changeBooking'])->name('change-booking');
    Route::get('/reservation-index', [ReservationController::class, 'index'])->name('reservation-index');
    Route::get('/search-reservation', [SearchController::class, 'searchReservations'])->name('search-reservation');
    Route::post('/reservation-update', [ReservationController::class, 'reservationUpdate'])->name('reservation-update');
    // Routes for gallery 
    Route::resource('/gallery', GalleryController::class);
  


});
Route::middleware(['checkUserAccess'])->group(function () {
    Route::get('view-change', [CHangePassword::class, 'index'])->name('view-change');
    Route::post('change-pass', [CHangePassword::class, 'changePassword'])->name('change-pass');
    Route::get('/export', [ExportController::class, 'export'])->name('export');
});

require __DIR__.'/auth.php';
