@extends('main.admin')
@section('content')
    <div style="display: flex;align-items: center;align-content: center;justify-content: center;flex-direction: column; margin-top: 100px;gap: 20px;" class="container">
        <p style="width: 500px">Здесь вы можете добавить классного руководителя</p>
        <form class="student__form" style="width: 700px" action="{{ route('superCreate') }}" method="post">
            @csrf
            <div class="form__field">
                <p>Имя: </p>
                <input class="student__input" type="text" name="name">
            </div>
            <div class="form__field">
                <p>Фамилия: </p>
                <input class="student__input" type="text" name="surname">
            </div>
            <div class="form__field">
                <p>Отчество: </p>
                <input class="student__input" type="text" name="patronymic">
            </div>
            <div class="form__field">
                <p>Номер телефона: </p>
                <input class="student__input" type="text" name="telephone">
            </div>
            <button class="btn__student" >Добавить руководителя</button>
        </form>
    </div>
@endsection
