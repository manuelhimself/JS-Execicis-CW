class Estant {
    constructor(id) {
        this.id = id;
        this.estat = null;
        this.Paquet = null;
        this.entrada = null;
        this.sortida = null;
        this.printInfo = printInfo;
    }

    printInfo() {
        return this.id + "";
    }
}