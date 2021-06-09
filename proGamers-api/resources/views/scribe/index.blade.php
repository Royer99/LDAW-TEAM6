<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">
    <script src="{{ asset("vendor/scribe/js/theme-default-3.0.1.js") }}"></script>

    <link rel="stylesheet"
          href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <script src="//cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
    <script>
        var baseUrl = "http://localhost";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.0.1.js") }}"></script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: June 9 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1>Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="auth-management">Auth management</h1>
    <p>
        
    </p>

            <h2 id="auth-management-POSTapi-login">Auth.login


Este endpoint permite autenticar a los usarios.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>
                <code class="language-json">
{
    &quot;token&quot;: &quot;2|0WPiVJEofvAesg3VwkX99UOoMgaZoscX65XU44jJ&quot;
}
 </code>
        </pre>
    <div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                    </form>

            <h2 id="auth-management-GETapi-logout">Auth.logout


Este endpoint permite terminar las sesiones de un usuario logeado.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}
 </code>
        </pre>
    <div id="execution-results-GETapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-logout"></code></pre>
</div>
<div id="execution-error-GETapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-logout"></code></pre>
</div>
<form id="form-GETapi-logout" data-method="GET"
      data-path="api/logout"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-logout"
                    onclick="tryItOut('GETapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-logout"
                    onclick="cancelTryOut('GETapi-logout');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/logout</code></b>
        </p>
                    </form>

        <h1 id="game-management">Game management</h1>
    <p>
        
    </p>

            <h2 id="game-management-GETapi-game">Game.index

Este endpoint permite consultar todos los juegos fisicos registrados por usuario.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/api/game" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/game"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}
 </code>
        </pre>
    <div id="execution-results-GETapi-game" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-game"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-game"></code></pre>
</div>
<div id="execution-error-GETapi-game" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-game"></code></pre>
</div>
<form id="form-GETapi-game" data-method="GET"
      data-path="api/game"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETapi-game', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-game"
                    onclick="tryItOut('GETapi-game');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-game"
                    onclick="cancelTryOut('GETapi-game');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-game" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/game</code></b>
        </p>
                    </form>

            <h2 id="game-management-POSTapi-game">Game.store

Este endpoint permite registart un nuevo juego fisico.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost/api/game" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{\"title_id\":\"quia\",\"user_id\":\"voluptatem\",\"platform_id\":\"veniam\",\"description\":\"ab\"}"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/game"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title_id": "quia",
    "user_id": "voluptatem",
    "platform_id": "veniam",
    "description": "ab"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>
                <code class="language-json">
{
    &quot;id&quot;: &quot;1&quot;,
    &quot;success&quot;: &quot;true&quot;,
    &quot;message&quot;: &quot;Se ha registrado el nuevo titulo correctamente.&quot;
}
 </code>
        </pre>
    <div id="execution-results-POSTapi-game" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-game"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-game"></code></pre>
</div>
<div id="execution-error-POSTapi-game" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-game"></code></pre>
</div>
<form id="form-POSTapi-game" data-method="POST"
      data-path="api/game"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-game', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-game"
                    onclick="tryItOut('POSTapi-game');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-game"
                    onclick="cancelTryOut('POSTapi-game');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-game" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/game</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title_id" data-endpoint="POSTapi-game" data-component="body" required  hidden>
<br>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTapi-game" data-component="body" required  hidden>
<br>
        </p>
                <p>
            <b><code>platform_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="platform_id" data-endpoint="POSTapi-game" data-component="body" required  hidden>
<br>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-game" data-component="body" required  hidden>
<br>
        </p>
    
    </form>

        <h1 id="platform-management">Platform management</h1>
    <p>
        
    </p>

            <h2 id="platform-management-GETapi-platform">Platform.index


Este endpoint permite consultar todas las plataformas registrados.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/api/platform" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/platform"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}
 </code>
        </pre>
    <div id="execution-results-GETapi-platform" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-platform"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-platform"></code></pre>
</div>
<div id="execution-error-GETapi-platform" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-platform"></code></pre>
</div>
<form id="form-GETapi-platform" data-method="GET"
      data-path="api/platform"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETapi-platform', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-platform"
                    onclick="tryItOut('GETapi-platform');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-platform"
                    onclick="cancelTryOut('GETapi-platform');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-platform" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/platform</code></b>
        </p>
                    </form>

        <h1 id="title-management">Title management</h1>
    <p>
        
    </p>

            <h2 id="title-management-GETapi-title">Title.index

Este endpoint permite consultar todos los titulos registrados.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/api/title" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/title"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
[
    {
        &quot;id&quot;: 1,
        &quot;title&quot;: &quot;Minecraft&quot;,
        &quot;description&quot;: &quot;Minecraft es un videojuego de construcci&oacute;n, de tipo &laquo;mundo abierto&raquo; o sandbox creado originalmente por el sueco Markus Persson (conocido com&uacute;nmente como \&quot;Notch\&quot;),2​ y posteriormente desarrollado por su empresa, Mojang Studios. &quot;,
        &quot;edition&quot;: &quot;Java&quot;,
        &quot;version&quot;: &quot;1.0.6&quot;,
        &quot;image&quot;: &quot;N\/A&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;title&quot;: &quot;Minecraft&quot;,
        &quot;description&quot;: &quot;Minecraft es un videojuego de construcci&oacute;n, de tipo &laquo;mundo abierto&raquo; o sandbox creado originalmente por el sueco Markus Persson (conocido com&uacute;nmente como \&quot;Notch\&quot;),2​ y posteriormente desarrollado por su empresa, Mojang Studios. &quot;,
        &quot;edition&quot;: &quot;Delux&quot;,
        &quot;version&quot;: &quot;2.0.6&quot;,
        &quot;image&quot;: &quot;N\/A&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;title&quot;: &quot;\tHalo: Combat Evolved&quot;,
        &quot;description&quot;: &quot;Halo: Combat Evolved, also known as Halo: CE, is a first-person shooter game developed by Bungie and published by Microsoft Game Studios.&quot;,
        &quot;edition&quot;: &quot;Java&quot;,
        &quot;version&quot;: &quot;1.0.6&quot;,
        &quot;image&quot;: &quot;N\/A&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;title&quot;: &quot;asdf&quot;,
        &quot;description&quot;: &quot;asdf&quot;,
        &quot;edition&quot;: &quot;asdf&quot;,
        &quot;version&quot;: &quot;asdf&quot;,
        &quot;image&quot;: &quot;asdf&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;title&quot;: &quot;asdf&quot;,
        &quot;description&quot;: &quot;asdf&quot;,
        &quot;edition&quot;: &quot;asdf&quot;,
        &quot;version&quot;: &quot;asd&quot;,
        &quot;image&quot;: &quot;public\/TitleImage\/Fc8ZKejA76IT3Pgcz74njucllYNcLz7M1RQpBTEp.jpg&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;title&quot;: &quot;Prueba1&quot;,
        &quot;description&quot;: &quot;ASDF&quot;,
        &quot;edition&quot;: &quot;SADFS&quot;,
        &quot;version&quot;: &quot;ASDFG&quot;,
        &quot;image&quot;: &quot;public\/TitleImage\/7pX8J1s76IJa2N8CdzL6bxGDpzhBQwTpTGpNL9GD.jpg&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;title&quot;: &quot;Prueba4&quot;,
        &quot;description&quot;: &quot;asdf&quot;,
        &quot;edition&quot;: &quot;sadf&quot;,
        &quot;version&quot;: &quot;asdf&quot;,
        &quot;image&quot;: &quot;public\/TitleImage\/7190UCzNX0DCQCYvlt1k7HgJamkEkV7g1gnUxYgt.jpg&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;title&quot;: &quot;Prueba7&quot;,
        &quot;description&quot;: &quot;asdf&quot;,
        &quot;edition&quot;: &quot;sdf&quot;,
        &quot;version&quot;: &quot;asdf&quot;,
        &quot;image&quot;: &quot;public\/TitleImage\/d1281VyxUMoS7EKucHvCX9C2ZEyDKbD0OZEzAmBg.jpg&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;title&quot;: &quot;MinecraftRata&quot;,
        &quot;description&quot;: &quot;asdf&quot;,
        &quot;edition&quot;: &quot;asdf&quot;,
        &quot;version&quot;: &quot;asdf&quot;,
        &quot;image&quot;: &quot;public\/TitleImage\/azzgrSPDyDAhrJtZK7U3yrlfQZQYtVZFdRrO3hkq.jpg&quot;
    }
]
 </code>
        </pre>
    <div id="execution-results-GETapi-title" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-title"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-title"></code></pre>
</div>
<div id="execution-error-GETapi-title" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-title"></code></pre>
</div>
<form id="form-GETapi-title" data-method="GET"
      data-path="api/title"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETapi-title', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-title"
                    onclick="tryItOut('GETapi-title');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-title"
                    onclick="cancelTryOut('GETapi-title');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-title" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/title</code></b>
        </p>
                    </form>

            <h2 id="title-management-POSTapi-title">Title.store

Este endpoint permite registart un nuevo titulo.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost/api/title" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{\"title\":\"in\",\"description\":\"nostrum\",\"edition\":\"molestiae\",\"version\":\"sit\",\"image\":\"ratione\"}"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/title"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "in",
    "description": "nostrum",
    "edition": "molestiae",
    "version": "sit",
    "image": "ratione"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>
                <code class="language-json">
{
    &quot;id&quot;: &quot;1&quot;,
    &quot;success&quot;: &quot;true&quot;,
    &quot;message&quot;: &quot;Se ha registrado el nuevo titulo correctamente.&quot;
}
 </code>
        </pre>
    <div id="execution-results-POSTapi-title" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-title"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-title"></code></pre>
</div>
<div id="execution-error-POSTapi-title" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-title"></code></pre>
</div>
<form id="form-POSTapi-title" data-method="POST"
      data-path="api/title"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-title', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-title"
                    onclick="tryItOut('POSTapi-title');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-title"
                    onclick="cancelTryOut('POSTapi-title');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-title" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/title</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-title" data-component="body" required  hidden>
<br>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-title" data-component="body" required  hidden>
<br>
        </p>
                <p>
            <b><code>edition</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="edition" data-endpoint="POSTapi-title" data-component="body" required  hidden>
<br>
        </p>
                <p>
            <b><code>version</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="version" data-endpoint="POSTapi-title" data-component="body" required  hidden>
<br>
        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="image" data-endpoint="POSTapi-title" data-component="body" required  hidden>
<br>
        </p>
    
    </form>

            <h2 id="title-management-GETapi-title--title-">title.show

Este endpoint permite visualizar un titulo en especifico.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/api/title/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/title/2"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>
                <code class="language-json">
{
    &quot;id&quot;: &quot;1&quot;,
    &quot;title&quot;: &quot;Minecraft&quot;,
    &quot;description&quot;: &quot;Minecraft es un juego multiplataforma de exploracion&quot;,
    &quot;edition&quot;: &quot;java&quot;,
    &quot;version&quot;: &quot;2.3&quot;,
    &quot;image&quot;: &quot;path&quot;
}
 </code>
        </pre>
    <div id="execution-results-GETapi-title--title-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-title--title-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-title--title-"></code></pre>
</div>
<div id="execution-error-GETapi-title--title-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-title--title-"></code></pre>
</div>
<form id="form-GETapi-title--title-" data-method="GET"
      data-path="api/title/{title}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETapi-title--title-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-title--title-"
                    onclick="tryItOut('GETapi-title--title-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-title--title-"
                    onclick="cancelTryOut('GETapi-title--title-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-title--title-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/title/{title}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>title</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="title" data-endpoint="GETapi-title--title-" data-component="url" required  hidden>
<br>
            </p>
                    </form>

            <h2 id="title-management-PUTapi-title--title-">Update the specified title.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/title/6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{\"title\":\"est\",\"description\":\"possimus\",\"edition\":\"odit\",\"version\":\"sed\",\"image\":\"molestiae\"}"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/title/6"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "est",
    "description": "possimus",
    "edition": "odit",
    "version": "sed",
    "image": "molestiae"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-PUTapi-title--title-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-title--title-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-title--title-"></code></pre>
</div>
<div id="execution-error-PUTapi-title--title-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-title--title-"></code></pre>
</div>
<form id="form-PUTapi-title--title-" data-method="PUT"
      data-path="api/title/{title}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-title--title-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-title--title-"
                    onclick="tryItOut('PUTapi-title--title-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-title--title-"
                    onclick="cancelTryOut('PUTapi-title--title-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-title--title-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/title/{title}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/title/{title}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>title</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="title" data-endpoint="PUTapi-title--title-" data-component="url" required  hidden>
<br>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-title--title-" data-component="body" required  hidden>
<br>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-title--title-" data-component="body" required  hidden>
<br>
        </p>
                <p>
            <b><code>edition</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="edition" data-endpoint="PUTapi-title--title-" data-component="body" required  hidden>
<br>
        </p>
                <p>
            <b><code>version</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="version" data-endpoint="PUTapi-title--title-" data-component="body" required  hidden>
<br>
        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="image" data-endpoint="PUTapi-title--title-" data-component="body" required  hidden>
<br>
        </p>
    
    </form>

        <h1 id="user-management">User management</h1>
    <p>
        
    </p>

            <h2 id="user-management-GETapi-user">User.getUser


Este endpoint permite consultar los atributos del usuario logeado.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>
                <code class="language-json">
{
    &quot;id&quot;: &quot;1&quot;,
    &quot;email&quot;: &quot;true&quot;,
    &quot;role&quot;: &quot;Se ha registrado el nuevo titulo correctamente.&quot;,
    &quot;privileges&quot;: [
        1,
        2
    ]
}
 </code>
        </pre>
    <div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                    </form>

            <h2 id="user-management-POSTapi-user">User.store


Este endpoint permite registart un nuevo usuario.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>
                <code class="language-json">
{
    &quot;id&quot;: &quot;1&quot;,
    &quot;success&quot;: &quot;true&quot;,
    &quot;message&quot;: &quot;Se ha registrado el nuevo titulo correctamente.&quot;
}
 </code>
        </pre>
    <div id="execution-results-POSTapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user"></code></pre>
</div>
<div id="execution-error-POSTapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user"></code></pre>
</div>
<form id="form-POSTapi-user" data-method="POST"
      data-path="api/user"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user"
                    onclick="tryItOut('POSTapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user"
                    onclick="cancelTryOut('POSTapi-user');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user</code></b>
        </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var exampleLanguages = ["bash","javascript"];
        setupLanguages(exampleLanguages);
    });
</script>
</body>
</html>