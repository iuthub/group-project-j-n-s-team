@extends('layouts.admin-dashboard')

@section('title')
Admin Page
@endsection
@section('admintitle')
    {{auth()->user()->name}}
@endsection

@section('content')
<div class="content">
  <div class="row">
      <div class="col-md-12">
        @if($message=Session::get('success'))
          <div class="alert alert-success">
             <p>{{ $message }}</p>
          </div>
        @endif
        @if ($users->count())
        <div class="card">
          <div class="card-header">
              <h5 class="card-category">All user's applies</h5>
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
                    <th>
                      Edit
                    </th>
                    <th class="text-right">
                      Delete
                    </th>
                  </thead>
                  <tbody>

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
                            {{ $application->schoolname }}
                          </td>
                          <td>
                            <img src="{{ asset('storage/images/'.$application->image) }}" alt="" style="height: 30px;">
                          </td>
                          <td>
                            <a href="{{route('edit', $application->id)}}" class="btn btn-success"> Edit</a>
                          </td>
                          <td class="text-right">
                            <form action="{{route('delete', $application->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                          </td>
                        </tr>

                      @endforeach
                    @endforeach

                </tbody>
              </table>

            </div>
          </div>

        </div>
        {{$users->links()}}

        @endif


      </div>
  </div>



</div>
@endsection
