var Thumbnail = function() {

    return {
        //main function to initiate the module
        init: function(obj = null) {

            var element = $('thumbnail.thumbnailreference');

            if (obj) {
                element = obj.find('thumbnail.thumbnailreference');
            }

            element.each(function(e) {
                var obj = $(this);
                var value = obj.find("input[type='hidden']").val();
                if (value != '') {
                    var img = document.createElement('img');
                    value = JSON.parse(value);

                    img.src = window.base_url + value.bucket + '/' + value.filename;

                    obj.find('.filethumbnail-preview.thumbnail').append(img);
                    if (obj.hasClass('filethumbnail-new')) {
                        obj.removeClass('filethumbnail-new');
                        obj.addClass('filethumbnail-exists');
                    }
                }

                obj.find("input[type='file']").change(function(e) {
                    var input = $(this).get(0).files;
                    var uri = obj.data('url');

                    if (obj.data('bucket') != '') {
                        uri += '?bucket=' + obj.data('bucket');

                    }

                    Thumbnail.spinner.start(obj);

                    Thumbnail.upload(input, uri, function(data, error) {
                        Thumbnail.spinner.stop(obj);
                        if (error) {
                            return;
                        }

                        if (obj.hasClass('filethumbnail-new')) {
                            obj.removeClass('filethumbnail-new');
                            obj.addClass('filethumbnail-exists');
                        }

                        if (data.length > 0) {
                            obj.find('input[type="hidden"]').val(JSON.stringify(data[0]));
                            if (obj.find('.filethumbnail-preview.thumbnail').length > 0) {
                                var img = document.createElement('img');
                                img.src = window.base_url + data[0].bucket + '/' + data[0].filename;
                                obj.find('.filethumbnail-preview.thumbnail img').remove();
                                obj.find('.filethumbnail-preview.thumbnail').append(img);
                            }
                        }

                    });

                });

                obj.find('a.filethumbnail-exists').click(function(e) {
                    if (obj.find('.filethumbnail-preview.thumbnail').length > 0) {
                        obj.find('.filethumbnail-preview.thumbnail').html('');

                    } else {

                    }

                    if (obj.hasClass('filethumbnail-exists')) {
                        obj.removeClass('filethumbnail-exists');
                        obj.addClass('filethumbnail-new');
                    }


                });

            });
        },
        processFile: function(files) {

            var formdata = new FormData();

            for (var index = 0; index < files.length; index++) {
                formdata.append(files[index].name, files[index]);
            }
            return formdata;

        },


        upload: function(file, url, cb = null) {
            var data = Thumbnail.processFile(file);

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                cache: false,
                contentType: false,
                processData: false,
            }).done(function(response) {
                if (cb) {
                    cb(response, null);
                }
            }).fail(function(error) {
                if (cb) {
                    cb(null, error);
                }

            });
        },
        spinner: function() {
            return {
                start: function(obj = null) {
                    obj.find('span.spinner').addClass('show');

                },
                stop: function(obj = null) {
                    obj.find('span.spinner').removeClass('show');
                }

            }

        }()

    };

}();

jQuery(document).ready(function() {
    Thumbnail.init();
});