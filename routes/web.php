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

/*Route::get('/', function () {
    return redirect("/example");
});



Route::get('/user/{name}/{age}', function ($name,$age) {*/
Route::get('/insert', function () {
	DB::insert('insert into students(Name,Date_Of_birth, GPA,advisor) values (?,?,?,?)', ['Zhuldyz','2002-04-02',3.6, 'Marzhan']);
});

Route::get('/select', function () {
 	$result = DB::select('select * from students where id = ?', [1]);
 	foreach ($result as $students) {
 		# code...\
 		echo "Name is: ".$students->Name;
 		echo "<br>";
 		echo "GPA is: ".$students->GPA;
 	}
 });
Route::get('/update', function () {
	$updated = DB::update('update students set GPA="2.4" where id=?',[1]);
	return $updated;
});

Route::get('/delete', function () {
	$deleted = DB::delete('delete from students where id=?',[1]);
	return $deleted;
});

use App\Models\Student;

Route::get('/select2', function () {
	$students=Student::all();
	foreach ($students as $student) {
		echo $student->Name;
		echo "<br>";
		# code...
	}
	});
Route::get('/insert2', function () {
	$students = new Student;
	$students->Name='Moldir';
	$students->Date_Of_birth="1999-05-07";
	$students->GPA=2.9;
	$students->advisor="Dastan";
	$students->save();
});

Route::get('/update2', function () {
	$students=Student::find(2);
	$students->GPA=3.2;
	$students->advisor='Dauren';
	$students->save();
});

Route::get('/delete2', function () {
	$students=Student::find(2);
	$students->delete();
});