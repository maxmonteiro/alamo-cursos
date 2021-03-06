@extends('layouts.main')

@section('content')
<h1>Cursos</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Cód.</th>
            <th scope="col">Nome</th>
            <th scope="col">Carga horária</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
        <tr>
            <th scope="row">{{ $course->id }}</th>
            <td>{{ $course->name }}</td>
            <td>{{ $course->workload }}</td>
            <td>
                <a href="{{ route('course.show',$course->id)}}">Acessar curso</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection