@extends('admin.layouts.app')

@section('panel-header')
    <div>
        <ul class="breadcrumb">
            <li><a href="{{route('admin.view.dashboard')}}">Admin</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{route('admin.view.admin.access.list')}}">Admin Access</a></li>
        </ul>
        <h1 class="panel-title">Admin Access</h1>
    </div>
@endsection


@section('panel-body')
<figure class="panel-card">
  <div class="panel-card-header">
      <div>
          <h1 class="panel-card-title">Admin Access</h1>
          <p class="panel-card-description">List of all admins access in the system</p>
      </div>
      {{-- <div>
          <a href="{{ route('admin.view.admin.access.create') }}" class="btn-primary-sm flex">
              <span class="lg:block md:block sm:hidden mr-2">Add Access</span>
              <i data-feather="plus"></i>
          </a>
      </div> --}}
  </div>
  <div class="panel-card-body">
      {{-- <div class="panel-card-table">
          <table class="data-table">
              <thead>
                  <th>Sr. No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Role</th>
                  <th>Action</th>
              </thead>
              <tbody>

              </tbody>
          </table>
      </div> --}}

      <div class="container app">
        <div class="row app-one">
          <div class="col-sm-4 side">
            <div class="side-one">
              <div class="row heading">
                <div class="col-sm-3 col-xs-3 heading-avatar">
                  <div class="heading-avatar-icon">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                  </div>
                </div>
                <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
                  <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
                </div>
                <div class="col-sm-2 col-xs-2 heading-compose  pull-right">
                  <i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
                </div>
              </div>
      
              <div class="row searchBox">
                <div class="col-sm-12 searchBox-inner">
                  <div class="form-group has-feedback">
                    <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
                </div>
              </div>
      
              <div class="row sideBar">
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar2.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar4.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar5.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar2.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar4.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="side-two">
              <div class="row newMessage-heading">
                <div class="row newMessage-main">
                  <div class="col-sm-2 col-xs-2 newMessage-back">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                  </div>
                  <div class="col-sm-10 col-xs-10 newMessage-title">
                    New Chat
                  </div>
                </div>
              </div>
      
              <div class="row composeBox">
                <div class="col-sm-12 composeBox-inner">
                  <div class="form-group has-feedback">
                    <input id="composeText" type="text" class="form-control" name="searchText" placeholder="Search People">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
                </div>
              </div>
      
              <div class="row compose-sideBar">
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar2.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar4.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar5.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar2.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar4.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sideBar-body">
                  <div class="col-sm-3 col-xs-3 sideBar-avatar">
                    <div class="avatar-icon">
                      <img src="https://bootdey.com/img/Content/avatar/avatar5.png">
                    </div>
                  </div>
                  <div class="col-sm-9 col-xs-9 sideBar-main">
                    <div class="row">
                      <div class="col-sm-8 col-xs-8 sideBar-name">
                        <span class="name-meta">John Doe
                      </span>
                      </div>
                      <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">18:18
                      </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <div class="col-sm-8 conversation">
            <div class="row heading">
              <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
                <div class="heading-avatar-icon">
                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                </div>
              </div>
              <div class="col-sm-8 col-xs-7 heading-name">
                <a class="heading-name-meta">John Doe
                </a>
                <span class="heading-online">Online</span>
              </div>
              <div class="col-sm-1 col-xs-1  heading-dot pull-right">
                <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
              </div>
            </div>
      
            <div class="row message" id="conversation">
              <div class="row message-previous">
                <div class="col-sm-12 previous">
                  <a onclick="previous(this)" id="ankitjain28" name="20">
                  Show Previous Message!
                  </a>
                </div>
              </div>
      
              <div class="row message-body">
                <div class="col-sm-12 message-main-receiver">
                  <div class="receiver">
                    <div class="message-text">
                     Hi, what are you doing?!
                    </div>
                    <span class="message-time pull-right">
                      Sun
                    </span>
                  </div>
                </div>
              </div>
      
              <div class="row message-body">
                <div class="col-sm-12 message-main-sender">
                  <div class="sender">
                    <div class="message-text">
                      I am doing nothing man!
                    </div>
                    <span class="message-time pull-right">
                      Sun
                    </span>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="row reply">
              <div class="col-sm-1 col-xs-1 reply-emojis">
                <i class="fa fa-smile-o fa-2x"></i>
              </div>
              <div class="col-sm-9 col-xs-9 reply-main">
                <textarea class="form-control" rows="1" id="comment"></textarea>
              </div>
              <div class="col-sm-1 col-xs-1 reply-recording">
                <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
              </div>
              <div class="col-sm-1 col-xs-1 reply-send">
                <i class="fa fa-send fa-2x" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  </div>
</figure>
@endsection

@section('panel-script')
<script>
    document.getElementById('chat-tab').classList.add('active');

    const handleUpdateStatus = (id) => {
            fetch("{{ route('admin.handle.admin.access.status') }}", {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    admin_id: id,
                    _token: "{{ csrf_token() }}"
                })
            }).then((response) => {
                return response.json();
            }).catch((error) => {
                swal({
                    title: "Internal server error",
                    text: "An error occured, please try again",
                    icon: "error",
                })
            });
        }

        const handleDelete = (id) => {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this admin access!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = `{{ url('admin/admin-access/delete') }}/${id}`;
                    }
                });
        }
</script>
@endsection