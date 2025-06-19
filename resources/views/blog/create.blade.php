<x-header></x-header>
  <div class="md:container md:mx-auto">
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
      <div class="col-span-full">
        <label for="about" class="block text-sm/6 font-medium text-gray-900">Summary</label>
        <div class="mt-2">
          <textarea name="summary" id="summary" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
          <x-error inputName='summary'></x-error>
        </div>
        <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
      </div>
      <div class="mt-5">
        <textarea name="content" id="myeditorinstance"  class="h-full"></textarea>
        <x-error inputName='content'></x-error>
      </div>
      <div class="grid grid-cols-3 gap-4">
        <x-button>Save</x-button> 
        <x-link reference="form-btn" href='/'>Cancel</x-button> 
      </div>
    </form>
</div>
<!-- component -->
<div class="flex min-h-screen items-center justify-center">
  <div class="overflow-x-auto ">
    <table class="min-w-full bg-white shadow-md rounded-xl">
      <thead>
        <tr class="bg-blue-gray-100 text-gray-700">
          <th class="py-3 px-4 text-left">Page Title</th>
          <th class="py-3 px-4 text-center">Action</th>
        </tr>
      </thead>
      <tbody class="text-blue-gray-900">
         @foreach ($blogs as $blog)
          <tr class="border-b border-blue-gray-200">
            <td class="py-3 px-4">{{ $blog->page_title }}</td>
            <td class="py-3 px-4">
              <x-link href="/edit/{{$blog->id}}" reference="link-btn">Edit</x-link>
            </td>
            <td class="py-3 px-4">
              <x-link href="/delete/{{$blog->id}}" reference="link-btn">Delete</x-link>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="mt-2">
      {{ $blogs->links() }}
    </div>
  </div>
</div>