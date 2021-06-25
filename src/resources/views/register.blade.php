<x-layout>
<div class="container w-50 pt-5 ">
    <x-errors />
    <div class="text-center">
        <x-logo style="width:250px; height:80px;" class="mb-5"/>
    </div>
    <form class="row g-3" method="POST" action="{{ route('user.register') }}">    
        @csrf        
        <div class="col-12">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Full Name" required aria-label="Full Name" value="{{ $album->name ?? old('name') ?? '' }}" />
        </div>
        <div class="col-12">
            <label for="" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="mail@example.com" required aria-label="Email" value="{{ old('email') ?? '' }}" />
        </div>
        <div class="col-8">
            <label for="" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required aria-label="Password" />
        </div>
        <div class="col-4">
            <label for="" class="form-label">Role</label>
            <select name="role" class="form-select" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>            
            </select>
        </div>    
        <div class="col-12">
            <button type="submit" class="btn btn-sm btn-primary">Save</button>
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark">Back</a>
        </div>
    </form>
</div>
</x-layout>