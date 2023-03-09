<br><br><br><br><br>
    <h1>Tecnicos</h1>
    <div class=" flex-1">
        <div></div>
    </div>
    <div class=" ">
        <table class="shadow-lg bg-white">
            <thead>
                <th class="bg-blue-100 border text-left px-1 py-1">Nombre</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Apellido</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Puesto</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Zona</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Estado</th>
                <th class="bg-blue-100 border text-left px-1 py-1">id_usuario</th>
            </thead>
            <tbody>
                @foreach ($tecnicos as $tecnico)
                    <tr>
                        <td class="border px-1 py-1">{{$tecnico->nombre}}</td>
                        <td class="border px-1 py-1">{{$tecnico->apellido}}</td>
                        <td class="border px-1 py-1">{{$tecnico->puesto}}</td>
                        <td class="border px-1 py-1">{{$tecnico->zona}}</td>
                        <td class="border px-1 py-1">{{$tecnico->estado}}</td>
                        <td class="border px-1 py-1">{{$tecnico->id_usuario}}</td>
                        <td href="" class="">Seleccionar</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex-1"></div>
</div>