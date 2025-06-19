@props(['reference' =>'link-btn'])
@if ($reference == 'link-btn')
    <a {{$attributes->merge(['class'=>'cursor-pointer w-30 flex select-none items-center gap-3 rounded-lg border border-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:opacity-75 focus:ring focus:ring-pink-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none', 'type'=>'submit'])}}>
        {{$slot}}
    </a>
@elseif ($reference == 'a')
    <a {{$attributes->merge(['class' => "m-2 text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105", 'style'=> 'color:black;'])}}>
        {{$slot}}
    </a>
@elseif ($reference == 'form-btn')
    <a {{$attributes->merge(['class' => "m-2 flex select-none items-center gap-3 rounded-lg border border-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:opacity-75 focus:ring focus:ring-pink-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none', 'type'=>'submit'", 'style'=> 'color:black;'])}}>
        {{$slot}}
    </a>
@elseif ($reference == 'blog-index-link')
    <a {{$attributes->merge(['class' => "font-semibold text-xl sm:text-2xllg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary"])}}>
        {{$slot}}
    </a>
@endif
