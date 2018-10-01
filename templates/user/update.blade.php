@extends('layout')

<?php use ROH\Util\Inflector; ?>

@section('page.breadcumb.section')
    <li>
        <a href="{{ f('controller.url')}}" >{{ l('{0}', Inflector::humanize(f('controller')->getClass())) }}</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Update</span>
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
                        <span class="caption-subject font-green bold uppercase"> Update {{ l('{0}', Inflector::humanize(f('controller')->getClass())) }}</span>
                        @show
                        <!-- <span class="caption-helper">demo form...</span> -->
                    </div>
                    
                </div>

                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="updateform" class="read">
                        <div class="form-body">
                            <div class="row">
                                        <?php if ($_SESSION['user']['role'][0] == '1') : ?>
                            
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                {{ $entry->format('nik', 'input') }}
                                                {{ f('controller')->schema()['nik']->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                {{ $entry->format('first_name', 'input') }}
                                                {{ f('controller')->schema()['first_name']->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                {{ $entry->format('last_name', 'input') }}
                                                {{ f('controller')->schema()['last_name']->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                          <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                {{ $entry->format('username', 'input') }}
                                                {{ f('controller')->schema()['username']->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                          <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                {{ $entry->format('email', 'input') }}
                                                {{ f('controller')->schema()['email']->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                          <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                {{ $entry->format('password', 'input') }}
                                                {{ f('controller')->schema()['password']->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                          <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                 {{ $entry->format('birthday', 'input') }}
                                                {{ f('controller')->schema()['birthday']->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                          <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                {{ $entry->format('gender', 'input') }}
                                                {{ f('controller')->schema()['gender']->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                          <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                {{ $entry->format('mobile_phone', 'input') }}
                                                {{ f('controller')->schema()['mobile_phone']->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                          <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                 {{ $entry->format('address', 'input') }}
                                                {{ f('controller')->schema()['address']->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                {{ $entry->format('role', 'input') }}
                                                {{ f('controller')->schema()['role']->label() }}
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <?php endif ?>

                                        <?php if ($_SESSION['user']['role'][0] == '2') : ?>
                                            <div class="col-md-6">
                                                <div class="form-group form-md-line-input">
                                                    {{ $entry->format('nik', 'input') }}
                                                    {{ f('controller')->schema()['nik']->label() }}
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-md-line-input">
                                                    {{ $entry->format('first_name', 'input') }}
                                                    {{ f('controller')->schema()['first_name']->label() }}
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group form-md-line-input">
                                                    {{ $entry->format('last_name', 'input') }}
                                                    {{ f('controller')->schema()['last_name']->label() }}
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group form-md-line-input">
                                                    {{ $entry->format('username', 'input') }}
                                                    {{ f('controller')->schema()['username']->label() }}
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group form-md-line-input">
                                                    {{ $entry->format('email', 'input') }}
                                                    {{ f('controller')->schema()['email']->label() }}
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group form-md-line-input">
                                                    {{ $entry->format('password', 'input') }}
                                                    {{ f('controller')->schema()['password']->label() }}
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group form-md-line-input">
                                                     {{ $entry->format('birthday', 'input') }}
                                                    {{ f('controller')->schema()['birthday']->label() }}
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group form-md-line-input">
                                                    {{ $entry->format('gender', 'input') }}
                                                    {{ f('controller')->schema()['gender']->label() }}
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group form-md-line-input">
                                                    {{ $entry->format('mobile_phone', 'input') }}
                                                    {{ f('controller')->schema()['mobile_phone']->label() }}
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group form-md-line-input">
                                                     {{ $entry->format('address', 'input') }}
                                                    {{ f('controller')->schema()['address']->label() }}
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-md-line-input">
                                                    {{ f('controller')->schema()['role']->label() }}
                                                    {{ $entry->format('role', 'readonly') }}
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                       
                              
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="caption pull-left">
                                <input type="button" value="Submit" class="btn green" onclick="$('#updateform').submit ()">
                                <!-- <a href="javascript:history.back()" class="btn blue"><i class="fa fa-arrow-left"></i> Back </a> -->
                            </div>
                            <div class="btn-set pull-right">
                                <input type="reset" value="Reset" class="btn yellow-lemon" onclick="$('#updateform').reset ()">
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



