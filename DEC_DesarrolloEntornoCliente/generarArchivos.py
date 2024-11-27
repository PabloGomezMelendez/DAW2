import os

def crear_ficheros_html(ruta, rango_inicio, rango_fin):
    """
    Crea ficheros HTML en una ruta especificada.
    
    :param ruta: Ruta absoluta donde se crearán los ficheros
    :param rango_inicio: Número inicial del rango
    :param rango_fin: Número final del rango (inclusive)
    """
    # Verificar si la ruta existe, si no, crearla
    try:
        if not os.path.exists(ruta):
            os.makedirs(ruta)
            print(f"Carpeta creada: {ruta}")
    except PermissionError as e:
        print(f"No se tienen permisos para crear la carpeta en: {ruta}")
        return

    # Crear ficheros en el rango especificado
    for i in range(rango_inicio, rango_fin + 1):
        archivo = os.path.join(ruta, f"{i}_detalle.html")
        try:
            with open(archivo, 'w') as f:
                contenido = f"""<!-- @author @PabloGomezMelendez -->
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo {i}</title>
</head>
<body>
    <h1>Este es el archivo {i}</h1>
    <p>Generado automáticamente.</p>
</body>
</html>"""
                f.write(contenido)
            print(f"Archivo creado: {archivo}")
        except PermissionError as e:
            print(f"No se tiene permiso para crear el archivo: {archivo}")
        except Exception as e:
            print(f"Error al crear el archivo {archivo}: {e}")

# Parámetros de entrada
ruta_destino = r"D:\DEV\DAW2\DEC_DesarrolloEntornoCliente\05-Eventos\javaScriptYA - expresiones regulares"  # Ruta absoluta
rango_inicio = 77
rango_fin = 88

# Llamar a la función
crear_ficheros_html(ruta_destino, rango_inicio, rango_fin)
