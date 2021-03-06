<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use App\Spending;
use App\Countribution;
use PDF;

class SpendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["spendings"] = Spending::with('category')->get()->sortByDesc('created_at');
        return view('spending.index',$data);
    }

// 
   public function report($id)
   {
        $spending['spendings'] = Spending::find($id);
        $spending['categories'] = Category::get();
        $pdf = PDF::loadview('spending.report', $spending);

        return $pdf->download('laporan.pdf');
   } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["users"] = User::get();
        $data["categories"] = Category::get();
       return view('spending.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spending = new Spending;
        $spending->fill($request->all());
        // $biodata->user_id = Auth::user()->id;
        $spending->save();

        return redirect()->route('spendings.index', $spending);
    }

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
        $data["spendings"] = Spending::find($id);
        $data["users"] = User::get();
        $data["categories"] = Category::get();
       return view('spending.edit', $data);
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
        $spending = Spending::find($id);
        $spending->fill($request->all());
        $spending->update();

        return redirect()->route('spendings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Spending::find($id)->delete();
        return response()->json($data);
    }

    public function export()
    {
        $data["spendings"] = Spending::with('category')->get();
        $total["spend"] = Spending::sum('total');
         $data["spend"] = Spending::get();
         $total["countributions"] = Countribution::sum('money');
         $data["countributions"] = Countribution::get();
        return view('spending.report',$total,$data);   
    }

    public function datetime()
    {
        $dari = date();
        $sampai = date();

        $hasil = Spending::whereBetween('date',[$dari,$sampai])->get();
        $data["spendings"] = Spending::with('category')->get();
        return view('spending.report', $hasil, $data);   
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        
         $total["countributions"] = Countribution::sum('total');
         $data["countributions"] = Countribution::get();
        $pegawai['spendings'] = Spending::with('category')
        ->where('date','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pegawai ke view index
        return view('spending.report',$total, $pegawai, $data);
 
    }

    public function pdf() {
        // ambil semua data
        $spending['spendings'] = Spending::with('category')->get();
        // $total["countributions"] = Countribution::sum('total');
        $data["countributions"] = Countribution::get();
        // mengarahkan view pada file pdf.blade.php di views/provinsi/
        $pdf = PDF::loadview('spending.pdf', $spending,$data);
        // $view = View::make('spending.pdf',$provinsi); 
        // panggil fungsi dompdf
        // $pdf = App::make('PDF');
        // set ukuran kertas dan orientasi
        // $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
        // cetak
        return $pdf->download('laporan.pdf');
    }
}
