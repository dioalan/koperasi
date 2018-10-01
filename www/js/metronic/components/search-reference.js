var SearchReference = function() {

    return {
        init: function(obj = null) {
            var element = $('.searchreference');
            var that = this;
            if (obj) {
                element = $(obj).find('.searchreference');
            }

            element.each(function() {
                var btnsearch = $(this).find('button.btn-search');
                var btnclear = $(this).find('button.btn-clear');
                var dataUrl = $(this).data('url');
                var newthat = this;
                var $field = $(this).data('field');
                var searchform = that.templateform($field);

                var labelkey = { label: $(this).data('label'), key: $(this).data('key') };

                btnsearch.popup({
                    content: searchform,
                    classContent: 'search-reference',
                    afterLoad: function() {
                        $(searchform).find('input').val('');
                        $(searchform).find('tbody').empty();

                        that.searchquery(searchform, dataUrl, { field: $field, labelkey: labelkey });

                        $(searchform).on('click', 'a', function(e) {
                            e.preventDefault();

                            $(newthat).find('input[type="text"]').val($(this).parents('tr').data('label'));
                            $(newthat).find('input[type="hidden"]').val($(this).parents('tr').data('value'));

                            $.fn.popup().close();
                        });

                        $(searchform).on('click', 'a', function(e) {
                            e.preventDefault();

                            var dataEntry = JSON.stringify($(this).parents('tr').data('entry'));

                            $(newthat).find('input[type="text"]').val($(this).parents('tr').data('label'));
                            $(newthat).find('input[type="hidden"]').attr('data-entry', dataEntry);
                            $(newthat).find('input[type="hidden"]').val($(this).parents('tr').data('value')).trigger('change');
                            $(newthat).addClass('selected');

                            $.fn.popup().close();
                        });
                    }
                });

                btnclear.click(function(e) {
                    $(newthat).find('input[type="text"]').val('');
                    $(newthat).find('input[type="hidden"]').val('');
                    $(newthat).removeClass('selected');
                });

            });

        },

        templateform: function($field) {

            var dom = document.createElement('div');

            dom.className = 'portlet box blue';
            var body = '<div class="portlet-title">' +
                '<div class="caption">' +
                '<i class="fa fa-list"></i>Product Data</div>' +
                '</div>' +
                '<div class="portlet-body">' +
                '<div class="row"><div class="col-md-12">' +
                '<input class="input-search form-control" name="name" placeholder="Search" autocomplete="off"/>' +
                '</div> </div>' +
                '<div class="row"><div class="table-responsive col-md-12">' +
                '<table class="table table-bordered table-productreference">' +
                '<thead>' +
                '<tr></tr>' +
                '</thead>' +
                '<tbody>' +
                '</tbody>' +
                '</table>' +
                '</div></div>' +
                '</div>';


            dom.innerHTML = body;

            for (var key in $field) {
                $(dom).find('thead tr').append('<th>' + $field[key] + '</th>')

            }
            $(dom).find('thead tr').append('<th>action</th>');


            return dom;
        },

        searchquery: function(templateform, dataUrl, $attributes) {
            var inputsearch = $(templateform).find('input');
            var $field = $attributes.field;

            inputsearch.on('change', function(e) {
                var valquery = $(this).val();
                var keyquery = $(this).attr('name');
                var query = { '!include': 1 }

                if (valquery != '') {
                    query['!search'] = valquery;
                }
                console.log(dataUrl);
                console.log(query);
                $.ajax({
                    type: 'GET',
                    url: dataUrl,
                    data: query,
                    success: function(data) {
                        console.log(data);
                        if (data.entries.length == 0) {
                            return;
                        }
                        $(templateform).find('tbody').empty();

                        $.each(data['entries'], function(key, value) {
                            var dataEntry = JSON.stringify(value);

                            domdata = "<tr data-value='" + value[$attributes.labelkey.key] + "' data-label='" + value[$attributes.labelkey.label] + "' data-entry='" + dataEntry + "'>";

                            for (var key in $attributes.field) {
                                domdata += "<td>" + value[key] + "</td>";
                            }

                            domdata += "<td><a href='javascript:;' class='btn success btn-info'>choose</a></td></tr>";

                            $(templateform).find('tbody').append(domdata);
                        });
                    }
                });

            }).trigger('change');
        }

    };

}();

jQuery(document).ready(function() {
    SearchReference.init();
});