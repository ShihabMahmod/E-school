<section class="contact_section">
    <div class="container">
        <h4 class="mb-5">Student List</h4>
        @if(session()->has('msg'))
            <span style="color:green" >{{session('msg')}}</span>
        @endif
        <input type="sesrch" placeholder="Search your query">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Teacher ID</th>
                <th scope="col">Teacher Name</th>
                <th scope="col">Attending time</th>
                <th scope="col">Approve</th>
                </tr>
            </thead>
            <tbody>           
           @foreach($teacher_list as $user)
                <tr>
                    <td>{{$user['roll']}}</td>
                    <td>{{$user['name']}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>
                        <input type="checkbox" wire:model="is_approved" value="{{$user['roll']}}">
                    </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
        <button class="btn btn-info" wire:click="approved">Approve Attendance</button>

    </div>
</section>

