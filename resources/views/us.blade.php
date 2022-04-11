@extends('layout.principal')

@section('title')
    {{ $title }}
@endsection

@section('styles')
@endsection

@section('content')

    <section class="row banner1 my-5">
        <div class="px-4 d-sm-none d-md-block col-md-4 text-center"><hr></div>
        <div class="col-sm-12 col-md-4 text-center text">¿QUIÉNES SOMOS?</div>
        <div class="px-4 d-sm-none d-md-block col-md-4 text-center"><hr></div>
    </section>

    <section class="container us">
        <p class="first">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, sint eveniet nisi itaque possimus modi tenetur alias minus quos corporis non repellat odio eaque, nostrum illo consequatur quod accusantium quae.
            Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Soluta error itaque, cupiditate, eligendi velit consequatur quam blanditiis dolores ratione commodi a quibusdam dignissimos autem repellendus maxime corporis inventore voluptates, quisquam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, nemo dolores consectetur nobis, distinctio ipsa soluta atque tempora numquam vero non quo itaque nostrum debitis nam tempore sequi iusto rerum.
        </p>
    </section>

    <section class="container-fluid us_miviva mt-5 mb-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators carousel-indicators-us">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active miviva">
                    <h2 class="my-4 w-100 text-center">VISIÓN</h2>
                    <p class="w-50 mx-auto text-center text_miviva">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sed assumenda dignissimos, deleniti earum iste maiores, aliquid repellat accusantium atque perferendis nobis, harum explicabo quae ad, voluptatum ut magnam? Dolorem?</p>
                    <p class="w-100 my-5 text-center"><img src="https://via.placeholder.com/200x200.png/ffffff/133183?text=ICONO_VISION" alt=""></p>
                </div>
                <div class="carousel-item miviva">
                    <h2 class="my-4 w-100 text-center">MISIÓN</h2>
                    <p class="w-50 mx-auto text-center text_miviva">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sed assumenda dignissimos, deleniti earum iste maiores, aliquid repellat accusantium atque perferendis nobis, harum explicabo quae ad, voluptatum ut magnam? Dolorem?</p>
                    <p class="w-100 my-5 text-center"><img src="https://via.placeholder.com/200x200.png/ffffff/133183?text=ICONO_VISION" alt=""></p>
                </div>
                <div class="carousel-item miviva">
                    <h2 class="my-4 w-100 text-center">VALORES</h2>
                    <p class="w-50 mx-auto text-center text_miviva">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sed assumenda dignissimos, deleniti earum iste maiores, aliquid repellat accusantium atque perferendis nobis, harum explicabo quae ad, voluptatum ut magnam? Dolorem?</p>
                    <p class="w-100 my-5 text-center"><img src="https://via.placeholder.com/200x200.png/ffffff/133183?text=ICONO_VISION" alt=""></p>
                </div>
            </div>
            <button class="carousel-control carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <div class="my-5"></div>

    <section class="row banner1 mt-5 my-5">
        <div class="px-4 d-sm-none d-md-block col-md-4 text-center"><hr></div>
        <div class="col-sm-12 col-md-4 text-center text">SUCURSALES</div>
        <div class="px-4 d-sm-none d-md-block col-md-4 text-center"><hr></div>
    </section>


    <section class="container-fluid mb-5">
        <div id="carouselSucur" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators carousel-indicators-us">
                <button type="button" data-bs-target="#carouselSucur" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselSucur" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row w-75 mx-auto">
                        <div class="col-6">
                            <div class="card card-services w-50 mx-auto">
                                <img src="https://via.placeholder.com/300x300.png/ffffff/133183" class="card-img-top w-75 mx-auto">
                                <div class="card-body card-body-services text-center">
                                    <h5 class="card-title text-center my-3">CENTRO URBANO</h5>
                                    <p class="card-text text-justify my-3 text-white">LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT. HIC ACCUSAMUS VOLUPTATUM.</p>
                                    <a href="#" class="btn btn-primary btn-lens text-center my-3">VER MAPA</a>
                                </div>
                            </div>
                        </div>

                         <div class="col-6">
                            <div class="card card-services w-50 mx-auto">
                                <img src="https://via.placeholder.com/300x300.png/ffffff/133183" class="card-img-top w-75 mx-auto">
                                <div class="card-body card-body-services text-center">
                                    <h5 class="card-title text-center my-3">PLAZA SAN MIGUEL</h5>
                                    <p class="card-text text-justify my-3 text-white">LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT. HIC ACCUSAMUS VOLUPTATUM.</p>
                                    <a href="#" class="btn btn-primary btn-lens text-center my-3">VER MAPA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row w-75 mx-auto">
                        <div class="col-6">
                            <div class="card card-services w-50 mx-auto">
                                <img src="https://via.placeholder.com/300x300.png/ffffff/133183" class="card-img-top w-75 mx-auto">
                                <div class="card-body card-body-services text-center">
                                    <h5 class="card-title text-center my-3">TIENDA 3</h5>
                                    <p class="card-text text-justify my-3 text-white">LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT. HIC ACCUSAMUS VOLUPTATUM.</p>
                                    <a href="#" class="btn btn-primary btn-lens text-center my-3">VER MAPA</a>
                                </div>
                            </div>
                        </div>

                         <div class="col-6">
                            <div class="card card-services w-50 mx-auto">
                                <img src="https://via.placeholder.com/300x300.png/ffffff/133183" class="card-img-top w-75 mx-auto">
                                <div class="card-body card-body-services text-center">
                                    <h5 class="card-title text-center my-3">TIENDA 4</h5>
                                    <p class="card-text text-justify my-3 text-white">LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT. HIC ACCUSAMUS VOLUPTATUM.</p>
                                    <a href="#" class="btn btn-primary btn-lens text-center my-3">VER MAPA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control carousel-control-prev" type="button" data-bs-target="#carouselSucur" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control carousel-control-next" type="button" data-bs-target="#carouselSucur" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>



    <section class="somoslens my-5">
        <p class="text-center">#SOMOSLENSVISION</p>
    </section>



@endsection

@section('modal-section')
@endsection

@section('scripts')
@endsection
