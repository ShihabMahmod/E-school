<div class="container" style="margin-top:20rem;margin-bottom:20rem;background:#D8B109;width:50rem;">
        <h3 align="center">Admin Login</h3>
        <form wire:submit.prevent="adminLogin">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" wire:model="email">
                @error('email') <span>{{$message}}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" wire:model="password">
                @error('password') <span>{{$message}}</span>@enderror
            </div>
            <div class="mb-3">
                    <button type="submit" class="btn btn-warning form-control">Login</button>
            </div>
           
        </form>
     </div>