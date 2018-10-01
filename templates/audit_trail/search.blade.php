@extends('skeleton')

<?php
use ROH\Util\Inflector;
use App\Library\Pagination;

?>

<?php
$schema = array();
foreach (f('controller')->schema() as $key => $field) {
    if ($field['list-column']) {
        $schema[$key] = $field;
    }
}
?>

@section('page.breadcumb.section')
    <li>
        <span>{{ l('{0}', Inflector::humanize(f('controller')->getClass())) }}</span>
    </li>
@stop


@section('fields')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-comments font-green"></i>
                            <span class="caption-subject font-green bold uppercase">{{ l('{0}', Inflector::humanize(f('controller')->getClass())) }}</span>
                        </div>
                        <div class="actions">
                        
                            <div class="btn-group">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                @section('tools')
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                                @show
                            </div>
                        
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="btn-group">
                                        <a href="{{ f('controller.url', '/null/create') }}" id="sample_editable_1_new" class="btn sbold green"> Create
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    @section('form-search')
                                        <form action="#" class="form" id="formsearch">
                                            <div class="form-group form-md-line-input search">
                                                <div class="input-group">
                                                    </span>
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control" id="searchbar" placeholder="Search...">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                    <span class="input-group-btn btn-right">
                                                        <button type="button" class="btn" id="btn-advance">
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <div class="advance">
                                                            <div class="portlet light">
                                                                <div class="portlet-body form">
                                                                    <form role="form">
                                                                        <div class="form-body">
                                                                            <div class="form-group form-md-checkboxes">
                                                                                <label>Checkboxes</label>
                                                                                <div class="md-checkbox-list">
                                                                                    <div class="md-checkbox has-success">
                                                                                        <input type="checkbox" id="checkbox9" class="md-check">
                                                                                        <label for="checkbox9">
                                                                                            <span></span>
                                                                                            <span class="check"></span>
                                                                                            <span class="box"></span> Option 1 </label>
                                                                                    </div>
                                                                                    <div class="md-checkbox has-error">
                                                                                        <input type="checkbox" id="checkbox10" class="md-check" checked>
                                                                                        <label for="checkbox10">
                                                                                            <span></span>
                                                                                            <span class="check"></span>
                                                                                            <span class="box"></span> Option 2 </label>
                                                                                    </div>
                                                                                    <div class="md-checkbox has-warning">
                                                                                        <input type="checkbox" id="checkbox11" class="md-check">
                                                                                        <label for="checkbox11">
                                                                                            <span></span>
                                                                                            <span class="check"></span>
                                                                                            <span class="box"></span> Option 3 </label>
                                                                                    </div>
                                                                                    <div class="md-checkbox has-info">
                                                                                        <input type="checkbox" id="checkbox12" disabled class="md-check">
                                                                                        <label for="checkbox12">
                                                                                            <span></span>
                                                                                            <span class="check"></span>
                                                                                            <span class="box"></span> Disabled </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input">
                                                                                <input type="text" class="form-control" id="form_control_1" placeholder="Enter your name">
                                                                                <label for="form_control_1">Regular input</label>
                                                                                <span class="help-block">Some help goes here...</span>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input">
                                                                                <input type="text" class="form-control" id="form_control_1" placeholder="Enter your email">
                                                                                <label for="form_control_1">Input with help</label>
                                                                                <span class="help-block">Some help goes here...</span>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input has-success">
                                                                                <input type="text" class="form-control" id="form_control_1" placeholder="Success state">
                                                                                <label for="form_control_1">Success input</label>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input has-warning">
                                                                                <input type="text" class="form-control" id="form_control_1" placeholder="Warning state">
                                                                                <label for="form_control_1">Warning input</label>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input has-error">
                                                                                <input type="text" class="form-control" id="form_control_1" placeholder="Error state">
                                                                                <label for="form_control_1">Error input</label>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input has-info">
                                                                                <input type="text" class="form-control" id="form_control_1" placeholder="Info state">
                                                                                <label for="form_control_1">Info input</label>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input has-info">
                                                                                <select class="form-control" id="form_control_1">
                                                                                    <option value=""></option>
                                                                                    <option value="1">Option 1</option>
                                                                                    <option value="2">Option 2</option>
                                                                                    <option value="3">Option 3</option>
                                                                                    <option value="4">Option 4</option>
                                                                                </select>
                                                                                <label for="form_control_1">Dropdown sample</label>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input">
                                                                                <textarea class="form-control" rows="3" placeholder="Enter more text"></textarea>
                                                                                <label for="form_control_1">Textarea input</label>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input has-error">
                                                                                <input type="text" class="form-control" disabled id="form_control_1" placeholder="Disable">
                                                                                <label for="form_control_1">Disabled</label>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input has-error">
                                                                                <input type="text" class="form-control" readonly value="You can't edit this" id="form_control_1">
                                                                                <label for="form_control_1">Readonly</label>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input">
                                                                                <div class="form-control form-control-static"> email@example.com </div>
                                                                                <label for="form_control_1">Static Control</label>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input has-info">
                                                                                <input type="text" class="form-control input-sm" id="form_control_1" placeholder=".input-sm">
                                                                                <label for="form_control_1">Small input</label>
                                                                            </div>
                                                                            <div class="form-group form-md-line-input has-info">
                                                                                <input type="text" class="form-control input-lg" id="form_control_1" placeholder=".input-lg">
                                                                                <label for="form_control_1">Large input</label>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <button type="button" class="btn blue">Submit</button>
                                                                            <button type="button" class="btn default btn-cancel">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                    <span class="input-group-btn btn-right search-btn">
                                                        <button class="btn blue" type="button"><i class="icon-magnifier"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    @show
                                </div>
                            </div>
                            <div class="table-fix">
                                <div class="table-scrollable search-table">
                                    <table class="table table-bordered table-hover table-checkable order-column dataTable no-footer fixed-tail" id="sample_1">
                                        @section('table.head')
                                        <thead>
                                            <tr>
                                                @if (count($schema))
                                                        <th>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="group-checkable search-checkbox" data-set="#sample_1 .checkboxes" />
                                                                <span></span>
                                                            </label>
                                                        </th>
                                                        @foreach ($schema as $key => $field)
                                                        <th>
                                                            <a href="{{{ f('controller.url', '?!sort['.$key.']='.(@$_GET['!sort'][$key] == 1 ? -1 : 1)) }}}">{{ $field['label'] }} </a>
                                                        </th>
                                                        @endforeach
                                                        <th> Actions </th>
                                                @else
                                                    <th>Data</th>
                                                @endif
                                            </tr>
                                            <!-- <tr>
                                                <th>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th> Username </th>
                                                <th> Email </th>
                                                <th> Status </th>
                                                <th> Joined </th>
                                                <th> Actions </th>
                                            </tr> -->
                                        </thead>
                                        @show
                                        <tbody>
                                            @section('table.body')
                                                @foreach ($entries as $entry)
                                                    <?php $i = 0 ?>
                                                    <tr>
                                                        @if (count($schema))
                                                                <td>
                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                        <input type="checkbox" class="checkboxes search-checkbox" value="{{$entry['$id']}}" />
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                            @foreach ($schema as $name => $field)
                                                                <td>
                                                                    @if($i++ === 0)
                                                                        <a href="{{ f('controller.url', '/'.$entry['$id']) }}">{{ substr($field->format('plain', $entry[$name], $entry), 0, 48) }}</a>
                                                                    @else
                                                                        <?php try { $string = strip_tags($entry->format($name)); echo substr($string, 0, 48); } catch(\Exception $e) { echo '';} ?>
                                                                    @endif
                                                                </td>
                                                            @endforeach
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                            <i class="fa fa-angle-down"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu pull-left search-action" role="menu">
                                                                            <li>
                                                                                <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="delete-popup">
                                                                                    <i class="icon-trash"></i> Delete </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{ f('controller.url', '/'.$entry['$id'].'/update') }}">
                                                                                    <i class="icon-pencil"></i> Edit </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                        @else
                                                            <td><a href="{{ f('controller.url', '/'.$entry['$id']) }}">{{ $entry->format() }}</a></td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            @show


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <tr>
                            <div>
                                @if($entries->count(true))

                                            @section('pagination')
                                                <?php
                                                    $pagination = new Pagination($entries);
                                                    echo $pagination->paginate();
                                                ?>
                                            @show

                                @endif
                                
                                
                            </div>
                        </tr>
                    </div>
                </div>
            

        </div>
    </div>
@stop

