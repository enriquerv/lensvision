@extends('layout.principal')

@section('title')
    {{ $title }}
@endsection

@section('styles')
@endsection

@section('content')

    <section class="row banner1 my-5">
        <div class="px-4 d-sm-none d-md-block col-md-4 text-center"><hr></div>
        <div class="col-sm-12 col-md-4 text-center text">SERVICIOS</div>
        <div class="px-4 d-sm-none d-md-block col-md-4 text-center"><hr></div>
    </section>

    <section class="container us">
        <p class="first">
            En óptica Lens visión te ofrecemos una gran variedad de servicios los cuales les sirvan de apoyo al beneficio de tu visión y ofreciendo un servicio con profesionales, aparatos tecnológicos y de alta calidad.
        </p>
    </section>

    <section class="container-fluid mb-5">
        <div class="row">

            <div class="col-8 offset-2 row">
                <div class="col-md-6 mt-4 text-center">
                    <img src="{{ env('APP_URL') }}/assets/images/services/card.png" alt="Card de servicios" class="img_card" onmouseover="zoomin(this)" onmouseout="zoomout(this)">
                </div>
                <div class="col-md-6 mt-4 text-center">
                    <img src="{{ env('APP_URL') }}/assets/images/services/card.png" alt="Card de servicios" class="img_card" onmouseover="zoomin(this)" onmouseout="zoomout(this)">
                </div>
                <div class="col-md-6 mt-4 text-center">
                    <img src="{{ env('APP_URL') }}/assets/images/services/card.png" alt="Card de servicios" class="img_card" onmouseover="zoomin(this)" onmouseout="zoomout(this)">
                </div>
                <div class="col-md-6 mt-4 text-center">
                    <img src="{{ env('APP_URL') }}/assets/images/services/card.png" alt="Card de servicios" class="img_card" onmouseover="zoomin(this)" onmouseout="zoomout(this)">
                </div>
                <div class="col-md-6 mt-4 text-center">
                    <img src="{{ env('APP_URL') }}/assets/images/services/card.png" alt="Card de servicios" class="img_card" onmouseover="zoomin(this)" onmouseout="zoomout(this)">
                </div>
                <div class="col-md-6 mt-4 text-center">
                    <img src="{{ env('APP_URL') }}/assets/images/services/card.png" alt="Card de servicios" class="img_card" onmouseover="zoomin(this)" onmouseout="zoomout(this)">
                </div>
            </div>
        </div>
    </section>



    <section class="somoslens my-5">
        <p class="text-center">#SOMOSLENSVISION</p>
    </section>


    <style>
        .img_card{
            width: 300px;
            transition: 0.5s;
            cursor: pointer;
        }
    </style>

@endsection

@section('modal-section')
@endsection

@section('scripts')
    <script>
        function zoomin(el) {
            $(el).css('width', '350px');
        }

        function zoomout(el) {
            $(el).css('width', '300px');
        }
    </script>
@endsection
