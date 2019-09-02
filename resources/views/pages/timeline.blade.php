@extends('layouts/app')

@section('content')
<<<<<<< Updated upstream
    <div class="contenedor_publicaciones">
      @foreach ($imagenes as $imagen)
        <div class="publicacion">
=======
    <div class="publicaciones_timeline">


      @foreach ($imagenes as $imagen)



        <div class="publicaciones_timeline">
>>>>>>> Stashed changes
            <img src="{{ route('user.posts', ['user' => $imagen->users->nick, 'filename' => $imagen->image_path]) }}" />
            <!-- <div class="details">
              {{ $imagen->users->name }}
            </div>
             Link para iconos
            <div class="parte_negra">
              <ul>
                <li class="comentar"><a href=""><i class="material-icons">comment</i></a></li>
                <li class="likear"><i class="material-icons">thumb_up</i></li>
                <li class="compartir"><div class="sharethis-inline-share-buttons"></div></li>
              </ul>
            </div>
             -->
             <div class="texto_publicacion">
               <p class= usuario_publicacion>{{ $imagen->users->name }}</p>
               <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
               <div class="parte_negra">
                 <ul>
                   <li class="comentar"><i class="material-icons">comment</i></li>
                   <li class="likear"><i class="material-icons">thumb_up</i></li>
                   <li class="compartir"><div class="sharethis-inline-share-buttons"></div></li>
                 </ul>
               </div>
             </div>
          </div>
      @endforeach


    </div>
@endsection
