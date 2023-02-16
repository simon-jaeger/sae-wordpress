# burger-menü

code für ein bürger-menü, das bei click auf ein icon ein- und ausgeblendet wird.

```html
<script defer>
  $("#burger-icon").click(function () {
    $("#burger-menu").toggle()
  })
</script>
```

```css
#burger-menu {
  position: absolute;
  width: 100%;
}
```
