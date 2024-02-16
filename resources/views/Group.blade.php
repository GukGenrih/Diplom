@extends('main.admin')
@section('content')
    <div class="container">
            <div class="blocks__groups">
                @foreach($group->students()->with('document')->get() as $student)
                    @if($student->document != null)
                        <div class="block__group">
                            <div class="text__groups">
                                <p>{{$student['name']}}</p>
                                @if($student->document['doc'] == 0)
                                    <p>Талоны за месяц: <img src="{{ asset('images/Framebad.svg')}}"> </p>
                                @else
                                    <p>Талоны за месяц: <img src="{{ asset('images/image 3good.svg')}}"></p>
                                @endif
                                @if(\Carbon\Carbon::createFromFormat('Y-m-d', $student->document['doc_maked'])->addMonth(6)>\Carbon\Carbon::now())
                                    <p>Срок справки: {{\Carbon\Carbon::createFromFormat('Y-m-d', $student->document['doc_maked'])->addMonth(6)->format('Y.m.d')}}</p>
                                @else
                                    <p class="problem">Срок справки: {{\Carbon\Carbon::createFromFormat('Y-m-d', $student->document['doc_maked'])->addMonth(6)->format('Y.m.d')}}</p>
                                @endif
                            </div>
                            <div class="icons__groups">
                                <a href="{{route('student',['id' => $student['id']])}}"><img src="{{ asset('images/Framemini-icons.svg')}}" alt="Открыть"></a>
                                <a href="#"><img src="{{ asset('images/Framemini-icons-1.svg')}}" alt="Печатать"></a>
                                <a href="#"><img src="{{ asset('images/Framemini-icons-2.svg')}}" alt="Удалить"></a>
                            </div>
                        </div>
                    @else
                        <div class="block__group locked">
                            <div class="text__groups">
                                <p>{{$student['name']}}</p>
                                    <p>Талоны за месяц: <img src="{{ asset('images/Framebad.svg')}}"> </p>
                                    <p class="problem">Срок справки: Нет</p>
                            </div>
                            <div class="icons__groups">
                                <a href="{{route('student',['id' => $student['id']])}}"><img src="{{ asset('images/Framemini-icons.svg')}}" alt="Открыть"></a>
                                <a href="#"><img src="{{ asset('images/Framemini-icons-1.svg')}}" alt="Печатать"></a>
                                <a href="#"><img src="{{ asset('images/Framemini-icons-2.svg')}}" alt="Удалить"></a>
                            </div>
                        </div>
                    @endif

                @endforeach
            </div>
    </div>
@endsection
