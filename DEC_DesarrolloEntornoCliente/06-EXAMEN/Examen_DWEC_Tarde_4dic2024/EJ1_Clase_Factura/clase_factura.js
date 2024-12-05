//@PabloGomezMelendez
class Factura {
    // Escribe aquí tu código

    constructor( codigo, fecha, cliente){
        this._codigo = codigo;
        this._fecha = fecha;
        this._cliente = cliente;
        this._articulo = [];
    }
    get codigo() {
        return this._codigo;
    }

    set codigo(codigo) {
        this._codigo = codigo;
    }
    get fecha() {
        return this._fecha;
    }

    set fecha(codigo) {
        this._fecha = codigo;
    }
    get cliente() {
        return this._cliente;
    }

    set cliente(cliente) {
        this._cliente = cliente;
    }

    

    letraDNICliente() {
        return cliente.dni.charAt(7);
    }
    anadirArticulo(...articulos) { 
        articulos.forEach((articulo) => {
            this._anadirArtic.push(articulo);
        });
    }
}
