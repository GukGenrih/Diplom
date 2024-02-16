@extends('main.admin')
@section('content')
    <div class="container">
    <div class="blocks__groups">

    @foreach($supervisors as $supervisor)
            <div class="block__group">
                <div class="teacher">
                    <p>{{($supervisor['surname'])}} {{($supervisor['name'])}} {{($supervisor['patronymic'])}}</p>
                    <p>+{{($supervisor['telephone'])}}</p>
                </div>
                <a>Редактировать</a>
                <a>Удалить</a>
            </div>
    @endforeach
    </div>
    </div>
@endsection
