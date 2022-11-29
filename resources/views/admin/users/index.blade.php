@extends('admin.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
        </div><br>
        <div class="pull-left">
            <h2>Users Management</h2>
            <br>
        </div>
    </div>
  </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<section>
<div class="container">
<div class="card shadow py-3" style="height: 100%">
  <div class="card-header py-4">
    <p class="text-primary m-0 fw-bold">User Details</p>
  </div>

  <div class="card-body" style="height: 100%">
    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Roles</th>
        <th width="280px">Action</th>
      </tr>

      @foreach ($data as $key => $user)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
              <label class="badge badge-success">{{ $v }}</label>
            @endforeach
          @endif
        </td>

        <td>
          <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
</div>
</section>


{!! $data->render() !!}

<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>

@endsection