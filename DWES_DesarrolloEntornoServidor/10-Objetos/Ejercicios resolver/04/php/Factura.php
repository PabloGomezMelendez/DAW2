<?php
class Factura
{
    // Atributos de clase
    private static $IVA = 21; // IVA fijo (21%)

    // Atributos de instancia
    private $importeBase = 0; // Se calcula automáticamente
    private $fecha;          // Fecha de la factura
    private $estado;         // Estado: "pagada" o "pendiente"
    private static $ESTADOS_POSIBLES = ['pagada', 'pendiente'];        // Cliente de la factura
    private $productos = []; // Array de productos (nombre, precio, cantidad)

    // Constructor
    public function __construct($fecha, $estado = 'pendiente')
    {
        $this->fecha = $fecha;
        $this->estado = in_array($estado, Factura::$ESTADOS_POSIBLES) ? $estado : 'pendiente';
    }

    // Getter para el atributo de clase IVA
    public static function getIVA()
    {
        return Factura::$IVA;
    }

    // Getter para ImporteBase
    public function getImporteBase()
    {
        return $this->importeBase;
    }

    // Getter y setter para Fecha
    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    // Getter y setter para Estado
    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        if (in_array($estado, Factura::$ESTADOS_POSIBLES)) {
            $this->estado = $estado;
        }
    }

    // Método para añadir un producto
    public function añadeProducto($nombre, $precio, $cantidad)
    {
        if ($precio > 0 && $cantidad > 0) {
            $this->productos[] = [
                'nombre' => $nombre,
                'precio' => $precio,
                'cantidad' => $cantidad
            ];
            $this->recalculaImporteBase();
        }
    }

    // Método para recalcular el importe base
    private function recalculaImporteBase()
    {
        $this->importeBase = 0; // Reiniciar el importe base
        foreach ($this->productos as $producto) {
            $this->importeBase += $producto['precio'] * $producto['cantidad'];
        }
    }

    // Método para imprimir la factura
    public function imprimeFactura()
    {
        echo "<h1>Factura</h1>";
        echo "<p><strong>Fecha:</strong> {$this->fecha}</p>";
        echo "<p><strong>Estado:</strong> {$this->estado}</p>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Subtotal</th></tr>";

        foreach ($this->productos as $producto) {
            $subtotal = $producto['precio'] * $producto['cantidad'];
            echo "<tr>
                    <td>{$producto['nombre']}</td>
                    <td>{$producto['precio']} €</td>
                    <td>{$producto['cantidad']}</td>
                    <td>{$subtotal} €</td>
                </tr>";
        }

        echo "</table>";
        $IVA = $this->importeBase * (self::$IVA / 100);
        $total = $this->importeBase + $IVA;
        echo "<p><strong>Importe Base:</strong> {$this->importeBase} €</p>";
        echo "<p><strong>IVA (" . self::$IVA . "%):</strong> {$IVA} €</p>";
        echo "<p><strong>Total:</strong> {$total} €</p>";
    }
}
