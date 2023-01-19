<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Tareas Asignadas') }}
    </h2>
  </x-slot>
    

  <div class="py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        
        <div class="container flex justify-center mx-auto">
          <div class="flex flex-col">
            
            <div class="w-full py-4">
              <div class="border-b border-gray-200 shadow">
                <table>
                  <thead class="bg-gray-200">
                    <tr>
                      <th class="px-6 py-2 text-xs text-gray-500">ID</th>
                      <th class="px-6 py-2 text-xs text-gray-500">Nombre</th>
                      <th class="px-6 py-2 text-xs text-gray-500">Descripcion</th>
                      <th class="px-6 py-2 text-xs text-gray-500">Proyecto</th>
                      <th class="px-6 py-2 text-xs text-gray-500">Accion</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white">
                    @foreach ( $tasks as $task )
                      <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-gray-500">
                          {{ $task->id }}
                        </td>
                        <td class="px-6 py-4">
                          <div class="text-sm text-gray-900">
                            {{ $task->name }}
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="text-sm text-gray-900">
                            {{ $task->description }}
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="text-sm text-gray-900">
                            Project name
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="flex space-x-2">
                            <a href="#{{-- route('tasks.finish', $task->id) --}}" class="px-4 py-1 text-sm text-black bg-green-400 rounded">Completar</a>
                            <form action="#{{-- route('tasks.reject', $task->id) --}}" method="POST" class="px-4 py-1 text-sm text-black bg-red-400 rounded">
                              @csrf
                              <button type="submit">Rechazar</button>
                            </form>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
