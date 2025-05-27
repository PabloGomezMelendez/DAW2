# Sitio web Auriculares
## Guía de estilos
### Colores
- azul: #1073BA;
- verde: #00DA55;
- gris: #3B3B3B;
- blanco: #FFFFFF;
- negro: #1F1E1E;
- grisClaro: #e1e1e1;

### Tipografías
- fuentePrincipal: 'Roboto', sans-serif;
- fuenteSecundaria: 'Lato', sans-serif; (solo titulares y enlace footer)

- Dimensiones (si se define un font-size de 62.5% en el elemento html):
  - h1: 4.4rem
  - h2: 3.6rem
  - h3: 2.8rem
  - h1, h2, h3: line-height: 1.2
  - h1, h2, h3: font-weight: 900
  - p generales: 1.6rem, line-height: 1.5, font-weight: 300

### Responsive
- Breakpoints: 768px y 992px.

### Contenedor
  - Anchura máxima: 1200px

  
## Tip
### Degradado texto
```css
.degradado-texto {
    color: transparent;
    background: linear-gradient(to right, color1 0%, color2 100%);
    -webkit-background-clip: text; /* Necesario para Chrome, Edge y Safari*/
    background-clip: text; 
}

