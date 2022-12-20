<section class="contact_section">

<div class="container">

  <div class="row">
    <div class="col-md-6">
      <div class="d-flex justify-content-center d-md-block">
        <h2>
          Subject Add
        </h2>
      </div>
      <form wire:submit.prevent="saveSubject" form-group>
        <div class="contact_form-container">
        @if(session()->has('msg'))
            <p style="color:red;">{{session('msg')}}</p>
            @endif
            <div>
              <input type="text" wire:model="name" placeholder="Subject Name" class="form-control mt-5">
              @error('subject_name')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div>
                <select wire:model="class_name"  class="form-control mt-5">
                  <option value="">Selecet Class</option>
                  <option value="Class-1">Class-1</option>
                  <option value="Class-2">Class-2</option>
                  <option value="Class-3">Class-3</option>
                  <option value="Class-4">Class-4</option>
                  <option value="Class-5">Class-5</option>
                  <option value="Class-6">Class-6</option>
                  <option value="Class-7">Class-7</option>
                  <option value="Class-8">Class-8</option>
                  <option value="Class-9">Class-9</option>
                  <option value="Class-10">Class-10</option>
                </select>
            </div>

            <div>
                <select wire:model="assigning_teacher_name"  class="form-control mt-5">
                  <option value="">Selecet Teacher</option>
                  @foreach($teacherList as $teachers)
                  <option value="{{$teachers['name']}}">{{$teachers['name']}}</option>
                  @endforeach
                </select>
            </div>

            <div>
              <input type="time" wire:model="class_time" class="form-control mt-5">
              @error('class_time')<span style="color:red;">{{$message}}</span>@enderror
            </div>
            
            <div>
              <select wire:model="is_group_subject" class="form-control mt-5">
                  <option >Select Group</option>
                  <option value="n/a">No Grooup</option>
                  <option value="Science">Science</option>
                  <option value="huminity">Huminity</option>
                  <option value="commerce">Commerce</option>
              </select>
            </div>
            <div class="mt-5 ">
              <button type="submit">Save Subject</button>
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
