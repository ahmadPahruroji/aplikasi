<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Event;
use App\Notifikasi;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['events'] = Event::get()->sortByAsc('created_at');
        return view('event.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data["users"] = User::get();
        return view('event.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request);
        $event = new Event();
        $event->fill($request->all());
         if ($request->hasFile('image')) {
            $path = $request->file('image')->store('foto');
            $event->image = $path;    
        }
        $event->save();

        // if ($event->save())
        //  {
        //     $notif = new Notifikasi();
        //     $notif->id = 1;
        //     $notif->name = "Kegiatan Baru";
        //     $notif->save();
        //      $res['status'] = true;
        //         $res['code'] = 200;
        //         $res['message'] = "Berhasil  !";
        //         return response()->json($res);
        // }
        // else
        // {
        //      $res['status'] = false;
        //         $res['code'] = 200;
        //         $res['message'] = "Gagal  !";
        //         return response()->json($res);;
        // }

        return redirect('events');
    }

    // ////////////////////////////////////////
    public function getnotif()
          {
              $data = Notifikasi::all();
              $jumlah = count($data);
              if($jumlah>0)
              {
              echo $jumlah;    
              }else{
              echo "";    
              }
              
              
          }
          
          public function datanotif(){
              $data = Notifikasi::all();
              
              if(count($data)>0)
              {
                  
                  //return $data;
                  echo "kegiatan";
              }else{
                  echo "Tidak ada data kegiatan yang belum dibaca";
                  
              }
          }
          
          public function actiondarurat()
          {
              $deleteNotifikasi = Notifikasi::truncate();
            return redirect()->route('events');
          }

          // /////

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["events"] = Event::find($id);
       return view('event.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->fill($request->all());
         if ($request->hasFile('image')) {
            $path = $request->file('image')->store('event');
            $file = Storage::delete($event->image);
            $event->image = $path;    
        }
        $event->update();
             // dd($productimage);
        return redirect('events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Event::find($id)->delete();
        return response()->json($data);
    }
}
