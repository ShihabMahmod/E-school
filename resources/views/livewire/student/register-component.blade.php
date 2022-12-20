<section class="contact_section ">

<div class="container">

  <div class="row">
    <div class="col-md-6">
      <div class="d-flex justify-content-center d-md-block">
        <h2>
          Create New Account
        </h2>
      </div>
      <form wire:submit.prevent="signup">
        <div class="contact_form-container">
          <div>
            @if(session()->has('msg'))
            <p style="color:green;">{{session('msg')}}</p>
            @endif
            <div>
              <input type="text" wire:model="name" placeholder="Name">
              @error('name')<span style="color:red;">{{$message}}</span>@enderror
            </div>
            <div>
              <input type="email" wire:model="email" placeholder="Email">
              @error('email')<span style="color:red;">{{$message}}</span>@enderror
            </div>
            <div>
              <input type="number" wire:model="roll" placeholder="Roll">
              @error('roll')<span style="color:red;">{{$message}}</span>@enderror
            </div>
            <div>
              <input type="password" wire:model="password" placeholder="Password">
              @error('password')<span style="color:red;">{{$message}}</span>@enderror
            </div>
            <div>
              <input type="password" wire:model="password_confirmation" placeholder="Confirm Password">
              @error('password')<span style="color:red;">{{$message}}</span>@enderror
            </div>
            <div>
              <a href="{{url('/student-login')}}">I have an account</a>
            </div>
            <div class="mt-5">
              <button type="submit">Sign Up</button>
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
