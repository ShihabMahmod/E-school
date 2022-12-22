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
                <th scope="col">Attendance</th>
                <th scope="col">Late Coming</th>
                </tr>
            </thead>
            <tbody>           
           @foreach($teachers as $user)
                <tr>
                    <td>{{$user['roll']}}</td>
                    <td>{{$user['name']}}</td>
                    <td>
                        <input type="checkbox" wire:model="attendance" value="{{$user['roll']}}">
                    </td>
                    <td>
                        <input type="checkbox" wire:model="lc" value="{{$user['roll']}}">
                    </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
        <button class="btn btn-info" wire:click="saveAttendance">Save Attendance</button>

    </div>
</section>

