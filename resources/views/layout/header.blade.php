<div class="container-fluid bg_navbar w-100 d-flex flex-row">
   <p class="w-50 mt-4">
      <img src="{{ env('APP_URL') }}/assets/images/header/logo.png" alt="Logo" class="logo_nav" width="100px">
      <img src="{{ env('APP_URL') }}/assets/images/header/logo_text.png" alt="Logo Text" class="logo_nav" width="150px">
   </p>
   <p class="w-50 mt-4 text-end">
      <img class="mx-1" src="{{ env('APP_URL') }}/assets/images/header/wa.png" alt="WhatsApp" width="75px">
      <img class="mx-1" src="{{ env('APP_URL') }}/assets/images/header/face.png" alt="Facebook" width="75px">
      <img class="mx-1" src="{{ env('APP_URL') }}/assets/images/header/insta.png" alt="Instagram" width="75px">
   </p>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-vision">
   <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav w-100">
            <li class="nav-item w-25 text-center">
               <a class="nav-link font-nav v-color pointer {{ $active == 'index' ? 'active_nav' : '' }}" href="{{ URL::route('index') }}">INICIO</a>
            </li>
            <li class="nav-item w-25 text-center">
               <a class="nav-link font-nav v-color pointer {{ $active == 'us' ? 'active_nav' : '' }}" href="{{ URL::route('us') }}">NOSOTROS</a>
            </li>
            <li class="nav-item w-25 text-center">
               <a class="nav-link font-nav v-color pointer {{ $active == 'services' ? 'active_nav' : '' }}" href="#">SERVICIOS</a>
            </li>
            <li class="nav-item w-25 text-center">
               <a class="nav-link font-nav v-color pointer {{ $active == 'contact' ? 'active_nav' : '' }}" href="#">CONTACTO</a>
            </li>
         </ul>
      </div>
   </div>
</nav>

