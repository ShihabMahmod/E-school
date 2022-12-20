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
                <th scope="col">Subject No</th>
                <th scope="col">Subject Name</th>
                <th scope="col">Teacher Name</th>
                <th scope="col">Time</th>
                <th scope="col">Gropu or Not</th>
                </tr>
            </thead>
            <tbody>
                
            @foreach($subjectList as $user)
                <tr>
                    <th scope="row">{{$user['id']}}</th>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['assigning_teacher_name']}}</td>
                    <td>{{$user['class_time']}}</td>
                    <td>{{$user['is_group_subject']}}</td>
                    </tr>
            @endforeach
                
            </tbody>
        </table>
    </div>
</section>

