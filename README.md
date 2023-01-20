# Projet R301 Développement Web

## Ce projet est réalisé par Clément LEFEVRE et Antoine FADDA RODRIGUEZ

### Ce dépôt représente l'API de notre Projet, le front-end est visible sur ce [dépôt](https://github.com/Firelods/projectR301) et sur ce [lien](https://seinksansdoozebank.engineer/)

L'API discute avec une base de données MySQL dont le script vous est fourni pour que vous puissiez instancier le projet chez vous.


#### Sécurité
Pour que tous les échanges entre le back-end et le front-end soient sécurisé, lors de la connexion d'un utilisateur, le back-end renvoie un JWT (JsonWebToken) que le front-end renvoie à chaque requête à l'API grâce à un http-interceptor. De ce fait, l'API est capable de déterminer si l'utilisateur est administrateur ou non, évidemment le JWT est vérifié à l'aide de sa clé pour vérifier que le JWT n'a pas été manipulé pendant les échanges http.
