@extends('back.layout')

   @section('css')

      <style>
         .back-pannel img{
            width : 120px;
            height: 80px;
         }
         .content{
            max-width: 1200px;
         }
      </style>

   @endsection

    @section('main')

      <!-- yield('main') -->    
   <div class="row padding_body">
      <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-body">
                     @if (session('message-updated'))
                        @component('back.alerts.alert')
                           @slot('type')
                                 success
                           @endslot
                           {!! session('message-updated') !!}
                        @endcomponent
                     @endif
               <div id="spinner" class="text-center"></div>
               <div class="table-responsive">
                  <table class="news_table">
                     @if (Request::is('admin/news'))
                        @include('back.components.news-component')
                     @elseif (Request::is('admin/galleries'))
                        @include('back.components.gallery-component')
                     @elseif (Request::is('admin/contact'))
                        @include('back.components.contact-component')
                     @elseif (Request::is('admin/users'))
                        @include('back.components.user-component')
                     @endif
                  </table>
               </div>
               <hr>                       
            </div>  
         </div>
      </div> 
   </div>

    @endsection

    @section('js')

    <script src="{{ asset('js/mine.js')}}"></script>
      <script>
         $(document).ready(function () {
            $('.listbuttonremove').on("click", function () {
               BaseRecord.deleteone($(this).attr('id'));
               return false;
             });
         });
         $(function () {
            $('.listbuttondelete').on("click", function () {
               BaseRecord.removeContact($(this).attr('id'));
               return false;
             });
         });
      </script>

    @endsection
