@extends('layouts.member')

@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Dashboard</h2>
  </div>
</div>

<section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box noradius noborder bg-default">
                                    <i class="fa fa-money float-right text-white" style="font-size: 20px"></i>
                                    <h6 class="text-white text-uppercase m-b-20">Iuran</h6>
                                </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script type="text/javascript">
    $(()=>{
        if({!! $login !!}){
            swal("Hello :)","You Have Login as Member, Feel free to surf","success");
        }
    });
</script>
@endsection
