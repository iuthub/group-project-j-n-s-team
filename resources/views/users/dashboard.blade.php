@extends('layouts.dashboard')

@section('title')
User's Page
@endsection
@section('usertitle')
{{auth()->user()->name}} Dashboard
@endsection

@section('content')
<div class="content">
        <div class="row">

          <div class="col-md-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">All my applications</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Body
                      </th>
                      <th>
                        Region
                      </th>
                      <th>
                        School type
                      </th>
                      <th >
                        School name
                      </th>
                      <th>
                        Image
                      </th>

                    </thead>

                    <tbody>
                      @if ($users->count())
                      @foreach($users as $user)
                        @foreach ($user->applications as $application)
                        <tr>
                          <td>
                          {{$user->name}}
                          </td>
                          <td>
                          {{$user->email}}
                          </td>
                          <td>
                            {{ $application->body }}
                          </td>
                          <td>
                            {{ $application->region }}
                          </td>
                          <td>
                            {{ $application->type }}
                          </td>
                          <td>
                            {{ $application->school_name }}
                          </td>
                          <td>
                            <img src="{{ asset('upload/images/'.$application->image) }}" alt="" style="height: 30px;">
                          </td>
                        </tr>

                        @endforeach

                      @endforeach

                     {{$users->links()}}
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
