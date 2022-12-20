<section class="contact_section">

<div class="container">

  <div class="row">
    <div class="col-md-6">
      <div class="d-flex justify-content-center d-md-block">
        <h2>
          Please provide all infomation for your school!(Teacher)
        </h2>
      </div>
      <form wire:submit.prevent="saveTeacherInfo" class="form-group">
        <div class="contact_form-container">
            @if(session()->has('msg'))
            <p style="color:red;">{{session('msg')}}</p>
            @endif

            <div>
                <select wire:model="designation"  class="form-control mt-5">
                  <option value="">Selecet Designation</option>
                  <option value="Senior Teacher">Senior Teacher</option>
                  <option value="fAssistent Teacheremale">Assistent Teacher</option>
                  <option value="Assistent Teacher">Assistent Teacher</option>
                  <option value="Exam Controller">Exam Controller</option>
                  <option value="IT Specilist">IT Specilist</option>
                </select>
                @error('designation')<span style="color:red;">{{$message}}</span>@enderror
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
                @error('sex')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div>
              <input type="text" wire:model="phone" placeholder="Phone" class="form-control mt-5">
              @error('phone')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div>
              <input type="text" wire:model="address" placeholder="Address" class="form-control mt-5">
              @error('address')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div>
              <input type="date" wire:model="join_date" placeholder="Joining Date" class="form-control mt-5">
              @error('join_date')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div>
              <input type="text" wire:model="background" placeholder="Background Education" class="form-control mt-5">
              @error('background')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div>
                <input type="file" wire:model="image" class="form-control mt-5">
                <p style="color:red">Optional*</p>
                @error('image')<span style="color:red;">{{$message}}</span>@enderror
            </div>

            <div class="mt-5 ">
              <button type="submit">Save information</button>
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
