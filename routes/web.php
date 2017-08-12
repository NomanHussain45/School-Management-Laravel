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
// */
// use Illuminate\Http\Request;
Route::get('/session','loginController@sessiontest');


Route::get('/','loginController@loginpage');


Route::post('/login','loginController@login');
Route::get('/Logout','loginController@Logout');
Route::get('/Main','loginController@blank');
Route::get('/Profile','StaffController@getuser');
Route::get('/Teacher-Profile','StaffController@getuserto');
Route::post('/SectionAndClass','StaffController@SectionAndClass');
Route::post('/attendanceInsert','AdministrationController@attendanceInsert');
Route::get('/staff/delete/{id}','StaffController@deletestaff');
Route::get('/getClasses','AdministrationController@getclass');
Route::get('/getClassStudents/{id}','AdministrationController@getClassStudents');
Route::get('/getSections/{id}','AdministrationController@getSections');
Route::get('/getStudentSections','AdministrationController@getStudentSections');
Route::get('/getSectionCLasses/{id}','AdministrationController@getSectionCLasses');
Route::get('/Sectionn/{id}','AdministrationController@Sectionn');
Route::get('/teacher/delete/{id}','functionController@deleteteacher');
Route::get('/sec','AdministrationController@sec');
Route::get('/admin/delete/{id}','functionController@deleteadmin');
Route::get('/student/delete/{id}','functionController@deletestudent');
Route::get('/principle/delete/{id}','functionController@deleteprinciple');

Route::get('/update/admin/{id}','functionController@adminupdate');

Route::post('/Admin-Updated/{id}','functionController@adminUpdated');
Route::get('/update/principle/{id}','functionController@principleupdate');
Route::post('/Principle-Updated/{id}','functionController@principleUpdated');
Route::get('/Addmission-list','AdministrationController@getadmin');
Route::get('/Teacher-list','AdministrationController@getteacher');
Route::get('/Student-list','AdministrationController@getstudent');
Route::get('/Principle-list','AdministrationController@getprinciple');
Route::get('/Staff-list','AdministrationController@getstaff');
Route::post('/Add-Staff','StaffController@add');
Route::post('/Add-classes','AdministrationController@addclass');
Route::post('/Add-Principal','AdministrationController@addprincipal');
Route::post('/Add-Teacher','AdministrationController@addteacher');
Route::post('/Add-Admin','AdministrationController@add');
Route::get('/show/{id}','StaffController@show');
Route::post('/Add-Complain','functionController@addcomplain');
Route::get('/show',function(){
return view('show');
});
Route::get('/View-complain','functionController@getcomplain');
Route::get('/View-Attendance','AdministrationController@getattendance');
Route::get('/Attendance',function(){
	return view('attendence');
});
Route::get('/View-Complain',function(){
	return view('viewcomplain');
});
Route::get('/Staff/{action}','loginController@staff');
Route::get('/Staff-Add','loginController@addstaff');
Route::get('/Teacher',function(){
return view('/Teacher');
});
Route::get('/Student',function(){
return view('student');
});
Route::get('/Complain',function(){
	return view('complain');

});
Route::get('/Class',function(){
return view('class');
});Route::get('/Subject',function(){
return view('subject');
});

Route::get('/Section',function(){
return view('section');
});
Route::post('/Section','AdministrationController@addSectionClass');
Route::get('/Admin',function(){
return view('/admin');
});
Route::get('/Principal',function(){
return view('/principle');
});

