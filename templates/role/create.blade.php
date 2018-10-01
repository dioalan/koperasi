@extends('layout')

<?php use ROH\Util\Inflector; ?>


@section('modal')

 <div class="modal fade template" id="modal_template" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="../www/assets/global/img/loading-spinner-grey.gif" alt="" class="loading">
                    <span> &nbsp;&nbsp;Loading... </span>
                </div>
            </div>
        </div>
 </div>

@stop

@section('page.breadcumb.section')
    <li>
        <a href="{{ f('controller.url') }}" >{{ l('{0}', Inflector::humanize(f('controller')->getClass())) }}</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Create</span>
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
                        <span class="caption-subject font-green bold uppercase"> Create {{ l('{0}', Inflector::humanize(f('controller')->getClass())) }} </span>
                        @show
                        <!-- <span class="caption-helper">demo form...</span> -->
                    </div>
                    <!-- <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div> -->
                </div>

                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="createform" class="read">
                        <div class="form-body">
                            <div class="row">
                                <?php $i = 0 ?>
                                @foreach (f('controller')->schema() as $name => $field)
                                    @if (!$field['hidden'])
                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                
                                                {{ $entry->format($name, 'input') }}
                                                {{ $field->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel-group accordion" id="previleges">
                                        <?php $collapse =1; ?>
                                        <?php $checkbox = 0 ?>
                                        @foreach($previlege as $key => $value)
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#previleges" href="#collapse_{{ $collapse }}"> {{$key}} </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_{{ $collapse }}" class="panel-collapse in">
                                                <div class="panel-body">
                                                    <?php $count = 0 ?>
                                                    
                                                    @foreach($value as $k => $v )
                                                        @if($count % 3 == 0)
                                                            <div class="row">
                                                        @endif
                                                            <div class="col-md-4">
                                                                <div class="col-md-12"><label>{{$k}}</label></div>
                                                                <div class="col-md-12">
                                                                    <ul class="md-checkbox-list">
                                                                    
                                                                    @foreach($v as $action => $data)
                                                                        <li class="md-checkbox">
                                                                            @if($data['exists'])
                                                                                <input type="checkbox" value="{{$data['uri']}}" id="check_box_{{$checkbox}}" name="rule[]" checked  class="md-check"/>
                                                                            @else
                                                                                <input type="checkbox" value="{{$data['uri']}}"  id="check_box_{{$checkbox}}" name="rule[]" class="md-check"/>
                                                                            @endif
                                                                                
                                                                            <label for="check_box_{{$checkbox}}">
                                                                                <span class="inc"></span>
                                                                                <span class="check"></span>
                                                                                <span class="box"></span> {{$action}}</label>
                                                                            </label>
                                                                        </li>
                                                                        <?php $checkbox++; ?>
                                                                    @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <?php $count++; ?>
                                                        @if($count % 3 == 0 || count($value) == $count)
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                            <?php $collapse++; ?>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="btn-set pull-left">
                                <input type="button" value="Submit" class="btn green" onclick="$('#createform').submit ()">
                                <!-- <a href="{{ f('controller.url') }}" class="btn blue"><i class="fa fa-arrow-left"></i> Back </a> -->
                            </div>
                            <div class="pull-right">
                                <input type="reset" value="Reset" class="btn yellow-lemon" onclick="$('#createform').reset ()">
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



