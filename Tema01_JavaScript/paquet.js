class Paquet {
    constructor(id, destinatari, pes) {
        this.id = id;
        this.destinatari = destinatari;
        this.pes = pes;
        this.getInfo = getInfo;
    }

    getInfo() {
        return this.id + ", " + this.destinatari + ", " + this.pes;
    }

}