<x-header></x-header>
<form action="/edit_blog/{{$aBlog->id}}" method="POST">
  @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="page_title" class="block text-sm/6 font-medium text-gray-900">Link title</label>
          <div class="mt-2">
            <x-input type="text" name="page_title" id="page_title" value="{{$aBlog->page_title}}"/>
            <x-error inputName='page_title'></x-error>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-span-full">
        <label for="about" class="block text-sm/6 font-medium text-gray-900">Summary</label>
        <div class="mt-2">
          <textarea name="summary" id="summary" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{$aBlog->summary  }}</textarea>
          <x-error inputName='summary'></x-error>
        </div>
        <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
      </div>
      <div class="mt-5">
        <textarea name="content" id="myeditorinstance"  class="h-full">{{$aBlog->content}}</textarea>
        <x-error inputName='content'></x-error>
      </div>
  <div class="grid grid-cols-3 gap-4">
    <x-button>Save</x-button> 
    <x-link reference="form-btn" href='/create'>Cancel</x-button> 
  </div>
</form>
