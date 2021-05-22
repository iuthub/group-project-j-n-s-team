@extends('layouts.admin-dashboard')

@section('title')
    Online Apply
@endsection
@section('usertitle')
    Online application
@endsection

@section('content')

    <section style="height:100vh; background-color: #F3EFEF; ">
        <div class="container topmargin">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8 col-xl-10">

                    <div class="row align-items-center">
                        <div class="col mt-0 p-2">
                            <h1 style="color: #fff; font-size:4vw; text-align:center">Fill the Apply form.</h1>
                        </div>
                    </div>

                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('status')}}
                        </div>
                    @endif

                    <form action="{{ route('update_school', $school->id) }}" method="post"
                          style="background-color: #fff; padding:20px; border-radius:10px;"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-12 sol-md-12  col-lg-12 col-xl-12">
                                <label for="school_ame" class="text-center">Schoolname</label>
                                <input type="text" class="@error('school_name') border-danger @enderror"
                                       class="form-control"
                                       name="school_name" id="school_name"
                                       value="{{$school ->school_name}}"
                                       style="width: 100%; height:6vh; border-radius:9px; border:1px solid black; background-color: #F3EFEF;"/>

                                @error('school_name')
                                <div class="text-center mt-2 m-2" style="color:red;">
                                    {{$message}}
                                </div>
                                @enderror

                            </div>

                            <div class="col-12 col-sm-12 sol-md-12  col-lg-12 col-xl-12">
                                <label for="address" class="text-center">Adress</label>
                                <input type="text" class="@error('address') border-danger @enderror"
                                       class="form-control"
                                       name="address" id="address" value="{{ $school -> address }}"
                                       style="width: 100%; height:6vh; border-radius:9px; border:1px solid black; background-color: #F3EFEF;"/>
                                @error('address')
                                <div class="text-center mt-2 m-2" style="color:red;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-4 sol-md-4 col-lg-4 col-xl-4">
                                <label for="teachersnumber" class="text-center">Teachers Number</label>
                                <input type="text" class="@error('teachersnumber') border-danger @enderror"
                                       class="form-control"
                                       name="teachersnumber" id="teachernumber"
                                       value="{{$school->teachers_number}}"
                                       style="width: 100%; height:6vh; border-radius:9px; border:1px solid black; background-color: #F3EFEF;"/>
                                @error('teachersnumber')
                                <div class="text-center mt-2 m-2" style="color:red;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-4 sol-md-4 col-lg-4 col-xl-4">
                                <label for="pupilsnumber" class="text-center">Pupils Number</label>
                                <input type="text" class="@error('pupilsnumber') border-danger @enderror"
                                       class="form-control"
                                       name="pupilsnumber" id="pupilnumber"
                                       value="{{$school -> pupils_number}}"
                                       style="width: 100%; height:6vh; border-radius:9px; border:1px solid black; background-color: #F3EFEF;"/>
                                @error('pupilsnumber')
                                <div class="text-center mt-2 m-2" style="color:red;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-4 sol-md-4 col-lg-4 col-xl-4">
                                <label for="website" class="text-center">School website</label>
                                <input type="text" class="@error('website') border-danger @enderror"
                                       class="form-control"
                                       name="website" id="website"
                                       value="{{ $school -> website }}"
                                       style="width: 100%; height:6vh; border-radius:9px; border:1px solid black; background-color: #F3EFEF;"/>
                                @error('website')
                                <div class="text-center mt-2 m-2" style="color:red;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                        </div>

                        <div class="row align-items-center">
                            <div class="col mt-4">
                                <input type="file" class="form-control @error('image') border-danger @enderror"
                                       name="image" id="image" onchange="previewFile(this)">
                                @error('image')
                                <div class="text-center mt-2 m-2" style="color:red;">
                                    {{$message}}
                                </div>
                                @enderror
                                <img id="previewImg" style="max-width:130px; margin-top:20px;">
                            </div>
                        </div>

                        <div class="row justify-content-center mt-2">
                            <div class="col">
                                <button class="form-control btn-primary" style="height: 7vh;" type="submit">Save
                                </button>
                            </div>
                        </div>

                        <a href="{{route('admin.schools')}}">Cancel</a>
                    </form>


                </div>
            </div>
        </div>
    </section>
    <script>
        function previewFile(input) {
            var file = $("input[type=file]").get(0).files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function () {
                    $('#previewImg').attr("src", reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>


    <script>
        $(document).ready(function () {

            load_json_data('region', '0');

            function load_json_data(id, parent_id) {
                var html_code = '';
                $.getJSON('region_type_schoolname.json', function (data) {

                    html_code += '<option value="" id="">Select ' + id + '</option>';
                    $.each(data, function (key, value) {
                        if (id == 'region') {
                            if (value.parent_id == '0') {
                                html_code += '<option value="' + value.name + '" data-region="' + value.id + '"' + '>' + value.name + '</option>';
                            }
                        } else {
                            if (value.parent_id == parent_id) {
                                html_code += '<option value="' + value.name + '" data-type="' + value.id + '"' + '>' + value.name + '</option>';
                            }
                        }
                    });
                    $('#' + id).html(html_code);
                });

            }

            $(document).on('change', '#region', function () {
                var region_id = $(this).find(':selected').data('region');// for all regions there are 4 types of school
                if (region_id != '') {
                    load_json_data('type', region_id);
                } else {
                    $('#type').html('<option value="" id=">Select School type</option>');
                    $('#schoolname').html('<option value="" id="">Select Schools</option>');
                }
            });

            $(document).on('change', '#type', function () {

                var type_id = $(this).find(':selected').data('type');
                if (type_id != '') {
                    load_json_data('schoolname', type_id);
                } else {
                    $('#schoolname').html('<option value="" id="">Select Schools</option>');

                }
            });
        });
    </script>
@endsection

