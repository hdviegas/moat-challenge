<x-layout>
    <x-slot name="css">
        html,
        body {
          height: 100%;
        }
        
        body {
          display: flex;
          align-items: center;
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #f5f5f5;
        }
        
        .form-signin {
          width: 100%;
          max-width: 330px;
          padding: 15px;
          margin: auto;
          text-align: center;
        }
        
        .form-signin .checkbox {
          font-weight: 400;
        }
        
        .form-signin .form-floating:focus-within {
          z-index: 2;
        }
        
        .form-signin input[type="email"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }
        
        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }        
    </x-slot>

    <main class="form-signin">
        <form method="POST" action="{{ route('auth') }}">
          @csrf
          <x-logo style="width:250px; height:80px;" class="mb-4"/>
      
          <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
              <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
              <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>                 
          @if (session('registered'))
            <div class="alert alert-success d-flex align-items-center alert-dismissible mt-2" role="alert">              
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="25" fill="currentColor" class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
              <div>
                Registered with success!
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>  
          @else 
            <a class="mt-3" href="{{ route('user.register') }}"> or click here to Register </a>  
          @endif
          <x-errors />
        </form>
    </main>
</x-layout>