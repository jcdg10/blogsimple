@extends('blog.template.master')

@section('content')
<!-- Page Header -->
  <header class="masthead" style="background-image: url({{ asset('website/img/home-bg.jpg') }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Blog</h1>
            <span class="subheading">Lic. Julio César Delgado García</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      	@foreach($entradas as $entrada)
	        <div class="post-preview">
	          <a href="{{ url('entrada/'. $entrada->entradas_id) }}">
	            <h2 class="post-title">
	             {{ $entrada->titulo }}
	            </h2>
	            <h3 class="post-subtitle">
                @php
                 echo $entrada->contenido;
                @endphp
	            </h3>
	          </a>
	          <p class="post-meta">Autor
	            <a href="#">{{ $entrada->name }}</a>
	            el 
              @php
                 setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish'); 
                 $date = $date = str_replace("/","-",$entrada->created_at);
                 echo strftime('%d %B %Y',strtotime($date)); 
              @endphp
            </p>
	        </div>
	        <hr>
        @endforeach
        <!-- Pager -->
        <div class="clearfix mt-4">
                    {{ $entradas->links() }}
        </div>
      </div>
    </div>
  </div>

@endsection()