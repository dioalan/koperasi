@extends('role/create')

<?php use ROH\Util\Inflector; ?>

@section('pagetitle')
    {{ l('Update  {0}', Inflector::humanize(f('controller')->getClass())) }}
@stop


@section('page.breadcumb.section')
    <li>
        <a href="{{ f('controller.url') }}" >{{ l('{0}', Inflector::humanize(f('controller')->getClass())) }}</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Update</span>
    </li>
@stop



@section('caption')
<i class="icon-user font-green"></i>
<span class="caption-subject font-green bold uppercase"> Update {{ l('{0}', Inflector::humanize(f('controller')->getClass())) }} </span>
@stop
