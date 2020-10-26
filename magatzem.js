class Paquet {
    constructor(num) {
        this.numEstants = num;
        this.estants = new Array();
        this.incialitza = inicialitza;
        this.entrada = entrada;
        this.sortida = sortida;
        this.mostraTaula = mostraTaula;
        this.calculaPreus = calculaPreus;
        this.ordenaPes = ordenaPes;
    }

    inicialitza() {
        for (var i = 0; i < this.numEstants; i++) {
            this.estants[i] = new estant(i);
        }
    }

    entrada(pos, p) {
        estants[pos] = p;
    }

    sortida(numEstant) {
        estants[numEstant] = null;
    }

    mistraTaula() {
        var txt = "<h3>Magatzem</h3>";
        txt += "table border='1'><tr>";
        for (var i = 0; i < this.numEstants; i++) {
            var e = this.estants[i];
            txt += "<td>" + e.printInfo() + "</td>";
        }
        txt += "</tr></table>";
        document.getElementById("content").innerHTML = txt;
    }

    calculaPreus(numEstant) {
        return (this.estants[numEstant].Paquet.pes) * 0.75;
    }

    ordenaPes() {
        this.estants.sort((a, b) => parseFloat(b.preu) - parseFloat(a.preu));
    }

}