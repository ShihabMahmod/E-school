<section class="contact_section">
    <div class="container">
        <h4 class="mb-5">Student and Teacher Account details</h4>
        @if(session()->has('msg'))
            <span style="color:green" >{{session('msg')}}</span>
        @endif
        <table class="table">
            <thead>
                <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roll</th>
                <th scope="col center">Give rules </th>
                </tr>
            </thead>
            <tbody>
                
            @foreach($data as $user)
                <tr>
                    <th scope="row">{{$user['id']}}</th>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['roll']}}</td>
                    <td>
                        <button wire:click="studentRoule({{$user['id']}})" class="btn btn-success btn-sm">is Student?</button>
                        <button wire:click="teacherRoule({{$user['id']}})" class="btn btn-warning btn-sm ml-2">is Teacher?</button>

                    </td>
                    </tr>
            @endforeach
                
            </tbody>
        </table>
    </div>
</section>

