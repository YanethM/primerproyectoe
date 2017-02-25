@extends('layouts.app')

@section('contenido')
<p>Hola <b>{!! $elNombre !!}</b>{{ empty ($elCargo)?'': ' Tu cargo es '}}<b>{{$elCargo or ''}}</b></p>
@stop
