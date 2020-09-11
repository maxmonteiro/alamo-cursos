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
        <tr>
            <th scope="row">1</th>
            <td>Técnico em Informática</td>
            <td>1200</td>
            <td>
                <a href="#">Acessar curso</a>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Análise e Desenvolvimento de Sistemas</td>
            <td>2200</td>
            <td>
                <a href="#">Acessar curso</a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Enfermagem</td>
            <td>3200</td>
            <td>
                <a href="#">Acessar curso</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection