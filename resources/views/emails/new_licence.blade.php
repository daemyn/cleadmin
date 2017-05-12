<div style="text-align: center;">
    <p><img src="{{ asset('img/klikx.png') }}" alt="KLIKX" style="width: 120px; height: auto;"></p>
    <p>Salut M. Le Renard</p>
    <p>J'ai une bonne nouvelle, ton revendeur <strong>{{ $user->name }}</strong> viens de faire une demande pour une nouvelle licence Klikx consacrée à son client {{ $licence->enseigne }}.</p>
    <p>Aller vite sur <a href="{{ route('licences.show', $licence->id) }}">l'espace admin</a> pour la confirmer et lui envoyer le code licence ... on va encore gagner de l'argent :D</p>
    <p>À bientôt l'ami ;)</p>
</div>