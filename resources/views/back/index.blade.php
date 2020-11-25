@extends('back.layout')

    @section('css')

    @endsection

    @section('main')

    <div class="content-wrapper">
       <!-- yield('main') -->    
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive world_money">
                        <i class="fa fa-btc" aria-hidden="true"></i>
                        <i class="fa fa-eur" aria-hidden="true"></i>
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        <i class="fa fa-jpy" aria-hidden="true"></i>
                        <i class="fa fa-gbp" aria-hidden="true"></i>
                        <i class="fa fa-rub" aria-hidden="true"></i>
                        <i class="fa fa-krw" aria-hidden="true"></i>
                        <i class="fa fa-try" aria-hidden="true"></i>
                    </div>
                     <hr>                       
                   </div>  
                </div>
            </div> 
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-md-9 text-center ml-3">
                    <h2>102-MTT admin paneliga hush kelibsiz!</h2>
                </div>
                <div class="clock">
                    <iframe src="http://free.timeanddate.com/clock/i7cuh5zh/n244/szw110/szh110/cf100/hnce1ead6/hms2" frameborder="0" width="110" height="110"></iframe>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('js')

    @endsection
