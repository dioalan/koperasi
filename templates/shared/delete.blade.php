<form method="post" id="deleteRecord" action="{{{ URL::current() }}}">
    <h1></h1>
    <p>Are you sure want to delete this record?</p>
    <button type="reset" class="btn blue cancel" onclick="$.fn.popup().close(); return false;">
        <i class="fa fa-reply"></i>
        <span> Cancel </span>
    </button>
    <button type="button" class="btn red delete" onclick="$('#deleteRecord').submit ();">
        <i class="fa fa-trash-o"></i>
        <span> Delete </span>
    </button>
</form>