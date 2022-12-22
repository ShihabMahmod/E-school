<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4" style="color:white;background-color:#FDD31D;" >
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{Session::get('admin_name')}}</h5>
            <p class="text-muted mb-1 white">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
            <div class="d-flex justify-content-center mb-2">
              <a style="color:white" href="{{url('/list-of-user')}}" class="btn btn-info">All Request</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class=" fa fa-duotone fa-graduation-cap text-warning"></i>
                <a href="{{url('/student-list')}}" class="text-warning" class="text-warning">Student List</a>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-user text-warning"></i>
                <a href="{{url('/teacher-list')}}" class="text-warning">Teacher List</a>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-users text-warning" style="color: #ac2bac;"></i>
                <a href="{{url('/class-teacher-list')}}" class="text-warning">All Class Teacher</a>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class=" fa fa-book text-warning"></i>
                <a href="" class="text-warning">Class Routin</a>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class=" fa fa-lock text-warning"></i>
                <button class="btn btn-warning" wire:click="logout" >Log out</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
          <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Roll</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Admin</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Session::get('admin_name')}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Session::get('admin_email')}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$phone}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$address}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4">Assigning Task</p>
                <ul class="list-group list-group-flush rounded-3">
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class=" fa fa-users text-warning"></i>
                    <a href="{{url('/add-subject')}}" class="text-warning">Add Subject</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class=" fa fa-duotone fa-graduation-cap text-warning"></i>
                    <a href="{{url('/assign-class-teacher')}}" class="text-warning" class="text-warning">Assign Teacher</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fa fa-user text-warning"></i>
                    <a href="{{url('/subject-list')}}" class="text-warning">Subject List</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fa fa-users text-warning" style="color: #ac2bac;"></i>
                    <a href="" class="text-warning">Add Somthing</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class=" fa fa-book text-warning"></i>
                    <a href="" class="text-warning">Add Somthing</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4">School Management</p>
                <ul class="list-group list-group-flush rounded-3">
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class=" fa fa-users text-warning"></i>
                    <a href="{{url('/set-payment')}}" class="text-warning">Set Staff Payment</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class=" fa fa-duotone fa-graduation-cap text-warning"></i>
                    <a href="{{url('/set-student-payment')}}" class="text-warning" class="text-warning">Set Student Payment</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fa fa-user text-warning"></i>
                    <a href="{{url('/subject-list')}}" class="text-warning">Subject List</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fa fa-users text-warning" style="color: #ac2bac;"></i>
                    <a href="{{url('/approve-teacher-attendance')}}" class="text-warning">Approve teacher attendance</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class=" fa fa-book text-warning"></i>
                    <a href="" class="text-warning">Add Somthing</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

