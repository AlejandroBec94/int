<div class="container">
    <div class="panel panel-default">

        <div class="panel-heading">
            {!! Form::open(['route' => 'youtube.search', 'method' => 'POST', 'class' => 'form-inline']) !!}
            <div class="form-group">
                {!! form::label('search','Buscar')!!}
                {!! form::text('search',null,['class' => 'form-control']) !!}
                <button type="submit" class="btn btn-default">Buscar</button>
            </div>
            {!! Form::close() !!}

        </div>
        <div class="panel-body">
            <div class="row">
                @if(isset($videos))
                    @foreach($videos as $video)
                        <div class="col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <!-- Mostrmamos la fotos mediana del video -->
                                <img src="{{$video->snippet->thumbnails->medium->url}}">
                                <div class="caption">
                                    <!-- Mostrmamos el titulo del video -->
                                    <h3><a href="https://www.youtube.com/watch?v={{$video->id->videoId}}">
                                            {{$video->snippet->title}}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>