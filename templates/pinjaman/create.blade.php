@extends('layout')

<?php use ROH\Util\Inflector; ?>



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
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        {{ $entry->format('nik', 'input') }}
                                        {{ f('controller')->schema()['nik']->label() }}
                                        <div class="form-control-focus"> </div>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        {{ $entry->format('jumlah_pinjam', 'input') }}
                                        {{ f('controller')->schema()['jumlah_pinjam']->label() }}
                                        <div class="form-control-focus"> </div>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        {{ $entry->format('tenor', 'input') }}
                                        {{ f('controller')->schema()['tenor']->label() }}
                                        <div class="form-control-focus"> </div>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        {{ $entry->format('biaya_adm', 'input') }}
                                        {{ f('controller')->schema()['biaya_adm']->label() }}
                                        <div class="form-control-focus"> </div>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        {{ $entry->format('ket', 'input') }}
                                        {{ f('controller')->schema()['ket']->label() }}
                                        <div class="form-control-focus"> </div>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        {{ $entry->format('tanggal', 'input') }}
                                        {{ f('controller')->schema()['tanggal']->label() }}
                                        <div class="form-control-focus"> </div>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="hidden" name="status" value="Pinjaman">
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



