# javascript

um eine website interaktiv zu machen (burger-menüs etc.) müssen wir ein wenig
programmieren. am einfachstem geht das mit der programmiersprache javascript und
der library jquery.

## installation

füge am ende des headers deiner website ein html-widget mit folgendem code ein:

```html

<script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"
></script>
```

## konsole

in der konsole des browsers kannst du interaktiv javascript ausführen und
experimentieren. gib code ein und betätige enter, um ihn auszuführen. um
elemente mit code ansprechen zu können, gib ihnen in elementor eine id.

```js
// du kannst zum beispiel ein element ein- und ausblenden
$("#id-of-target-element").toggle()
```

## widgets

um code nun immer automatisch ausführen, musst du in einem weiteren html-widget
am ende des headers einfügen. folgend ein beispiel, dass beim klick auf ein
element ein popup anzeigt:

```html

<script defer>
  $("#click-me").click(function () {
    alert("hello, world!")
  })
</script>
```

