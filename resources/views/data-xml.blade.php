<?php
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<data>
@foreach ($registros as $item)
    <item>
        <marca>{{ $item->marca }}</marca>
        <modelo>{{ $item->modelo }}</modelo>
        <cor>{{ $item->cor }}</cor>
        <memoriaRAM>{{ $item->memoriaRAM }}</memoriaRAM>
        <sistema>{{ $item->sistema }}</sistema>
    </item>
@endforeach
</data>