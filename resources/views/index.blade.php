@extends('main.admin')
@section('content')
    <div class="container">
        <div class="blocks__search__filter">
            <div class="block__search">
                <input type="text" class="search" name="searcher" id="">
                <div class="search__icon">
                    <img style="width: 35px;height:35px" src="{{ asset('images/image 1search.png')}}" alt="">
                </div>
            </div>

            <div class="block__search">
                <input type="text" value="Применить фильтры" class="search" name="filter" id="">
                <div class="search__icon">
                    <img style="width: 35px;height: 35px" src="{{ asset('images/image 2filter.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="blocks__groups">
            @foreach($groups as $group)
                <div class="block__group">
                    <div class="text__groups">
                        <p>{{$group['title']}}</p>
                        <p>Студентов: {{$group->students->count()}}</p>
                        @if($group->taloncounter() == $group->taloncountertrue())
                            <p>Получающих талоны: {{$group->taloncountertrue()}}</p>
                            <p>Пропущенные справки: Нет</p>
                        @else
                            <p class="problem">Получающих талоны: {{$group->taloncountertrue()}}
                                ({{$group->taloncounter()}})</p>
                            <p class="problem">Пропущенные
                                справки: {{$group->taloncounter() - $group->taloncountertrue()}}</p>
                        @endif
                        @if($group->stipendcounter() == $group->stipendcountertrue())
                            <p>Получающих Стипендию: {{$group->stipendcountertrue()}}</p>
                        @else
                            <p class="problem">Получающих Стипендию: {{$group->stipendcountertrue()}}
                                ({{$group->stipendcounter()}})</p>
                        @endif
                    </div>
                    <div class="icons__groups">
                        <a href="{{route('group',['group' => $group])}}"><img src="{{ asset('images/Framemini-icons.svg')}}" alt="Открыть"></a>
                        <a href="#"><img src="{{ asset('images/Framemini-icons-1.svg')}}" alt="Печатать"></a>
                        <a href="#"><img src="{{ asset('images/Framemini-icons-2.svg')}}" alt="Удалить"></a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
