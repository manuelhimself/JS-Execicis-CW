class product {
    constructor(codi, nom, categoria, preu) {
        this.codi = codi;
        this.nom = nom;
        this.categoria = categoria;
        this.preu = preu;
    }

    getCodi() {
        return this.codi;
    }

    getNom() {
        return this.nom;
    }

    getCategoria() {
        return this.categoria;
    }

    getPreu() {
        return this.preu;
    }

    setCodi(codi) {
        this.codi = codi;
    }

    setNom(nom) {
        this.nom = nom;
    }

    setCategoria(categoria) {
        this.categoria = categoria;
    }

    setPreu(preu) {
        this.preu = preu;
    }
}