<section class="home-section">
    <div class="flex justify-items-center max-w-xs">
    <div class=" flex-1">
        <div></div>
    </div>
    <div class=" ">
        <table class="shadow-lg bg-white">
            <thead>
                <th class="bg-blue-100 border text-left px-1 py-1">Titulo</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Descripcion</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Direccion</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Zona</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Estado</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Correo</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Telefono</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Tecnico Asignado</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Solicitud de Ticket</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Creado el</th>
                <th class="bg-blue-100 border text-left px-1 py-1">Actualizado el</th>
            </thead>
            <tbody>
                <tr class="table-info">
                    <td class="border px-1 py-1">{{$ticket->titulo}}</td>
                    <td class="border px-1 py-1">{{$ticket->descripcion}}</td>
                    <td class="border px-1 py-1">{{$ticket->direccion}}</td>
                    <td class="border px-1 py-1">{{$ticket->zona}}</td>
                    <td class="border px-1 py-1">{{$ticket->estado}}</td>
                    <td class="border px-1 py-1">{{$ticket->correo}}</td>
                    <td class="border px-1 py-1">{{$ticket->telefono}}</td>
                    <td class="border px-1 py-1">{{$ticket->tecnicoAsignado}}</td>
                    <td class="border px-1 py-1">{{$ticket->id_solicitudTicket}}</td>
                    <td class="border px-1 py-1">{{$ticket->created_at}}</td>
                    <td class="border px-1 py-1">{{$ticket->updated_at}}</td>
                    <td href="" class="">Borrar</td>
                    <td href="" class="">Modificar</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="flex-1"></div>
</div>