<x-header></x-header>
<form action="/create_blog" method="POST">
  @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="page_title" class="block text-sm/6 font-medium text-gray-900">Link title</label>
          <div class="mt-2">
            <x-input type="text" name="page_title" id="page_title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Workout plans"/>
            <x-error inputName='page_title'></x-error>
          </div>
        </div>
      </div>
    </div>
  </div>
  <textarea name="content" id="myeditorinstance"  class="h-full"></textarea>
  <x-error inputName='content'></x-error>

  <div class="grid grid-cols-3 gap-4">
    <x-button>Save</x-button> 
    <x-link reference="form-btn" href='/show'>Cancel</x-button> 
  </div>
</form>
