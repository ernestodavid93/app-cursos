<div>
    <div class="bg-black py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded text-gray mr-4">
                <i class="fas fa-boxes mr-2 text-xl"></i>
                Todos los cursos
            </button>
                        <!-- component categories -->
            <!-- This is an example component -->
            <div class="max-w-lg mr-4">
                
                <button class="bg-white shadow h-12 px-4 rounded text-gray" type="button" data-dropdown-toggle="dropdown">
                    <i class="fas fa-list mr-2 text-xl"></i>
                    Categorias
                    <i class="fas fa-angle-down ml-2 text-sm"></i>
                </button>

                <!-- Dropdown menu -->
                <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown" x-data="{open:true}">
                    
                    <ul class="py-1" aria-labelledby="dropdown" x-show="open">
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
                    </li>
                    </ul>
                </div>

                
            </div>

                       <!-- component levels -->
            <!-- This is an example component -->
            <div class="max-w-lg">
                
                <button class="bg-white shadow h-12 px-4 rounded text-gray" type="button" data-dropdown-toggle="dropdown">
                    <i class="fas fa-layer-group mr-2 text-xl"></i>
                    Niveles
                    <i class="fas fa-angle-down ml-2 text-sm"></i>
                </button>

                <!-- Dropdown menu -->
                <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown" x-data="{open:true}">
                    
                    <ul class="py-1" aria-labelledby="dropdown" x-show="open">
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
                    </li>
                    </ul>
                </div>


                
            </div>

            

            <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
        </div>
    </div>

    <div class="mt-24 mb-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($courses as $course)
            <article class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-36 object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="px-6 py-4">
                    <h1 class="text-lx text-gray-500 mb-2">{{Str::limit($course->title, 40)}}</h1>
                    <p class="text-sm text-gray-500 mb-2">Prof: {{$course->teacher->name}}</p>
                    <div class="flex">
                        <ul class="flex text-sm">
                            <li><i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i></li>
                            <li><i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i></li>
                            <li><i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i></li>
                            <li><i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i></li>
                            <li><i class="fas fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400"></i></li>
                        </ul>
                        <i class="fas fa-user text-sm text-gray-500 ml-auto"></i>
                        <p>({{$course->student_count}})</p>
                    </div>
                    <a href="{{route('courses.show', $course)}}" class="block  w-full text-center bg-black mt-4 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                        Ingresar
                    </a> 
                </div>
            </article>
            
        @endforeach
    </div>

    <div class="mt-24 mb-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">{{$courses->links()}}</div>
</div>
