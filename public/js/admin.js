$(document).ready(function () {
    $('#form-add-mvd').validate({
        rules: {
            name: {
                required: true
            },
            link: {
                required: true
            },
        },
        messages: {
            name: {
                required: 'Trường tên không được để trống.'
            },
            link: {
                required: 'Trường link không được để trống.'
            },
        }
    })

    $('#form-edit-mvd').validate({
        rules: {
            name: {
                required: true
            },
            link: {
                required: true
            },
        },
        messages: {
            name: {
                required: 'Trường tên không được để trống.'
            },
            link: {
                required: 'Trường link không được để trống.'
            },
        }
    })

    $('#form-login').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            },
        },
        messages: {
            email: {
                required: 'Email không được để trống.',
                email: 'Email không hợp lệ'
            },
            password: {
                required: 'Mật khẩu không được để trống.'
            },
        }
    })

    $('.btn-remove-mvd').click(function () {
        return confirm('Bạn có thực sự muốn xóa bản ghi này không?');
    })

    $('#form-setup-noti #content').summernote({
        height: '280px'
    });

    $('#form-update-chinhsach #content').summernote({
        height: '380px'
    });

    $('#form-update-banggia #content').summernote({
        height: '600px'
    });
})
