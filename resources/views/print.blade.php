@extends('layouts.app')

@section('content')
<script type="text/javascript">
    $(document).ready(function(){
        $('.btnprn').printPage();
    });
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" >
                <div class="panel-heading" >
                    <div>
                    <input  type="button" name="btn" value="Download" class="btn btn-primary">              &nbsp;&nbsp;<input type="button" name="btn" value="Print" class="btn btn-primary">    
                    </div>
                    </div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     
                     <div   style="height: 800px;background-image: url({{ URL::asset('images/card.jpeg') }});">
                        <h3 style="float: left;
                                    margin-left: 487px;
                                    margin-top: 188px;
                                    color: black;
                                    font-family: sans-serif;">
                        {{ Auth::user()->fname }}</h3>    
                     </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" >
                <div class="panel-heading" >
                    <div>
                    <input  type="button" name="btn" value="Download" class="btn btn-primary">              &nbsp;&nbsp;<input type="button" name="btn" value="Print" class="btn btn-primary">    
                    </div>
                    </div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     
                     <div   style="height: 800px;background-image: url({{ URL::asset('images/card.jpeg') }});">
                        <h3 style="float: left;
                                    margin-left: 487px;
                                    margin-top: 188px;
                                    color: black;
                                    font-family: sans-serif;">
                        {{ Auth::user()->fname }}</h3>    
                     </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
