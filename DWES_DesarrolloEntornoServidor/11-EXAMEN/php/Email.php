<!-- @PABLO GÓMEZ MELÉNDEZ -->
<?php
class email
{
    private $_emisor;
    private $_receptor;
    private $_asunto;
    private $_fecha;

    private static $IMPORTANTE =0;

    public function __construct($emisor, $receptor, $asunto, $fecha = 0)
    {
        $this->_emisor = strtoupper(trim($emisor));
        if (strtoupper(trim($emisor))==strtoupper(trim($receptor))){
            $this->_receptor = strtoupper(trim($receptor))."_bis";
        }else{
            $this->_receptor = strtoupper(trim($receptor));
        }

        $this->_asunto = trim($asunto);
        if ($fecha === 0) {
            $this->_fecha =  date("d/m/Y", time());
        } else {
            $this->_fecha =  date("d/m/Y", $fecha);
        }
    }

    // GETTER AND SETTER
    /**
     * Get the value of _emisor
     */
    public function get_emisor()
    {
        return $this->_emisor;
    }

    /**
     * Set the value of _emisor
     *
     * @return  self
     */
    public function set_emisor($_emisor)
    {
        $this->_emisor = $_emisor;

        return $this;
    }

    /**
     * Get the value of _receptor
     */
    public function get_receptor()
    {
        return $this->_receptor;
    }

    /**
     * Set the value of _receptor
     *
     * @return  self
     */
    public function set_receptor($_receptor)
    {
        $this->_receptor = $_receptor;

        return $this;
    }

    /**
     * Get the value of _asunto
     */
    public function get_asunto()
    {
        return $this->_asunto;
    }

    /**
     * Set the value of _asunto
     *
     * @return  self
     */
    public function set_asunto($_asunto)
    {
        $this->_asunto = $_asunto;

        return $this;
    }

    /**
     * Get the value of _fecha
     */
    public function get_fecha()
    {
        return $this->_fecha;
    }

    /**
     * Set the value of _fecha
     *
     * @return  self
     */
    public function set_fecha($_fecha)
    {
        $this->_fecha = $_fecha;

        return $this;
    }


    /**
     * Get the value of _IMPORTANTE
     */
    public static function get_IMPORTANTE()
    {
        return Email::$IMPORTANTE;
    }

    // Metodos de la clase
    public function destacarAsunto()
    {
        if (!str_starts_with($this->_asunto, "IMPORTANTE")) {
            $this->_asunto .= "IMPORTANTE ";
        }
    }
    public function comprobarImportante()
    {
        return str_starts_with($this->_asunto, "IMPORTANTE") ? true : false;
    }
    public function retrasarEnvio()
    {
        $fecha_actual = date("d/m/Y", time());
        if ($fecha_actual < $this->_fecha) {
            $this->_fecha = date("d-m-Y", strtotime("$this->_fecha + 1 days"));;
        } else {
            echo "El correo ya se ha enviado";
        }
    }
} //fin class
?>