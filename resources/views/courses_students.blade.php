@extends('layouts.main')

@section('content')
<h1>{{ $course->name }} <small>- Alunos</small></h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Cód.</th>
            <th scope="col">Nome</th>
            <th scope="col">Matrícula</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($course->students as $student)
        <tr>
            <th scope="row">{{ $student->id }}</th>
            <td>{{ $student->name }}</td>
            <td>{{ $student->enrollment }}</td>
            <td>
                <a href="/course/{{ $course->id }}/certificate/{{ $student->id }}">Certificado</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection