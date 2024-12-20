@extends('layouts.app')

@section('content')
    <div class="allmid mt-10">

        <div class="flex bg-white  dark:bg-gray-800 rounded justify-between  text-gray-500 dark:text-gray-400">

            <a href="{{ route('admin.registros-ponto-all') }}"
                class="title hover:bg-gray-200 text-center p-10 text-gray-500 dark:text-gray-400">
                <i class="ri-group-line"></i>
                <br>
                Gerenciamento Estagiarios
            </a>

            <a href="{{ route('admin.user.supervisor') }}"
                class="title hover:bg-gray-200 text-center p-10 text-gray-500 dark:text-gray-400">
                <i class="ri-user-settings-line"></i>
                <br>
                Gerenciamento Supervisores
            </a>

            <a href="{{ route('admin.usuarios.criar') }}"
                class="title  hover:bg-gray-200  text-center p-10 text-gray-500 dark:text-gray-400">
                <i class="ri-user-add-line"></i>
                <br>
                Criar Usuario
            </a>
        </div>
    </div>
@endsection
