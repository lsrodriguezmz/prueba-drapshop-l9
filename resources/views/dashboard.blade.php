<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @role('admin')
    <div class="grid gap-6 mb-8 mt-8 md:grid-cols-2 xl:grid-cols-4">
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-orange-500 dark:text-orange-100 bg-orange-100 dark:bg-orange-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Usuarios
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              {{ $users }}
            </p>
          </div>
        </div>
      </div>
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-green-500 dark:text-green-100 bg-green-100 dark:bg-green-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Roles
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              {{ $roles }}
            </p>
          </div>
        </div>
      </div>
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-blue-500 dark:text-blue-100 bg-blue-100 dark:bg-blue-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Permisos
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              {{ $permissions }}
            </p>
          </div>
        </div>
      </div>
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-red-500 dark:text-red-100 bg-red-100 dark:bg-red-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Eliminados
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              {{ $trashed }}
            </p>
          </div>
        </div>
      </div>
    </div>
    @endrole
    
    
    
    
    
    
    
    
    @role('manager')
    <div class="grid gap-6 mb-8 mt-8 md:grid-cols-2 xl:grid-cols-4">
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-orange-500 dark:text-orange-100 bg-orange-100 dark:bg-orange-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Clientes
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              {{ $clients }}
            </p>
          </div>
        </div>
      </div>
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-green-500 dark:text-green-100 bg-green-100 dark:bg-green-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Proyectos
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              {{ $projects }}
            </p>
          </div>
        </div>
      </div>
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-blue-500 dark:text-blue-100 bg-blue-100 dark:bg-blue-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Tareas
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              {{ $tasks }}
            </p>
          </div>
        </div>
      </div>
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-red-500 dark:text-red-100 bg-red-100 dark:bg-red-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Proyectos huerfanos
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              ?
            </p>
          </div>
        </div>
      </div>
    </div>
    @endrole
    
    
    
    
    
    
    
    
    
    @role('user')
    <div class="grid gap-6 mb-8 mt-8 md:grid-cols-2 xl:grid-cols-4">
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-blue-500 dark:text-blue-100 bg-blue-100 dark:bg-blue-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Tareas asignadas
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              {{ $user_tasks }}
            </p>
          </div>
        </div>
      </div>
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-green-500 dark:text-green-100 bg-green-100 dark:bg-green-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Tareas completadas
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              ?
            </p>
          </div>
        </div>
      </div>
      
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-orange-500 dark:text-orange-100 bg-orange-100 dark:bg-orange-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Tareas pendientes
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              ?
            </p>
          </div>
        </div>
      </div>
      
      <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
        <div class="p-4 flex items-center">
          <div class="p-3 rounded-full text-red-500 dark:text-red-100 bg-red-100 dark:bg-red-500 mr-4">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Tareas rechazadas
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              ?
            </p>
          </div>
        </div>
      </div>
      
      
    </div>
    @endrole
    
    
</x-app-layout>
