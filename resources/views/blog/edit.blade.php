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
  <textarea name="content" id="myeditorinstance" class="h-full">{{$aBlog->content}}</textarea>
  <x-error inputName='content'></x-error>
  <div class="grid grid-cols-3 gap-4">
    <x-button>Save</x-button> 
    <x-link reference="form-btn" href='/create'>Cancel</x-button> 
  </div>
</form>
