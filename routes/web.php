<?php

use App\Http\Controllers\CategoryEmasController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmasController;
use App\Http\Controllers\KadarEmasController;
use App\Http\Controllers\LevelEmasController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\MenuGroupController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\PelatihanController;
use App\Models\Categories;
use App\Models\CategoryEmas;
use App\Models\Emas;
use Illuminate\Support\Facades\Route;


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

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::permanentRedirect('/', '/home');

Route::get('home', [ContentController::class, 'index']);
Route::get('about', [ContentController::class, 'about']);
Route::get('emas-list', [ContentController::class, 'list'])->name('search');
Route::get('emas-list/kategori/{category}', [ContentController::class, 'listCategory'])->name('category');
Route::get('emas-detail/{id}', [ContentController::class, 'show']);

Route::get('tambah-emas', [ContentController::class, 'show']);
// Route::get('migrasi', function () {
//     $Dataemaslama = Categories::get(['name', 'vendor', 'karat', 'berat', 'status', 'code', 'codebaru', 'image', 'level']);
//     foreach ($Dataemaslama as $key => $value) {
//         $status = $value->status == 'ADA' ? 1 : 0;
//         $barcode = "AAAAA";
//         if ($value->codebaru == null) {
//             $barcode = $value->code;
//         } else {
//             $barcode = $value->codebaru;
//         }

//         $image = '180.png';
//         if ($value->image) {
//             $image = $value->image;
//         }
//         // Define variables
//         $karat = null;
//         $level = '5157e804-4343-4e69-bbd2-715a1f89d7bd';

//         //#################Data karat Emas######################
//         //6k
//         if ($value->karat == "6K") {
//             $karat = "41904d43-d1ed-4152-87f2-2bc87e501007";
//         }
//         if ($value->karat == "6k") {
//             $karat = "41904d43-d1ed-4152-87f2-2bc87e501007";
//         }
//         if ($value->karat == "6") {
//             $karat = "41904d43-d1ed-4152-87f2-2bc87e501007";
//         }
//         if ($value->karat == "25") {
//             $karat = "41904d43-d1ed-4152-87f2-2bc87e501007";
//         }

//         //8k
//         if ($value->karat == "37.5") {
//             $karat = "b2889166-a045-4fe0-bd68-411e9a48fce9";
//         }
//         if ($value->karat == "3.75") {
//             $karat = "b2889166-a045-4fe0-bd68-411e9a48fce9";
//         }
//         if ($value->karat == "375") {
//             $karat = "b2889166-a045-4fe0-bd68-411e9a48fce9";
//         }
//         if ($value->karat == "8K") {
//             $karat = "b2889166-a045-4fe0-bd68-411e9a48fce9";
//         }
//         if ($value->karat == "8k") {
//             $karat = "b2889166-a045-4fe0-bd68-411e9a48fce9";
//         }
//         if ($value->karat == "8") {
//             $karat = "b2889166-a045-4fe0-bd68-411e9a48fce9";
//         }
//         if ($value->karat == "360") {
//             $karat = "b2889166-a045-4fe0-bd68-411e9a48fce9";
//         }
//         if ($value->karat == "37,5") {
//             $karat = "b2889166-a045-4fe0-bd68-411e9a48fce9";
//         }

//         //9k
//         if ($value->karat == "40") {
//             $karat = "aa2d5dfb-6e7d-4b28-b75b-03d2f9966de7";
//         }
//         if ($value->karat == "9K") {
//             $karat = "aa2d5dfb-6e7d-4b28-b75b-03d2f9966de7";
//         }
//         if ($value->karat == "9k") {
//             $karat = "aa2d5dfb-6e7d-4b28-b75b-03d2f9966de7";
//         }
//         if ($value->karat == "9") {
//             $karat = "aa2d5dfb-6e7d-4b28-b75b-03d2f9966de7";
//         }

//         //10k
//         if ($value->karat == "42") {
//             $karat = "367afc54-5fb0-470a-8f8a-5a9ad9304cca";
//         }

//         //15k
//         if ($value->karat == "680") {
//             $karat = "3bf400ea-89ae-4903-813d-7bbd034da7e0";
//         }

//         //15k
//         if ($value->karat == "16K") {
//             $karat = "51dcec8d-e469-4b76-b8f6-fa557e09ddbb";
//         }
//         if ($value->karat == "16k") {
//             $karat = "51dcec8d-e469-4b76-b8f6-fa557e09ddbb";
//         }
//         if ($value->karat == "16") {
//             $karat = "51dcec8d-e469-4b76-b8f6-fa557e09ddbb";
//         }
//         if ($value->karat == "70") {
//             $karat = "51dcec8d-e469-4b76-b8f6-fa557e09ddbb";
//         }

//         //16k
//         if ($value->karat == "74") {
//             $karat = "5a04e277-529f-4b32-81bf-c8b0828c504a";
//         }
//         if ($value->karat == "75") {
//             $karat = "5a04e277-529f-4b32-81bf-c8b0828c504a";
//         }
//         if ($value->karat == "755") {
//             $karat = "5a04e277-529f-4b32-81bf-c8b0828c504a";
//         }
//         if ($value->karat == "17K") {
//             $karat = "5a04e277-529f-4b32-81bf-c8b0828c504a";
//         }
//         if ($value->karat == "17k") {
//             $karat = "5a04e277-529f-4b32-81bf-c8b0828c504a";
//         }
//         if ($value->karat == "17") {
//             $karat = "5a04e277-529f-4b32-81bf-c8b0828c504a";
//         }

//         //18k
//         if ($value->karat == "18K") {
//             $karat = "2b4b018e-0c06-4ce9-acd3-cd7b637e1597";
//         }
//         if ($value->karat == "18k") {
//             $karat = "2b4b018e-0c06-4ce9-acd3-cd7b637e1597";
//         }
//         if ($value->karat == "18") {
//             $karat = "2b4b018e-0c06-4ce9-acd3-cd7b637e1597";
//         }

//         //22k
//         if ($value->karat == "930") {
//             $karat = "c3h7f75d-3422-4c33-9e33-6a2ad1a02618";
//         }

//         //24k
//         if ($value->karat == "99.9") {
//             $karat = "e9b9f75c-3911-4c33-9e33-6c2ac1a89572";
//         }
//         if ($value->karat == "99.99%") {
//             $karat = "e9b9f75c-3911-4c33-9e33-6c2ac1a89572";
//         }
//         if ($value->karat == "24K") {
//             $karat = "e9b9f75c-3911-4c33-9e33-6c2ac1a89572";
//         }
//         if ($value->karat == "24k") {
//             $karat = "e9b9f75c-3911-4c33-9e33-6c2ac1a89572";
//         }
//         if ($value->karat == "24") {
//             $karat = "e9b9f75c-3911-4c33-9e33-6c2ac1a89572";
//         }


//         //#################Data Level Emas######################
//         //Biasa
//         if ($value->level == 'DA') {
//             $level = "5157e804-4343-4e69-bbd2-715a1f89d7bd";
//         }
//         if ($value->level == 'BA') {
//             $level = "5157e804-4343-4e69-bbd2-715a1f89d7bd";
//         }
//         if ($value->level == '0') {
//             $level = "5157e804-4343-4e69-bbd2-715a1f89d7bd";
//         }
//         if ($value->level == '') {
//             $level = "5157e804-4343-4e69-bbd2-715a1f89d7bd";
//         }

//         //Itali
//         if ($value->level == 'ITY') {
//             $level = "7d7cf53c-6da2-4cdb-8257-c138444e1cf7";
//         }
//         if ($value->level == 'ITALY') {
//             $level = "7d7cf53c-6da2-4cdb-8257-c138444e1cf7";
//         }
//         if ($value->level == 'LD') {
//             $level = "7d7cf53c-6da2-4cdb-8257-c138444e1cf7";
//         }
//         if ($value->level == 'BM') {
//             $level = "7d7cf53c-6da2-4cdb-8257-c138444e1cf7";
//         }

//         //Premium
//         if ($value->level == 'PREMIUM') {
//             $level = "d0e7500d-39f2-4ae4-ba04-03e756c6794c";
//         }
//         if ($value->level == 'BAA') {
//             $level = "d0e7500d-39f2-4ae4-ba04-03e756c6794c";
//         }
//         if ($value->level == 'DAA') {
//             $level = "d0e7500d-39f2-4ae4-ba04-03e756c6794c";
//         }
//         if ($value->level == 'SP') {
//             $level = "d0e7500d-39f2-4ae4-ba04-03e756c6794c";
//         }
//         $nameCode = $value->name . ' ' . $barcode;
//         Emas::create([
//             'name' => $nameCode,
//             'kadar_emas_id' => $karat,
//             'level_emas_id' => $level,
//             'image' => $image,
//             'weight' => $value->berat,
//             'barcode' => $barcode,
//             'vendor' => $value->vendor,
//             'status' => $status,
//             'description' => 'Produk ini terbuat dari emas murni dengan kadar tinggi, dijamin keasliannya, serta memiliki harga yang terjangkau.'
//         ]);
//     }
// });
// Route::get('update_berat', function () {
//     $data = Emas::get(['id', 'weight']);
//     foreach ($data as $item) {
//         // Ubah koma menjadi titik
//         $weight = str_replace(',', '.', $item->weight);
//         Emas::where('id', $item->id)->update(['weight' => $weight]);
//     }
//     return response()->json(['message' => 'Data weight telah diupdate.']);
// });

Route::group(['middleware' => ['web', 'auth', 'verified']], function () {
    Route::resource('dashboard', DashboardController::class)->only('index');
    Route::resource('dashboard/user', UserManagementController::class)->only('index', 'store', 'update', 'destroy');
    Route::prefix('dashboard/user')->group(function () {
        Route::resource('profile', UserProfileController::class)->only('index');
    });
    Route::resource('dashboard/setting', SettingController::class)->only('index', 'update');

    Route::resource('dashboard/route', RouteController::class)->only('index', 'store', 'update', 'destroy');
    Route::resource('dashboard/role', RoleController::class)->only('index', 'store', 'update', 'destroy');
    Route::resource('dashboard/permission', PermissionController::class)->only('index', 'store', 'update', 'destroy');

    Route::resource('dashboard/menu', MenuGroupController::class)->only('index', 'store', 'update', 'destroy');
    Route::resource('dashboard/menu.item', MenuItemController::class)->only('index', 'store', 'update', 'destroy');

    Route::resource('dashboard/level', LevelEmasController::class)->only('index', 'store', 'update', 'destroy');
    Route::resource('dashboard/kadar', KadarEmasController::class)->only('index', 'store', 'update', 'destroy');
    Route::resource('dashboard/category', CategoryEmasController::class)->only('index', 'store', 'update', 'destroy');
    Route::resource('dashboard/emas', EmasController::class)->only('index', 'store', 'update', 'destroy');
});
