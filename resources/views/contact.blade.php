@extends('layout.principal')

@section('title')
    {{ $title }}
@endsection

@section('styles')
@endsection

@section('content')

    <section class="row banner1 my-5">
        <div class="px-4 d-sm-none d-md-block col-md-4 text-center"><hr></div>
        <div class="col-sm-12 col-md-4 text-center text">CONTACTO</div>
        <div class="px-4 d-sm-none d-md-block col-md-4 text-center"><hr></div>
    </section>

    <section class="container us">
        <p class="first text-center">
            En óptica Lens vision nos gusta ofrecerte siempre un excelente servicio.<br>Contáctanos en cualquiera de nuestras sucursales para darte una<br>"Calidad garatizada al mejor precio".
        </p>
    </section>

    <section class="container-fluid mb-5 mt-5">
        <div class="row">
            <div class="col-md-3 mt-4 text-center">
                <p class="v-color stores-text p_id_active" id="p_id1">Centro Urbano</p>
                <button class="btn btn-primary btn-lens2 px-4 py-0 btn_id_active" id="btn_id1" onclick="changeMap(1)">Ver</button>
            </div>
            <div class="col-md-3 mt-4 text-center">
                <p class="v-color stores-text" id="p_id2">Plaza San Miguel</p>
                <button class="btn btn-primary btn-lens2 px-4 py-0" id="btn_id2" onclick="changeMap(2)">Ver</button>
            </div>
            <div class="col-md-3 mt-4 text-center">
                <p class="v-color stores-text" id="p_id3">Multiplaza Izcalli</p>
                <button class="btn btn-primary btn-lens2 px-4 py-0" id="btn_id3" onclick="changeMap(3)">Ver</button>
            </div>
            <div class="col-md-3 mt-4 text-center">
                <p class="v-color stores-text" id="p_id4">Plaza Atizapan</p>
                <button class="btn btn-primary btn-lens2 px-4 py-0" id="btn_id4" onclick="changeMap(4)">Ver</button>
            </div>
        </div>
    </section>

    <section class="container text-center mt-2 mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.3796638907374!2d-99.21332967653676!3d19.653801344407718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21e377c444b1f%3A0xe831fd162d756c3f!2sLensVision%20Optica!5e0!3m2!1ses!2smx!4v1655166629115!5m2!1ses!2smx" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="frame1"></iframe>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.875839449901!2d-99.21438022146314!3d19.68800347170202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21f03bc37e5f9%3A0xcf8aaac72dfb161d!2sOptica%20Lens%20Vision!5e0!3m2!1ses!2smx!4v1655166448820!5m2!1ses!2smx" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="frame2" class="dnone"></iframe>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.4850645052575!2d-99.21200937543504!3d19.649300572187517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21e3be6a345d5%3A0x57790ac5b0428cb2!2sMultiplaza%20Izcalli!5e0!3m2!1ses!2smx!4v1655166792225!5m2!1ses!2smx" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="frame3" class="dnone"></iframe>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4957.214006322135!2d-99.26425402177392!3d19.591880525236324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21d158d2d30f3%3A0x774d58c30cc5f790!2sOptica%20Lens%20Vision!5e0!3m2!1ses!2smx!4v1655168159510!5m2!1ses!2smx" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="frame4" class="dnone"></iframe>
    </section>


    <section class="container us">
        <p class="first text-center">
            Déjanos tus datos para agendar una cita, alguna información<br>o pregunta que tengas y nosotros con gusto nos pondremos<br>en contacto contigo
        </p>
    </section>


    <section class="container">

        <form action="#" class="row">
            <div class="col-md-4">
                <input type="text" placeholder="Nombre" class="form-control" required>
            </div>
            <div class="col-md-4">
                <input type="email" placeholder="Email" class="form-control" required>
            </div>
            <div class="col-md-4">
                <input type="text" placeholder="Teléfono" class="form-control" required>
            </div>
            <div class="col-md-12 mt-4">
                <textarea name="message" class="form-control" cols="30" rows="12" placeholder="Mensaje" required></textarea>
            </div>
            <div class="col-md-12 text-center mt-4">
                <button class="btn btn-primary btn-vision py-2 px-5">Enviar</button>
            </div>
        </form>

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
        .stores-text{
            font-size: 1.3em;
        }
        .p_id_active{
            font-size: 1.6em;
            font-weight: bolder;
        }
        .btn_id_active{
            display: none;
        }
        .active_frame{
            display: inline;
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

        function changeMap(id) {
            $("#btn_id1").removeClass('btn_id_active');
            $("#btn_id2").removeClass('btn_id_active');
            $("#btn_id3").removeClass('btn_id_active');
            $("#btn_id4").removeClass('btn_id_active');

            $("#p_id1").removeClass('p_id_active');
            $("#p_id2").removeClass('p_id_active');
            $("#p_id3").removeClass('p_id_active');
            $("#p_id4").removeClass('p_id_active');

            $("#frame1").removeClass('active_frame');
            $("#frame2").removeClass('active_frame');
            $("#frame3").removeClass('active_frame');
            $("#frame4").removeClass('active_frame');

            $("#frame1").addClass('dnone');
            $("#frame2").addClass('dnone');
            $("#frame3").addClass('dnone');
            $("#frame4").addClass('dnone');


            $("#btn_id"+id).addClass('btn_id_active');
            $("#p_id"+id).addClass('p_id_active');
            $("#frame"+id).addClass('active_frame');

        }
    </script>
@endsection
