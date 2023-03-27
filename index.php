<?php

require_once 'assets/php/functions.php';
if(isset($_GET['newfp'])){
    unset($_SESSION['auth_temp']);
    unset($_SESSION['forgot_email']);
    unset($_SESSION['forgot_code']);
}
if(isset($_SESSION['Auth'])){
    $user = getUser($_SESSION['userdata']['id']);
    $posts = filterPosts();
    $follow_suggestions = filterFollowSuggestion();
}

$pagecount = count($_GET);
// echo($pagecount);

//manage pages
if(isset($_SESSION['Auth']) && $user['ac_status']==1 && !$pagecount){
    showPage('header',['page_title'=>'Home']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('wall');
}elseif(isset($_SESSION['Auth']) && $user['ac_status']==0 && !$pagecount){

    showPage('header',['page_title'=>'Verify Your Email']);
    showPage('verify_email');
}elseif(isset($_SESSION['Auth']) && $user['ac_status']==2 && !$pagecount){
    showPage('header',['page_title'=>'Blocked']);
    showPage('blocked');
}elseif(isset($_SESSION['Auth']) && isset($_GET['editprofile']) && $user['ac_status']==1){
    showPage('header',['page_title'=>'Edit Profile']);
    showPage('navbar_other');
    showPage('edit_profile');
}elseif(isset($_SESSION['Auth']) && isset($_GET['u']) && $user['ac_status']==1){
    $profile = getUserByUsername($_GET['u']);
    if(!$profile){
        showPage('header',['page_title'=>'User Not Found']);
        showPage('navbar_other');
        showPage('user_not_found');

    }else{
     $profile_post = getPostById($profile['id']);  
     $profile['followers']=getFollowers($profile['id']);
     $profile['following']=getFollowing($profile['id']);
        showPage('header',['page_title'=>$profile['first_name'].' '.$profile['last_name']]);
        showPage('navbar_other');
        showPage('profile');
    }
 
  
}elseif(isset($_GET['signup'])){
    showPage('header',['page_title'=>'Pictogram - SignUp']);
    showPage('signup');
}elseif(isset($_GET['login'])){
   
    showPage('header',['page_title'=>'Pictogram - Login']);
    showPage('login');
}elseif(isset($_GET['forgotpassword'])){
    
    showPage('header',['page_title'=>'Pictogram - Forgot Password']);
    showPage('forgot_password');
} elseif (isset($_GET['courses'])) {
    showPage('header', ['page_title' => 'Pictogram - Home']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('loggedin');
}
elseif (isset($_GET['all_courses'])) {
    showPage('header', ['page_title' => 'Pictogram - All_course']);
    showPage('navbar_other');
    showPage('sidebar');
    // include("assets/loggedin/all_courses.php");
    showPage('all_courses');
}
elseif (isset($_GET['computer_science_java'])) {
    showPage('header', ['page_title' => 'Java']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('computer_science_java');
}
elseif (isset($_GET['computer_science_c'])) {
    showPage('header', ['page_title' => 'C++']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('computer_science_c++');
}
elseif (isset($_GET['computer_science_python'])) {
    showPage('header', ['page_title' => 'Python']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('computer_science_python');
}
elseif (isset($_GET['language_arabic'])) {
    showPage('header', ['page_title' => 'Arabic']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('language_arabic');
}
elseif (isset($_GET['language_english'])) {
    showPage('header', ['page_title' => 'English']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('language_english');
}
elseif (isset($_GET['language_french'])) {
    showPage('header', ['page_title' => 'French']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('language_french');
}
elseif (isset($_GET['engineering_software'])) {
    showPage('header', ['page_title' => 'Engineering software']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('engineering_software');
}
elseif (isset($_GET['engineering_aerospace'])) {
    showPage('header', ['page_title' => 'Engineering aerospace']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('engineering_aerospace');
}
elseif (isset($_GET['engineering_chemical'])) {
    showPage('header', ['page_title' => 'Engineering chemical']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('engineering_chemical');
}
//
elseif (isset($_GET['description_dominique'])) {
    showPage('header', ['page_title' => 'Java']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('computer_science/java/description_dominique');
}
elseif (isset($_GET['computer_science_java_dominique'])) {
    showPage('header', ['page_title' => 'Java']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('computer_science/java/computer_science_java_dominique');
}
elseif (isset($_GET['computer_science_java_alexlee'])) {
    showPage('header', ['page_title' => 'Java']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('computer_science/java/computer_science_java_alexlee');
}
elseif (isset($_GET['computer_science_java_learninglad'])) {
    showPage('header', ['page_title' => 'Java']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('computer_science/java/computer_science_java_learninglad');
}
elseif (isset($_GET['videoD'])) {
    $num = $_GET['videoD'];
    showPage('header', ['page_title' => 'Content']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('computer_science/java/actualvideocontent_dominique');
}
elseif (isset($_GET['videoA'])) {
    showPage('header', ['page_title' => 'Content']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('computer_science/java/actualvideocontent_alexlee');
}
elseif (isset($_GET['videoL'])) {
    showPage('header', ['page_title' => 'Content']);
    showPage('navbar_other');
    showPage('sidebar');
    showPage('computer_science/java/actualvideocontent_learninglad');
}
else{
    if(isset($_SESSION['Auth']) && $user['ac_status']==1){
        showPage('header',['page_title'=>'Home']);
        showPage('navbar_other');
        showPage('sidebar');
        showPage('wall');
    }elseif(isset($_SESSION['Auth']) && $user['ac_status']==0){

        showPage('header',['page_title'=>'Verify Your Email']);
        showPage('verify_email');
    }elseif(isset($_SESSION['Auth']) && $user['ac_status']==2){
        showPage('header',['page_title'=>'Blocked']);
        showPage('blocked');
    }else{
        showPage('header',['page_title'=>'Pictogram - Login']);
        showPage('login');
    }
  
}


showPage('footer');
unset($_SESSION['error']);
unset($_SESSION['formdata']);



?>



