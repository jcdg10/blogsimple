@extends('blog.template.master')


@section('content')

<!-- Page Header -->
  <header class="masthead" style="background-image: url('{{ asset('website/img/post-bg.jpg') }}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $entrada->titulo }}</h1>
            <span class="meta">Autor
              <a href="#">{{ $entrada->name }}</a>
               el 
               @php
                 setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish'); 
                 $date = $date = str_replace("/","-",$entrada->created_at);
                 echo strftime('%d %B %Y',strtotime($date)); 
               @endphp
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          @php
           echo $entrada->contenido;
          @endphp
      </div>
    </div>
  </div>
  </article>


  <br><br>
<div class="container">
  <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h3>Comentarios</h3>
      </div>
  </div>
</div>
<br>

<div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('message') }}
                    </div>
                @endif

                @if(Session::has('delete-message'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('delete-message') }}
                    </div>
                @endif
            </div>
        </div>
</div>

    @foreach($comentarios as $c)
    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          @php echo $c->comentario; @endphp
      </div>
      <span class="col-lg-8 col-md-10 mx-auto meta">Autor
              <a href="#">{{ $c->name }}</a>
               el 
               @php
                 setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish'); 
                 $date = $date = str_replace("/","-",$c->created_at);
                 echo strftime('%d %B %Y',strtotime($date)); 
               @endphp
      </span>
      @php if($c->users_id == Auth::id()){ @endphp
      <div class="col-lg-8 col-md-10 mx-auto">
        {!! Form::open(['route' => ['comentarios.destroy', $c->comentarios_id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                        {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!}
                                        {!! Form::close() !!}
      </div>
      @php } @endphp
    </div>
    </div>
    <br>
    @endforeach

    <span id="agregarComentario">

    </span>

    @if (Auth::check())
    <br><br>
    <div class="container">
         <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
             {!! Form::open(['route' => 'comentarios.store']) !!}

              <div class="form-group">
                  {!! Form::label('Comentario') !!}
                  {!! Form::textarea('comentario', null, ['class' => 'form-control', 'placeholder' => 'Comentario','required' => 'true']) !!}
              </div>

              <input type="hidden" name="entradas_id" id="entradas_id" value="{{ $entrada->entradas_id }}">

              {!! Form::submit('Crear entrada',['class' => 'btn btn-sm btn-primary']) !!}
              {!! Form::close() !!}  
          </div>
        </div>
      </div>
    @endif

@endsection()