@extends('back.layout')

@section('css')
<style>
    .upload_field {
        opacity:0.0;
        z-index:2;
        position:absolute;
     }
    .upload_submit {
        z-index:1;
        display:none;
     }
</style>
@endsection

@section('main')

<div class="row">
    <!-- left column -->
    <div class="col-md-3">
    </div>
    <!-- center column -->       
    <div class="col-md-6 margin">
        @if (session('message-ok'))
            @component('back.alerts.alert')
                @slot('type')
                    success
                @endslot
                {!! session('message-ok') !!}
            @endcomponent
        @endif
        <!-- general form elements -->
        <div class="box box-primary">
                <div class="box-body">
                    @if (Request::is('admin/news/*'))
                        @include('back.store-update.components.news-template')
                    @elseif (Request::is('admin/galleries/*'))
                        @include('back.store-update.components.gallery-template')
                    @elseif (Request::is('admin/users/*'))
                        @include('back.store-update.components.user-template')
                    @endif 
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
    <!--/.col (right) -->
    <!-- right column -->
    <div class="col-md-3">
    </div> 
</div>
    <!-- /.row -->
@endsection


@section('js')
    <script>
        $(document).ready(function(){
            $("body").on("change", ".upload_field", function(){
                //alert('hi');
                $(".upload_submit").click();
            });
        });       
    </script>
@endsection  

