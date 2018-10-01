@extends('layout')

<?php use ROH\Util\Inflector; ?>

@section('page.breadcumb.section')
    <li>
        <a href="{{ f('controller.url') }}" >{{ l('{0}', Inflector::humanize(f('controller')->getClass())) }}</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span>
            Read
        </span>
    </li>
@stop

@section('fields')

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        @section('caption')
                        <i class="icon-user font-green"></i>
                        <span class="caption-subject font-green bold uppercase"> {{ l('{0}', Inflector::humanize(f('controller')->getClass())) }}</span>
                        @show
                        <!-- <span class="caption-helper">demo form...</span> -->
                    </div>
                    
                    <!-- <div class="actions">
                        <div class="btn-group">
                            <a class="btn green btn-sm btn-outline dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Actions
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-pencil"></i> Edit </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-ban"></i> Ban </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>

                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form id="readform" class="read" class="form-vertiacal">
                        <div class="form-body">
                            <div class="row">
                                <?php $i = 0 ?>
                                @foreach (f('controller')->schema() as $name => $field)
                                    @if (!$field['hidden'])
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                {{ $entry->format($name, 'readonly') }}
                                                {{ $field->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="btn-set pull-left">
                                <a href="{{ f('controller.url', '/'.$entry['$id'].'/update') }}" class="btn green tooltips">Update</a>
                                <a href="{{ f('controller.url') }}" class="btn blue"><i class="fa fa-arrow-left"></i> Back </a>
                                 <a href="{{ URL::site('/simpanan/'.$entry['$id'].'/pdf') }}" class="btn blue"></i> Print </a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="btn red delete-popup">Delete</a>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
           
        </div>
    </div>
@stop

@section('quick.nav')
@stop



