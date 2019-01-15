@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   {!!Form::open(['route'=>'home.store','files'=>true])!!}
                        <div class="form-group">
                             <label >Название статьи</label>
                             <input type="text" name = "title" class="form-control" placeholder="Введите название статьи"></br>
                             <input type="hidden" name = "user_id" value = "{{Auth::user()->id}}">
                             <input type="hidden" name = "user_name" value = "{{Auth::user()->name}} ">
                             <textarea name="description"></textarea>
                             </div>
                            <input name="image"  type="file"></br><hr>
                            <button type="submit" class="btn btn-success">Отправить</button>
                   {!!Form::close()!!}
                   @foreach($posts as $post)
                        <img class="card-img-top" src="{{asset('/storage/'.$post->image)}}">
                   @endforeach
                   
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
