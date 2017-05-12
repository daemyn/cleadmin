<div style="text-align: center;">
    <p><img src="{{ asset('img/klikx.png') }}" alt="KLIKX" style="width: 120px; height: auto;"></p>
    <p>Bonjour,</p>
    <p>Votre demande de licence pour votre client <strong>{{ $licence->enseigne }}</strong> est acceptée.</p>
    <table border="0" style="width: 240px;">
        <tr>
            <td><strong>Licence</strong></td>
            <td>{{ $licence->licence }}</td>
        </tr>
        <tr>
            <td><strong>Code Licence</strong></td>
            <td>{{ $licence->code_licence }}</td>
        </tr>
    </table>
    <p>Vous pouvez aller sur <a href="{{ route('licences.show', $licence->id) }}">l'espace admin</a> pour voir toutes les informations de la licence.</p>
    <p>Cordialement</p>
</div>