<div class="bg-white md-3 overflow-hidden shadow-sm sm:rounded-lg">

    {{ $post }}

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 prose space-y-6">
           <h1 class="not-prose">
              <a href="{{rout('posts.show',$post->slug)}}" class="hover:text-blue-500 transition-colors duration-100" >Post Title</a>
           </h1>
           <div> Post Teaser</div>
           <div>
             <div>
                <strong>Subrata</strong> / 20-  Jan-2078

                <ul>
                    <li class="not-prose p-0 list-none flex items-center space-x-1 text-sm">
                        <a href="http://" class="text-blue-500 text-sm">Laravel</a>
                    </li>
                </ul>

             </div>
           </div>
     </div>
