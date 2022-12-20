<section class="contact_section">

<div class="container">

  <div class="row">
    <div class="col-md-6">
      <div class="d-flex justify-content-center d-md-block">
        <h2>
          Please provide all infomation for your school
        </h2>
      </div>
      <form wire:submit.prevent="saveStudentInfo" form-group>
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
              @error('name')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div>
              <input type="date" wire:model="DOB" class="form-control mt-5">
              @error('date')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div>
                <select wire:model="sex"  class="form-control mt-5">
                  <option value="">Selecet Sex</option>
                  <option value="male">Male</option>
                  <option value="female">Femal</option>
                </select>
            </div>

            
            <div>
              <input type="text" wire:model="address" placeholder="Address" class="form-control mt-5">
              @error('address')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div>
              <input type="text" wire:model="phone" placeholder="Phone" class="form-control mt-5">
              @error('phone')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div>
              <input type="text" wire:model="guardian_name" placeholder="Guardian Name" class="form-control mt-5">
              @error('guardian_name')<span style="color:red;">{{$message}}</span>@enderror
            </div>
            <div>
            <select wire:model="join_class" class="form-control mt-5">
                <option>Select Join Class</option>
                <option value="class1">class-1</option>
                <option value="class2">class-2</option>
                <option value="class3">class-3</option>
                <option value="class4">class-4</option>
                <option value="class5">class-5</option>
                <option value="class6">class-6</option>
                <option value="class7">class-7</option>
                <option value="class8">class-8</option>
                <option value="class9">class-9</option>
                <option value="class10">class-10</option>
              </select>
              @error('name')<span style="color:red;">{{$message}}</span>@enderror
            </div>
            
            <div>
                <input type="file" wire:model="image" class="form-control mt-5">
                <p style="color:red">Optional*</p>
                @error('name')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div class="mt-5 ">
              <button type="submit">Save information</button>
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
