<section class="contact_section">

<div class="container">

  <div class="row">
    <div class="col-md-6">
      <div class="d-flex justify-content-center d-md-block">
        <h2>
          Set all employee selary!! 
        </h2>
      </div>
      <form wire:submit.prevent="setPayment" class="form-group">
        <div class="contact_form-container">
          <div>
            @if(session()->has('msg'))
            <p style="color:red;">{{session('msg')}}</p>
            @endif

            <select wire:model="teacher_id" class="form-control mt-5">
            <option >Select Teacher</option>
              @foreach($employee_data as $teachers)  
                <option value="{{$teachers['teacher_id']}}">{{$teachers['name']}}</option>
               @endforeach 
              </select>
            </div>
           
            @if($select_data)
            <div>
                <input wire:model="teacher_name" vlaue="{{$select_data['name']}}" type="text" hidden>
            </div>
            <div>
            <select wire:model="designation" class="form-control mt-5"> 
                <option value="{{$select_data['designation']}}">{{$select_data['designation']}}</option>
              </select>
            </div>

            <div>
            <select wire:model="phone" class="form-control mt-5">
                <option value="{{$select_data['phone']}}">{{$select_data['phone']}}</option>
              </select>
            </div>

            <div>
                <input type="text" wire:model="amount" class="form-control mt-5" placeholder="Amount" >
            </div>
            @endif
            <div class="mt-5 ">
              <button type="submit">Save Amount</button>
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
