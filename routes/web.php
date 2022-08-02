<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventRegistrationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategoryController;

Route::get("/", function () {
    return view("legal/homepage");
});

// Legal Website

// bagian product
Route::get("/document-analytics", function () {
    return view("legal/product/documentAnalytics");
});
Route::get("/document-recap", function () {
    return view("legal/product/documentRecap");
});
Route::get("/document-setting-drafting", function () {
    return view("legal/product/documentSettingDrafting");
});
Route::get("/search-reminder", function () {
    return view("legal/product/searchReminder");
});
Route::get("/socmed-analytics", function () {
    return view("legal/product/socialMediaAnalytics");
});
// bagian company
Route::get("/about-us", function () {
    return view("legal/company/aboutUs");
});
Route::get("/success-story", function () {
    return view("legal/company/success_story/successStory");
});
Route::get("/success-story-detail", function () {
    return view("legal/company/success_story/successStoryDetail");
});
Route::get("/faq", function () {
    return view("legal/company/faq");
});

// bagian resources
// blog
Route::get("/blog", function () {
    return view("legal/resources/blog/blog");
});
Route::get("/blog-post-detail", function () {
    return view("legal/resources/blog/blogPostDetail");
});
Route::get("/blog-category-detail", function () {
    return view("legal/resources/blog/blogCategoryDetail");
});

// bagian solution
Route::get("/custom-dev-ai", function () {
    return view("legal/solution/customDevAI");
});

//event
Route::get("/event", [EventCategoryController::class, "showEventTwoCategoryAndLatest"]);
Route::post("/register-event", [EventRegistrationController::class, "registerEvent"]);
Route::get("/event-register/{id}", [EventController::class, "showEventRegis"]);
Route::get("/event/{id}", [EventController::class, "showEventByCategory"]);
Route::get("/event-detail/{id}", [EventController::class, "showEventDetail"]);

// bagian company
// join us
Route::get("/job-list", function () {
    return view("legal/company/join_us/jobList");
});
Route::get("/job-list-detail", function () {
    return view("legal/company/join_us/jobDetail");
});

// bagian tambahan
Route::get("/under-construction", function () {
    return view("legal/underCons");
});
Route::get("/error-not-found", function () {
    return view("legal/404");
});

Route::get("/test", function () {
    return view("legal/test");
});


// Legal CMS
// auth
Route::get("/login", function () {
    return view("cms/auth/login");
});

// event crud
Route::get("/event-crud", [EventController::class, "showEvent"]);
Route::get("/event-create-page", [EventCategoryController::class, "showEventCategory"]);
Route::post("/create-event", [EventController::class, "createEvent"]);
// category
Route::get("/category-crud", [EventCategoryController::class, "showAllCategory"]);
Route::get("/category-create-page", [EventCategoryController::class, "createCategoryPage"]);
Route::post("/create-category", [EventCategoryController::class, "createCategory"]);
Route::get("/category-detail/{id}", [EventCategoryController::class, "showCategoryDetail"]);
Route::get("/edit-category/{id}", [EventCategoryController::class, "editCategory"]);


