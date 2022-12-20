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
                <th scope="col">Roll</th>
                <th scope="col">Name</th>
                <th scope="col">Sex</th>
                <th scope="col">Class</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">DOB</th>
                <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                
            @foreach($student as $user)
                <tr>
                    <th scope="row">{{$user['roll']}}</th>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['sex']}}</td>
                    <td>{{$user['class']}}</td>
                    <td>{{$user['phone']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['address']}}</td>
                    <td>{{$user['DOB']}}</td>
                    <td><img src="{{asset($user['image'])}}" alt="img"></td>
                    </tr>
            @endforeach
                
            </tbody>
        </table>
    </div>
</section>

