<section class="contact_section ">

<div class="container">

  <div class="row">
    <div class="col-md-6">
      <div class="d-flex justify-content-center d-md-block">
        <h2>
          Set Student Payment!!
        </h2>
      </div>
      <form wire:submit.prevent="setPayment">
        <div class="contact_form-container">
          <div>
            @if(session()->has('msg'))
            <p style="color:green;">{{session('msg')}}</p>
            @endif
            <div>
              <select wire:model="class" class="form-control" >
                    <option>Select Class</option>
                    <option value="class-1">Class-1</option>
                    <option value="class-2">Class-2</option>
                    <option value="class-3">Class-3</option>
                    <option value="class-4">Class-4</option>
                    <option value="class-5">Class-5</option>
                    <option value="class-6">Class-6</option>
                    <option value="class-7">Class-7</option>
                    <option value="class-8">Class-8</option>
                    <option value="class-9">Class-9</option>
                    <option value="class-10">Class-10</option>
              </select>
              @error('class')<span style="color:red;">{{$message}}</span>@enderror
            </div>
            <div>
              <input type="number" wire:model="class_payment" placeholder="class Payment" class="mt-5">
              @error('class_payment')<span style="color:red;">{{$message}}</span>@enderror
            </div>
            <div>
              <input type="number" wire:model="daycare_payment" placeholder="day Care Payment" class="mt-5">
              @error('daycare_payment')<span style="color:red;">{{$message}}</span>@enderror
            </div>
            
            <div class="mt-5">
              <button type="submit">Set Payment</button>
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
