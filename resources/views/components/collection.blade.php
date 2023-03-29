<!-- Column -->
<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
    <!-- Article -->
    <article class="overflow-hidden rounded-lg">
    
<a href="{{ url('postsshow/'.$id) }}" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 md:h-80">
            
            
            
      @if ($mimetype === '1')
            <img alt="material" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" src = "{{asset('storage/materials/' . $material) }}">
      @else
            <video alt="material" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" src = "{{asset('storage/materials/' . $material) }}" loop autoplay muted controls playsinline></video>
      @endif
      
        </a>    
    </article>
    <!-- END Article -->
    
</div>
<!-- END Column -->