<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['Home'] = 'Home';
$route['Home/Course'] = 'Home/Courses';
$route['Home/Signup'] = 'Home/signup';
$route['Home/Premises'] = 'Home/premises';

$route['Logout'] = 'Home/logout';

$route['Admin/Login'] = 'Admin/LoginUI';

$route['Admin'] = 'Admin';
$route['Admin/Validation'] = 'Admin_Dashboard/Validation';
$route['Admin/Validation/SeeGrades/(:any)'] = 'Admin_Dashboard/SeeGrades/$1';
$route['Admin/Validation/Approve/(:any)'] = 'Admin_Dashboard/Approve/$1';
$route['Admin/Dashboard'] = 'Admin_Dashboard';
$route['Admin/Messaging'] = 'Admin_Dashboard/Messaging';
$route['Admin/Manual'] = 'Admin_Dashboard/Manual';
$route['Admin/Changelogs'] = 'Admin_Dashboard/Changelogs';
$route['Admin/Edit/Faculty/(:any)'] = 'Admin_Dashboard/edit_faculty/$1';
$route['Admin/Faculty/Edit/Submitted/(:any)'] = 'Admin_Dashboard/submit_edit_fac/$1';

$route['Admin/Faculty'] = 'Admin_Dashboard/show_faculty';
$route['Admin/Students'] = 'Admin_Dashboard/show_students';
$route['Admin/Subjects'] = 'Admin_Dashboard/show_subjects';
$route['Admin/Courses'] = 'Admin_Dashboard/show_courses';
$route['Admin/Classes'] = 'Admin_Dashboard/show_classes';

$route['Admin/Courses/Edit/(:any)'] = 'Admin_Dashboard/edit_course/$1';
$route['Admin/Courses/Edit/Submitted/(:any)'] = 'Admin_Dashboard/submit_edit_cou/$1';

$route['Admin/Classes/Edit/(:any)'] = 'Admin_Dashboard/edit_class/$1';
$route['Admin/Classes/Edit/Submitted/(:any)'] = 'Admin_Dashboard/submit_edit_cla/$1';
$route['Admin/Classes/AddSubject/(:any)'] = 'Admin_Dashboard/class_add_subject/$1';
$route['Admin/Classes/AddSubject/Submitted/(:any)'] = 'Admin_Dashboard/submitted_class_add_subject/$1';
$route['Admin/Classes/RemoveSubject/(:any)'] = 'Admin_Dashboard/class_remove_subject/$1';
$route['Admin/Classes/RemoveSubject/Submitted/(:any)'] = 'Admin_Dashboard/submitted_class_remove_subject/$1';

$route['Admin/Subjects/Add_Subjects'] = 'Admin_Dashboard/add_new_sub';
$route['Admin/Subjects/Edit/(:any)'] = 'Admin_Dashboard/edit_subject/$1';
$route['Admin/Subjects/Edit/Submitted/(:any)'] = 'Admin_Dashboard/submit_edit_sub/$1';

$route['Admin/Students/Add/Student'] = 'Admin_Dashboard/add_student';
$route['Admin/Students/Verify/(:any)'] = 'Admin_Dashboard/submit_verify_student/$1';
$route['Admin/Students/Unverified'] = 'Admin_Dashboard/verify_student';
$route['Admin/Student/Edit/(:any)'] = 'Admin_Dashboard/edit_student/$1';
$route['Admin/Students/Edit/Submitted/(:any)'] = 'Admin_Dashboard/submit_edit_stu/$1';
$route['Admin/Students/Lock/(:any)'] = 'Admin_Dashboard/lock_student/$1';
$route['Admin/Students/Unlock/(:any)'] = 'Admin_Dashboard/unlock_student/$1';
$route['Admin/Students/Archive/(:any)'] = 'Admin_Dashboard/archive_student/$1';

$route['Faculty'] = 'Faculty';
$route['Faculty/Dashboard'] = 'Faculty_Dashboard';

$route['Admin/Faculty/Add/Faculty'] = 'Admin_Dashboard/add_faculty_ui';
$route['Faculty/Encode/(:any)/(:any)'] = 'Faculty_Dashboard/EncodeGrade/$1/$2';
$route['Faculty/Encode/Submitted'] = 'Faculty_Dashboard/EncodeGrade_Submitted';
$route['Faculty/Messaging'] = 'Faculty_Dashboard/Messaging';
$route['Faculty/ValidateGrades/(:any)'] = 'Faculty_Dashboard/ValidateGrades/$1';
$route['Faculty/Average/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'Faculty_Dashboard/AverageGrade/$1/$2/$3/$4/$5/$6';
$route['Faculty/MySubject/(:any)'] = 'Faculty_Dashboard/show_subject_students/$1';

$route['Student'] = 'Student/Home';
$route['Student/Profile'] = 'Student/myacc';
$route['Student/Grades'] = 'Student/Grades';
$route['Student/Messaging'] = 'Student/Messaging';
$route['Student/Read/News/(:any)'] = 'Student/ReadNews/$1';

$route['Messages'] = 'AssignersClass/get_messages';

$route['InsertChat'] = 'AssignersClass/send';