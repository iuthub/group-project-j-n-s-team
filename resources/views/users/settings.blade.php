@extends('layouts.dashboard')

@section('title')
{{auth()->user()->name}} settings
@endsection

@section('usertitle')
{{auth()->user()->name}} settings
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
                <h5 class="card-category">All my data</h5>
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
                        Username
                      </th>                      
                      <th>
                        Edit
                      </th>
                      <th >
                        Delete account
                      </th>
                      
                    </thead>

                    <tbody>
                      {{-- @if ($users->count()) --}}
                      @foreach($users as $user)
                        <tr>
                          <td>
                          {{$user->name}}
                          </td>
                          <td>
                          {{$user->email}}
                          </td>

                          <td>
                            {{$user->username}}
                            </td>
                          <td>    
                            <a href="{{route('uu_edit', $user->id)}}" class="btn btn-success"> Edit</a>
                          </td>
                          <td >
                            <form action="{{route('uu_delete', $user->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                          </td>
                        </tr>
                        
                
                      
                      @endforeach
                      {{-- <div class="remove" style="height: 20px;">
                        {{ $users->links() }}
                        </div>
                        @else
                        There is not aplly
                        @endif --}}
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     
       <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer> 
@endsection
