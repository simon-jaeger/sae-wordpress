# gallery example

a gallery with overlays and a toggle button.


```html
<style>
  /* fade in/out an overlay text over an image */
  .overlay {
    position: relative;
  }

  .overlay-text {
    position: absolute;
    bottom: 0;
    padding: 16px;
    background: #00000088;
    color: #ffffff;
    opacity: 0;
    transition: all 0.5s;
  }

  .overlay:hover .overlay-text {
    opacity: 1;
  }

  /* fade in/out a semi-transparent colored box  over an image */
  .overlay-box {
    opacity: 0;
    background: #ff000088;
    position: absolute;
    height: 100%;
  }

  .overlay .elementor-widget-container{
    height: 100%;
  }

  .overlay:hover .overlay-box {
    opacity: 1;
  }
</style>

<script defer>
  // toggle gallery when clicking on a button
  $("#gallery-toggle").click(function () {
    $("#gallery").slideToggle()
  })
</script>
```
