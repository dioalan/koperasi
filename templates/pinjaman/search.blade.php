@extends('layout')

<?php
use ROH\Util\Inflector;
use App\Library\Pagination;
use App\Schema\DatePicker;
use App\Schema\SelectTwoReference;
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
                                <?php
                                    //memanggil fungsi yang ada di dalam app/controller
                                    $url = f('controller.url', '/null/export_excel');
                                    $get = $_GET;
                                    //menjalankan fungsi export berdasarkan search / halaman yg ditampilkan
                                    if (isset($get)) {
                                        $data_get = array();
                                        foreach ($get as $key => $value) {
                                            $data_get[] = $key . '=' . $value;
                                        }
                                        //implode adalah ?
                                        $url = f('controller.url', '/null/export_excel?'.implode('&', $data_get));
                                    }
                                ?>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="{{ $url }}">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                   <!--  <li>
                                        <a href="{{ f('controller.url', '/null/export_csv') }}">
                                            <i class="fa fa-file-excel-o"></i> Export to Csv </a>
                                    </li> -->
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
                                        <a href="{{ f('controller.url', '/null/create') }}" id="sample_editable_1_new" class="btn sbold blue"> Create
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    @section('form-search')
                                        <div class="form-group form-md-line-input search">
                                            <div class="input-group">
                                                <form action="#" class="form tamu" id="formsearch">
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control" id="searchbar" placeholder="Search...">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </form>
                                                <span class="input-group-btn btn-right">
                                                    <button type="button" class="btn" id="btn-advance">
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <div class="advance">
                                                        <div class="portlet light">
                                                            <div class="portlet-body form">
                                                                <form role="form" id="advancesearch">
                                                                    <div class="form-body">
                                                                        <div class="form-group form-md-line-input">
                                                                            <input disabled="" type="text" class="form-control" id="form_control_1" >
                                                                        </div>
                                                                        <div class="form-group form-md-line-input">
                                                                            {{ Datepicker::create('$created_time!gte')->format('input', $app->request->get('$created_time!gte')) }}
                                                                            <label for="form_control_1">Interval Date</label>
                                                                        </div>
                                                                        <div class="form-group form-md-line-input">
                                                                            {{ Datepicker::create('$created_time!lte')->format('input', $app->request->get('$created_time!lte')) }}
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <button type="submit" class="btn blue" onclick="$('#advancesearch').submit()">Submit</button>
                                                                        <button type="button" id="btnclear" class="btn default btn-cancel">Clear All</button>
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
                                    @show
                                </div>
                            </div>
                            <div class="table-fix">
                                <div class="table-scrollable search-table">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer fixed-tail" id="sample_1">
                                        @section('table.head')
                                        <thead>
                                            <tr>
                                                @if (count($schema))
                                                        <th>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
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
                                                                        <?php try { $string = strip_tags($entry->format($name)); echo substr($string, 0, 48); } catch(\Exception $e) { echo 'xxx';  } ?>
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
                                                                                <a href="{{ f('controller.url', '/'.$entry['$id'].'/update') }}">
                                                                                    <i class="icon-pencil"></i> Edit </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="delete-popup">
                                                                                    <i class="icon-trash"></i> Delete </a>
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
                                <div class="pull-left pagination">
                                    <a href="{{f('controller.url','/:mutliid/delete')}}" class="btn red btn-multi-delete"> Delete <!-- <i class="fa fa-trash"></i> --></a>
                                    <a href="{{ URL::site('/pinjaman/laporan_pinjaman/export') }}" class="btn blue"></i> Print </a>

                                </div>
                                
                            </div>
                        </tr>
                    </div>
                </div>
            

        </div>
    </div>
@stop

