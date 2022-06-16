@extends('admin.layouts.main')
@section('title', 'Profile')

@section('stylesheet')

    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-fileinput/css/fileinput.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}">


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

@section('breadcumbs')
    @include('admin.templates.breadcrumbs2')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">

            <div class="card">

                <div class="row">
                    <div class="col-md-5">
                        <div class="card-block">


                            <div class="profile-img center">
                                <img class="img-thumbnail img-fluid img-center"
                                     style="max-height: 400px; max-width: 340px; margin-top: 5vh"
                                     src="{{ Auth::user()->profile_picture ? asset('storage/images/'.Auth::user()->profile_picture) : asset('datta-able/assets/images/user/avatar-4.jpg')}}"
                                     itemprop="thumbnail" alt="Profile Picture">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="card-block">
                            <div class="profile-head">
                                <h5>
                                    {{$profile->fullname}}
                                </h5>
                                <h6>
                                    {{$profile->group->name}}
                                </h6>

                            </div>

                            <div class="profile-body">
                                <div class="row " style="padding: 10px">

                                    <div class="table-responsive">
                                        <table class="table">

                                            <tbody>

                                            <tr>
                                                <th scope="row">Username </th>
                                                <td>:</td>
                                                <td>{{$profile->username}}</td>

                                            </tr>


                                            <tr>
                                                <th scope="row">Full Name </th>
                                                <td>:</td>
                                                <td>{{$profile->fullname}}</td>

                                            </tr>



                                            <tr>
                                                <th scope="row">Email </th>
                                                <td>:</td>
                                                <td>{{$profile->email}}</td>

                                            </tr>

                                            <tr>
                                                <th scope="row">Group </th>
                                                <td>:</td>
                                                <td>{{$profile->group->name}}</td>

                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <input type="button" data-profile="{{$profile->profile_picture}}"
                                       class="btn btn-primary" id="btnProfile" value="Edit Profile"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.contents.profile._modal')
@endsection

@section('script')

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
            });

            $('#formModal').validate({ // initialize the plugin
                rules: {
                    username: {
                        required: true,
                    },
                    fullname: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                    confirm_password: {
                        required: true,
                    }

                },
                submitHandler: function (form) {

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
                }
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
        }

    </script>


@endsection

