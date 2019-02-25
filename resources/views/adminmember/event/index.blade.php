@extends('layouts.member')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Kegiatan</h2>
  </div>
</div>

<section>


  <div class="container">
    <div class="row">
      @foreach ($events as $ev => $event)
      @php
      setlocale (LC_TIME, 'ID');
      $date = strftime( "%d %B %Y", strtotime($event->date));
      @endphp
      <div class=" col-md-4">
        <div class="card">
          <div class="card-header border-primary">
            <h5>{{ $event->name }}</h5>
          </div>
          <div class="card-body"> 
            
            <div class="form-group">
              
              <img data-toggle="magnify" src="{{ asset('storage/'.$event->image) }}" class="rounded mx-auto d-block" width="90">
            </div>
            <div class="form-group">
              <label>Tanggal</label>
              <input type="text" class="form-control" placeholder="tulis disini" readonly="true" name="date" required value="{{ $date }}">
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <textarea type="text" class="form-control" name="description" readonly="true" placeholder="type something">{{ $event->description }}</textarea>
            </div> 
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  
</section>
@endsection