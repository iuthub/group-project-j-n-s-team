@extends('layouts.app')

@section('title')
    Schools
@endsection

@section('content')
    <div class="container-fluid p-0" style="position: relative;">
        <section class="pb-5" style=" background-color: #F3EFEF; ">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-8 col-lg-8 col-xl-10 mt-5">

                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead class=" text-primary">
                                <th>
                                    Name
                                </th>

                                <th>
                                    More
                                </th>

                                </thead>

                                <tbody>

                                @foreach($schools as $school)
                                    <tr>
                                        <td>
                                            {{$school->school_name}}
                                        </td>

                                        <td>
                                            <a href="{{ route('school-details', $school -> id) }}"> More </a>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control filter-input"
                                               placeholder="Search for first name..." data-column="1"/>
                                    </td>
                                </tr>
                                </tfoot>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{asset('js/schools.js')}}"></script>
    <script>

    </script>
@endsection

