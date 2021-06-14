<?php

use Illuminate\Support\Facades\Route;

// роуты сайта
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\RoomController as Rooms;
use App\Http\Controllers\UslugiController;
use App\Http\Controllers\AboutController as About;
use App\Http\Controllers\PhotogalleryController as PhotoGallery;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PoliticsController;
use App\Http\Controllers\ProductController as Product;



// роуты админки
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BanerController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\PhotoGalleryController;
use App\Http\Controllers\Admin\MetaController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Admin\OrderUtpController;
use App\Http\Controllers\Admin\UslugiController as UslugiAdmin;
use App\Http\Controllers\Admin\ContactController as ContactAdmin;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SlideController;









Route::get('', [MainPageController::class, 'index'])->name('home.page');
Route::post('store', [MainPageController::class, 'store'])->name('orderutpdata.store');



#about
Route::name('about.')->prefix('about/')->group(function () {
	Route::get('', [About::class, 'index'])->name('home');
});


#nomera page
Route::name('rooms.')->prefix('rooms/')->group(function () {
	Route::get('', [Rooms::class, 'index'])->name('home');
	Route::get('{slug}', [Rooms::class, 'detail'])->name('detail');
	Route::post('ordernomer', [Rooms::class, 'ordernomer'])->name('ordernomer');
});




#product page
Route::name('product.')->prefix('product/')->group(function () {
	Route::get('', [Product::class, 'index'])->name('home');
	Route::get('{id}', [Product::class, 'detail'])->name('detail');
	Route::post('ordernomer', [Product::class, 'ordernomer'])->name('ordernomer');
});







#uslugi page
Route::name('uslugi.')->prefix('uslugi/')->group(function () {
	Route::get('', [UslugiController::class, 'index'])->name('home');
});


#фотогалерея page
Route::name('photogallery.')->prefix('photogallery/')->group(function () {
	Route::get('', [PhotoGallery::class, 'index'])->name('home');
});


#contact page
Route::name('contact.')->prefix('contact/')->group(function () {
	Route::get('', [ContactController::class, 'index'])->name('home');
});


#политики соглашения, разные правила отеля
Route::name('politics.')->prefix('politics/')->group(function () {
	Route::get('confidenc', [PoliticsController::class, 'confidenc'])->name('confidenc');
	Route::get('usloviaborny', [PoliticsController::class, 'usloviaborny'])->name('usloviaborny');
});













//админка
Route::name('admin.')->prefix('toenter/')->namespace('Admin')->middleware(['auth:sanctum', 'verified', 'web', 'auth'])->group(function () {


	Route::get('', [AdminController::class, 'index'])->name('home');



	Route::name('orderutp.')->prefix('orderutp/')->group(function () {
		Route::get('', [OrderUtpController::class, 'index'])->name('home');
	});







	#features
	Route::name('features.')->prefix('features/')->group(function () {
		Route::get('', [FeaturesController::class, 'index'])->name('home');
		Route::get('create', [FeaturesController::class, 'create'])->name('create');
		Route::post('store', [FeaturesController::class, 'store'])->name('store');
		Route::get('{id}/edit', [FeaturesController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [FeaturesController::class, 'update'])->name('update');
		Route::get('{id}/delete', [FeaturesController::class, 'delete'])->name('delete');
	});





	#baner page
	Route::name('baner.')->prefix('baner/')->group(function () {
		Route::get('', [BanerController::class, 'index'])->name('home');
	});






	#about page
	Route::name('about.')->prefix('about/')->group(function () {
		Route::get('', [AboutController::class, 'index'])->name('home');
		Route::get('create', [AboutController::class, 'create'])->name('create');
		Route::post('store', [AboutController::class, 'store'])->name('store');
		Route::get('{id}/edit', [AboutController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [AboutController::class, 'update'])->name('update');
		Route::get('{id}/delete', [AboutController::class, 'delete'])->name('delete');
	});







	#номера
	Route::name('room.')->prefix('room/')->group(function () {
		Route::get('', [RoomController::class, 'index'])->name('home');
		Route::get('create', [RoomController::class, 'create'])->name('create');
		Route::post('store', [RoomController::class, 'store'])->name('store');
		Route::get('{id}/edit', [RoomController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [RoomController::class, 'update'])->name('update');
		Route::get('{id}/delete', [RoomController::class, 'delete'])->name('delete');
	});








	#product
	Route::name('product.')->prefix('product/')->group(function () {
		Route::get('', [ProductController::class, 'index'])->name('home');
		Route::get('create', [ProductController::class, 'create'])->name('create');
		Route::post('store', [ProductController::class, 'store'])->name('store');
		Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [ProductController::class, 'update'])->name('update');
		Route::get('{id}/delete', [ProductController::class, 'delete'])->name('delete');
	});


	#slide
	Route::name('slide.')->prefix('slide/')->group(function () {
		Route::get('', [SlideController::class, 'index'])->name('home');
		Route::get('create', [SlideController::class, 'create'])->name('create');
		Route::post('store', [SlideController::class, 'store'])->name('store');
		Route::get('{id}/edit', [SlideController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [SlideController::class, 'update'])->name('update');
		Route::get('{id}/delete', [SlideController::class, 'delete'])->name('delete');
	});






	#uslugi page
	Route::name('uslugi.')->prefix('uslugi/')->group(function () {
		Route::get('', [UslugiAdmin::class, 'index'])->name('home');
		Route::get('create', [UslugiAdmin::class, 'create'])->name('create');
		Route::post('store', [UslugiAdmin::class, 'store'])->name('store');
		Route::get('{id}/edit', [UslugiAdmin::class, 'edit'])->name('edit');
		Route::post('{id}/update', [UslugiAdmin::class, 'update'])->name('update');
		Route::get('{id}/delete', [UslugiAdmin::class, 'delete'])->name('delete');
	});








	#фотогалерея
	Route::name('photogallery.')->prefix('photogallery/')->group(function () {
		Route::get('', [PhotoGalleryController::class, 'index'])->name('home');
		Route::get('create', [PhotoGalleryController::class, 'create'])->name('create');
		Route::post('store', [PhotoGalleryController::class, 'store'])->name('store');
		Route::get('{id}/edit', [PhotoGalleryController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [PhotoGalleryController::class, 'update'])->name('update');
		Route::get('{id}/delete', [PhotoGalleryController::class, 'delete'])->name('delete');
	});






	#meta description
	Route::name('meta.')->prefix('meta/')->group(function () {
		Route::get('', [MetaController::class, 'index'])->name('home');
		Route::get('create', [MetaController::class, 'create'])->name('create');
		Route::post('store', [MetaController::class, 'store'])->name('store');
		Route::get('{id}/edit', [MetaController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [MetaController::class, 'update'])->name('update');
		Route::get('{id}/delete', [MetaController::class, 'delete'])->name('delete');
	});








	#profile
	Route::name('profile.')->prefix('profile/')->group(function () {
		Route::get('', [ProfileController::class, 'index'])->name('home');
		Route::get('create', [ProfileController::class, 'create'])->name('create');
		Route::post('store', [ProfileController::class, 'store'])->name('store');
		Route::get('{id}/edit', [ProfileController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [ProfileController::class, 'update'])->name('update');
		Route::get('{id}/delete', [ProfileController::class, 'delete'])->name('delete');
	});




	// ContactAdmin
	#contact
	Route::name('contact.')->prefix('contact/')->group(function () {
		Route::get('', [ContactAdmin::class, 'index'])->name('home');
		Route::get('create', [ContactAdmin::class, 'create'])->name('create');
		Route::post('store', [ContactAdmin::class, 'store'])->name('store');
		Route::get('{id}/edit', [ContactAdmin::class, 'edit'])->name('edit');
		Route::post('{id}/update', [ContactAdmin::class, 'update'])->name('update');
	});


	#
	// other
});



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
// 	return view('dashboard');
// })->name('dashboard');







Route::get('logoutadminka', [MainPageController::class, 'logoutAdminka'])->name('admin.logout');


Route::fallback(function () {
	abort(404);
});
