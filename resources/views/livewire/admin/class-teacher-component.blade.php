<section class="contact_section">

<div class="container">

  <div class="row">
    <div class="col-md-6">
      <div class="d-flex justify-content-center d-md-block">
        <h2>
          Please provide all infomation for your school
        </h2>
      </div>
      <form wire:submit.prevent="saveClassTeacher" form-group>
        <div class="contact_form-container">
          <div>
            @if(session()->has('msg'))
            <p style="color:red;">{{session('msg')}}</p>
            @endif
            <div>
            <select wire:model="class" class="form-control mt-5">
                <option>Select class</option>
                <option value="class-1">class-1</option>
                <option value="class-2">class-2</option>
                <option value="class-3">class-3</option>
                <option value="class-4">class-4</option>
                <option value="class-5">class-5</option>
                <option value="class-6">class-6</option>
                <option value="class-7">class-7</option>
                <option value="class-8">class-8</option>
                <option value="class-9">class-9</option>
                <option value="class-10">class-10</option>
              </select>
            </div>
            <div>
            <select wire:model="teacher_id" class="form-control mt-5">
                <option>Select class Teacher</option>
              @foreach($teacherList as $teachers)  
                <option value="{{$teachers['teacher_id']}}">{{$teachers['name']}}</option>
               @endforeach 
              </select>
            </div>
    
            <div class="mt-5 ">
              <button type="submit">Save Class Teacher</button>
            </div>

          </div>

        </div>

      </form>
    </div>
    <div class="col-md-6">
      <div class="contact_img-box">
        <img src="asset/images/students.jpg" alt="">
      </div>
    </div>
  </div>
</div>
</section>
<!-- end contact section -->
