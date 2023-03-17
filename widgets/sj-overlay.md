```yaml
variables:
  - image (media)
  - text (text)
  - font_size (number)
  - background_color (color)
```

```html
<!-- html -->
<div
  class="sj-overlay"
  style="
    --font-size: {{font_size}}px;
    --background-color: {{background_color}};
  "
>
  <img src="{{image.url}}" alt="{{text}}">
  <p>{{text}}</p>
</div>
```

```css
/*css*/
.sj-overlay {
  position: relative;
  display: flex;
  align-items: center;
}

.sj-overlay > img {
  width: 100%;
}

.sj-overlay > p {
  opacity: 0;
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-weight: 500;
  font-size: var(--font-size);
  text-align: center;
  background: var(--background-color);
  margin: 0;
  width: 100%;
  transition: opacity 0.2s;
}

.sj-overlay:hover > p {
  opacity: 1;
}
```
