# Templates

Trennung von Inhalt und Layout

---

```html

<nav>...</nav>
<h1>Mein erster Beitrag</h1>
<p>Lorem ipsum dolor ...</p>
<footer>...</footer>
```

```html

<nav>...</nav>
<h1>Noch ein Beitrag</h1>
<p>Amet consectetur adipiscing ...</p>
<footer>...</footer>
```

---

# 😭

CTRL+C, CTRL+V

---

## Twig

HTML mit Befehlen für Templating.

---

## Variablen und Slots

```html
<h1>{{ post.title }}</h1>
<div>{{ post.content }}</div>
```

---


<div class="grid-2">
<div>

### Template

```html
<h1>{{ post.title }}</h1>
<div>{{ post.content }}</div>
```

</div>
<div>

### Inhalt

![](cms-data.png)

</div>
</div>

---

## WordPress-Templates

- index.twig
- single.twig
- page.twig
- archive.twig
- 404.twig

---

## Bedingungen

```html
<h2>{{ post.title }}</h2>
{% if post.thumbnail %}
<img src="{{ post.thumbnail.src }}" alt="{{ post.thumbnail.alt }}">
{% endif %}
```

---

## Schlaufen

```html
<h1>Archiv</h1>
{% for post in posts %}
<article>
  <h2>{{ post.title }}</h2>
  <p>{{ post.preview }}</p>
</article>
{% endfor %}
```

---

## Layouts

```html
<!-- layouts/base.twig -->
<head>...</head>
<body>
  <nav>...</nav>
  <main>{{ block('content') }}</main>
  <footer>...</footer>
</body>
```

```html
<!-- single.twig -->
{% extends "layouts/base.twig" %}
{% block content %}
<h1>{{ post.title }}</h1>
<div>{{ post.content }}</div>
{% endblock %}
```

---

## Includes

```html
<h1>{{ post.title }}</h1>
<div>{{ post.content }}</div>
<hr>
{% include "includes/comments.twig" %}
```

```html
<!-- includes/comments.twig -->
<h2>Kommentare</h2>
{% for comment in post.comments %}
<article>
  <strong>{{ comment.author.name }}</strong>
  <div>{{ comment.comment_content }}</div>
</article>
{% endfor %}
```

---

## Links

- https://marketplace.visualstudio.com/items?itemName=mblode.twig-language
- https://timber.github.io/docs/reference/timber-post/
- https://twig.symfony.com/doc/3.x/templates.html
- https://www.youtube.com/watch?v=50RBUmPOYig

---

## WP-Blank

https://github.com/simon-jaeger/wp-blank/releases
