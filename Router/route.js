export default class Route {
    constructor(url, title, pathHtml, authorize, pathJS = "") {
      this.url = url;
      this.title = title;
      this.pathHtml = pathHtml;
      this.pathJS = pathJS;
      this.authorize = authorize;
    }
}

// Cet attribut authorize sera un tableau;

/*
[] -> Tout le monde y accède
[disconnected] -> Réserver uniquement aux utilisateurs déconnectés, par exemple, page login
["client"] -> Réservé aux utilisateurs avec le rôle client
["admin"] -> Réservé aux utilisateurs avec le rôle admin
["admin", "client"] -> Réservé aux utilisateur avec le rôle client OU admin

Nons avons donc 5 cas possibles
*/