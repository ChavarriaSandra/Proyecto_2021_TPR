<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul>
                    <p> <a href="/user"> Usuarios </a></p>
                    <p> <a href="/user/create"> Nuevo Usuario</a></p>
                    <p> <a href="/personal"> Personal vigentes </a></p>
                    <p> <a href="/paciente/"> Pacientes </a></p>
                    <p> <a href="/cita"> Cita </a></p>
                    <p> <a href="/agenda"> Agenda </a></p>
                    <p> <a href="/cargo"> Cargo </a></p>
                    <p> <a href="/historia_previa"> Historia Previa </a></p>
                    <p> <a href="/historial_particular"> Historial Particular </a></p>
              </ul>
            </div>
        </div>
    </div>
</x-app-layout>
