<div class="font-sans">
  <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
    <div class="relative sm:max-w-sm w-full">
      <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
      <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
      <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
        <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
            Register    
        </label>
        <form method="POST" action="/register" class="mt-10">
        @csrf
                <div>
                  <x-input name="email" type="email" id="email" placeholder="example@email.com"/> 
                  <x-error inputName='email'></x-error>
                </div>
                <div class="mt-7">  
                  <x-input name="email_confirmation" type="email" id="email_confirmation" placeholder="Confirm email"/> 
                  <x-error inputName='email_confirmation'></x-error>
                </div>
    
                <div class="mt-7">                
                    <x-input name="password" type="password" id="password" placeholder="Password"/> 
                    <x-error inputName='password'></x-error>                          
                </div>

                <div class="mt-7">                
                    <x-input name="password_confirmation" type="password" id="password_confirmation" placeholder="Confirm password"/>    
                    <x-error inputName='password_confirmation'></x-error>                        
                </div>

                <div class="mt-7">
                    <button class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                        Create Account
                    </button>
                </div>
                  <div class="mt-7">
                    <div class="flex justify-center items-center">  
                        <x-link href="/">
                            Login
                        </x-link>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>