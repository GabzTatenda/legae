<?php

Auth::routes();
//Internal  core of the Application

Route::get('/adminPanel',function()
{
    return view('admin.dashboard');

});

Route::resource('/','MainController');

<<<<<<< HEAD
=======
Route::get('/', 'PagesController@index');
Route::get('/dash', 'PagesController@admin');
Route::get('/CRUD student', 'PagesController@crudstdnt');
Route::get('/CRUD teacher', 'PagesController@crudtr');
Route::get('/CRUD admin', 'PagesController@crudad');
Route::get('/CRUD class', 'PagesController@crudcl');


>>>>>>> First commit
// Route::group(['middleware'=>['auth']], function()
// {
//     //Gateway to the app


//     Route::get('welcome','MainController@welcome');
//     //Teacher
//     //Primary
//     Route::get('primarystdnt','PrimaryController@primaryStudent');
//     Route::get('primarytchr','PrimaryController@primaryTeacher');
//     Route::resource('primaryschool','PrimaryController');

//     //Secondary
//     Route::get('stdnts','SecondaryController@students');
//     Route::get('teacher-prof/{id}','SecondaryController@teacherProfile');
//     Route::get('tcher','SecondaryController@teachers');
//     Route::get('primarytchr','PrimaryController@primaryTeacher');
//     Route::resource('secondary','SecondaryController');
//     //Accounts
//     Route::get('pay-fees','AccountsController@payFees');
//     Route::get('balance-statement','AccountsController@viewBalanceStatement');


//     Route::get('accounts-department','AccountsController@accountsDepartment');
//     Route::get('accountant-profile/{id}','AccountsController@accountantProfile');
//     Route::resource('accounts','AccountsController');
//     //School fees
//     Route::resource('fees','SchoolFeesController');
//     //Subjects

//     Route::get('getSubjects','SubjectController@getSubjects');
//     Route::get('getCambridgeSubjects','SubjectController@getCambridgeSubjects');
//     Route::get('getZimsecSubjects','SubjectController@getZimsecSubjects');
//     Route::get('new-subjects','SubjectController@newSubjects');
//     Route::get('manage-subjects','SubjectController@manageSubjects');
//     Route::resource('subject','SubjectController');

// //Student Subjects
//     Route::resource('std-subject','StudentSubjectsController');
// //StudentSports
//     Route::resource('std-sport','StudentSportsController');
// //subject mark
//     Route::resource('sbj-mark','SubjectMarksController');
//     //Students Routes

//     Route::get('studentreg/{studentId}','StudentsController@studentRegister');
//     Route::get('studentendOfTerm/{studentId}','StudentsController@studentendOfTerm');
//     Route::get('formOneStudents','StudentsController@formOneStudents');
//     Route::get('formTwoStudents','StudentsController@formTwoStudents');
//     Route::get('formThreeStudents','StudentsController@formThreeStudents');
//     Route::get('formFourStudents','StudentsController@formFourStudents');
//     Route::get('stdntprof/{id}','StudentsController@stdntprof');
//     Route::get('maleStudents/{levelId}/{sub}','StudentsController@male')->name('maleStudents');
//     Route::get('femaleStudents/{levelId}/{sub}','StudentsController@female')->name('femaleStudents');
//     Route::get('recordMarks/{id}/{sub}','StudentsController@newMarks')->name('recordMarks');
//     Route::post('newmark','StudentsController@recordNewMarks');
//     Route::post('student','StudentsController@newStudent');
//     Route::get('report/{studId}','StudentsController@report')->name('report');
//     Route::get('results','StudentsController@results')->name('results');

//     //Admin
//     Route::post('new-user-type','AdminController@newUserType');
//     Route::get('manage-teachers','AdminController@manageTeachers');
//     Route::get('education-management','AdminController@educationManagement');
//     Route::get('manage-students','AdminController@manageStudents');
//     Route::get('add-student','AdminController@addStudents');
//     Route::get('add-teacher','AdminController@addTeacher');
//     Route::get('student-logs','AdminController@studentLogs');
//     Route::get('teacher-logs','AdminController@teacherLogs');
//     Route::get('set-permission','AdminController@setPermission');
//     Route::post('assgnmnt-admin-permission','AdminController@assignAdminPermission');
//     Route::get('student-permission','AdminController@studentPermission');
//     Route::get('teacher-permission','AdminController@teacherPermission');
//     Route::post('new-student','AdminController@newStudents');
//     Route::post('new-teacher','AdminController@newTeacher');
//     Route::post('setStdPermission','AdminController@setStdPermission');
//     Route::post('new-permission','AdminController@newPermission');
//     Route::get('dctvtUser/{id}','AdminController@dctvtUser');
//     Route::resource('adminpnl','AdminController');
//     //Sport

//     Route::get('getAllSports','SportController@allSports');
//     Route::resource('sport','SportController');

//     //Timetable

//     Route::get('getLevelSubjects/{id}','TimetableController@subjects');
//     Route::get('getTeacherSubjects/{id}','TimetableController@teachers');
//     Route::resource('timetable','TimetableController');

//     //Teachers
//     Route::get('department','TeachersController@department');
//     Route::get('teacher-profile/{id}','TeachersController@teacherProfile');
//     Route::post('dailyExercise','TeachersController@dailyExerciseTopic');
//     Route::post('signregister','TeachersController@classRegister');
//     Route::post('recordExercise','TeachersController@recordExercise');
//     Route::post('classignregister','TeachersController@signRegister');
//     Route::get('dailyExercises/{levelId}/{subId}','TeachersController@dailyExercises');
//     Route::get('endOfTerm/{levelId}/{subId}','TeachersController@endOfTerm');
//     Route::get('class/{levelId}/{subId}','TeachersController@getClass');
//     Route::get('tchrprof/{id}','TeachersController@teacherProfile');
//     Route::get('getprimaryteachers','TeachersController@primaryTeachers');
//     Route::get('formOneTeachers','TeachersController@formOneTeachers');
//     Route::get('formTwoTeachers','TeachersController@formTwoTeachers');
//     Route::get('formThreeTeachers','TeachersController@formThreeTeachers');
//     Route::get('formFourTeachers','TeachersController@formFourTeachers');
//     Route::resource('classes','TeachersController');

// //Settings
//     Route::post('updatePwd','SettingsController@updatePwd');
//     Route::resource('settings','SettingsController');

// //Levels
// //Route::any('form/{id}','LevelsController@getFormStudents');

//     Route::get('levels','AdminController@levels');
//     Route::post('primary-subLevel','LevelsController@createPrimarySubLevels');
//     Route::post('edit-subLevel','LevelsController@editPrimarySubLevel');
//     Route::get('primaryLevels','LevelsController@showPrimaryLevels');
//     Route::post('new-subLevel','LevelsController@createLevel');
//     Route::get('getSubLevel/{id}','LevelsController@subLevels');

// //Users

//     Route::get('activityDetail/{id}','UsersController@activityDetails');
//     Route::get('set-permission/{id}','UsersController@setPermission');
//     Route::post('set-user-permission','UsersController@setUserPermission');
//     Route::get('view-permission/{id}','UsersController@viewPermission');
//     Route::post('editPermissions','UsersController@editPermissions');
//     Route::get('userLogs','UsersController@userLogs');
//     Route::get('userAdmins','UsersController@userAdmins');
//     Route::get('adminprfl','UsersController@adminProfile');
//     Route::get('addAdmin','UsersController@addAdmin');
//     Route::resource('users','UsersController');

// //Types
//     Route::post('createType','TypeController@createType');

// //Position
//     Route::resource('position','PositionsController');
// //SubLevel
//     Route::resource('sub-level','SubLevelController');
// //Domitory
//     Route::post('allocate-rooms','DomitoryController@allocateRooms');
//     Route::resource('hostel','DomitoryController');
// //Subject level

//     Route::resource('sbj-level','SubjectLevelsController');
// //Staff

//     Route::post('new-working-area','StaffController@createWorkingArea');
//     Route::get('get-roaster','StaffController@getRoaster');
//     Route::post('new-roaster','StaffController@createRoaster');
//     Route::post('sign-register','StaffController@staffRegister');
//     Route::get('show-staff-register','StaffController@getCleanersRegister');
//     Route::resource('staff','StaffController');

// //StaffWork
//     Route::resource('staff-work','StaffWorkController');
//     //Calendar

//     Route::get('calendarEvents','CalendarController@calendarEvents');
//     Route::post('deleteEvent/{id}','CalendarController@deleteEvent');
//     Route::get('allCalendarEvents','CalendarController@allCalendarEvents');
//     Route::resource('calendar','CalendarController');


//     //Communication
//     Route::get('communicator-profile/{id}','CommunicationController@communicatorProfile');
//     Route::get('new-message','CommunicationController@createMessage');
//     Route::resource('communication','CommunicationController');
// });




