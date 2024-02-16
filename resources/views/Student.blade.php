@extends('main.admin')
@section('content')
    <div style="display: flex;align-items: center;align-content: center;justify-content: center;flex-direction: row;gap: 120px" class="container">
    <div class="info">
        <div class="info__student">
            <div class="student__text">
                <p>Группа: {{($student->group['title'])}}</p>
                <p>{{$student['surname']}} {{$student['name']}} {{$student['patronymic']}}</p>
@if($student->document!=null)
                    @if(\Carbon\Carbon::createFromFormat('Y-m-d', $student->document['doc_maked'])->addMonth(6)>\Carbon\Carbon::now())
                    <p>Дата получения справки: {{$student->document['doc_maked']}}</p>
                    <p>Дата окончания справки: {{\Carbon\Carbon::createFromFormat('Y-m-d', $student->document['doc_maked'])->addMonth(6)->format('Y-m-d')}}</p>
                    @else
                        <p class="problem">Дата получения справки: {{$student->document['doc_maked']}}</p>
                        <p class="problem">Дата окончания справки: {{\Carbon\Carbon::createFromFormat('Y-m-d', $student->document['doc_maked'])->addMonth(6)->format('Y-m-d')}}</p>
                    @endif
                @else
                <p>Студент не получал талоны</p>
                @endif
            </div>
            <div class="student__actions">
                <a href="#"><img src="{{ asset('images/Framemini-icons-1.svg')}}" alt="Печатать"></a>
                <a href="#"><img src="{{ asset('images/Framemini-icons-2.svg')}}" alt="Удалить"></a>
            </div>
        </div>
            <div class="teacher">
                <p>Классный руководитель:</p>
                <p>{{($student->supervisor['surname'])}} {{($student->supervisor['name'])}} {{($student->supervisor['patronymic'])}}</p>
                <p>+{{($student->supervisor['telephone'])}}</p>
            </div>
    </div>
        <div class="edit">
            <form class="student__form" action="" method="post">
                @csrf
                <div class="form__field">
                    <p>Имя: </p>
                    <input class="student__input" type="text" name="name" value="{{$student['name']}}">
                </div>

                <div class="form__field">
                    <p>Фамилия: </p>
                    <input class="student__input" type="text" name="name" value="{{$student['surname']}}">
                </div>

                <div class="form__field">
                    <p>Отчество: </p>
                    <input class="student__input" type="text" name="name" value="{{$student['patronymic']}}">
                </div>
                <button class="btn__student" > Обновить данные студента </button>
            </form>
            <form class="student__form" action="" method="post">
                @csrf
                @if($student->document!=null)
                <div class="form__field">
                    <p>Дата получения справки </p>
                    <input class="student__input" type="text" name="name" value="{{$student->document['doc_maked']}}">
                </div>

                <div class="form__field">
                    <p>Дата окочнания справки: </p>
                    <input class="student__input" type="text" name="name" value="{{\Carbon\Carbon::createFromFormat('Y-m-d', $student->document['doc_maked'])->addMonth(6)->format('Y-m-d')}}">
                </div>
                @else
                    <div class="form__field">
                        <p>Дата получения справки </p>
                        <input class="student__input" type="text" name="name" value="">
                    </div>

                    <div class="form__field">
                        <p>Дата окочнания справки: </p>
                        <input class="student__input" type="text" name="name" value="">
                    </div>
                @endif
                <button class="btn__student" > Обновить данные Справки </button>
            </form>
        </div>
    </div>
@endsection

