var baseUrl = BASE_URL;
var teleReg = /^([0-9]{8})$/;
var SyonApp = function () {
    var currentPage = '';
    var controllerMethod = '';
    var ChangePassword = function () {
        $('#ChangePassword').formValidation({
            excluded: ':disabled',
            framework: 'bootstrap',
            fields: {
                OldPassword: {
                    validators: {
                        notEmpty: {
                            message: 'Current Password is required and cannot be empty.'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'Current Password must be between 6 and 30'
                        }
                    }
                },
                NewPassword: {
                    validators: {
                        notEmpty: {
                            message: 'New Password is required and cannot be empty.'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'New Password must be between 6 and 30'
                        }
                    }
                },
                ConfirmPassword: {
                    validators: {
                        notEmpty: {
                            message: 'Confirm Password is required and cannot be empty.'
                        },
                        identical: {
                            field: 'NewPassword',
                            message: 'Confirm Password must be between 6 and 30'
                        }
                    }
                }
            }
        })
    };
    var FaqAdd = function () {
        $('#FaqForm').formValidation({
            excluded: ':disabled',
            framework: 'bootstrap',
            fields: {
                slug: {
                    validators: {
                        notEmpty: {
                            message: 'The Title field is required.'
                        }
                    }
                },
                question: {
                    validators: {
                        notEmpty: {
                            message: 'The Question field is required.'
                        }
                    }
                },
                answer: {
                    validators: {
                        callback: {
                            message: 'The Answer field is required',
                            callback: function (value, validator, $field) {
                                var returnD = true;
                                if ($('.summernote').summernote('isEmpty')) {
                                    returnD = false;
                                }
                                return returnD;
                            }
                        }
                    }
                }
            }
        }).find('[name="answer"]').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        }).on('summernote.change', function (customEvent, contents, $editable) {
            $('#FaqForm').formValidation('revalidateField', 'answer');
        }).end();
    };
    var FaqEdit = function () {
        $('#FaqForm').formValidation({
            excluded: ':disabled',
            framework: 'bootstrap',
            fields: {
                slug: {
                    validators: {
                        notEmpty: {
                            message: 'The Title field is required.'
                        }
                    }
                },
                question: {
                    validators: {
                        notEmpty: {
                            message: 'The Question field is required.'
                        }
                    }
                },
                answer: {
                    validators: {
                        callback: {
                            message: 'The Answer field is required',
                            callback: function (value, validator, $field) {
                                var returnD = true;
                                if ($('.summernote').summernote('isEmpty')) {
                                    returnD = false;
                                }
                                return returnD;
                            }
                        }
                    }
                }
            }
        }).find('[name="answer"]').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        }).on('summernote.change', function (customEvent, contents, $editable) {
            $('#FaqForm').formValidation('revalidateField', 'answer');
        }).end();
    };
    var TemplateEdit = function () {
        $('#TemplateEdit').formValidation({
            excluded: ':disabled',
            framework: 'bootstrap',
            fields: {
                email_name: {
                    validators: {
                        notEmpty: {
                            message: 'The Email Name field is required.'
                        },
                    }
                },
                email_subject: {
                    validators: {
                        notEmpty: {
                            message: 'The Email Subject field is required.'
                        }
                    }
                },
                email_content: {
                    validators: {
                        callback: {
                            message: 'The Email Content field is required',
                            callback: function (value, validator, $field) {
                                var returnD = true;
                                if ($('.summernote').summernote('isEmpty')) {
                                    returnD = false;
                                }
                                return returnD;
                            }
                        }
                    }
                }
            }
        }).find('[name="email_content"]').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        }).on('summernote.change', function (customEvent, contents, $editable) {
            $('#TemplateEdit').formValidation('revalidateField', 'email_content');
        }).end();
    };
    var PageEdit = function () {
        $('#PageEdit').formValidation({
            excluded: [':disabled'],
            fields: {
                description: {
                    validators: {
                        callback: {
                            message: 'The Description field is required',
                            callback: function (value, validator, $field) {
                                var returnD = true;
                                if ($('.summernote').summernote('isEmpty')) {
                                    returnD = false;
                                }
                                return returnD;
                            }
                        }
                    }
                }
            }
        }).find('[name="description"]').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        }).on('summernote.change', function (customEvent, contents, $editable) {
            $('#PageEdit').formValidation('revalidateField', 'description');
        }).end();
    };
    var PageEdit1 = function () {
        $('#PageEdit').formValidation({
            excluded: [':disabled'],
            fields: {
                description: {
                    validators: {
                        callback: {
                            message: 'The Description field is required',
                            callback: function (value, validator, $field) {
                                var returnD = true;
                                if ($.trim($('div[contenteditable]').html())  == '') {
                                    returnD = false;
                                }
                                return returnD;
                            }
                        }
                    }
                }
            }
        }).on('focus change blur keyup paste input', '[contenteditable]', function() {
            $('#PageEdit').formValidation('revalidateField', 'description');
        }).end();
    };
    var ReplyContact = function () {
        $('#ReplyContact').formValidation({
            excluded: [':disabled'],
            fields: {
                reply_msg: {
                    validators: {
                        callback: {
                            message: 'The Reply Message field is required',
                            callback: function (value, validator, $field) {
                                var returnD = true;
                                if ($('.summernote').summernote('isEmpty')) {
                                    returnD = false;
                                }
                                return returnD;
                            }
                        }
                    }
                }
            }
        }).find('[name="reply_msg"]').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        }).on('summernote.change', function (customEvent, contents, $editable) {
            $('#ReplyContact').formValidation('revalidateField', 'reply_msg');
        }).end();
    };
    var SettingsEdit = function () {
        $('#SettingsEdit').formValidation({
            excluded: ':disabled',
            framework: 'bootstrap',
            fields: {
                value: {
                    validators: {
                        notEmpty: {
                            message: 'This field is required.'
                        }
                    }
                }
            }
        });
    };
    var BrowseFile = function () {
        $(".file-style").filestyle({
            buttonText: 'Select Image',
            'iconName': 'glyphicon-picture'
        });
    };
    var OnChangeAjax = function () {
        $('.dropdown').on('change', function () {
            ajaxLoaderStart();
            var type = $(this).attr("data-id");
            var id = $(this).val();
            var urlPath = baseUrl + 'admin/ajax/get_dropdown_with_id';
            $.ajax({
                url: urlPath,
                data: {
                    'type': type,
                    'colId': id
                },
                method: 'POST',
                dataType: 'json'
            }).success(function (resp) {
                $('#common').replaceWith(resp.data);
                ajaxLoaderStop()
            });
        });
    };
    var SessionCreateAjax = function (type) {
        $('body').delegate('#filter', 'click', function (e) {
            e.preventDefault();
            $("#filter_form #form_name").val(type);
            var urlPath = baseUrl + 'ajax/SessionCreate';
            $.ajax({
                url: urlPath,
                data: $("#filter_form").serialize(),
                method: 'POST',
                dataType: 'json',
                success :function (resp) {
                console.log(resp);
                if (resp.status) {
                    console.log(resp.status);
                    var redirectUrl = $("form").attr('action');
                    window.location.href = redirectUrl;
                }
                else
                {
                   console.log(resp.status);  
                }
            } /*----*/


            });
        });
    };
    var SortList = function (type) {
        $('body').delegate('.heading', 'click', function (e) {
            e.preventDefault();
            var field = $(this).attr('id');
            document.getElementById("field").value = field;
            if (document.getElementById("order").value == "desc") {
                document.getElementById("order").value = "asc";
            } else {
                document.getElementById("order").value = "desc";
            }
            $("#filter").trigger("click");
        });
    };
    var CheckedAll = function () {
        $('body').delegate('#multicheck', 'click', function (e) {
            var aa = document.getElementById('multicheck');
            checked = aa.checked;
            $('.item_multicheck').each(function (e) {
                if ($(this).attr('readonly') != 'readonly') {
                    $(this).prop('checked', checked);
                }
            });
        });
    };
    var MultiCheck = function () {
        $(".item_multicheck").change(function () {
            var i = 0;
            $('.item_multicheck').each(function (e) {
                if (this.checked) {
                    i++;
                }
            });
            if (i == 10) {
                $("#multicheck").prop('checked', true);
            } else {
                $("#multicheck").prop('checked', false);
            }
        });
    };
    var SubmitBulk = function () {
        $('body').delegate('#SubmitBulk', 'click', function (e) {
            e.preventDefault();
            var el = document.getElementById("BulkAction");
            var strUser = el.options[el.selectedIndex].value;
            groupOperation(strUser);
        });
    };
    var SendNewsletter = function () {
        $('#SendNewsletter').formValidation({
            excluded: ':disabled, :hidden',
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email field is required.'
                        }
                    }
                },
                subject: {
                    validators: {
                        notEmpty: {
                            message: 'The Subject field is required.'
                        }
                    }
                },
                message: {
                    validators: {
                        callback: {
                            message: 'The Content field is required',
                            callback: function (value, validator, $field) {
                                // Determine the numbers which are generated in captchaOperation
                                var returnD = true;
                                if ($('.summernote').summernote('isEmpty')) {
                                    returnD = false;
                                }
                                return returnD;
                            }
                        }
                    }
                },
            }
        }).find('[name="message"]')
            .summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            })
            .on('summernote.change', function (customEvent, contents, $editable) {
                // Revalidate the content when its value is changed by Summernote
                $('#SendNewsletter').formValidation('revalidateField', 'message');
            })
            .end();
    };
    var SliderAdd = function () {
        $('#SliderForm').formValidation({
            excluded: ':disabled',
            framework: 'bootstrap',
            fields: {
                title: {
                    validators: {
                        notEmpty: {
                            message: 'The Title field is required.'
                        }
                    }
                },

                userFile: {
                    validators: {
                        notEmpty: {
                            message: 'The Slider Image field is required.'
                        },
                        file: {
                            extension: 'jpeg,jpg,png,gif',
                            type: 'image/jpeg,image/png,image/gif',
                            maxSize: 2097152,   // 2048 * 1024
                            message: 'The selected file is not valid ,it should be (jpeg,jpg,png,gif)'
                        }
                    }
                }
            }
        })
    };
    var SliderEdit = function () {
        $('#SliderForm').formValidation({
            excluded: ':disabled',
            framework: 'bootstrap',
            fields: {
                title: {
                    validators: {
                        notEmpty: {
                            message: 'The Title field is required.'
                        }
                    }
                },
                userFile: {
                    validators: {
                        /*notEmpty: {
                         message: 'The Slider Image field is required.'
                         },*/
                        file: {
                            extension: 'jpeg,jpg,png,gif',
                            type: 'image/jpeg,image/png,image/gif',
                            maxSize: 2097152,   // 2048 * 1024
                            message: 'The selected file is not valid ,it should be (jpeg,jpg,png,gif)'
                        }
                    }
                }
            }
        });
    };
    var CategoryAdd = function () {
        $('#CategoryAdd').formValidation({
            excluded: ':disabled',
            framework: 'bootstrap',
            fields: {
                cat_name: {
                    validators: {
                        notEmpty: {
                            message: 'The Category Name field is required.'
                        },
                        stringLength: {
                            min: 2,
                            max: 30,
                            message: 'The Category Name field must be at least 2 characters in length.'
                        }
                    }
                },
                /* catFile: {
                     validators: {
                         file: {
                             extension: 'jpeg,jpg,png',
                             type: 'image/jpeg,image/png',
                             maxSize: 2097152,   // 2048 * 1024
                             message: 'The selected file is not valid'
                         }
                     }
                 },*/
                status: {
                    validators: {
                        notEmpty: {
                            message: 'The status field is required.'
                        }

                    }
                }
            }
        })
    };

    var UserAdd = function () {
        $('#UserAdd').formValidation({
            excluded: ':disabled',
            framework: 'bootstrap',
            fields: {
                category_id: {
                    validators: {
                        notEmpty: {
                            message: 'The Category field is required.'
                        }
                    }
                },
                company_name: {
                    validators: {
                        notEmpty: {
                            message: 'The Company Name field is required.'
                        }
                    }
                },
                contact_person: {
                    validators: {
                        notEmpty: {
                            message: 'The Contact Person field is required.'
                        }
                    }
                },
                email: {
                    validators: {
                        regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'Not a valid Email, Please enter valid email address.'
                        },
                        notEmpty: {
                            message: 'The Email is required and cannot be empty.'
                        },
                        stringLength: {
                            max: 150,
                            message: 'The Email must less than 30 characters'
                        }
                    }
                },
                alternative_email: {
                    validators: {
                        regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'Not a valid Email, Please enter valid email address.'
                        },
                        notEmpty: {
                            message: 'The Alternative Email is required and cannot be empty.'
                        },
                        stringLength: {
                            max: 150,
                            message: 'The Email must less than 30 characters'
                        }
                    }
                },
                phone_number: {
                    validators: {
                        notEmpty: {
                            message: 'The Phone number field is required.'
                        }
                    }
                }
            }
        })
    };
    var UserEdit = function () {
        $('#UserEdit').formValidation({
            excluded: ':disabled',
            framework: 'bootstrap',
            fields: {
                category_id: {
                    validators: {
                        notEmpty: {
                            message: 'The Category field is required.'
                        }
                    }
                },
                company_name: {
                    validators: {
                        notEmpty: {
                            message: 'The Company Name field is required.'
                        }
                    }
                },
                contact_person: {
                    validators: {
                        notEmpty: {
                            message: 'The Contact Person field is required.'
                        }
                    }
                },
                email: {
                    validators: {
                        regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'Not a valid Email, Please enter valid email address.'
                        },
                        notEmpty: {
                            message: 'The Email is required and cannot be empty.'
                        },
                        stringLength: {
                            max: 150,
                            message: 'The Email must less than 30 characters'
                        }
                    }
                },
                alternative_email: {
                    validators: {
                        regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'Not a valid Email, Please enter valid email address.'
                        },
                        notEmpty: {
                            message: 'The Alternative Email is required and cannot be empty.'
                        },
                        stringLength: {
                            max: 150,
                            message: 'The Email must less than 30 characters'
                        }
                    }
                },
                phone_number: {
                    validators: {
                        notEmpty: {
                            message: 'The Phone number field is required.'
                        }
                    }
                }
            }
        })
    };
    return {
        init: function () {
            /*-----------------------------------------------*/
            if (SyonApp.isPage("UserList")) {
                SortList();
                SessionCreateAjax('UserList');
            }

             if (SyonApp.isPage("AuctionList")) {
                SortList();
                SessionCreateAjax('AuctionList');
            }

            /*-----------------------------------------------*/           
        },
        setPage: function (name) {
            currentPage = name;
        },
        setBaseUrl: function (name) {
            baseUrl = name;
        },
        setControllerMethod: function (name) {
            controllerMethod = name;
        },
        isPage: function (name) {
            return currentPage == name ? true : false;
        },
        addResponsiveFunction: function (func) {
            responsiveFunctions.push(func);
        },
        scrollTo: function (el, offeset) {
            pos = (el && el.size() > 0) ? el.offset().top : 0;
            jQuery('html,body').animate({
                scrollTop: pos + (offeset ? offeset : 0)
            }, 'slow');
        },
        scrollTop: function () {
            SyonApp.scrollTo();
        },
        initUniform: function (els) {
            if (els) {
                jQuery(els).each(function () {
                    if ($(this).parents(".checker").size() == 0) {
                        $(this).show();
                        $(this).uniform();
                    }
                });
            } else {
                handleAllUniform();
            }
        }
    };
}();



function ajaxLoaderStop() {
    jQuery('#resultLoading .bg').height('100%');
    jQuery('#resultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}

function preLoaderStart() {
    preloader.on();
}

function preLoaderStop() {
    preloader.off();
}





