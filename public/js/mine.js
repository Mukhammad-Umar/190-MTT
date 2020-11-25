$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

if (window.location.toString().indexOf('news') != -1) {
    var url = './news/';
} else if (window.location.toString().indexOf('galleries') != -1) {
    var url = './galleries/';
} else if (window.location.toString().indexOf('users') != -1) {
    var url = './users/';
};

var BaseRecord = {

    deleteone: function (id) {
        var ajaxSetting = {
            method: 'delete',
            url: url + id,
            success: function (data) {
                $('.news_table').html(data.table);
                $('.listbuttonremove').on("click", function () {
                    BaseRecord.deleteone($(this).attr('id'));
                    return false;
                });
            },
            error: function (data) {
                alert(data.responseText);
            }
        };
        $.ajax(ajaxSetting);
    },
    removeContact: function (id) {
        var ajaxSetting = {
            method: 'get',
            url: './deleteone',
            data: {
                id: id
            },
            success: function (data) {
                BaseRecord.afterRemove();
            },
            error: function (data) {
                alert(data.responseText);
            }
        };
        $.ajax(ajaxSetting);
    },
    afterRemove: function () {
        var ajaxSetting = {
            method: "get",
            url: './contact',
            success: function (data) {
                // alert(data.table);
                $('.news_table').html(data.table);
                $('.listbuttondelete').on("click", function () {
                   BaseRecord.removeContact($(this).attr('id'));
                   return false;
                 });
            },
        };
        $.ajax(ajaxSetting);
    },

};
