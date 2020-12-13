class cart {

    constructor() {
        this.productes = new Array();
        this.descompte = 0;
    }

    addProducte(producte) {
        this.productes.push(producte);
    }

    getProductes() {
        return this.productes;
    }

    setDescompte(descompte) {
        this.descompte = descompte;
    }

    getDescompte() {
        return this.descompte;
    }
}