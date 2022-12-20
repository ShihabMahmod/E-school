<section class="contact_section ">

<div class="container">

  <div class="row">
    <div class="col-md-6">
      <div class="d-flex justify-content-center d-md-block">
        <h2>
          Log in
        </h2>
      </div>
      @if(session()->has('msg'))
      <p style="color:red;">{{session('msg')}}</p>
      @endif
      <form wire:submit.prevent="login">
        <div class="contact_form-container">
          <div>
            <div>
              <input type="email" wire:model="email" placeholder="Enter email">
              @error('email') <span>{{$message}}</span>@enderror
            </div>
            <div>
              <input type="password" wire:model="password" placeholder="Enter password">
              @error('email') <span>{{$message}}</span>@enderror
            </div>
            <div>
              <a href="{{url('/register')}}">I have no account</a>
            </div>
            <div class="mt-5">
              <button type="submit">Log in</button>
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
