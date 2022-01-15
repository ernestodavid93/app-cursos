<x-app-layout>
  
    <section class="bg-cover" style="background-image: url({{asset('img/home/boy-g2215e5519_1280.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
           <div class="w-full sm:w-1/2">
                <h1 class="text-white font-bold text-4-1xl">Bienvenido a Cursfix</h1>
                <p class="text-white text-lg font-sans mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis eum voluptatibus quis distinctio dolorum inventore dicta. Natus eaque esse alias dolore tenetur quisquam, libero nulla nihil. Necessitatibus itaque quia recusandae!</p>

                            <!-- component -->
                    <!-- This is an example component -->
                <div class="mt-4 pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                    <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                        width="512px" height="512px">
                        <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                    </button>
                </div>
           </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-2xl mb-6">CONTENIDO</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/books-gc11769fdf_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="mt-2 text-sm text-center text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed assumenda debitis, deserunt hic. pshdie dhe fets re3t</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/glasses-ge44e247b2_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Manual de laravel</h1>
                </header>
                <p class="mt-2 text-sm text-center text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed assumenda debitis, deserunt hic. pshdie dhe fets re3t</p>
            </article>
            
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/people-g063582128_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                </header>
                <p class="mt-2 text-sm text-center text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed assumenda debitis, deserunt hic. pshdie dhe fets re3t</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/laptop-gb35232280_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Desarrollo web</h1>
                </header>
                <p class="mt-2 text-sm text-center text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed assumenda debitis, deserunt hic. pshdie dhe fets re3t</p>
            </article>
            
            
        </div>
    </section>

    <section class="mt-24 bg-gray py-24">
        <div class="text-center">
            <h1 class="text-white text-3xl font-bold">¿No sabes que curso llevar?</h1>
            <p class="mb-4">Dirigete al catalogo por categoria o nivel</p>
            <a href="{{route('courses.index')}}" class="bg-black mt-4 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                Catalogo de cursos
            </a>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-center text-3xl text-gray-600">ULTIMOS CURSOS</h1>
        <p class="text-sm text-center text-gray-500 mb-4">Persistencia para lograr tus objetivos</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
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
    </section>

    <footer class="mt-24 bg-gray py-12 text-center">
        <p class="text-white text-xl font-bold">Derechos reservados <i class="far fa-copyright"></i></p>
        
    </footer>
</x-app-layout>
