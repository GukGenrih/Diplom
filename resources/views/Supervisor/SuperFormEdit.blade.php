@extends('main.admin')
@section('content')
    <div style="display: flex;align-items: center;align-content: center;justify-content: center;flex-direction: column; margin-top: 100px;gap: 20px;" class="container">
        <p style="width: 500px">Здесь вы можете отредактировать классного руководителя</p>
        <form class="student__form" style="width: 700px" action="{{ route('superCreate') }}" method="post">
            @csrf
            <div class="form__field">
                <p>Имя: </p>
                <input class="student__input" type="text" value="{{$supervisor['name']}}" name="name">
            </div>
            <div class="form__field">
                <p>Фамилия: </p>
                <input class="student__input" type="text" value="{{$supervisor['surname']}}" name="surname">
            </div>
            <div class="form__field">
                <p>Отчество: </p>
                <input class="student__input" type="text" value="{{$supervisor['patronymic']}}" name="patronymic">
            </div>
            <div class="form__field">
                <p>Номер телефона: </p>
                <input class="student__input" type="text" value="{{$supervisor['telephone']}}" name="telephone">
            </div>
            <button class="btn__student" >Изменить руководителя</button>
        </form>
    </div>
@endsection
