<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <body>

<h1 align="center">Listado De Recibidos</h1>

    <table border="4" cellpadding="10" style="font-size:20px;">

    </table>

@csrf
    <table width="70%" border="1px" align="center" style="text-align:center;" cellspacing="2" cellpadding="2" border="1">

        <tr align="center" bgcolor="SteelBlue">
            <th>Id</th>
            <th>Dato</th>
            
        </tr>
    @forelse($datos as $dato)

        <tr align="center">
            <td>{{ $dato->idid}}</td>
            
            <td>{{ $dato->data}}</td>
        </tr>
        @empty
            <p>No hay registros.</p>
        @endforelse

</table>

    </body>
</html>
