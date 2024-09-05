<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 mb-4">
                    <p>Ediatando o nível de acesso do usuário <strong>{{$user->name}}
                         <strong>{{$user->name}}</strong></p>

                    <p>Nível de acesso atual <strong>{{$user -> level}}.</strong></p>

                <div class = "p-3 text-gray-900">
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('put')
                        <label for="level">Selecione o nível: </label>
                        <select name="level" requiredclass = "py-1 px-8 rounded">
                            <option value="" select disabled> Selecione uma opção</option>
                            <option value="user">Usuuário Comum</option>
                            <option value="admin">Administrador</option>
                        </select>
                        <button type = "submit" class ="bg-blue-500 text-white rounded py-2 px-4">
                            <i class="fa-regular fa-floppy-disk mr-2"></i>Salvar</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
