@extends( 'layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Profile</h2>
</div>
</div>

<section>
    {{-- {{dd($user)}} --}}

    <div class="container">
        <div class="panel-body">
            <form action="{{ route('profile.update',Auth::user()->id) }}" enctype="multipart/form-data" files="true" method="post">
                @method('put')
                @csrf
                <div class="row">
                    
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">

                                    <h5 class="pull-right">User</h5>
                                </div>
                                <div class="card-body">

                                    {{-- <div class="form-group">
                                            <img src="{{ $user->avatar != null ?  asset('storage/'.$user->avatar) : asset('storage/uploads/avatars/default.png') }}" class="rounded mx-auto d-block" width="100">
                                            <input type="file" name="user[avatar]" class="form-control">     
                                        </div> --}} 
                                    
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" value="{{$users->name}}"   name="user[name]" value="" placeholder="type something" required> 
                                    </div> 
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" value= "{{$users->email}} "   name="user[email]" placeholder="type something" required> 
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success center-block btn-block"><i class="fa fa-pencil"></i> Edit</button> 
                                                        
                                    </div>
                                                                                 

                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-6">
                            <div class="card">
                                <div class="card-header">

                                    <h5 class="pull-right">Biodata</h5>
                                </div>
                                <div class="card-body"> --}}
                                                                                     
                                    
                                       {{--  <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input type="text" class="form-control" value="{{$user->biodata->first_name}}"   name="biodata[first_name]" value="" placeholder="type something" required> 
                                        </div> 
                                        <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input type="text" class="form-control" value= "{{$user->biodata->last_name}} "   name="biodata[last_name]" required>  --}}
                                        {{-- </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="biodata[birth_of_date]" class="form-control" value="{{$user->biodata->birth_of_date}}">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <input type="text" class="form-control" value="{{$user->biodata->province_id}} "   name="biodata[province_id]" placeholder="type something" required> 
                                        </div> 
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input type="text" class="form-control" value="{{$user->biodata->city_id}} "   name="biodata[city_id]" placeholder="type something" required> 
                                        </div> 
                                        <div class="form-group">
                                            <label>Wilayah</label>
                                            <input type="text" class="form-control" value="{{$user->biodata->district_id}} "   name="biodata[district_id]" placeholder="type something" required> 
                                        </div> 
                                        <div class="form-group">
                                            <label>Nomor Identitas</label>
                                            <input type="text" class="form-control" value="{{$user->biodata->identify_number}} "   name="biodata[identify_number]" placeholder="type something" required> 
                                        </div> --}}
                                    
                                {{-- </div>
                            </div>
                        </div>
                    </div> --}}
                    
            </form>
        </div>
    </div>
        
   


</section>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $(".zoom").fancybox();
    });
</script>
@endsection