<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
   
    public function showEventDetail($id){
        $eventDetail = Event::findOrFail($id);
        return view('legal/resources/event/eventDetail')->with('eventDetails', $eventDetail);
    }
    public function showEventByCategory($id){
        $spCategory = Event::where('kategori_id', $id)->get();
        return view('legal/resources/event/eventByCategory')->with('spCategories', $spCategory);
    }
    public function showEventRegis($id){
        $eventDetail = Event::findOrFail($id);
        return view('legal/resources/event/eventRegister')->with('eventDetails', $eventDetail);
    }
    public function showEventTwoCategory($id){
        $spCategory = Event::where('kategori_id', $id)->get();
        return view('legal/resources/event/event')->with('spTwoCategories', $spCategory);
    }
    public function latestEvent(){
        $latestEvent = DB::table('event')->latest()->first();
        return view('legal/resources/event/event')->with('xxx', $latestEvent);
    }

    // cms
    public function showEvent(){
        $event = Event::all();
        return view('cms/event_crud/event')->with('events',$event);
    }

    public function createEvent(Request $request)
    {
        // dd($request->all());
        $validator =  $request->validate([
            'NamaEvent' => 'required',
            'LokasiEvent' => 'required',
            'KuotaEvent' => 'required',
            'KategoriEvent' => 'required',
            'TanggalEvent' => 'required',
            'DeskripsiEvent' => 'required',
            'ThumbnailEvent' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:max_width=1110,max_height=723',
        ],
        [
            'NamaEvent.required' => '* Nama event dibutuhkan',
            'LokasiEvent.required' => '* Lokasi event dibutuhkan',
            'KuotaEvent.required' => '* Kuota event dibutuhkan',
            'KategoriEvent.required' => '* Kategori event dibutuhkan',
            'TanggalEvent.required' => '* Tanggal event dibutuhkan',
            'DeskripsiEvent.required' => '* Deskripsi event dibutuhkan',
            'ThumbnailEvent.required' => '* Thumbnail event dibutuhkan',
            'ThumbnailEvent.mimes' => '* Format File Yang Didukung Hanya .JPG,.PNG,.JPEG',
            'ThumbnailEvent.dimensions' => '* Ukuran yang diterima hanya 1110 x 723',
        ]);


                 $uploadFile = $request->file('ThumbnailEvent');
                 $destinationPath = '/imageThumbnailEvent/';


                //  $nameFile = pathinfo($uploadFile->getClientOriginalName(), PATHINFO_FILENAME);
                 $extensionFile = $uploadFile->getClientOriginalExtension();
                 $filename = str_replace(' ', '', $request['NamaEvent']);

                 $resultNameFile = time().'-'. $filename.".".$extensionFile;
                 $filelocation = $destinationPath.$resultNameFile;
               
              
                 try{
                    $uploadFile->move(public_path($destinationPath),$resultNameFile);
                }
                catch(\Exception $e){
                    return Redirect::back()->withErrors($Validator)->withInput($request->all());
                }
                
                $event = new Event([
                    'nama_event' => $request->input('NamaEvent'),
                    'kategori_id' => $request->input('KategoriEvent'),
                    'lokasi_event' => $request->input('LokasiEvent'),
                    'tanggal_event' => $request->input('TanggalEvent'),
                    'kuota_event' => $request->input('KuotaEvent'),
                    'deskripsi_event' => $request->input('DeskripsiEvent'),
                    'thumbnail_event' => $filelocation
                ]);

                $event->save();
                return redirect('/event-crud');
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
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Event $event)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Event $event)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Event $event)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Event $event)
    // {
    //     //
    // }
}
