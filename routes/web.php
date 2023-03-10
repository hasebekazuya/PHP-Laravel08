<?php

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
    return view('welcome');
});

use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->group(function() {
    Route::get('news/create', 'add');
});

/* 3. http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください*/

    Rout::get('xxx/Admin/AAA',bbb);

/*4.  応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを
編集して、admin/profile/create にアクセスしたら ProfileController の add Action に、
admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください*/

Route::controller(ProfileController::class) -> profile('admin') -> group(function) {
    Route::get('profile/create','add');
    Route::get('profile/edit','edit');
}