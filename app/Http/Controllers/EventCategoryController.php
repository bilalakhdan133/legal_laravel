<?php

namespace App\Http\Controllers;

use App\EventCategory;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventCategoryController extends Controller
{
    
    public function showEventTwoCategoryAndLatest(){
      
        $firstCategory = DB::table('event')->where('kategori_id', '1')->orderBy('id', 'desc')->take(3)->get();
        $secondCategory = DB::table('event')->where('kategori_id', '2')->orderBy('id', 'desc')->take(3)->get();
        $spCategory = EventCategory::all();
        $latestEvent = DB::table('event')->orderBy('id', 'desc')->first();
 
        // dd($firstCategory);
        return view('legal/resources/event/event', 
            [
             'spTwoCategories' => $spCategory,   
             'firstCate' => $firstCategory,
             'secondCate' => $secondCategory,
            'latestEvent' => $latestEvent,

            ]
        );
    }
    
    // cms
    public function showEventCategory(){
        $eventCategory = EventCategory::all();
        return view('cms/event_crud/eventCreate')->with('eventCategories',$eventCategory);
    }
    public function showAllCategory(){
        $category = EventCategory::all();
        return view('cms/event_crud/categoryManage')->with('categories',$category);
    }
    public function createCategoryPage(){
        return view('cms/event_crud/categoryCreate');
    }
    public function createCategory(Request $request)
    {
        // dd($request->all());
        $validator =  $request->validate([
            'NamaCategory' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
        ],
        [
            'NamaCategory.required' => '* Nama category dibutuhkan',
            'NamaCategory.regex' => '* Hanya huruf dan spasi yang diperbolehkan',
        ]);   
                $category = new EventCategory([
                    'nama_kategori_event' => $request->input('NamaCategory'),
                ]);

                $category->save();
                return redirect('/category-crud');
    }
    public function showCategoryDetail($id){
        $catDetail = EventCategory::findOrFail($id);
        return view('cms/event_crud/categoryEdit')->with('categoryDetails', $catDetail);
    }
    public function editCategory(Request $request)
    {
        // dd($request->all());
        // $validator =  $request->validate([
        //     'NamaCategory' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
        // ],
        // [
        //     'NamaCategory.required' => '* Nama category dibutuhkan',
        //     'NamaCategory.regex' => '* Hanya huruf dan spasi yang diperbolehkan',
        // ]);

        $category = EventCategory::find($request->id);
        $category->nama_kategori_event = $request->input('NamaCategory');
        $category->save();

        return redirect('/category-crud');

    }

    public function deleteCategory($id){
        $category = EventCategory::find($id);
        $category->delete();
        return redirect('/category-crud');
    }




    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\EventCategory  $eventCategory
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(EventCategory $eventCategory)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\EventCategory  $eventCategory
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(EventCategory $eventCategory)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\EventCategory  $eventCategory
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, EventCategory $eventCategory)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\EventCategory  $eventCategory
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(EventCategory $eventCategory)
    // {
    //     //
    // }
}
