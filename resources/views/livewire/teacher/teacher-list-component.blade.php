<section class="contact_section">
    <div class="container">
        <h4 class="mb-5">Teachers List</h4>
        @if(session()->has('msg'))
            <span style="color:green" >{{session('msg')}}</span>
        @endif
        <input type="sesrch" placeholder="Search your query">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Teacher ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Designation</th>
                <th scope="col">Sex</th>
                <th scope="col">Education</th>
                <th scope="col">Phone</th>
                
                </tr>
            </thead>
            <tbody>
                
            @foreach($teacherList as $user)
                <tr>
                    <th scope="row">{{$user['teacher_id']}}</th>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['designation']}}</td>
                    <td>{{$user['sex']}}</td>
                    <td>{{$user['background']}}</td>
                    <td>{{$user['phone']}}</td>
                    </tr>
            @endforeach
                
            </tbody>
        </table>
    </div>
</section>

