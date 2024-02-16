@extends('main.admin')
@section('content')
    <div style="display: flex;align-items: center;align-content: center;justify-content: center;flex-direction: column; margin-top: 100px;gap: 20px;" class="container">
        <p style="width: 500px">Не забудьте: если вам нужен новый классный руководитель, сначала добавьте его</p>
        <form class="student__form" style="width: 700px" action="" method="post">
            @csrf
            <div class="form__field">
                <p>Название: </p>
                <input class="student__input" type="text" name="title">
            </div>
                <select name="super_id" class="form__section">
                   @foreach($supervisors as $sp)
                       <option value="{{ $sp['id']}}">{{$sp['name']}} {{$sp['surname']}} {{$sp['patronymic']}}</option>
                   @endforeach
                </select>
            <button class="btn__student" > Создать группу </button>
        </form>
    </div>
@endsection
