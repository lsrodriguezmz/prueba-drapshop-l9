<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Editar Tarea') }}
    </h2>
  </x-slot>

  <div class="py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="container flex justify-center mx-auto">
          <div class="flex flex-col py-2">
            <form method="POST" action="{{ route('tasks.update', $task) }}" class="w-full max-w-sm">
              @csrf
              @method('PUT')
              <div class="flex items-center border-b border-teal-500 py-2">
                <input type="text" id="name" name="name" value="{{ $task->name }}" placeholder="Nombre Tarea" aria-label="Name" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none">
              </div>
              <div class="flex items-center border-b border-teal-500 py-2">
                <textarea name="description" placeholder="Descripcion" rows="2" cols="80" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $task->description }}</textarea>
              </div>
              <span class="pt-2 px-2 text-gray-600">Proyecto</span>
              <div class="flex items-center border-b border-teal-500 pb-2">
                <div class="inline-block relative w-64">
                  <select id="projects" name="project_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($projects as $project)
                      <option value="{{ $project->id }}" @if($task->project_id == $project->id) selected @endif>{{ $project->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <span class="pt-2 px-2 text-gray-600">Usuario</span>
              <div class="flex items-center border-b border-teal-500 pb-2">
                <div class="inline-block relative w-64">
                  <select id="users" name="user_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($users as $user)
                      <option value="{{ $user->id }}" @if($task->user_id == $user->id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="flex items-center py-2">
                <div class="flex space-x-2">
                  <button type="submit" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-black py-1 px-2 rounded">Guardar</button>
                  <a href="{{ route('tasks.index') }}" class="px-4 py-2 text-sm text-black bg-blue-400 rounded">Volver</a>
                </div>
              </div>
              @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
              @error('description') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</x-app-layout>