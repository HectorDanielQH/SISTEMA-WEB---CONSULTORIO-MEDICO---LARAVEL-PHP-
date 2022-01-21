@extends("layouts.app")
@section('content')
<div class="flex justify-center flex-wrap bg-gray-200 p-4">
    <div class="text-center">
        <h1 class="mb-10 text-4xl">{{ __("Lista de Consultas") }}</h1>
        <a href="{{ route('consulta.create') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 my-4 border border-blue-500 hover:border-transparent rounded">
            {{ __("Registrar Consulta") }}
        </a>
    </div>
</div>
<!-- BUSQUEDA -->
<div class="w-full flex justify-center flex-wrap bg-gray-200 p-4">
    <form
        action="{{ route('consulta.index') }}"
        method="GET"
    >
    <div class="w-full md:flex flex-wrap justify-around md:items-center">
        <div class="w-1/1 flex justify-around mb-5">
            <div class="w-1/6 flex flex-col justify-center items-center">
                <label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Motivo Consulta
                </label>
                <input type="text" name="mot" value="{{ $mot }}" class="mr-5 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
            </div>
            <div class="w-1/6 flex flex-col justify-center items-center">
                <label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    CI Médico
                </label>
                <input type="text" name="cimedico" value="{{ $cimedico }}" class="mr-5 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
            </div>
            <div class="w-1/6 flex flex-col justify-center items-center">
                <label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    CI Paciente
                </label>
                <input type="text" name="cipaciente" value="{{ $cipaciente }}" class="mr-5 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
            </div>
            <div class="w-1/6 flex flex-col justify-center items-center">
                <label class="block font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Tipo Consulta
                </label>
                <input name="tipo2" value="{{ $tipo2 }}" list="tipoo" class="mr-5 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="username" type="text">
                <datalist id="tipoo">
                    <option value="{{ __('General') }}">
                    <option value="{{ __('Reconsulta') }}">
                    <option value="{{ __('Domicilio') }}">
                    <option value="{{ __('Emergencia') }}">
                    @foreach($tipos as $tipoconsulta)
                        <option value="{{ $tipoconsulta->nombre_especialidad }}">
                    @endforeach
                </datalist>
            </div>
            <div class="w-1/6 flex flex-col justify-center items-center">
                <label for="resp" class="block font-bold md:text-right mb-1 md:mb-0 pr-4">
                    {{ __("Atendido") }}
                </label>
                <input name="resp" value="{{ $resp }}" list="respp" class="mr-5 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="username" type="text">
                <datalist id="respp">
                    <option value="{{ __('SI') }}">
                    <option value="{{ __('NO') }}">
                </datalist>
            </div>
        </div>

        <!-- FECHAS -->
        <div class="w-9/12 flex justify-center">
            <div class="w-1/7 flex flex-col justify-center items-center mr-5">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="inline-password">
                    {{ __("FECHA INICIO") }}
                </label>
                <input
                    class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline"
                    id="f_ini"
                    name="f_ini"
                    type="date"
                    value="{{ $fechaInicio ?? date('Y-m-d') }}"
                >
            </div>
            <div class="w-1/7 flex flex-col justify-center items-center mr-5">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="inline-password">
                    {{ __("FECHA FINAL") }}
                </label>
                <input
                    class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline"
                    id="f_fin"
                    name="f_fin"
                    type="date"
                    value="{{ $fechaFinal ?? date('Y-m-d') }}"
                >
            </div>
            <div class="w-1/10 flex flex-col justify-center items-center">
                <input
                    type="submit"
                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 my-4 border border-blue-500 hover:border-transparent rounded"
                    value="Buscar"
                >
            </div>
        </div>
    </div>
    </form>
</div>
<!-- Reporte -->
<div class="flex justify-center flex-wrap">
    <form
        action="{{ route('descargarPDFConsultas') }}"
        method="GET"
    >
        <input type="hidden" name="mot2" value="{{ $mot }}">
        <input type="hidden" name="cimedico2" value="{{ $cimedico }}">
        <input type="hidden" name="cipaciente2" value="{{ $cipaciente }}">
        <input type="hidden" name="tipo22" value="{{ $tipo2 }}">
        <input type="hidden" name="resp2" value="{{ $resp }}">
        <input type="hidden" name="f_ini" value="{{ $fechaInicio }}">
        <input type="hidden" name="f_fin" value="{{ $fechaFinal }}">

        <input
            type="submit"
            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 my-4 border border-blue-500 hover:border-transparent rounded"
            value="Generar PDF"
        >
    </form>
</div>
<div class="container mx-auto">
    <table class="border-collapse border text-center border-gray-500 mt-4 mx-auto" style="width:100%">
        <thead>
            <tr>
                <th class="bg-blue-900 text-gray-100 px-4 py-2">{{ __("MOTIVO DE LA CONSULTA") }}</th>
                <th class="bg-blue-900 text-gray-100 px-4 py-2">{{ __("FECHA") }}</th>
                <th class="bg-blue-900 text-gray-100 px-4 py-2">{{ __("MEDICO") }}</th>
                <th class="bg-blue-900 text-gray-100 px-4 py-2">{{ __("PACIENTE") }}</th>
                <th class="bg-blue-900 text-gray-100 px-4 py-2">{{ __("TIPO DE CONSULTA") }}</th>
                <th class="bg-blue-900 text-gray-100 px-4 py-2">{{ __("COSTO") }}</th>
                <th class="bg-blue-900 text-gray-100 px-4 py-2">{{ __("ATENDIDO") }}</th>
            </tr>
        </thead>
        <tbody>
            @forelse($consultas as $consulta)
                <tr>
                    <td class="border-solid border-2 border-gray-500 text-xs px-4 py-2">{{ $consulta->motivo_consulta }}</td>
                    <td class="border-solid border-2 border-gray-500 text-xs px-4 py-2">{{ $consulta->fecha }}</td>
                    <td class="border-solid border-2 border-gray-500 text-xs px-4 py-2">{{ $consulta->medico->ci }}</td>
                    <td class="border-solid border-2 border-gray-500 text-xs px-4 py-2">{{ $consulta->paciente->ci }}</td>
                    <td class="border-solid border-2 border-gray-500 text-xs px-4 py-2">
                        @isset($consulta->tipos->especialidades->nombre_especialidad)
                            {{ $consulta->tipos->especialidades->nombre_especialidad }}
                        @else
                            @if($consulta->tipo_id == 1)
                                {{ __("General") }}
                            @elseif($consulta->tipo_id == 2)
                                {{ __("Reconsulta") }}
                            @elseif($consulta->tipo_id == 3)
                                {{ __("Domicilio") }}
                            @elseif($consulta->tipo_id == 4)
                                {{ __("Emergencia") }}
                            @endif
                        @endisset
                    </td>
                    <td class="border-solid border-2 border-gray-500 text-xs px-4 py-2">{{ $consulta->tipos->precio_consulta }}</td>
                    <td class="border-solid border-2 border-gray-500 text-xs px-4 py-2">{{ $consulta->atentido }}</td>
                </tr>
            @empty
                <tr>
                    <td class="border-solid border-2 border-gray-500 px-4 py-2" colspan="7">
                        {{ __("LISTA DE CONSULTAS VACIA") }}
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    @isset($consulta)
        @if($consulta->count() != null)
            @if($consulta->count())
                <div class="mt-4">
                    {{ $consultas->links() }}
                </div>
            @endif
        @endif
    @endisset
</div>
<br>
<br>
@endsection
