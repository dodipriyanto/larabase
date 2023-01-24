@extends('admin.layouts.main')
@section('title', 'Profile')

@section('breadcumbs')
    @include('admin.templates.breadcrumbs')
@endsection
<link rel="stylesheet" type="text/css"
      href="{{asset('modern-admin/app-assets/css/plugins/forms/validation/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-fileinput/css/fileinput.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}">
@section('stylesheet')

    <style>

        .img-center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .invalid, .invalid-lenght {
            color: red;
        }

        .invalid:before, .invalid-lenght:before {
            position: relative;
            /*left: -35px;*/
        }

        .emp-profile {
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
        }

        .profile-img img {
            /*width: 70%;*/
            /*height: 100%;*/
        }

        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }

        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }

        .profile-head h5 {
            color: #333;
        }

        .profile-head h6 {
            color: #0062cc;
        }

        .profile-edit-btn {
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }

        .proile-rating {
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }

        .proile-rating span {
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }

        .profile-head .nav-tabs {
            margin-bottom: 5%;
        }

        .profile-head .nav-tabs .nav-link {
            font-weight: 600;
            border: none;
        }

        .profile-head .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 2px solid #0062cc;
        }

        .profile-work {
            padding: 14%;
            margin-top: -15%;
        }

        .profile-work p {
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }

        .profile-work a {
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }

        .profile-work ul {
            list-style: none;
        }

        .profile-tab label {
            font-weight: 600;
        }

        .profile-tab p {
            font-weight: 600;
            color: #0062cc;
        }
    </style>

@endsection
@section('content')
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$menu['breadcrumbs']->name}} </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class=" emp-profile" style="padding: 10px">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="profile-img center">
                                            <img class="img-thumbnail img-fluid img-center"
                                                 style="max-height: 400px; max-width: 340px"
                                                 src="{{(Auth::user()->profile_picture ? asset('storage/images/'.Auth::user()->profile_picture) : asset('no_image.png'))}}"
                                                 itemprop="thumbnail" alt="Image description">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="profile-head">
                                            <h5>
                                                {{$profile->fullname}}
                                            </h5>
                                            <h6>
                                                {{$profile->group->name}}
                                            </h6>

                                            <hr>
                                        </div>

                                        <div class="profile-body">
                                            <div class="row " style="padding: 10px">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><label for="">Username</label></td>
                                                        <td><p>{{$profile->username}}</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="">Email</label></td>
                                                        <td><p>{{$profile->email}}</p></td>
                                                    </tr>
                                                    {{--                                                    <tr>--}}
                                                    {{--                                                        <td><label for="">Full Name</label></td>--}}
                                                    {{--                                                        <td><p>{{$profile->fullname}}</p></td>--}}
                                                    {{--                                                    </tr>--}}
                                                    <tr>
                                                        <td><label for="">Group</label></td>
                                                        <td><p>{{$profile->group->name}}<p></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-12">
                                    </div>


                                    <div class="col-md-2 col-sm-12">
                                        <input type="button" data-profile="{{$profile->profile_picture}}"
                                               class="btn btn-primary" id="btnProfile" value="Edit Profile"/>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('admin.contents.profile._modal')

@endsection

@section('script')
    <script src="{{asset('modern-admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('modern-admin/app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('modern-admin/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('modern-admin/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"></script>
    <script src="{{asset('modern-admin/app-assets/vendors/js/forms/toggle/switchery.min.js')}}"></script>
    <script src="{{asset('modern-admin/app-assets/js/scripts/forms/form-login-register.js')}}"></script>
    <script src="{{asset('modern-admin/app-assets/js/scripts/forms/validation/form-validation.js')}}"></script>
    <script src="{{asset('lib/sweetalert2/sweetalert2.js')}}"></script>

    <script src="{{asset('modern-admin/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('modern-admin/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>
    <script src="{{asset('lib/sweetalert2/sweetalert2.js')}}"></script>

    <!-- BEGIN: Page JS-->
    <script src="{{asset('lib/bootstrap-fileinput/js/fileinput.js')}}"></script>
    <script src="{{asset('lib/fa-theme/theme.js')}}"></script>
    <!-- BEGIN: Page JS-->



    <script type="text/javascript">
        var url = {
            submit: "{{route('dashboard_profile_post')}}"
        };
        var table, tbl_access;

        $(document).ready(function () {
            var CSRF_TOKEN = "{{@csrf_token()}}";

            $('#confirm_password').on('keyup', function () {
                let confrim = $(this).val(),
                    password = $('#password').val();

                console.log(confrim, password)

                if (password != confrim) {
                    $('.invalid').removeAttr('hidden')
                    $('#btn-submit').attr('hidden', true)
                    // $("#btn-submit").attr('class', 'btn btn-block');

                } else {
                    $('.invalid').attr('hidden', true)
                    $('#btn-submit').removeAttr('hidden')
                    // $("#btn-submit").attr('class', 'btn btn-outline-info');
                }
            });


            $(document).on('click', '#btnProfile', function (e) {
                let pp = $(this).data('profile');
                makeInput(pp)
                modalShow('myModal', 'Update Data');

                /* $.get(url.detail,{id : id}, function (result){
                     let response = result.data;
                     $('#id').val(response.id)
                     $('#name').val(response.name)
                     $('#province_id').val(response.province.id).trigger('change')
                 });*/

            });


            $('#formModal').on('submit', function (event) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    }
                });
                let id = $('#id').val();


                let file_data = $('#fileUpload').prop('files')[0],
                    form_data = new FormData(document.getElementById('formModal'));

                form_data.append('_token', $("input[name=_token]").val());
                // form_data.append('_cache_id' , localStorage.getItem('cache_id'));
                form_data.append('fileUpload', file_data);
                form_data.append('id', id);


                $.ajax({
                    url: url.submit,
                    data: form_data,
                    type: 'POST',
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        swalStatus(response, "myModal")
                        window.location.reload();

                    }

                });
                event.preventDefault();
            });


        });

        function resetFileInput() {
            $('#fileUpload').fileinput('destroy');
        }

        function makeInput(value) {
            $('#fileUpload').fileinput('destroy');

            if (value) {
                let url = "{{asset('storage/images/')}}" + '/' + `${value}`
                let filename = value.split('/')[1];
                $("#fileUpload").fileinput({
                    'showUpload': false,
                    theme: 'fa',
                    showClose: false,
                    showMove: false,
                    initialPreviewConfig: [
                        {caption: `${filename}`, downloadUrl: url, key: 1}
                    ],
                    initialPreview: url,
                    initialPreviewAsData: true,
                    layoutTemplates: {
                        progress: '',
                        remove: ''
                    },
                    allowedFileExtensions: ["jpg", "png", "gif"],
                    initialPreviewShowDelete: false,
                    {{--deleteUrl: '{{route('file_delete')}}',--}}
                    elErrorContainer: '#kartik-file-errors',
                });

                $(".glyphicon").removeClass("glyphicon-download").removeClass('glyphicon').addClass('fa fa-download');

            } else {
                $("#fileUpload").fileinput({
                    'showUpload': false,
                    theme: 'fa',
                    'previewFileType': 'any',
                    fileActionSettings: {
                        showDrag: false,
                    },
                    allowedFileExtensions: ['jpg', 'gif', 'png', 'jpeg'],
                    initialPreviewAsData: true,
                    layoutTemplates: {
                        progress: '',
                        remove: ''
                    },
                    initialPreviewShowDelete: true,
                    deleteUrl: '{{route('file_delete')}}',
                    elErrorContainer: '#kartik-file-errors',
                });
            }

            var uploadField = document.getElementById("fileUpload");


            //set max file 5mb
            uploadField.onchange = function() {
                var ext = this.files[0].name.split('.').pop()
                var limitSize = 5000000 //5 mb
                var errorMessage = `File ${ext} terlalu besar! Maksimum ukuran file 5MB`
                // console.log(ext);

                // if(ext === 'mp4')
                // {
                //     limitSize = 25000000 //5 mb
                //     errorMessage = `File ${ext} terlalu besar! Maksimum ukuran file 25MB`
                //
                // }
                if(this.files[0].size > limitSize){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: `${errorMessage}`
                    })

                    $('#fileUpload').fileinput('destroy');
                    $("#fileUpload").val(null);
                    makeInput();

                };
            };
        }

    </script>

@endsection


