<div style="text-align: center;">
    <p><img src="{{ asset('img/klikx.png') }}" alt="KLIKX" style="width: 120px; height: auto;"></p>
    <h3>Demande de licence</h3>
    <br>
    <p>Revendeur : <strong>{{ $user->name }}</strong> </p>
    <p>Client : <strong>{{ $licence->enseigne }}</strong>: .</p>
    <br>
    <p>Licence : <a href="{{ route('licences.show', $licence->id) }}">Espace admin</a> pour la confirmer et lui envoyer le code licence.</p>
</div>