<x-layout>
    
<form class="mt-5" method="POST" action="/contacts">
    @csrf
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="firstname" placeholder="first name" required>
        @error('firstname')
        <p class="text-danger text-sm mt-1">Too long </p>
    @enderror
      </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="lastname" placeholder="last name" required>
          @error('lastname')
          <p class="text-danger text-sm mt-1">Too long </p>
         @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="phone" placeholder="phone number" required>
          @error('phone')
              <p class="text-danger text-sm mt-1">Enter valid phone number </p>
          @enderror
        </div>
      </div>
   
       <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" >Add Contact</button>
      </div>
    </div>
  </form>
</x-layout>