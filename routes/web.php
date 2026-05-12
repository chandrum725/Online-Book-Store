use App\Http\Controllers\BookController;

Route::get('/', [BookController::class,'home']);

Route::get('/books', [BookController::class,'index']);

Route::get('/books/{id}', [BookController::class,'show']);

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/dashboard',
    [BookController::class,'dashboard']);
