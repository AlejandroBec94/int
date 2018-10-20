
@extends('_layouts.layout')

@section('MenuHref',"/")
@section('TitlePage',"Directorio Nikken")
@section('TitleSubMenu',$Dir)


@section('content')



        @foreach($UserAreas as $Area => $Users)
            <div class="row">
                <h1 class="page-header" style="margin-left:2%;">{{ $Area }}</h1>
                @foreach($Users as $User)

                    <div class="col-md-4">

                      <!-- Profile Image -->
                      <div class="box box-primary">
                        <div class="box-body box-profile">

                          <img class="profile-user-img img-responsive img-circle" src="/fotos_intra/{{ $User['UserPhoto'] }}" style="max-height:70px;" alt="User profile picture">
                          <h3 class="profile-username text-center">{{ $User['UserName'] }}</h3>
                          <p class="text-muted text-center">{{ $User['UserJobTitle'] }}</p>
              
                        </div>
                        <!-- /.box-body -->
                      </div>
                    </div>

                @endforeach
            </div>
        @endforeach

        <!-- /.col -->
      <!-- /.row -->


@endsection
