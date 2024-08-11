@php
$user = auth()->user();
$is_admin = $user->is_admin == 1 ? true : false; 
    if ($is_admin){
        $aside_items = ['Dashboard','Alunos', 'Turmas', 'Atividades'];
        $aside_icons = ['fa-chart-line', 'fa-user', 'fa-chalkboard', 'fa-tasks'];
        $aside_links = ['dashboard', 'alunos', 'turmas', 'atividades'];
    }
    else{
        $aside_items = ['Atividades', 'Minha Sala', 'Configurações'];
        $aside_icons = ['fa-tasks', 'fa-chalkboard', 'fa-cog'];
    }
@endphp
<aside class="flex h-screen flex-col w-52 items-center justify-between  text-white bg-zinc-600 fixed z-[1] hi">
<ul class="flex-grow flex justify-center flex-col gap-5 ">
    @foreach($aside_items as $i => $items)
        <li class="aside-link-item">
            <a href="{{route($aside_links[$i])}}">
                <i class="fa-solid {{$aside_icons[$i]}}"></i>
                {{$items}}
            </a>
        </li>
    @endforeach
</ul>
<div class="p-5">
    <a href="{{route('logout')}}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
</div>
</aside>